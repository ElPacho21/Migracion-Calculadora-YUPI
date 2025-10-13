<?php
//Declaracion de variables
$calefaccion_huella_eco = 0;
$calefaccion_huella_car = 0;
$calefaccion_huella_hid = 0;

require_once __DIR__ . '/funciones.php';

// CALEFACCIÓN
if (isset($_SESSION['datos']['hogar_p2']['con_gas_natural'])){
	$estufa = (float)($_SESSION['datos']['hogar_p2']['estufa_a_gas_cant'] ?? 0);
	$calefon = (float)($_SESSION['datos']['hogar_p2']['calefon_cant'] ?? 0);
	$caldera = (float)($_SESSION['datos']['hogar_p2']['caldera_cant'] ?? 0);
	$emis = (float)($var_calculos['hogar']['calefaccion']['con_gas_natural']['emisiones'] ?? 0);
	$coef_estufa = ((float)($var_calculos['hogar']['calefaccion']['estufa_a_gas']['consumo_kwh'] ?? 0)) / 860.0;
	$coef_calefon = ((float)($var_calculos['hogar']['calefaccion']['calefon']['consumo_kwh'] ?? 0)) / 860.0;
	$coef_caldera = ((float)($var_calculos['hogar']['calefaccion']['caldera']['consumo_kwh'] ?? 0)) / 860.0;
	$calefaccion_huella_car += calcular_huella_hogar($estufa, $coef_estufa, $emis, 1, $personas);
	$calefaccion_huella_car += calcular_huella_hogar($calefon, $coef_calefon, $emis, 1, $personas);
	$calefaccion_huella_car += calcular_huella_hogar($caldera, $coef_caldera, $emis, 1, $personas);
}

if (isset($_SESSION['datos']['hogar_p2']['con_garrafa'])){
	$estufa = (float)($_SESSION['datos']['hogar_p2']['estufa_a_gas_cant'] ?? 0);
	$calefon = (float)($_SESSION['datos']['hogar_p2']['calefon_cant'] ?? 0);
	$caldera = (float)($_SESSION['datos']['hogar_p2']['caldera_cant'] ?? 0);
	$emis = (float)($var_calculos['hogar']['calefaccion']['con_garrafa']['emisiones'] ?? 0);
	$coef_estufa = ((float)($var_calculos['hogar']['calefaccion']['estufa_a_gas']['consumo_kwh'] ?? 0)) / 860.0;
	$coef_calefon = ((float)($var_calculos['hogar']['calefaccion']['calefon']['consumo_kwh'] ?? 0)) / 860.0;
	$coef_caldera = ((float)($var_calculos['hogar']['calefaccion']['caldera']['consumo_kwh'] ?? 0)) / 860.0;
	$calefaccion_huella_car += calcular_huella_hogar($estufa, $coef_estufa, $emis, 1, $personas);
	$calefaccion_huella_car += calcular_huella_hogar($calefon, $coef_calefon, $emis, 1, $personas);
	$calefaccion_huella_car += calcular_huella_hogar($caldera, $coef_caldera, $emis, 1, $personas);
}

if (isset($_SESSION['datos']['hogar_p2']['con_lenia'])){
	$estufa = (float)($_SESSION['datos']['hogar_p2']['estufa_a_gas_cant'] ?? 0);
	$calefon = (float)($_SESSION['datos']['hogar_p2']['calefon_cant'] ?? 0);
	$caldera = (float)($_SESSION['datos']['hogar_p2']['caldera_cant'] ?? 0);
	$emis = (float)($var_calculos['hogar']['calefaccion']['con_lenia']['emisiones'] ?? 0);
	$coef_estufa = ((float)($var_calculos['hogar']['calefaccion']['estufa_a_gas']['consumo_kwh'] ?? 0)) / 860.0;
	$coef_calefon = ((float)($var_calculos['hogar']['calefaccion']['calefon']['consumo_kwh'] ?? 0)) / 860.0;
	$coef_caldera = ((float)($var_calculos['hogar']['calefaccion']['caldera']['consumo_kwh'] ?? 0)) / 860.0;
	$calefaccion_huella_car += calcular_huella_hogar($estufa, $coef_estufa, $emis, 1, $personas);
	$calefaccion_huella_car += calcular_huella_hogar($calefon, $coef_calefon, $emis, 1, $personas);
	$calefaccion_huella_car += calcular_huella_hogar($caldera, $coef_caldera, $emis, 1, $personas);
}

