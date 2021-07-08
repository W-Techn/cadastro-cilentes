<?php //página que será apresentada ao servidor;
session_start(); //sessão iniciada;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>W Technology - Cadastro</title>
 <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- configuraçãp de exibição da página para smartphone -->
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"> <!-- import do framework Bootstrap utilizado na personalização do site -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com"> <!-- import da fonte a ser utlizada -->
    <link href="https://fonts.googleapis.com/css2?family=Sura&display=swap" rel="stylesheet"> <!-- import fonte Sura -->
    <link rel="stylesheet" type="text/css" href="css/formulario.css"> <!-- estilização css da página -->
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- import jquery para máscara  -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>  <!-- outro import para máscara -->
</head>
<body> <!-- o site é constituído de dois cards: um principal e um de inserção de dados, conectados por um botão principal de registro -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> <!-- o primeiro card utilizara essa fonte -->
<div class="container">
<div class="card-wrap"> <!-- card -->
<div class="card border-0 shadow card--welcome is-show" id="welcome"> <!-- início do card -->
<div class="card-body"> <!-- corpo -->
    <img src="logo_w.png" id="logo">
    <?php
    if(isset($_SESSION['msg'])) { //essa parte é uma função de impressão das mensagens indicadas no arquivo de conexão. Esse laço verifica se alguma das
        echo $_SESSION['msg'];  // mensagens foi exibida, caso não, ela imprimira nessa posição em que ela foi inserida na página de acordo com o sucesso
        unset($_SESSION['msg']); //do cadastro, caso sim, a mensagem que aparecia aqui é retirada.
    }
    ?>
<p>Bem vindo a página de cadastro de usuário!</p>
<div class="btn-wrap"><a class="btn btn-lg btn-register js-btn" data-target="register">CADASTRAR</a></div> <!-- Botão que irá chamar o próximo card -->
</div>
</div>
<div class="card border-0 shadow card--register" id="register"> <!-- inicio do segundo card, de inserção de dados e registro -->
<div class="card-body">

<h2 class="card-title">Registrar usuário</h2>
<p class="card-text">Insira os seus dados pessoais<br/>e depois clique em <i>REGISTRAR</i></p>

<form action="processa.php" method="post"> <!-- essa tag inicia o formulário, usaremos o método post para mandar os dados inseridos para a interface cliente-servidor no arquivo Processa.php -->
  <div class="form-group"> <!-- classe layout de divisão do formulário -->
    <input class="form-control" name="nome" type="text" placeholder="Nome completo" required="required" autofocus/> <!-- input do formulário -->
  </div>
  <p id="too-short" class="alert"> </p>
  <div class="form-group">
    <input class="form-control" id="CPF" name="chave" type="text" placeholder="seu CPF/CNPJ" required="required"/> <!-- o input nesse caso será acresentado dos pontos e traço que o CPF geralmente tem (máscara) -->
  </div>
  <p id="fail" class="alert"> </p>
  <div class="form-group">
    <input class="form-control" id="Telefone" name="tel" type="text" placeholder="DDD + número" required="required"/>
  </div>
  <div class="form-group">
    <input class="form-control" id="CEP" name="cep" type="text" placeholder="seu CEP" required="required"/>
  </div>
  <div class="form-group">
    <input class="form-control" name="endereco" type="text" placeholder="digite seu endereço" required="required"/>
  </div>
  <div class="form-group">
    <input class="form-control" name="bairro" type="text" placeholder="digite seu bairro" required="required"/>
  </div>
  <div class="form-group espaco-pos-select"> <!-- ATENÇÃO!! FECHE E NÃO ABRA A TAG A SEGUIR -->
