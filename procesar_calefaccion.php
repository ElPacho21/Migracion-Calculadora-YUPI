<?php
//Declaracion de variables
$calefaccion_huella_eco = 0;
$calefaccion_huella_car = 0;
$calefaccion_huella_hid = 0;

// CALEFACCIÓN
if(isset($_SESSION['datos']['hogar_p2']['con_gas_natural'])){
	$var_temp_gas_car = 0;
	$var_temp_gas_car += ($_SESSION['datos']['hogar_p2']['estufa_a_gas_cant'] * $var_calculos['hogar']['calefaccion']['estufa_a_gas']['consumo_kwh'] * $var_calculos['hogar']['calefaccion']['con_gas_natural']['emisiones']) / 860;
	$var_temp_gas_car += ($_SESSION['datos']['hogar_p2']['calefon_cant'] * $var_calculos['hogar']['calefaccion']['calefon']['consumo_kwh'] * $var_calculos['hogar']['calefaccion']['con_gas_natural']['emisiones']) / 860;
	$var_temp_gas_car += ($_SESSION['datos']['hogar_p2']['caldera_cant'] * $var_calculos['hogar']['calefaccion']['caldera']['consumo_kwh'] * $var_calculos['hogar']['calefaccion']['con_gas_natural']['emisiones']) / 860;

	$calefaccion_huella_car += ($var_temp_gas_car / $personas);
}

if(isset($_SESSION['datos']['hogar_p2']['con_garrafa'])){
	$var_temp_garrafa_car = 0;
	$var_temp_garrafa_car += ($_SESSION['datos']['hogar_p2']['estufa_a_gas_cant'] * $var_calculos['hogar']['calefaccion']['estufa_a_gas']['consumo_kwh'] * $var_calculos['hogar']['calefaccion']['con_garrafa']['emisiones']) / 860;
	$var_temp_garrafa_car += ($_SESSION['datos']['hogar_p2']['calefon_cant'] * $var_calculos['hogar']['calefaccion']['calefon']['consumo_kwh'] * $var_calculos['hogar']['calefaccion']['con_garrafa']['emisiones']) / 860;
	$var_temp_garrafa_car += ($_SESSION['datos']['hogar_p2']['caldera_cant'] * $var_calculos['hogar']['calefaccion']['caldera']['consumo_kwh'] * $var_calculos['hogar']['calefaccion']['con_garrafa']['emisiones']) / 860;
	
	$calefaccion_huella_car += ($var_temp_garrafa_car / $personas);
}

if(isset($_SESSION['datos']['hogar_p2']['con_lenia'])){
	$var_temp_lenia_car += 0;
	$var_temp_lenia_car += ($_SESSION['datos']['hogar_p2']['estufa_a_gas_cant'] * $var_calculos['hogar']['calefaccion']['estufa_a_gas']['consumo_kwh'] * $var_calculos['hogar']['calefaccion']['con_lenia']['emisiones']) / 860;
	$var_temp_lenia_car += ($_SESSION['datos']['hogar_p2']['calefon_cant'] * $var_calculos['hogar']['calefaccion']['calefon']['consumo_kwh'] * $var_calculos['hogar']['calefaccion']['con_lenia']['emisiones']) / 860;
	$var_temp_lenia_car += ($_SESSION['datos']['hogar_p2']['caldera_cant'] * $var_calculos['hogar']['calefaccion']['caldera']['consumo_kwh'] * $var_calculos['hogar']['calefaccion']['con_lenia']['emisiones']) / 860;

	$calefaccion_huella_car += ($var_temp_lenia_car / $personas);
}

