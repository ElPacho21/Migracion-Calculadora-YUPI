<?php
//Declaracion de variables
$viajes_diarios_huella_eco = 0;
$viajes_diarios_huella_car = 0;
$viajes_diarios_huella_hid = 0;

// VIAJES DIARIOS 

$tiempo = ( (int)($_SESSION['datos']['transporte_p1']['tiempo'] ?? 0) * 40 )/60;

// Evitar notices: definir con_quien y en_que de forma segura
$con_quien = $_SESSION['datos']['transporte_p1']['con_quien'] ?? null; // null mantiene el comportamiento de comparación (no es 'solo')
$en_que_base = $_SESSION['datos']['transporte_p1']['en_que'] ?? null;

switch ($en_que_base) {
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
		$en_que = $en_que_base; // puede ser null si no está definido
		break;
}

// Acceso seguro a configuración para evitar warnings cuando en_que no esté definido
$viaje_cfg = ($en_que !== null) ? ($var_calculos['transporte']['viaje_diario'][$en_que] ?? null) : null;
$viaje_ida_vuelta = $viaje_cfg['viaje_ida_vuelta'] ?? 0;
$consumo_kwh = $viaje_cfg['consumo_kwh'] ?? 0;
$factor = $viaje_cfg['factor'] ?? 0;
$emisiones = $viaje_cfg['emisiones'] ?? 0;
$agua_virtual = $viaje_cfg['agua_virtual'] ?? 0;

$viajes_diarios_huella_eco = $tiempo * $viaje_ida_vuelta * $consumo_kwh * $factor;

$viajes_diarios_huella_car = $tiempo * $viaje_ida_vuelta * $emisiones;

$viajes_diarios_huella_hid = $tiempo * $viaje_ida_vuelta * $consumo_kwh * $agua_virtual;

?>