<?php 
	$raio=rand(1,100);

	echo 'A area de um circulo com ' .$raio.' de raio é '.area($raio);


	
	function area ($raio,$p=3.14){
		$area=$p*$raio/2;
		return $area;
	}


?>