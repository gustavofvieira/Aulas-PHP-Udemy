<?php 
function soma (int ...$valores):string{//declaraçao de tipos escalares//convertendo na função o tipo do dado que está sendo passado por parametro
	return array_sum($valores);

}
echo var_dump(soma(2, 2));
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5 , 3.2);//vai converter pra int
echo "<br>";
echo soma(2, 2, 3);
echo "<br>";