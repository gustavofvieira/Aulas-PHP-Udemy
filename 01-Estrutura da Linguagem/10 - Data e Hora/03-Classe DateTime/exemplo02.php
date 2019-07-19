<?php
$dt = new DateTime();
$periodo = new DateInterval("P15D");
echo $dt->format("d/m/Y H:i:s");
$dt->add($periodo);// metódo add adciona data, espera por parametro outra data 
echo "<br>";
echo $dt->format("d/m/Y H:i:s");// depois de adcionar os 15 dias