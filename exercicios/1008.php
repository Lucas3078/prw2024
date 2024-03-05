<?php

$NUMBER = doubleval(readline());
$NUMhoras = doubleval(readline());
$VALporH = doubleval(readline());


$SALARY = ($NUMhoras*$VALporH);

echo "NUMBER = ".$NUMBER."\n";
echo "SALARY = U$ ".number_format($SALARY,2,'.','')."\n";

?>