<select name="cidade" required="required">
      <option selected disabled>Selecione sua cidade</option>
      <option value="Adamantina">Adamantina</option>
      <option value="Adolfo">Adolfo</option>
      <option value="Aguaí">Aguaí</option>
      <option value="Águas da Prata">Águas da Prata</option>
      <option value="Águas de Lindóia">Águas de Lindóia</option>
      <option value="Águas de Santa Bárbara">Águas de Santa Bárbara</option>
      <option value="Águas de São Pedro">Águas de São Pedro</option>
      <option value="Agudos">Agudos</option>
      <option value="Alambari">Alambari</option>
      <option value="Alfredo Marcondes">Alfredo Marcondes</option>
      <option value="Altair">Altair</option>
      <option value="Altinópolis">Altinópolis</option>
      <option value="Alto Alegre">Alto Alegre</option>
      <option value="Alumínio">Alumínio</option>
      <option value="Álvares Florence">Álvares Florence</option>
      <option value="Álvares Machado">Álvares Machado</option>
      <option value="Álvaro de Carvalho">Álvaro de Carvalho</option>
      <option value="Alvinlândia">Alvinlândia</option>
      <option value="Americana">Americana</option>
      <option value="Américo Brasiliense">Américo Brasiliense</option>
      <option value="Américo de Campos">Américo de Campos</option>
      <option value="Amparo">Amparo</option>
      <option value="Analândia">Analândia</option>
      <option value="Andradina">Andradina</option>
      <option value="Angatuba">Angatuba</option>
      <option value="Anhembi">Anhembi</option>
      <option value="Anhumas">Anhumas</option>
      <option value="Aparecida">Aparecida</option>
      <option value="Aparecida Oeste">Aparecida d'Oeste</option>
      <option value="Apiaí">Apiaí</option>
      <option value="Araçariguama">Araçariguama</option>
      <option value="Araçatuba">Araçatuba</option>
      <option value="Araçoiaba da Serra">Araçoiaba da Serra</option>
      <option value="Aramina">Aramina</option>
      <option value="Arandu">Arandu</option>
      <option value="Arapeí">Arapeí</option>
      <option value="Araraquara">Araraquara</option>
      <option value="Araras">Araras</option>
      <option value="">ArcÍriso-Íris</option>
      <option value="Arealva">Arealva</option>
      <option value="Areias">Areias</option>
      <option value="Areiópolis">Areiópolis</option>
      <option value="Ariranha">Ariranha</option>
      <option value="Artur Nogueira">Artur Nogueira</option>
      <option value="Arujá">Arujá</option>
      <option value="Aspásia">Aspásia</option>
      <option value="Assis">Assis</option>
      <option value="Atibaia">Atibaia</option>
      <option value="Auriflama">Auriflama</option>
      <option value="Avaí">Avaí</option>
      <option value="Avanhandava">Avanhandava</option>
      <option value="Avaré">Avaré</option>
      <option value="Bady Bassitt">Bady Bassitt</option>
      <option value="Balbinos">Balbinos</option>
      <option value="Bálsamo">Bálsamo</option>
      <option value="Bananal">Bananal</option>
      <option value="Barão de Antonina">Barão de Antonina</option>
      <option value="Barbosa">Barbosa</option>
      <option value="Bariri">Bariri</option>
      <option value="Barra Bonita">Barra Bonita</option>
      <option value="Barra do Chapéu">Barra do Chapéu</option>
      <option value="Barra do Turvo">Barra do Turvo</option>
      <option value="Barretos">Barretos</option>
      <option value="Barrinha">Barrinha</option>
      <option value="Barueri">Barueri</option>
      <option value="Bastos">Bastos</option>
      <option value="Batatais">Batatais</option>
      <option value="Bauru">Bauru</option>
      <option value="Bebedouro">Bebedouro</option>
      <option value="Bento de Abreu">Bento de Abreu</option>
      <option value="Bernardino de Campos">Bernardino de Campos</option>
      <option value="Bertioga">Bertioga</option>
      <option value="Bilac">Bilac</option>
      <option value="Birigui">Birigui</option>
      <option value="">BiritibMirima-Mirim</option>
      <option value="Boa Esperança do Sul">Boa Esperança do Sul</option>
      <option value="Bocaina">Bocaina</option>
      <option value="Bofete">Bofete</option>
      <option value="Boituva">Boituva</option>
      <option value="Bom Jesus dos Perdões">Bom Jesus dos Perdões</option>
      <option value="Bom Sucesso de Itararé">Bom Sucesso de Itararé</option>
      <option value="Borá">Borá</option>
      <option value="Boracéia">Boracéia</option>
      <option value="Borborema">Borborema</option>
      <option value="Borebi">Borebi</option>
      <option value="Botucatu">Botucatu</option>
      <option value="Bragança Paulista">Bragança Paulista</option>
      <option value="Braúna">Braúna</option>
      <option value="Brejo Alegre">Brejo Alegre</option>
      <option value="Brodowski">Brodowski</option>
      <option value="Brotas">Brotas</option>
      <option value="Buri">Buri</option>
      <option value="Buritama">Buritama</option>
      <option value="Buritizal">Buritizal</option>
      <option value="Cabrália Paulista">Cabrália Paulista</option>
      <option value="Cabreúva">Cabreúva</option>
      <option value="Caçapava">Caçapava</option>
      <option value="Cachoeira Paulista">Cachoeira Paulista</option>
      <option value="Caconde">Caconde</option>
      <option value="Cafelândia">Cafelândia</option>
      <option value="Caiabu">Caiabu</option>
      <option value="Caieiras">Caieiras</option>
      <option value="Caiuá">Caiuá</option>
      <option value="Cajamar">Cajamar</option>
      <option value="Cajati">Cajati</option>
      <option value="Cajobi">Cajobi</option>
      <option value="Cajuru">Cajuru</option>
      <option value="Campina do Monte Alegre">Campina do Monte Alegre</option>
      <option value="Campinas">Campinas</option>
      <option value="Campo Limpo Paulista">Campo Limpo Paulista</option>
      <option value="Campos do Jordão">Campos do Jordão</option>
      <option value="Campos Novos Paulista">Campos Novos Paulista</option>
      <option value="Cananéia">Cananéia</option>
      <option value="Canas">Canas</option>
      <option value="Cândido Mota">Cândido Mota</option>
      <option value="Cândido Rodrigues">Cândido Rodrigues</option>
      <option value="Canitar">Canitar</option>
      <option value="Capão Bonito">Capão Bonito</option>
      <option value="Capela do Alto">Capela do Alto</option>
      <option value="Capivari">Capivari</option>
      <option value="Caraguatatuba">Caraguatatuba</option>
      <option value="Carapicuíba">Carapicuíba</option>
      <option value="Cardoso">Cardoso</option>
      <option value="Casa Branca">Casa Branca</option>
      <option value="Cássia dos Coqueiros">Cássia dos Coqueiros</option>
      <option value="Castilho">Castilho</option>
      <option value="Catanduva">Catanduva</option>
      <option value="Catiguá">Catiguá</option>
      <option value="Cedral">Cedral</option>
      <option value="Cerqueira César">Cerqueira César</option>
      <option value="Cerquilho">Cerquilho</option>
      <option value="Cesário Lange">Cesário Lange</option>
      <option value="Charqueada">Charqueada</option>
      <option value="Chavantes">Chavantes</option>
      <option value="Clementina">Clementina</option>
      <option value="Colina">Colina</option>
      <option value="Colômbia">Colômbia</option>
      <option value="Conchal">Conchal</option>
      <option value="Conchas">Conchas</option>
      <option value="Cordeirópolis">Cordeirópolis</option>
      <option value="Coroados">Coroados</option>
      <option value="Coronel Macedo">Coronel Macedo</option>
      <option value="Corumbataí">Corumbataí</option>
      <option value="Cosmópolis">Cosmópolis</option>
      <option value="Cosmorama">Cosmorama</option>
      <option value="Cotia">Cotia</option>
      <option value="Cravinhos">Cravinhos</option>
      <option value="Cristais Paulista">Cristais Paulista</option>
      <option value="Cruzália">Cruzália</option>
      <option value="Cruzeiro">Cruzeiro</option>
      <option value="Cubatão">Cubatão</option>
      <option value="Cunha">Cunha</option>
      <option value="Descalvado">Descalvado</option>
      <option value="Diadema">Diadema</option>
      <option value="Dirce Reis">Dirce Reis</option>
      <option value="Divinolândia">Divinolândia</option>
      <option value="Dobrada">Dobrada</option>
      <option value="Dois Córregos">Dois Córregos</option>
      <option value="Dolcinópolis">Dolcinópolis</option>
      <option value="Dourado">Dourado</option>
      <option value="Dracena">Dracena</option>
      <option value="Duartina">Duartina</option>
      <option value="Dumont">Dumont</option>
      <option value="Echaporã">Echaporã</option>
      <option value="Eldorado">Eldorado</option>
      <option value="Elias Fausto">Elias Fausto</option>
      <option value="Elisiário">Elisiário</option>
      <option value="Embaúba">Embaúba</option>
      <option value="Embu">Embu</option>
      <option value="">EmbGuaçuu-Guaçu</option>
      <option value="Emilianópolis">Emilianópolis</option>
      <option value="Engenheiro Coelho">Engenheiro Coelho</option>
      <option value="Espírito Santo do Pinhal">Espírito Santo do Pinhal</option>
      <option value="Espírito Santo do Turvo">Espírito Santo do Turvo</option>
      <option value="Estiva Gerbi">Estiva Gerbi</option>
      <option value="">Estrela Oested'Oeste</option>
      <option value="Estrela do Norte">Estrela do Norte</option>
      <option value="Euclides da Cunha Paulista">Euclides da Cunha Paulista</option>
      <option value="Fartura">Fartura</option>
      <option value="Fernando Prestes">Fernando Prestes</option>
      <option value="Fernandópolis">Fernandópolis</option>
      <option value="Fernão">Fernão</option>
      <option value="Ferraz de Vasconcelos">Ferraz de Vasconcelos</option>
      <option value="Flora Rica">Flora Rica</option>
      <option value="Floreal">Floreal</option>
      <option value="Florínia">Florínia</option>
      <option value="Flórida Paulista">Flórida Paulista</option>
      <option value="Franca">Franca</option>
      <option value="Francisco Morato">Francisco Morato</option>
      <option value="Franco da Rocha">Franco da Rocha</option>
      <option value="Gabriel Monteiro">Gabriel Monteiro</option>
      <option value="Gália">Gália</option>
      <option value="Garça">Garça</option>
      <option value="Gastão Vidigal">Gastão Vidigal</option>
      <option value="Gavião Peixoto">Gavião Peixoto</option>
      <option value="General Salgado">General Salgado</option>
      <option value="Getulina">Getulina</option>
      <option value="Glicério">Glicério</option>
      <option value="Guaiçara">Guaiçara</option>
      <option value="Guaimbê">Guaimbê</option>
      <option value="Guaíra">Guaíra</option>
      <option value="Guapiaçu">Guapiaçu</option>
      <option value="Guapiara">Guapiara</option>
      <option value="Guará">Guará</option>
      <option value="Guaraçaí">Guaraçaí</option>
      <option value="Guaraci">Guaraci</option>
      <option value="">Guarani Oested'Oeste</option>
      <option value="Guarantã">Guarantã</option>
      <option value="Guararapes">Guararapes</option>
      <option value="Guararema">Guararema</option>
      <option value="Guaratinguetá">Guaratinguetá</option>
      <option value="Guareí">Guareí</option>
      <option value="Guariba">Guariba</option>
      <option value="Guarujá">Guarujá</option>
      <option value="Guarulhos">Guarulhos</option>
      <option value="Guatapará">Guatapará</option>
      <option value="Guzolândia">Guzolândia</option>
      <option value="Herculândia">Herculândia</option>
      <option value="Holambra">Holambra</option>
      <option value="Hortolândia">Hortolândia</option>
      <option value="Iacanga">Iacanga</option>
      <option value="Iacri">Iacri</option>
      <option value="Iaras">Iaras</option>
      <option value="Ibaté">Ibaté</option>
      <option value="Ibirá">Ibirá</option>
      <option value="Ibirarema">Ibirarema</option>
      <option value="Ibitinga">Ibitinga</option>
      <option value="Ibiúna">Ibiúna</option>
      <option value="Icém">Icém</option>
      <option value="Iepê">Iepê</option>
      <option value="Igaraçu do Tietê">Igaraçu do Tietê</option>
      <option value="Igarapava">Igarapava</option>
      <option value="Igaratá">Igaratá</option>
      <option value="Iguape">Iguape</option>
      <option value="Ilha Comprida">Ilha Comprida</option>
      <option value="Ilha Solteira">Ilha Solteira</option>
      <option value="Ilhabela">Ilhabela</option>
      <option value="Indaiatuba">Indaiatuba</option>
      <option value="Indiana">Indiana</option>
      <option value="Indiaporã">Indiaporã</option>
      <option value="Inúbia Paulista">Inúbia Paulista</option>
      <option value="Ipauçu">Ipauçu</option>
      <option value="Iperó">Iperó</option>
      <option value="Ipeúna">Ipeúna</option>
      <option value="Ipiguá">Ipiguá</option>
      <option value="Iporanga">Iporanga</option>
      <option value="Ipuã">Ipuã</option>
      <option value="Iracemápolis">Iracemápolis</option>
      <option value="Irapuã">Irapuã</option>
      <option value="Irapuru">Irapuru</option>
      <option value="Itaberá">Itaberá</option>
      <option value="Itaí">Itaí</option>
      <option value="Itajobi">Itajobi</option>
      <option value="Itaju">Itaju</option>
      <option value="Itanhaém">Itanhaém</option>
      <option value="Itaóca">Itaóca</option>
      <option value="Itapecerica da Serra">Itapecerica da Serra</option>
      <option value="Itapetininga">Itapetininga</option>
      <option value="Itapeva">Itapeva</option>
      <option value="Itapevi">Itapevi</option>
      <option value="Itapira">Itapira</option>
      <option value="Itapirapuã Paulista">Itapirapuã Paulista</option>
      <option value="Itápolis">Itápolis</option>
      <option value="Itaporanga">Itaporanga</option>
      <option value="Itapuí">Itapuí</option>
      <option value="Itapura">Itapura</option>
      <option value="Itaquaquecetuba">Itaquaquecetuba</option>
      <option value="Itararé">Itararé</option>
      <option value="Itariri">Itariri</option>
      <option value="Itatiba">Itatiba</option>
      <option value="Itatinga">Itatinga</option>
      <option value="Itirapina">Itirapina</option>
      <option value="Itirapuã">Itirapuã</option>
      <option value="Itobi">Itobi</option>
      <option value="Itu">Itu</option>
      <option value="Itupeva">Itupeva</option>
      <option value="Ituverava">Ituverava</option>
      <option value="Jaborandi">Jaborandi</option>
      <option value="Jaboticabal">Jaboticabal</option>
      <option value="Jacareí">Jacareí</option>
      <option value="Jaci">Jaci</option>
      <option value="Jacupiranga">Jacupiranga</option>
      <option value="Jaguariúna">Jaguariúna</option>
      <option value="Jales">Jales</option>
      <option value="Jambeiro">Jambeiro</option>
      <option value="Jandira">Jandira</option>
      <option value="Jardinópolis">Jardinópolis</option>
      <option value="Jarinu">Jarinu</option>
      <option value="Jaú">Jaú</option>
      <option value="Jeriquara">Jeriquara</option>
      <option value="Joanópolis">Joanópolis</option>
      <option value="João Ramalho">João Ramalho</option>
      <option value="José Bonifácio">José Bonifácio</option>
      <option value="Júlio Mesquita">Júlio Mesquita</option>
      <option value="Jumirim">Jumirim</option>
      <option value="Jundiaí">Jundiaí</option>
      <option value="Junqueirópolis">Junqueirópolis</option>
      <option value="Juquiá">Juquiá</option>
      <option value="Juquitiba">Juquitiba</option>
      <option value="Lagoinha">Lagoinha</option>
      <option value="Laranjal Paulista">Laranjal Paulista</option>
      <option value="Lavínia">Lavínia</option>
      <option value="Lavrinhas">Lavrinhas</option>
      <option value="Leme">Leme</option>
      <option value="Lençóis Paulista">Lençóis Paulista</option>
      <option value="Limeira">Limeira</option>
      <option value="Lindóia">Lindóia</option>
      <option value="Lins">Lins</option>
      <option value="Lorena">Lorena</option>
      <option value="Lourdes">Lourdes</option>
      <option value="Louveira">Louveira</option>
      <option value="Lucélia">Lucélia</option>
      <option value="Lucianópolis">Lucianópolis</option>
      <option value="Luís Antônio">Luís Antônio</option>
      <option value="Luiziânia">Luiziânia</option>
      <option value="Lupércio">Lupércio</option>
      <option value="Lutécia">Lutécia</option>
      <option value="Macatuba">Macatuba</option>
      <option value="Macaubal">Macaubal</option>
      <option value="Macedônia">Macedônia</option>
      <option value="Magda">Magda</option>
      <option value="Mairinque">Mairinque</option>
      <option value="Mairiporã">Mairiporã</option>
      <option value="Manduri">Manduri</option>
      <option value="Marabá Paulista">Marabá Paulista</option>
      <option value="Maracaí">Maracaí</option>
      <option value="Marapoama">Marapoama</option>
      <option value="Mariápolis">Mariápolis</option>
      <option value="Marília">Marília</option>
      <option value="Marinópolis">Marinópolis</option>
      <option value="Martinópolis">Martinópolis</option>
      <option value="Matão">Matão</option>
      <option value="Mauá">Mauá</option>
      <option value="Mendonça">Mendonça</option>
      <option value="Meridiano">Meridiano</option>
      <option value="Mesópolis">Mesópolis</option>
      <option value="Miguelópolis">Miguelópolis</option>
      <option value="Mineiros do Tietê">Mineiros do Tietê</option>
      <option value="Mira Estrela">Mira Estrela</option>
      <option value="Miracatu">Miracatu</option>
      <option value="Mirandópolis">Mirandópolis</option>
      <option value="Mirante do Paranapanema">Mirante do Paranapanema</option>
      <option value="Mirassol">Mirassol</option>
      <option value="Mirassolândia">Mirassolândia</option>
      <option value="Mococa">Mococa</option>
      <option value="Mogi das Cruzes">Mogi das Cruzes</option>
      <option value="">MogGuaçui-Guaçu</option>
      <option value="">MogMirimi-Mirim</option>
      <option value="Mombuca">Mombuca</option>
      <option value="Monções">Monções</option>
      <option value="Mongaguá">Mongaguá</option>
      <option value="Monte Alegre do Sul">Monte Alegre do Sul</option>
      <option value="Monte Alto">Monte Alto</option>
      <option value="Monte Aprazível">Monte Aprazível</option>
      <option value="Monte Azul Paulista">Monte Azul Paulista</option>
      <option value="Monte Castelo">Monte Castelo</option>
      <option value="Monte Mor">Monte Mor</option>
      <option value="Monteiro Lobato">Monteiro Lobato</option>
      <option value="Morro Agudo">Morro Agudo</option>
      <option value="Morungaba">Morungaba</option>
      <option value="Motuca">Motuca</option>
      <option value="Murutinga do Sul">Murutinga do Sul</option>
      <option value="Nantes">Nantes</option>
      <option value="Narandiba">Narandiba</option>
      <option value="Natividade da Serra">Natividade da Serra</option>
      <option value="Nazaré Paulista">Nazaré Paulista</option>
      <option value="Neves Paulista">Neves Paulista</option>
      <option value="Nhandeara">Nhandeara</option>
      <option value="Nipoã">Nipoã</option>
      <option value="Nova Aliança">Nova Aliança</option>
      <option value="Nova Campina">Nova Campina</option>
      <option value="Nova Canaã Paulista">Nova Canaã Paulista</option>
      <option value="Nova Castilho">Nova Castilho</option>
      <option value="Nova Europa">Nova Europa</option>
      <option value="Nova Granada">Nova Granada</option>
      <option value="Nova Guataporanga">Nova Guataporanga</option>
      <option value="Nova Independência">Nova Independência</option>
      <option value="Nova Luzitânia">Nova Luzitânia</option>
      <option value="Nova Odessa">Nova Odessa</option>
      <option value="Novais">Novais</option>
      <option value="Novo Horizonte">Novo Horizonte</option>
      <option value="Nuporanga">Nuporanga</option>
      <option value="Ocauçu">Ocauçu</option>
      <option value="Óleo">Óleo</option>
      <option value="Olímpia">Olímpia</option>
      <option value="Onda Verde">Onda Verde</option>
      <option value="Oriente">Oriente</option>
      <option value="Orindiúva">Orindiúva</option>
      <option value="Orlândia">Orlândia</option>
      <option value="Osasco">Osasco</option>
      <option value="Oscar Bressane">Oscar Bressane</option>
      <option value="Osvaldo Cruz">Osvaldo Cruz</option>
      <option value="Ourinhos">Ourinhos</option>
      <option value="Ouro Verde">Ouro Verde</option>
      <option value="Ouroeste">Ouroeste</option>
      <option value="Pacaembu">Pacaembu</option>
      <option value="Palestina">Palestina</option>
      <option value="Palmares Paulista">Palmares Paulista</option>
      <option value="">Palmeira Oested'Oeste</option>
      <option value="Palmital">Palmital</option>
      <option value="Panorama">Panorama</option>
      <option value="Paraguaçu Paulista">Paraguaçu Paulista</option>
      <option value="Paraibuna">Paraibuna</option>
      <option value="Paraíso">Paraíso</option>
      <option value="Paranapanema">Paranapanema</option>
      <option value="Paranapuã">Paranapuã</option>
      <option value="Parapuã">Parapuã</option>
      <option value="Pardinho">Pardinho</option>
      <option value="">PariquerAçua-Açu</option>
      <option value="Parisi">Parisi</option>
      <option value="Patrocínio Paulista">Patrocínio Paulista</option>
      <option value="Paulicéia">Paulicéia</option>
      <option value="Paulínia">Paulínia</option>
      <option value="Paulistânia">Paulistânia</option>
      <option value="Paulo de Faria">Paulo de Faria</option>
      <option value="Pederneiras">Pederneiras</option>
      <option value="Pedra Bela">Pedra Bela</option>
      <option value="Pedranópolis">Pedranópolis</option>
      <option value="Pedregulho">Pedregulho</option>
      <option value="Pedreira">Pedreira</option>
      <option value="Pedrinhas Paulista">Pedrinhas Paulista</option>
      <option value="Pedro de Toledo">Pedro de Toledo</option>
      <option value="Penápolis">Penápolis</option>
      <option value="Pereira Barreto">Pereira Barreto</option>
      <option value="Pereiras">Pereiras</option>
      <option value="Peruíbe">Peruíbe</option>
      <option value="Piacatu">Piacatu</option>
      <option value="Piedade">Piedade</option>
      <option value="Pilar do Sul">Pilar do Sul</option>
      <option value="Pindamonhangaba">Pindamonhangaba</option>
      <option value="Pindorama">Pindorama</option>
      <option value="Pinhalzinho">Pinhalzinho</option>
      <option value="Piquerobi">Piquerobi</option>
      <option value="Piquete">Piquete</option>
      <option value="Piracaia">Piracaia</option>
      <option value="Piracicaba">Piracicaba</option>
      <option value="Piraju">Piraju</option>
      <option value="Pirajuí">Pirajuí</option>
      <option value="Pirangi">Pirangi</option>
      <option value="Pirapora do Bom Jesus">Pirapora do Bom Jesus</option>
      <option value="Pirapozinho">Pirapozinho</option>
      <option value="Pirassununga">Pirassununga</option>
      <option value="Piratininga">Piratininga</option>
      <option value="Pitangueiras">Pitangueiras</option>
      <option value="Planalto">Planalto</option>
      <option value="Platina">Platina</option>
      <option value="Poá">Poá</option>
      <option value="Poloni">Poloni</option>
      <option value="Pompéia">Pompéia</option>
      <option value="Pongaí">Pongaí</option>
      <option value="Pontal">Pontal</option>
      <option value="Pontalinda">Pontalinda</option>
      <option value="Pontes Gestal">Pontes Gestal</option>
      <option value="Populina">Populina</option>
      <option value="Porangaba">Porangaba</option>
      <option value="Porto Feliz">Porto Feliz</option>
      <option value="Porto Ferreira">Porto Ferreira</option>
      <option value="Potim">Potim</option>
      <option value="Potirendaba">Potirendaba</option>
      <option value="Pracinha">Pracinha</option>
      <option value="Pradópolis">Pradópolis</option>
      <option value="Praia Grande">Praia Grande</option>
      <option value="Pratânia">Pratânia</option>
      <option value="Presidente Alves">Presidente Alves</option>
      <option value="Presidente Bernardes">Presidente Bernardes</option>
      <option value="Presidente Epitácio">Presidente Epitácio</option>
      <option value="Presidente Prudente">Presidente Prudente</option>
      <option value="Presidente Venceslau">Presidente Venceslau</option>
      <option value="Promissão">Promissão</option>
      <option value="Quadra">Quadra</option>
      <option value="Quatá">Quatá</option>
      <option value="Queiroz">Queiroz</option>
      <option value="Queluz">Queluz</option>
      <option value="Quintana">Quintana</option>
      <option value="Rafard">Rafard</option>
      <option value="Rancharia">Rancharia</option>
      <option value="Redenção da Serra">Redenção da Serra</option>
      <option value="Regente Feijó">Regente Feijó</option>
      <option value="Reginópolis">Reginópolis</option>
      <option value="Registro">Registro</option>
      <option value="Restinga">Restinga</option>
      <option value="Ribeira">Ribeira</option>
      <option value="Ribeirão Bonito">Ribeirão Bonito</option>
      <option value="Ribeirão Branco">Ribeirão Branco</option>
      <option value="Ribeirão Corrente">Ribeirão Corrente</option>
      <option value="Ribeirão do Sul">Ribeirão do Sul</option>
      <option value="Ribeirão dos Índios">Ribeirão dos Índios</option>
      <option value="Ribeirão Grande">Ribeirão Grande</option>
      <option value="Ribeirão Pires">Ribeirão Pires</option>
      <option value="Ribeirão Preto">Ribeirão Preto</option>
      <option value="Rifaina">Rifaina</option>
      <option value="Rincão">Rincão</option>
      <option value="Rinópolis">Rinópolis</option>
      <option value="Rio Claro">Rio Claro</option>
      <option value="Rio das Pedras">Rio das Pedras</option>
      <option value="Rio Grande da Serra">Rio Grande da Serra</option>
      <option value="Riolândia">Riolândia</option>
      <option value="Riversul">Riversul</option>
      <option value="Rosana">Rosana</option>
      <option value="Roseira">Roseira</option>
      <option value="Rubiácea">Rubiácea</option>
      <option value="Rubinéia">Rubinéia</option>
      <option value="Sabino">Sabino</option>
      <option value="Sagres">Sagres</option>
      <option value="Sales">Sales</option>
      <option value="Sales Oliveira">Sales Oliveira</option>
      <option value="Salesópolis">Salesópolis</option>
      <option value="Salmourão">Salmourão</option>
      <option value="Saltinho">Saltinho</option>
      <option value="Salto">Salto</option>
      <option value="Salto de Pirapora">Salto de Pirapora</option>
      <option value="Salto Grande">Salto Grande</option>
      <option value="Sandovalina">Sandovalina</option>
      <option value="Santa Adélia">Santa Adélia</option>
      <option value="Santa Albertina">Santa Albertina</option>
      <option value="">Santa Bárbara Oested'Oeste</option>
      <option value="Santa Branca">Santa Branca</option>
      <option value="">Santa Clara Oested'Oeste</option>
      <option value="Santa Cruz da Conceição">Santa Cruz da Conceição</option>
      <option value="Santa Cruz da Esperança">Santa Cruz da Esperança</option>
      <option value="Santa Cruz das Palmeiras">Santa Cruz das Palmeiras</option>
      <option value="Santa Cruz do Rio Pardo">Santa Cruz do Rio Pardo</option>
      <option value="Santa Ernestina">Santa Ernestina</option>
      <option value="Santa Fé do Sul">Santa Fé do Sul</option>
      <option value="Santa Gertrudes">Santa Gertrudes</option>
      <option value="Santa Isabel">Santa Isabel</option>
      <option value="Santa Lúcia">Santa Lúcia</option>
      <option value="Santa Maria da Serra">Santa Maria da Serra</option>
      <option value="Santa Mercedes">Santa Mercedes</option>
      <option value="">Santa Rita Oested'Oeste</option>
      <option value="Santa Rita do Passa Quatro">Santa Rita do Passa Quatro</option>
      <option value="Santa Rosa de Viterbo">Santa Rosa de Viterbo</option>
      <option value="Santa Salete">Santa Salete</option>
      <option value="Santana da Ponte Pensa">Santana da Ponte Pensa</option>
      <option value="Santana de Parnaíba">Santana de Parnaíba</option>
      <option value="Santo Anastácio">Santo Anastácio</option>
      <option value="Santo André">Santo André</option>
      <option value="Santo Antônio da Alegria">Santo Antônio da Alegria</option>
      <option value="Santo Antônio de Posse">Santo Antônio de Posse</option>
      <option value="Santo Antônio do Aracanguá">Santo Antônio do Aracanguá</option>
      <option value="Santo Antônio do Jardim">Santo Antônio do Jardim</option>
      <option value="Santo Antônio do Pinhal">Santo Antônio do Pinhal</option>
      <option value="Santo Expedito">Santo Expedito</option>
      <option value="Santópolis do Aguapeí">Santópolis do Aguapeí</option>
      <option value="Santos">Santos</option>
      <option value="São Bento do Sapucaí">São Bento do Sapucaí</option>
      <option value="São Bernardo do Campo">São Bernardo do Campo</option>
      <option value="São Caetano do Sul">São Caetano do Sul</option>
      <option value="São Carlos">São Carlos</option>
      <option value="São Francisco">São Francisco</option>
      <option value="São João da Boa Vista">São João da Boa Vista</option>
      <option value="São João das Duas Pontes">São João das Duas Pontes</option>
      <option value="São João de Iracema">São João de Iracema</option>
      <option value="">São João do Pau Alhod'Alho</option>
      <option value="São Joaquim da Barra">São Joaquim da Barra</option>
      <option value="São José da Bela Vista">São José da Bela Vista</option>
      <option value="São José do Barreiro">São José do Barreiro</option>
      <option value="São José do Rio Pardo">São José do Rio Pardo</option>
      <option value="São José do Rio Preto">São José do Rio Preto</option>
      <option value="São José dos Campos">São José dos Campos</option>
      <option value="São Lourenço da Serra">São Lourenço da Serra</option>
      <option value="São Luís do Paraitinga">São Luís do Paraitinga</option>
      <option value="São Manuel">São Manuel</option>
      <option value="São Miguel Arcanjo">São Miguel Arcanjo</option>
      <option value="São Paulo">São Paulo</option>
      <option value="São Pedro">São Pedro</option>
      <option value="São Pedro do Turvo">São Pedro do Turvo</option>
      <option value="São Roque">São Roque</option>
      <option value="São Sebastião">São Sebastião</option>
      <option value="São Sebastião da Grama">São Sebastião da Grama</option>
      <option value="São Simão">São Simão</option>
      <option value="São Vicente">São Vicente</option>
      <option value="Sarapuí">Sarapuí</option>
      <option value="Sarutaiá">Sarutaiá</option>
      <option value="Sebastianópolis do Sul">Sebastianópolis do Sul</option>
      <option value="Serra Azul">Serra Azul</option>
      <option value="Serra Negra">Serra Negra</option>
      <option value="Serrana">Serrana</option>
      <option value="Sertãozinho">Sertãozinho</option>
      <option value="Sete Barras">Sete Barras</option>
      <option value="Severínia">Severínia</option>
      <option value="Silveiras">Silveiras</option>
      <option value="Socorro">Socorro</option>
      <option value="Sorocaba">Sorocaba</option>
      <option value="Sud Mennucci">Sud Mennucci</option>
      <option value="Sumaré">Sumaré</option>
      <option value="Suzanápolis">Suzanápolis</option>
      <option value="Suzano">Suzano</option>
      <option value="Tabapuã">Tabapuã</option>
      <option value="Tabatinga">Tabatinga</option>
      <option value="Taboão da Serra">Taboão da Serra</option>
      <option value="Taciba">Taciba</option>
      <option value="Taguaí">Taguaí</option>
      <option value="Taiaçu">Taiaçu</option>
      <option value="Taiúva">Taiúva</option>
      <option value="Tambaú">Tambaú</option>
      <option value="Tanabi">Tanabi</option>
      <option value="Tapiraí">Tapiraí</option>
      <option value="Tapiratiba">Tapiratiba</option>
      <option value="Taquaral">Taquaral</option>
      <option value="Taquaritinga">Taquaritinga</option>
      <option value="Taquarituba">Taquarituba</option>
      <option value="Taquarivaí">Taquarivaí</option>
      <option value="Tarabai">Tarabai</option>
      <option value="Tarumã">Tarumã</option>
      <option value="Tatuí">Tatuí</option>
      <option value="Taubaté">Taubaté</option>
      <option value="Tejupá">Tejupá</option>
      <option value="Teodoro Sampaio">Teodoro Sampaio</option>
      <option value="Terra Roxa">Terra Roxa</option>
      <option value="Tietê">Tietê</option>
      <option value="Timburi">Timburi</option>
      <option value="Torre de Pedra">Torre de Pedra</option>
      <option value="Torrinha">Torrinha</option>
      <option value="Trabiju">Trabiju</option>
      <option value="Tremembé">Tremembé</option>
      <option value="Três Fronteiras">Três Fronteiras</option>
      <option value="Tuiuti">Tuiuti</option>
      <option value="Tupã">Tupã</option>
      <option value="Tupi Paulista">Tupi Paulista</option>
      <option value="Turiúba">Turiúba</option>
      <option value="Turmalina">Turmalina</option>
      <option value="Ubarana">Ubarana</option>
      <option value="Ubatuba">Ubatuba</option>
      <option value="Ubirajara">Ubirajara</option>
      <option value="Uchoa">Uchoa</option>
      <option value="União Paulista">União Paulista</option>
      <option value="Urânia">Urânia</option>
      <option value="Uru">Uru</option>
      <option value="Urupês">Urupês</option>
      <option value="Valentim Gentil">Valentim Gentil</option>
      <option value="Valinhos">Valinhos</option>
      <option value="Valparaíso">Valparaíso</option>
      <option value="Vargem">Vargem</option>
      <option value="Vargem Grande do Sul">Vargem Grande do Sul</option>
      <option value="Vargem Grande Paulista">Vargem Grande Paulista</option>
      <option value="Várzea Paulista">Várzea Paulista</option>
      <option value="Vera Cruz">Vera Cruz</option>
      <option value="Vinhedo">Vinhedo</option>
      <option value="Viradouro">Viradouro</option>
      <option value="Vista Alegre do Alto">Vista Alegre do Alto</option>
      <option value="Vitória Brasil">Vitória Brasil</option>
      <option value="Votorantim">Votorantim</option>
      <option value="Votuporanga">Votuporanga</option>
      <option value="Zacarias">Zacarias</option>
    </select>
