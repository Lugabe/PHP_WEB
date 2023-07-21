<!-- <?php
require_once("banco.php");

function exibeMensagem(string $mensagem)
{
    echo $mensagem . "<br>";
}
function exibeConta(array $conta)
{

    ["Titular" => $Titular, "Saldo" => $Saldo] = $conta;
    echo "<li>Titular: $Titular. ~~ Saldo: $Saldo</li>";

}

function Sacar(array $tipoConta, int $nConta, float $valorASacar)
{
    if ($valorASacar > $tipoConta[$nConta]["Saldo"]) {
        exibeMensagem("Você não pode sacar este valor por falta de saldo." . PHP_EOL);
    } elseif (is_string($valorASacar)) {
        exibeMensagem("Só é permitido valores numéricos. " . "Você digitou $valorASacar em forma de texto." . PHP_EOL);
    } else {
        exibeMensagem("Saldo Atual: " . $tipoConta[$nConta]["Saldo"] -= $valorASacar);
        exibeMensagem("Valor Sacado: $valorASacar" . PHP_EOL);
    }

}

function Depositar(array $tipoConta, int $nConta, float $valorADepositar)
{
    if ($valorADepositar <= 0 || $valorADepositar < 1) {
        exibeMensagem("Você não pode depositar valores negativos ou menor do que 1." . PHP_EOL);
    } elseif (is_string($valorADepositar)) {
        exibeMensagem("Só é permitido valores numéricos. " . "Você digitou $valorADepositar em forma de texto." . PHP_EOL);
    } else {
        exibeMensagem("Saldo Atual: " . $tipoConta[$nConta]["Saldo"] += $valorADepositar);
        exibeMensagem("Valor Depositado: $valorADepositar" . PHP_EOL);
    }

}

function nomeMaiusculo(array &$conta) //modifica diretamente a variavel quando é colocado o &
{
    $conta["titular"] = mb_strtoupper($conta["titular"]);
}
?> -->
<?php
include("index.html"); ?>
<!-- Chamando o arquivo html com os codigos para ser exbido
após o include. -->