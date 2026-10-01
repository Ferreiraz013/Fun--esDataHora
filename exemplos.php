<?php
date_default_timezone_set('America/Sao_Paulo');
echo date("d/m/y") . "<br>";
echo date("H:i:s") . "<br>";
echo date("d/m/y H:i:s") . "<br>";

echo time() . "<br>";


$agora =  time();
$seteDias = 7 * 24 * 60 * 60;
$futuro = $agora + $seteDias;
echo date("d/m/y", $futuro) . "<br>";

$data = strtotime("+ 7 day");
echo date("d/m/Y", $data) . "<br>";

$data = strtotime("tomorrow");
echo date("d/m/Y", $data) . "<br>";

$data = strtotime("yesterday");
echo date("d/m/Y", $data) . "<br>";

$data1 = strtotime("2026-10-10");
$data2 = strtotime("2026-11-10");

if ($data1 < $data2) {
    echo "A Primeira data é maior que a segunda" . "<br>";
} else {
    echo "a primeira data é menor que a segunda" . "<br>";
}

$vencimento = strtotime("2026-09-20");
$hoje = time();
if ($vencimento < $hoje) {
    echo "Data de validade está no prazo" . "<br>";
} else {
    echo "Data de validade está vencida" . "<br>";
}
?>