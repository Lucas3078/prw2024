<?php
$N = floatval(readline()) * 100;
$arrayNotas = [10000, 5000, 2000, 1000, 500, 200];
$arrayNotasMoedas = [100, 50, 25, 10, 5, 1];

function QuantNota($N, $numCedula)
{
    if ($N >= $numCedula) {
        echo intval($N / $numCedula) . " nota(s) de R$ " . number_format($numCedula / 100, 2, ".", "") . "\n";
        return $N % $numCedula;
    } else {
        echo 0 . " nota(s) de R$ " . number_format($numCedula / 100, 2, ".", "") . "\n";
        return $N;
    }
}

function QuantMoeda($N, $numCedula)
{
    if ($N >= $numCedula) {
        echo intval($N / $numCedula) . " moeda(s) de R$ " . number_format($numCedula / 100, 2, ".", "") . "\n";
        return $N % $numCedula;
    } else {
        echo 0 . " moeda(s) de R$ " . number_format($numCedula / 100, 2, ".", "") . "\n";
        return $N;
    }
}

echo "NOTAS:\n";
foreach ($arrayNotas as $cedula) {
    $N = QuantNota($N, $cedula);
}

echo "MOEDAS:\n";
foreach ($arrayNotasMoedas as $moeda) {
    $N = QuantMoeda($N, $moeda);
}
?>