</div> <!-- Acima foi feito um seelct com todas as cidades de São Paulo. Elas serão consideradas pelo seu termo em value -->
    <div>
        <h5>Possui distribuição por zona?</h5>
        <div class="form-check"> <!-- check box que determinara se a próxima informação irá aparecer ou não -->
            <input type="radio" onclick="document.getElementById('Zona').style.display='block'" name="flexRadioDefault" id="flexRadioDefault1"> <!-- caso essa opção seja seleciona, o campo ZOna, do formulário, surgirá -->
            <label for="flexRadioDefault1">
                Sim
            </label>
        </div>
        <div class="form-check">
            <input type="radio" onclick="document.getElementById('Zona').style.display='none'" name="flexRadioDefault" id="flexRadioDefault2" checked> <!-- caso essa opção seja seleciona, o campo Zona, do formulário, desaparecerá -->
            <label for="flexRadioDefault2">
                Não
            </label>
        </div>
    </div>
<div>
<select id="Zona" style="display: none; margin-bottom: 10px;" name="zona"> <!-- select de Zona, cujo só aparecerá se a opção marcada do campo acima for 'Sim' -->
  <option selected disabled="">Selecione sua zona</option>
  <option value="Centro">Centro</option>
  <option value="Zona Leste">Zona Leste</option>
  <option value="Zona Oeste">Zona Oeste</option>
  <option value="Zona Norte">Zona Norte</option>
  <option value="Zona Sul">Zona Sul</option>
