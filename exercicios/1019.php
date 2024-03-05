<?php
$N = intval(readline());

$HORAS = intval($N / 3600);
$N %= 3600;
$MINUTOS = intval($N / 60);
$SEGUNDOS = $N % 60;

echo $HORAS.":".$MINUTOS.":".$SEGUNDOS."\n";

?>