<?php
require_once 'src/CPF.php';
//esse arquivo tratará do CPF recebido e criará novo objeto
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_FLOAT);  
$cpfFormatado = str_split($cpf); //transformará a variável cpf em uma lista 
unset($cpfFormatado[9]); //retira o traço do CPF
$cpfsemtraco = array_values($cpfFormatado); //rearranja a lista após a deleção anterior


$cpfAtestar = new CPF($cpfsemtraco); //após todas esseas transformações, vamos passar essa nova lista como parâmetro na construção de um objeto
//do tipo CPF

