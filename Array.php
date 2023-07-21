<?php


$idadeList = [20, 21, 22, 23, 24, 25, 26, 27, 28];


list($idadeLuis, $idadeSara, $idadePanda) = $idadeList;

echo "A idade de Luis Gabriel :é $idadeLuis \nA idade de Sarinha é: $idadeSara \nA idade de PanpanDda é: $idadePanda";


foreach ($idadeList as $index => $value) {
    echo PHP_EOL . "Idade = $value";
    echo PHP_EOL . "Indice = $index";
}


//key é o indice
//$value é o valor da variavel
