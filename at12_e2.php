<?php 
	$num=rand(1,100);
	echo 'O numero ' .$num. ' é ';

	
	$fun=parimpar($num);


	if ($fun==true) {
		echo 'Par';
	}
	else{
		echo 'Impar';
	}



	function parimpar($num){
		if($num%2==0){
			return true;
		}
		else{
			return false;
		}
	}

?>