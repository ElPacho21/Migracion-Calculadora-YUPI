<?php
// Declaración de variables
$vacas_verano_huella_eco = 0.0;
$vacas_verano_huella_car = 0.0;
$vacas_verano_huella_hid = 0.0;

require_once __DIR__ . '/funciones.php';

$vacaciones_verano = $_SESSION['datos']['transporte_p2']['vacaciones_verano'] ?? 'a_ningun_lado';
$vehiculo_verano = $_SESSION['datos']['transporte_p2']['vehiculo_verano'] ?? 'auto';

if ($vacaciones_verano !== 'a_ningun_lado') {
	$cfgDist = $var_calculos['transporte']['vacas_verano'][$vacaciones_verano] ?? null;
	$cfgVeh = $var_calculos['transporte']['vacas_verano'][$vehiculo_verano] ?? null;
	if ($cfgDist && $cfgVeh) {
		$dist = (float)($cfgDist['distancia_recorrida'] ?? 0);
		$idaVuelta = (float)($cfgVeh['viaje_ida_vuelta'] ?? 1);
		// Base anualizada (distancia * viajes / 365)
		$base = ($dist * $idaVuelta) / 365.0;

		$consumoL = (float)($cfgVeh['consumo_l'] ?? 0); // para eco
		$factor = (float)($cfgVeh['factor'] ?? 0);
		$emisiones = (float)($cfgVeh['emisiones'] ?? 0);
		$consumoKwh = (float)($cfgVeh['consumo_kwh'] ?? 0); // para hid
		$aguaVirtual = (float)($cfgVeh['agua_virtual'] ?? 0);

		$res = calcular_huella_transporte($base, $consumoL, $factor, $emisiones, $consumoKwh, $aguaVirtual);
		$vacas_verano_huella_eco = $res['eco'];
		$vacas_verano_huella_car = $res['car'];
		$vacas_verano_huella_hid = $res['hid'];
	}
}

// FIN VACACIONES DE VERANO