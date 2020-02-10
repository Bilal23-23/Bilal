<?php


	$naam = 'Bilal';
	$leeftijd = 16;
	$lengte = 1.78;
	//$woonplaats = 'Den Haag';

	function abc($naam, $leeftijd, $lengte, $woonplaats){

		echo $naam . '<br>';
		echo $leeftijd . '<br>';
		echo $lengte . '<br>';
		echo $woonplaats . '<br>';

		// echo "Ik ben " . $naam. ", ik ben ". $leeftijd .' jaar '. "oud en ben ".$lengte. 'm lang'; (dit is de langere versie van de code hier onder.)
		echo sprintf('Ik ben %s, ik ben %s jaar oud en ben %s m lang, ik woon in %s.', $naam, $leeftijd, $lengte, $woonplaats);
	}
	abc('hallo','hallo 2', 'hallo 3', 'hallo 4');
	abc('hallo 5','hallo 6', 'hallo 7', 'hallo 8');
	
?>