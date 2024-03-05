<?php
$X = intval(readline());
$Y = doubleval(readline());

$KM = $X/$Y;

echo number_format($KM,3,'.','')." km/l"."\n";
?>