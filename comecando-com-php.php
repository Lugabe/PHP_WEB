<?php

$name = "Luis Gabriel";
$idade = 18;

$idade += 10;

echo "Ola mundo, eu tenho" . PHP_EOL . "$idade anos \n\n";

if ($idade >= 18) {
    echo "Você é maior de idade e tem $idade";
} else {
    echo "Você é menor de idade";
}

$contador = 0;

while ($contador < 10) {
    $contador += 1;

    echo PHP_EOL . $contador;
}

for ($i = 0; $i <= 10; $i++) {
    echo PHP_EOL . "$i";
}