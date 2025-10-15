<?php
//Declaracion de variables
$viajes_diarios_huella_eco = 0;
$viajes_diarios_huella_car = 0;
$viajes_diarios_huella_hid = 0;

// VIAJES DIARIOS 

$tiempo = ($_SESSION['datos']['transporte_p1']['tiempo']*40)/60;

if(isset($_SESSION['datos']['transporte_p1']['con_quien'])){
	$con_quien = $_SESSION['datos']['transporte_p1']['con_quien'];
}

switch ($_SESSION['datos']['transporte_p1']['en_que']) {
	case 'taxi':
		$en_que = ($con_quien == 'solo') ? 'taxi_solo' : 'taxi_acompaniado';
		break;
	case 'auto':
		$en_que = ($con_quien == 'solo') ? 'auto_solo' : 'auto_acompaniado';
		break;
	case 'auto_gnc':
		$en_que = ($con_quien == 'solo') ? 'auto_gnc_solo' : 'auto_gnc_acompaniado';
		break;
	default:
		$en_que = $_SESSION['datos']['transporte_p1']['en_que'];
		break;
}


$viajes_diarios_huella_eco = $tiempo * $var_calculos['transporte']['viaje_diario'][$en_que]['viaje_ida_vuelta'] * $var_calculos['transporte']['viaje_diario'][$en_que]['consumo_kwh'] * $var_calculos['transporte']['viaje_diario'][$en_que]['factor'];

$viajes_diarios_huella_car = $tiempo * $var_calculos['transporte']['viaje_diario'][$en_que]['viaje_ida_vuelta'] * $var_calculos['transporte']['viaje_diario'][$en_que]['emisiones'];

$viajes_diarios_huella_hid = $tiempo * $var_calculos['transporte']['viaje_diario'][$en_que]['viaje_ida_vuelta'] * $var_calculos['transporte']['viaje_diario'][$en_que]['consumo_kwh'] * $var_calculos['transporte']['viaje_diario'][$en_que]['agua_virtual'];

?>