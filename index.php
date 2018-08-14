<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


function output_strings($kol_strok){

	$kol_strok = (int)$kol_strok;
	if($kol_strok == 0) { 
		echo "Ошибка! количество строк должно быть больше 0";
		return false;
	}

	$sequence = array();

	for($n = 1; $n <= $kol_strok; $n++){

		// echo $n.": ";
		// $sequence .= $n;
		$sequence[] = $n;

		if( $n%2 == 0 ) {
			krsort($sequence);
			// print_r($sequence);
			echo implode('-', $sequence);
		}
		else {
			// echo $sequence;
			// print_r($sequence);
			sort($sequence);
			echo implode('-', $sequence);
		}

		echo "<br>";

	}
}

output_strings(15);
output_strings('text');
