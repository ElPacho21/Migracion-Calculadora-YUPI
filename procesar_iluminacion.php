<?php
//Declaracion de variables
$iluminacion_huella_eco = 0;
$iluminacion_huella_car = 0;
$iluminacion_huella_hid = 0;

// ILUMINACIÓN
$iluminacion_huella_eco += ($_SESSION['datos']['hogar_p3']['lamparas_de_bajo_consumo_cant']  *  $var_calculos['hogar']['iluminacion']['lamparas_de_bajo_consumo']['consumo_kwh']  *  ( $var_calculos['hogar']['iluminacion']['lamparas_de_bajo_consumo']['tiempo'] / 60)  *  $var_calculos['hogar']['iluminacion']['lamparas_de_bajo_consumo']['factor']) / $personas;
$iluminacion_huella_car += ($_SESSION['datos']['hogar_p3']['lamparas_de_bajo_consumo_cant']  *  $var_calculos['hogar']['iluminacion']['lamparas_de_bajo_consumo']['consumo_kwh']  *  ( $var_calculos['hogar']['iluminacion']['lamparas_de_bajo_consumo']['tiempo'] / 60)  *  $var_calculos['hogar']['iluminacion']['lamparas_de_bajo_consumo']['emisiones']) / $personas;


$iluminacion_huella_eco += ($_SESSION['datos']['hogar_p3']['tubo_led_cant']  *  $var_calculos['hogar']['iluminacion']['tubo_led']['consumo_kwh']  *  ( $var_calculos['hogar']['iluminacion']['tubo_led']['tiempo'] / 60)  *  $var_calculos['hogar']['iluminacion']['tubo_led']['factor']) / $personas;
$iluminacion_huella_car += ($_SESSION['datos']['hogar_p3']['tubo_led_cant']  *  $var_calculos['hogar']['iluminacion']['tubo_led']['consumo_kwh']  *  ( $var_calculos['hogar']['iluminacion']['tubo_led']['tiempo'] / 60)  *  $var_calculos['hogar']['iluminacion']['tubo_led']['emisiones']) / $personas;


$iluminacion_huella_eco += ($_SESSION['datos']['hogar_p3']['tubo_fluorescente_cant']  *  $var_calculos['hogar']['iluminacion']['tubo_fluorescente']['consumo_kwh']  *  ( $var_calculos['hogar']['iluminacion']['tubo_fluorescente']['tiempo'] / 60)  *  $var_calculos['hogar']['iluminacion']['tubo_fluorescente']['factor']) / $personas;
$iluminacion_huella_car += ($_SESSION['datos']['hogar_p3']['tubo_fluorescente_cant']  *  $var_calculos['hogar']['iluminacion']['tubo_fluorescente']['consumo_kwh']  *  ( $var_calculos['hogar']['iluminacion']['tubo_fluorescente']['tiempo'] / 60)  *  $var_calculos['hogar']['iluminacion']['tubo_fluorescente']['emisiones']) / $personas;


$iluminacion_huella_eco += ($_SESSION['datos']['hogar_p3']['lampara_led_cant']  *  $var_calculos['hogar']['iluminacion']['lampara_led']['consumo_kwh']  *  (  $var_calculos['hogar']['iluminacion']['lampara_led']['tiempo'] / 60)  *  $var_calculos['hogar']['iluminacion']['lampara_led']['factor']) / $personas;
$iluminacion_huella_car += ($_SESSION['datos']['hogar_p3']['lampara_led_cant']  *  $var_calculos['hogar']['iluminacion']['lampara_led']['consumo_kwh']  *  ($var_calculos['hogar']['iluminacion']['lampara_led']['tiempo'] / 60)  *  $var_calculos['hogar']['iluminacion']['lampara_led']['emisiones']) / $personas;


// FIN ILUMINACIÓN

?>