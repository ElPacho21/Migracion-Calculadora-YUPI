<?php
//Declaracion de variables
$vacas_verano_huella_eco = 0;
$vacas_verano_huella_car = 0;
$vacas_verano_huella_hid = 0;

$vacaciones_verano = $_SESSION['datos']['transporte_p2']['vacaciones_verano'];
$vehiculo_verano = $_SESSION['datos']['transporte_p2']['vehiculo_verano'];

if($vacaciones_verano != 'a_ningun_lado'){
	$vacas_verano_huella_eco = ( $var_calculos['transporte']['vacas_verano'][$vacaciones_verano]['distancia_recorrida'] * ( $var_calculos['transporte']['vacas_verano'][$vehiculo_verano]['consumo_l'] * $var_calculos['transporte']['vacas_verano'][$vehiculo_verano]['factor'] * $var_calculos['transporte']['vacas_verano'][$vehiculo_verano]['viaje_ida_vuelta'] ) / 365 );
	$vacas_verano_huella_car = ( $var_calculos['transporte']['vacas_verano'][$vacaciones_verano]['distancia_recorrida'] * ( $var_calculos['transporte']['vacas_verano'][$vehiculo_verano]['emisiones'] * $var_calculos['transporte']['vacas_verano'][$vehiculo_verano]['viaje_ida_vuelta'] ) / 365 );
	$vacas_verano_huella_hid = ( $var_calculos['transporte']['vacas_verano'][$vacaciones_verano]['distancia_recorrida'] * ( $var_calculos['transporte']['vacas_verano'][$vehiculo_verano]['consumo_kwh'] * $var_calculos['transporte']['vacas_verano'][$vehiculo_verano]['agua_virtual'] * $var_calculos['transporte']['vacas_verano'][$vehiculo_verano]['viaje_ida_vuelta'] ) / 365 );
}

//FIN VACACIONES DE VERANO
?>