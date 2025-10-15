<?php
//Declaracion de variables
$vacas_invierno_huella_eco = 0;
$vacas_invierno_huella_car = 0;
$vacas_invierno_huella_hid = 0;

$vacaciones_invierno = $_SESSION['datos']['transporte_p2']['vacaciones_invierno'];
$vehiculo_invierno = $_SESSION['datos']['transporte_p2']['vehiculo_invierno'];



if($vacaciones_invierno != 'a_ningun_lado'){
	$vacas_invierno_huella_eco = ( $var_calculos['transporte']['vacas_invierno'][$vacaciones_invierno]['distancia_recorrida'] * ( $var_calculos['transporte']['vacas_invierno'][$vehiculo_invierno]['consumo_l'] * $var_calculos['transporte']['vacas_invierno'][$vehiculo_invierno]['factor'] * $var_calculos['transporte']['vacas_invierno'][$vehiculo_invierno]['viaje_ida_vuelta'] ) / 365);
	$vacas_invierno_huella_car = ( $var_calculos['transporte']['vacas_invierno'][$vacaciones_invierno]['distancia_recorrida'] * ( $var_calculos['transporte']['vacas_invierno'][$vehiculo_invierno]['emisiones'] * $var_calculos['transporte']['vacas_invierno'][$vehiculo_invierno]['viaje_ida_vuelta'] ) / 365);
	$vacas_invierno_huella_hid = ( $var_calculos['transporte']['vacas_invierno'][$vacaciones_invierno]['distancia_recorrida'] * ( $var_calculos['transporte']['vacas_invierno'][$vehiculo_invierno]['consumo_kwh'] * $var_calculos['transporte']['vacas_invierno'][$vehiculo_invierno]['agua_virtual'] * $var_calculos['transporte']['vacas_invierno'][$vehiculo_invierno]['viaje_ida_vuelta'] ) / 365);
}

//FIN VACACIONES INVIERNO
?>