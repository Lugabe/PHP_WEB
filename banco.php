<?php
require_once("funcoes.php");

use function PHPSTORM_META\type;


$ContaCorrente =
    [
        123433212 => [
            "Titular" => "Luis",
            "Saldo" => 4000
        ],

        938439433 => [
            "Titular" => "Sara",
            "Saldo" => 2300
        ],

        12366669 => [
            "Titular" => "Kelen",
            "Saldo" => 5000000
        ]

    ];

$ContaCorrente[12366669]["Saldo"] -= 1000; // estou falando que quero pegar o cpf 12366669 e selecionar o saldo e diminuir -100

//unset($ContaCorrente[12366669]);//remove uma variavel do array. Passar o nome da lista e o Indice para remover

Sacar($ContaCorrente, 123433212, 500);

Depositar($ContaCorrente, 123433212, 1000);

echo "<ul>";
foreach ($ContaCorrente as $cpf => $conta) {

    exibeConta($conta);
    Sacar($ContaCorrente, $cpf, 500);
}
"</ul>";