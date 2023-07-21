<?php

//array associativo é igual o objetos em javascript,  
//com  chave e valor. separados por =>

$conta1 = [
    "titular1" => "Luis",
    "titular2" => "Sara",

    "conta1" => "Corrente",
    "conta2" => "Poupança"
];


foreach ($conta1 as $key => $value) {

    echo "O $key se chama $value " . PHP_EOL;
}