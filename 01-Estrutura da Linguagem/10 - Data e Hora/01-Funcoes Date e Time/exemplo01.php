<?php
echo date("d/m/Y H:i:s",1563496718);// time stamp 01/01/1970
echo "<br>";
echo time();// traz os segundos de 1970 até hj
echo "<br>";
echo strtotime("2019-02-03");
echo "<br>";
$ts = strtotime("1996-11-25");
$now = strtotime("now");
$tomorrow = strtotime("+1 day");
$sevenDays = strtotime("+1 week");

echo date("l, d/m/Y",$ts);
echo "<br>";
echo date("l, d/m/Y",$now);
echo "<br>";
echo date("l, d/m/Y",$tomorrow);
echo "<br>";
echo date("l, d/m/Y",$sevenDays);