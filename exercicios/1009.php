<?php

$NOME = readline();
$FIXO = doubleval(readline());
$COMISSAO = doubleval(readline());

$TOTAL = $COMISSAO*0.15;
$TOTAL = $TOTAL + $FIXO;

echo "TOTAL = R$ ".number_format($TOTAL,2,'.','')."\n";

?>