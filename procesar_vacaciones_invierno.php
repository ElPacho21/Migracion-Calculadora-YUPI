<?php
//Declaracion de variables
$vacas_invierno_huella_eco = 0;
$vacas_invierno_huella_car = 0;
$vacas_invierno_huella_hid = 0;

// Valores seguros para evitar notices cuando no existan en sesión
$vacaciones_invierno = $_SESSION['datos']['transporte_p2']['vacaciones_invierno'] ?? 'a_ningun_lado';
$vehiculo_invierno = $_SESSION['datos']['transporte_p2']['vehiculo_invierno'] ?? null;



if($vacaciones_invierno != 'a_ningun_lado' && $vehiculo_invierno !== null){
	$dest = $var_calculos['transporte']['vacas_invierno'][$vacaciones_invierno] ?? null;
	$veh = $var_calculos['transporte']['vacas_invierno'][$vehiculo_invierno] ?? null;
	if ($dest && $veh) {
		$dist = $dest['distancia_recorrida'] ?? 0;
		$viaje = $veh['viaje_ida_vuelta'] ?? 0;
		$vacas_invierno_huella_eco = ( $dist * ( ($veh['consumo_l'] ?? 0) * ($veh['factor'] ?? 0) * $viaje ) / 365);
		$vacas_invierno_huella_car = ( $dist * ( ($veh['emisiones'] ?? 0) * $viaje ) / 365);
		$vacas_invierno_huella_hid = ( $dist * ( ($veh['consumo_kwh'] ?? 0) * ($veh['agua_virtual'] ?? 0) * $viaje ) / 365);
	}
}

//FIN VACACIONES INVIERNO
?>