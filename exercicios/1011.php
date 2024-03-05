<?php

$RAIO = doubleval(readline());

$CALCvol = (4/3.0) * 3.14159 * pow($RAIO, 3);

echo "VOLUME = " .number_format($CALCvol, 3, '.', ''). "\n";

?>