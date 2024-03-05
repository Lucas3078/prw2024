<?php

$A = doubleval(readline());
$B = doubleval(readline());

$MEDIA = ((3.5*$A)+(7.5*$B))/11;

echo "MEDIA = ".number_format($MEDIA,5,'.','')."\n";
?>