</select>
</div>
  <button class="btn btn-lg" id="reg">REGISTRAR</button> <!-- botão que fara o registro e enviará os dados inseridos para processa.php -->
</form>
</div>
<button class="btn btn-back js-btn" data-target="welcome"><i class="fas fa-angle-left"></i></button> <!-- este botão servirá para o usuário voltar para o card anterior -->
</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/jquery.mask.min.js"></script>
<script src="js/buscaCEP.js"></script>
<script src="js/validarCPF.js"></script>
<script src="js/validaNome.js"></script>
<script src="js/mascara.js"></script>
<script> 

const cards = document.querySelectorAll('.card'); //variável que trabalhará com todos os cards

/* View Controller
-----------------------------------------*/
const btns = document.querySelectorAll('.js-btn');
btns.forEach((btn) => {
btn.addEventListener('click', on_btn_click, true);
btn.addEventListener('touch', on_btn_click, true);
});

function on_btn_click (e) {
const nextID = e.currentTarget.getAttribute('data-target');
const next = document.getElementById(nextID);
if(!next) return;
bg_change(nextID);
view_change(next);
return false;
}

/* Adiciona a classe ao corpo */
function bg_change(next) {
document.body.className = '';
document.body.classList.add('is-'+next);
}

/* Adiciona classe a um card */
function view_change(next) {
cards.forEach((card) => { card.classList.remove('is-show'); });
next.classList.add('is-show');
}

$("#CEP").mask("99999–999");
$("#Telefone").mask("(99) 9999–9999");

</script>
</body>
</html>
