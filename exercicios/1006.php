<?php

$A = doubleval(readline());
$B = doubleval(readline());
$C = doubleval(readline());

$MEDIA = ((2*$A)+(3*$B)+(5*$C))/10;

echo "MEDIA = ".number_format($MEDIA,1,'.','')."\n";
?>