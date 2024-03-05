<?php
$N = intval(readline());

$ANO = intval($N / 365);
$N %= 365;
$MESES = intval($N / 30);
$DIAS = $N % 30;

echo $ANO." ano(s)"."\n";
echo $MESES." mes(es)"."\n";
echo $DIAS." dia(s)"."\n";
?>