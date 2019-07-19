<?php
function teste($callback){
	//Processo lento
	
	$callback();
}

teste(function(){ // chamando a função anonima

	echo "terminou!"."<br>";

});