<?php
// Declaración de variables
$vacas_invierno_huella_eco = 0.0;
$vacas_invierno_huella_car = 0.0;
$vacas_invierno_huella_hid = 0.0;

require_once __DIR__ . '/funciones.php';

$vacaciones_invierno = $_SESSION['datos']['transporte_p2']['vacaciones_invierno'] ?? 'a_ningun_lado';
$vehiculo_invierno = $_SESSION['datos']['transporte_p2']['vehiculo_invierno'] ?? 'auto';

if ($vacaciones_invierno !== 'a_ningun_lado') {
	$cfgDist = $var_calculos['transporte']['vacas_invierno'][$vacaciones_invierno] ?? null;
	$cfgVeh = $var_calculos['transporte']['vacas_invierno'][$vehiculo_invierno] ?? null;
	if ($cfgDist && $cfgVeh) {
		$dist = (float)($cfgDist['distancia_recorrida'] ?? 0);
		$idaVuelta = (float)($cfgVeh['viaje_ida_vuelta'] ?? 1);
		$base = ($dist * $idaVuelta) / 365.0; // anualizado

		$consumoL = (float)($cfgVeh['consumo_l'] ?? 0); // eco
		$factor = (float)($cfgVeh['factor'] ?? 0);
		$emisiones = (float)($cfgVeh['emisiones'] ?? 0);
		$consumoKwh = (float)($cfgVeh['consumo_kwh'] ?? 0); // hid
		$aguaVirtual = (float)($cfgVeh['agua_virtual'] ?? 0);

		$res = calcular_huella_transporte($base, $consumoL, $factor, $emisiones, $consumoKwh, $aguaVirtual);
		$vacas_invierno_huella_eco = $res['eco'];
		$vacas_invierno_huella_car = $res['car'];
		$vacas_invierno_huella_hid = $res['hid'];
	}
}

// FIN VACACIONES INVIERNO