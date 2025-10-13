<?php
// Declaración de variables
$viajes_diarios_huella_eco = 0.0;
$viajes_diarios_huella_car = 0.0;
$viajes_diarios_huella_hid = 0.0;

require_once __DIR__ . '/funciones.php';

// VIAJES DIARIOS (cálculo seguro con valores por defecto)
$tiempoMin = (float)($_SESSION['datos']['transporte_p1']['tiempo'] ?? 0);
$tiempo = ($tiempoMin * 40) / 60; // horas diarias aproximadas

$con_quien = $_SESSION['datos']['transporte_p1']['con_quien'] ?? 'solo';
$baseModo = $_SESSION['datos']['transporte_p1']['en_que'] ?? 'colectivo';

switch ($baseModo) {
	case 'taxi':
		$en_que = ($con_quien === 'solo') ? 'taxi_solo' : 'taxi_acompaniado';
		break;
	case 'auto':
		$en_que = ($con_quien === 'solo') ? 'auto_solo' : 'auto_acompaniado';
		break;
	case 'auto_gnc':
		$en_que = ($con_quien === 'solo') ? 'auto_gnc_solo' : 'auto_gnc_acompaniado';
		break;
	default:
		$en_que = $baseModo;
		break;
}

$cfg = $var_calculos['transporte']['viaje_diario'][$en_que] ?? null;
if ($cfg) {
	$base = $tiempo * (float)($cfg['viaje_ida_vuelta'] ?? 1);
	$consumoKwh = (float)($cfg['consumo_kwh'] ?? 0);
	$factor = (float)($cfg['factor'] ?? 0);
	$emisiones = (float)($cfg['emisiones'] ?? 0);
	$aguaVirtual = (float)($cfg['agua_virtual'] ?? 0);

	$res = calcular_huella_transporte($base, $consumoKwh, $factor, $emisiones, $consumoKwh, $aguaVirtual);
	$viajes_diarios_huella_eco = $res['eco'];
	$viajes_diarios_huella_car = $res['car'];
	$viajes_diarios_huella_hid = $res['hid'];
}