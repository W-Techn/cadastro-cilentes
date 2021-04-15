<?php
//aqui será feita a conexão entre o client-side e o server-side;
session_start();

include 'CPFcontroller.php';
include 'conexao.php';
//o conteúdo de cada lacuna preenchida deverá ser armazenada em uma variável. Para isso, deverá ser usada a função filter_input, que recebe como parâmetro:
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING); //o tipo de método que nós usamos na requisição, que no nosso caso foi o método POST,
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING); //utilizamos também o 'name' que foi passado em cada tag input, e o filtro a ser
    $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING); //utilizado, com "_FLOAT" para remover todos os caracteres exceto dígitos, e "_STRING" para permitir 
    $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_NUMBER_FLOAT); //apenas letras e alguns caracteres;
    $tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_NUMBER_FLOAT);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $zona = filter_input(INPUT_POST, 'zona', FILTER_SANITIZE_STRING);

    $result_usuario = "INSERT INTO clientes (Nome, CPF, Endereço, CEP, Telefone, Cidade, Zona, Bairro) VALUES ('$nome', '$cpf', '$endereco', '$cep', '$tel', '$cidade', '$zona', '$bairro')";
    //Isto aqui é uma variável que contem uma linguagem para se comunicar com o banco de dados e passar os valores filtrados em sua respectiva coluna;

//chamando a função de validação do CPF e a projetando na home;
if ($cpfAtestar->segundodigitoehValido() == true) {

    $resultado_usuario = mysqli_query($conn, $result_usuario); //Se o CPF for válido, vamos executar a conexão - com o usuario, senha e nome do banco de dados definidos na variável $conn,
// e comunicar-nos com o banco de dados para inserir a mensagem armazenada na nossa varável String criada;
    if (mysqli_insert_id($conn)) {  //se a conexão com o banco de dados foi bem sucedida, ela terá acrescentado um novo valor na tabela, e o contador ID terá sido somado em 1. A função mysqli_insert_id verifica se isso aconteceu
        $_SESSION['msg'] = "<p style='color:green; font-size:1.1rem;'>Usuário cadastrado com sucesso</p>"; //se ID foi somado, será imprimido uma confirmação ma nova seção de cadastro que será aberta
        header("Location: index.php"); //na página de cadastro;
    } else { //caso isso não se verifique,
        $_SESSION['msg2'] = "<p style='color:#ff0000; font-size:1.1rem;'>*Este CPF já foi cadastrado</p>"; //a nova sessão imprimira euma mensagem de erro em vermelho, dizendo que esse CPF passado já se encontra na tabela. 
        header("Location: index.php"); //Só pode ser esse o erro, pois se não o front-end já teria retido a informação passada erroneamente para esta interface;
    }
} else { //se a o segundo dígito na passar na verificação,
    $_SESSION['msg2'] = "<p style='color:#ff0000; font-size:1.1rem;'>*Este CPF não existe!</p>"; //significa que ele não existe, e é isso que nós passaremos a imprimir na nova seção que será aberta, no redirecionamento que haverá
    header("Location: index.php"); //para a página Index;
}