$calefaccion_huella_eco += ($_SESSION['datos']['hogar_p2']['estufas_electricas_cant'] * $var_calculos['hogar']['calefaccion']['estufas_electricas']['consumo_kwh'] * ($var_calculos['hogar']['calefaccion']['estufas_electricas']['tiempo'] / 60) * $var_calculos['hogar']['calefaccion']['estufas_electricas']['factor']) / $personas;
$calefaccion_huella_eco += ($_SESSION['datos']['hogar_p2']['aire_acondicionado_cant'] * $var_calculos['hogar']['calefaccion']['aire_acondicionado']['consumo_kwh'] * ($var_calculos['hogar']['calefaccion']['aire_acondicionado']['tiempo'] / 60) * $var_calculos['hogar']['calefaccion']['aire_acondicionado']['factor']) / $personas;
$calefaccion_huella_eco += ($_SESSION['datos']['hogar_p2']['panel_electrico_cant'] * $var_calculos['hogar']['calefaccion']['panel_electrico']['consumo_kwh'] * ($var_calculos['hogar']['calefaccion']['panel_electrico']['tiempo'] / 60) * $var_calculos['hogar']['calefaccion']['panel_electrico']['factor']) / $personas;
$calefaccion_huella_eco += ($_SESSION['datos']['hogar_p2']['caloventor_cant'] * $var_calculos['hogar']['calefaccion']['caloventor']['consumo_kwh'] * ($var_calculos['hogar']['calefaccion']['caloventor']['tiempo'] / 60) * $var_calculos['hogar']['calefaccion']['caloventor']['factor']) / $personas;
$calefaccion_huella_eco += ($_SESSION['datos']['hogar_p2']['calefon_cant'] * $var_calculos['hogar']['calefaccion']['calefon']['agua_virtual'] * $var_calculos['hogar']['calefaccion']['calefon']['factor']) / $personas;	
$calefaccion_huella_eco += ($_SESSION['datos']['hogar_p2']['caldera_cant'] * $var_calculos['hogar']['calefaccion']['caldera']['agua_virtual'] * $var_calculos['hogar']['calefaccion']['caldera']['factor']) / $personas;	

$calefaccion_huella_hid += ($_SESSION['datos']['hogar_p2']['calefon_cant'] * $var_calculos['hogar']['calefaccion']['calefon']['agua_virtual']) / $personas;
$calefaccion_huella_hid += ($_SESSION['datos']['hogar_p2']['caldera_cant'] * $var_calculos['hogar']['calefaccion']['caldera']['agua_virtual']) / $personas;

$calefaccion_huella_car += ($_SESSION['datos']['hogar_p2']['estufas_electricas_cant'] * $var_calculos['hogar']['calefaccion']['estufas_electricas']['consumo_kwh'] * ($var_calculos['hogar']['calefaccion']['estufas_electricas']['tiempo'] / 60) * $var_calculos['hogar']['calefaccion']['estufas_electricas']['emisiones']) / $personas;
$calefaccion_huella_car += ($_SESSION['datos']['hogar_p2']['aire_acondicionado_cant'] * $var_calculos['hogar']['calefaccion']['aire_acondicionado']['consumo_kwh'] * ($var_calculos['hogar']['calefaccion']['aire_acondicionado']['tiempo'] / 60) * $var_calculos['hogar']['calefaccion']['aire_acondicionado']['emisiones']) / $personas;
$calefaccion_huella_car += ($_SESSION['datos']['hogar_p2']['panel_electrico_cant'] * $var_calculos['hogar']['calefaccion']['panel_electrico']['consumo_kwh'] * ($var_calculos['hogar']['calefaccion']['panel_electrico']['tiempo'] / 60) * $var_calculos['hogar']['calefaccion']['panel_electrico']['emisiones']) / $personas;
$calefaccion_huella_car += ($_SESSION['datos']['hogar_p2']['caloventor_cant'] * $var_calculos['hogar']['calefaccion']['caloventor']['consumo_kwh'] * ($var_calculos['hogar']['calefaccion']['caloventor']['tiempo'] / 60) * $var_calculos['hogar']['calefaccion']['caloventor']['emisiones']) / $personas;

// FIN CALEFACCIÓN
?>