// Eléctricos (Eco)
$calefaccion_huella_eco += calcular_huella_hogar(
	(float)($_SESSION['datos']['hogar_p2']['estufas_electricas_cant'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['estufas_electricas']['consumo_kwh'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['estufas_electricas']['factor'] ?? 0),
	((float)($var_calculos['hogar']['calefaccion']['estufas_electricas']['tiempo'] ?? 0) / 60),
	$personas
);
$calefaccion_huella_eco += calcular_huella_hogar(
	(float)($_SESSION['datos']['hogar_p2']['aire_acondicionado_cant'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['aire_acondicionado']['consumo_kwh'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['aire_acondicionado']['factor'] ?? 0),
	((float)($var_calculos['hogar']['calefaccion']['aire_acondicionado']['tiempo'] ?? 0) / 60),
	$personas
);
$calefaccion_huella_eco += calcular_huella_hogar(
	(float)($_SESSION['datos']['hogar_p2']['panel_electrico_cant'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['panel_electrico']['consumo_kwh'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['panel_electrico']['factor'] ?? 0),
	((float)($var_calculos['hogar']['calefaccion']['panel_electrico']['tiempo'] ?? 0) / 60),
	$personas
);
$calefaccion_huella_eco += calcular_huella_hogar(
	(float)($_SESSION['datos']['hogar_p2']['caloventor_cant'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['caloventor']['consumo_kwh'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['caloventor']['factor'] ?? 0),
	((float)($var_calculos['hogar']['calefaccion']['caloventor']['tiempo'] ?? 0) / 60),
	$personas
);
// Agua virtual en Eco (coef = agua_virtual, tiempo=1)
$calefaccion_huella_eco += calcular_huella_hogar(
	(float)($_SESSION['datos']['hogar_p2']['calefon_cant'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['calefon']['agua_virtual'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['calefon']['factor'] ?? 0),
	1,
	$personas
);
$calefaccion_huella_eco += calcular_huella_hogar(
	(float)($_SESSION['datos']['hogar_p2']['caldera_cant'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['caldera']['agua_virtual'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['caldera']['factor'] ?? 0),
	1,
	$personas
);

// Hídrica (coef = agua_virtual, factor=1, tiempo=1)
$calefaccion_huella_hid += calcular_huella_hogar(
	(float)($_SESSION['datos']['hogar_p2']['calefon_cant'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['calefon']['agua_virtual'] ?? 0),
	1,
	1,
	$personas
);
$calefaccion_huella_hid += calcular_huella_hogar(
	(float)($_SESSION['datos']['hogar_p2']['caldera_cant'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['caldera']['agua_virtual'] ?? 0),
	1,
	1,
	$personas
);

// Eléctricos (Car)
$calefaccion_huella_car += calcular_huella_hogar(
	(float)($_SESSION['datos']['hogar_p2']['estufas_electricas_cant'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['estufas_electricas']['consumo_kwh'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['estufas_electricas']['emisiones'] ?? 0),
	((float)($var_calculos['hogar']['calefaccion']['estufas_electricas']['tiempo'] ?? 0) / 60),
	$personas
);
$calefaccion_huella_car += calcular_huella_hogar(
	(float)($_SESSION['datos']['hogar_p2']['aire_acondicionado_cant'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['aire_acondicionado']['consumo_kwh'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['aire_acondicionado']['emisiones'] ?? 0),
	((float)($var_calculos['hogar']['calefaccion']['aire_acondicionado']['tiempo'] ?? 0) / 60),
	$personas
);
$calefaccion_huella_car += calcular_huella_hogar(
	(float)($_SESSION['datos']['hogar_p2']['panel_electrico_cant'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['panel_electrico']['consumo_kwh'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['panel_electrico']['emisiones'] ?? 0),
	((float)($var_calculos['hogar']['calefaccion']['panel_electrico']['tiempo'] ?? 0) / 60),
	$personas
);
$calefaccion_huella_car += calcular_huella_hogar(
	(float)($_SESSION['datos']['hogar_p2']['caloventor_cant'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['caloventor']['consumo_kwh'] ?? 0),
	(float)($var_calculos['hogar']['calefaccion']['caloventor']['emisiones'] ?? 0),
	((float)($var_calculos['hogar']['calefaccion']['caloventor']['tiempo'] ?? 0) / 60),
	$personas
);

// FIN CALEFACCIÓN