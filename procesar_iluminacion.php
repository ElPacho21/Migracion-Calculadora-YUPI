<?php
//Declaracion de variables
$iluminacion_huella_eco = 0;
$iluminacion_huella_car = 0;
$iluminacion_huella_hid = 0;

// ILUMINACIÓN (factor común)
$items = [
	'lamparas_de_bajo_consumo',
	'tubo_led',
	'tubo_fluorescente',
	'lampara_led',
];

foreach ($items as $item) {
	$count = (float)($_SESSION['datos']['hogar_p3'][$item . '_cant'] ?? 0);
	if ($count <= 0) continue;
	$consumo = (float)($var_calculos['hogar']['iluminacion'][$item]['consumo_kwh'] ?? 0);
	$tiempo_horas = (float)($var_calculos['hogar']['iluminacion'][$item]['tiempo'] ?? 0) / 60;
	$factor = (float)($var_calculos['hogar']['iluminacion'][$item]['factor'] ?? 0);
	$emisiones = (float)($var_calculos['hogar']['iluminacion'][$item]['emisiones'] ?? 0);
	$iluminacion_huella_eco += calcular_huella_hogar($count, $consumo, $factor, $tiempo_horas, $personas);
	$iluminacion_huella_car += calcular_huella_hogar($count, $consumo, $emisiones, $tiempo_horas, $personas);
}

// FIN ILUMINACIÓN