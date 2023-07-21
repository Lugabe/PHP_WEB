<?php


$ContaCorrente =
    [
        123433212 => [
            "Titular" => "Luis",
            "Saldo" => 3000
        ],

        938439433 => [
            "Titular" => "Sara",
            "Saldo" => 2000
        ]
    ];


foreach ($ContaCorrente as $cpf => $conta) {

    echo "Bem vindo novamente " . $conta["Titular"] . ',';
    echo " O seu saldo é de: R$" . number_format($conta["Saldo"], 2) . " Reais" . PHP_EOL;
}

