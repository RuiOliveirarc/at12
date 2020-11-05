<?php  
	$nummale=rand(0,100);
	$numfemale=rand(0,100);

	echo 'Numero de raparigas ' .$numfemale;

echo '<br>';

	echo 'Numero de rapazes ' .$nummale;
	
echo '<br>';

	percentagem($numfemale,$nummale);



	function percentagem($numfemale,$nummale){

		$soma=$numfemale+$nummale;

		echo 'Percentagem de raparigas '.($numfemale*100)/$soma. ' %';


echo '<br>';


		echo 'Percentagem de rapazes '.($nummale*100)/$soma. ' %';
	}
?>