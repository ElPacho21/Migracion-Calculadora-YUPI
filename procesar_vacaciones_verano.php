<?php
//Declaracion de variables
$vacas_verano_huella_eco = 0;
$vacas_verano_huella_car = 0;
$vacas_verano_huella_hid = 0;

// Valores seguros para evitar notices cuando no existan en sesión
$vacaciones_verano = $_SESSION['datos']['transporte_p2']['vacaciones_verano'] ?? 'a_ningun_lado';
$vehiculo_verano = $_SESSION['datos']['transporte_p2']['vehiculo_verano'] ?? null;

if($vacaciones_verano != 'a_ningun_lado' && $vehiculo_verano !== null){
	$dest = $var_calculos['transporte']['vacas_verano'][$vacaciones_verano] ?? null;
	$veh = $var_calculos['transporte']['vacas_verano'][$vehiculo_verano] ?? null;
	if ($dest && $veh) {
		$dist = $dest['distancia_recorrida'] ?? 0;
		$viaje = $veh['viaje_ida_vuelta'] ?? 0;
		$vacas_verano_huella_eco = ( $dist * ( ($veh['consumo_l'] ?? 0) * ($veh['factor'] ?? 0) * $viaje ) / 365 );
		$vacas_verano_huella_car = ( $dist * ( ($veh['emisiones'] ?? 0) * $viaje ) / 365 );
		$vacas_verano_huella_hid = ( $dist * ( ($veh['consumo_kwh'] ?? 0) * ($veh['agua_virtual'] ?? 0) * $viaje ) / 365 );
	}
}

//FIN VACACIONES DE VERANO
?>