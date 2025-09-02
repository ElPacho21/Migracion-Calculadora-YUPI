<?php 
$a = array(
		'alimentos' => array(
				'desayuno' => array(
					'tipo' => "alimentos",
					'momento' => "desayuno",
				),
				'almuerzo' => array(
					'tipo' => "alimentos",
					'momento' => "almuerzo",
				),
				'mediatarde' => array(
					'tipo' => "alimentos",
					'momento' => "mediatarde",
				),
				'cena' => array(
					'tipo' => "alimentos",
					'momento' => "cena",
				),
			),
	);

echo "<p>Es la hora de comer los " . $a['alimentos']['desayuno']['tipo'] . " del " . $a['alimentos']['desayuno']['momento'] . "</p>"
. "<p>Es la hora de comer los " . $a['alimentos']['almuerzo']['tipo'] . " del " . $a['alimentos']['almuerzo']['momento'] . "</p>"
. "<p>Es la hora de comer los " . $a['alimentos']['mediatarde']['tipo'] . " del " . $a['alimentos']['mediatarde']['momento'] . "</p>"
. "<p>Es la hora de comer los " . $a['alimentos']['cena']['tipo'] . " del " . $a['alimentos']['cena']['momento'] . "</p>";


foreach ($a as $k1 => $v1) {
    foreach ($v1 as $k2 => $v2) {
        foreach ($v2 as $k3 => $v3) {
            echo "<p>".$k1.".".$k2.".".$k3.":".$v3."</p>";
        }
    }
}


?>