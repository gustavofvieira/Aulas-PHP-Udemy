<?php 
function soma (int ...$valores){//declaraçao de tipos escalares//todos os valores serão int
	return array_sum($valores);

}
echo soma(2, 2);
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5 , 3.2);//vai converter pra int
echo "<br>";
echo soma(2, 2, 3);
echo "<br>";