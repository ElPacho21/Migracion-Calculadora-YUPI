<?php
//Declaracion de variables
$electro_huella_eco = 0;
$electro_huella_car = 0;
$electro_huella_hid = 0;

// ELECTRODOMÉSTICOS
if(isset($_SESSION['datos']['hogar_p1']['cafetera'])){
	$cafetera_cant = 1;
	$electro_huella_eco += ($cafetera_cant * $var_calculos['hogar']['electro']['cafetera']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['cafetera']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['cafetera']['factor'] ) / $personas;
	$electro_huella_car += ($cafetera_cant * $var_calculos['hogar']['electro']['cafetera']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['cafetera']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['cafetera']['emisiones'] ) / $personas;
}

if(isset($_SESSION['datos']['hogar_p1']['tostadora'])){
	$tostadora_cant = 1;
	$electro_huella_eco += ($tostadora_cant * $var_calculos['hogar']['electro']['tostadora']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['tostadora']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['tostadora']['factor'] ) / $personas;
	$electro_huella_car += ($tostadora_cant * $var_calculos['hogar']['electro']['tostadora']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['tostadora']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['tostadora']['emisiones'] ) / $personas;
}

if(isset($_SESSION['datos']['hogar_p1']['pava_electrica'])){
	$pava_electrica_cant = 1;
	$electro_huella_eco += ($pava_electrica_cant * $var_calculos['hogar']['electro']['pava_electrica']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['pava_electrica']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['pava_electrica']['factor'] ) / $personas;
	$electro_huella_car += ($pava_electrica_cant * $var_calculos['hogar']['electro']['pava_electrica']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['pava_electrica']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['pava_electrica']['emisiones'] ) / $personas;
}

if($_SESSION['datos']['hogar_p1']['heladera_cant'] >= 0){
	$heladera_cant = $_SESSION['datos']['hogar_p1']['heladera_cant'];
	$electro_huella_eco += ($heladera_cant * $var_calculos['hogar']['electro']['heladera']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['heladera']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['heladera']['factor'] ) / $personas;
	$electro_huella_car += ($heladera_cant * $var_calculos['hogar']['electro']['heladera']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['heladera']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['heladera']['emisiones'] ) / $personas;
}

if(isset($_SESSION['datos']['hogar_p1']['microondas'])){
	$microondas_cant = 1;
	$electro_huella_eco += ($microondas_cant * $var_calculos['hogar']['electro']['microondas']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['microondas']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['microondas']['factor'] ) / $personas;
	$electro_huella_car += ($microondas_cant * $var_calculos['hogar']['electro']['microondas']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['microondas']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['microondas']['emisiones'] ) / $personas;
}

if(isset($_SESSION['datos']['hogar_p1']['horno_electrico'])){
	$horno_electrico_cant = 1;
	$electro_huella_eco += ($horno_electrico_cant * $var_calculos['hogar']['electro']['horno_electrico']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['horno_electrico']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['horno_electrico']['factor'] ) / $personas;
	$electro_huella_car += ($horno_electrico_cant * $var_calculos['hogar']['electro']['horno_electrico']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['horno_electrico']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['horno_electrico']['emisiones'] ) / $personas;
}

if(isset($_SESSION['datos']['hogar_p1']['aspiradora'])) {
	$aspiradora_cant = 1;
	$electro_huella_eco += ($aspiradora_cant * $var_calculos['hogar']['electro']['aspiradora']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['aspiradora']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['aspiradora']['factor'] ) / $personas;
	$electro_huella_car += ($aspiradora_cant * $var_calculos['hogar']['electro']['aspiradora']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['aspiradora']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['aspiradora']['emisiones'] ) / $personas;
}

if(isset($_SESSION['datos']['hogar_p1']['lavavajilla'])) {
	$lavavajilla_cant = 1;
	$electro_huella_eco += ($lavavajilla_cant * $var_calculos['hogar']['electro']['lavavajilla']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['lavavajilla']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['lavavajilla']['factor'] ) / $personas;
	$electro_huella_car += ($lavavajilla_cant * $var_calculos['hogar']['electro']['lavavajilla']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['lavavajilla']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['lavavajilla']['emisiones'] ) / $personas;
}

if(isset($_SESSION['datos']['hogar_p1']['cocina_a_gas'])) {
	$cocina_a_gas_cant = 1;
	$electro_huella_eco += ($cocina_a_gas_cant * $var_calculos['hogar']['electro']['cocina_a_gas']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['cocina_a_gas']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['cocina_a_gas']['factor'] ) / $personas;
	$electro_huella_car += ($cocina_a_gas_cant * $var_calculos['hogar']['electro']['cocina_a_gas']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['cocina_a_gas']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['cocina_a_gas']['emisiones'] ) / $personas;
}

if(isset($_SESSION['datos']['hogar_p1']['lavarropas'])){
	$lavarropas_cant = 1;
	$electro_huella_eco += ($lavarropas_cant * $var_calculos['hogar']['electro']['lavarropas']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['lavarropas']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['lavarropas']['factor'] ) / $personas;
	$electro_huella_car += ($lavarropas_cant * $var_calculos['hogar']['electro']['lavarropas']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['lavarropas']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['lavarropas']['emisiones'] ) / $personas;
}

if(isset($_SESSION['datos']['hogar_p1']['plancha'])){
	$plancha_cant = 1;
	$electro_huella_eco += ($plancha_cant * $var_calculos['hogar']['electro']['plancha']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['plancha']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['plancha']['factor'] ) / $personas;
	$electro_huella_car += ($plancha_cant * $var_calculos['hogar']['electro']['plancha']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['plancha']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['plancha']['emisiones'] ) / $personas;
}

if($_SESSION['datos']['hogar_p1']['equipo_de_musica_cant'] >= 0){
	$equipo_de_musica_cant = $_SESSION['datos']['hogar_p1']['equipo_de_musica_cant'];
	$electro_huella_eco += ($equipo_de_musica_cant * $var_calculos['hogar']['electro']['equipo_de_musica']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['equipo_de_musica']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['equipo_de_musica']['factor'] ) / $personas;
	$electro_huella_car += ($equipo_de_musica_cant * $var_calculos['hogar']['electro']['equipo_de_musica']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['equipo_de_musica']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['equipo_de_musica']['emisiones'] ) / $personas;
}

if(isset($_SESSION['datos']['hogar_p1']['hidrolavadora'])){
	$hidrolavadora_cant = 1;
	$electro_huella_eco += ($hidrolavadora_cant * $var_calculos['hogar']['electro']['hidrolavadora']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['hidrolavadora']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['hidrolavadora']['factor'] ) / $personas;
	$electro_huella_car += ($hidrolavadora_cant * $var_calculos['hogar']['electro']['hidrolavadora']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['hidrolavadora']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['hidrolavadora']['emisiones'] ) / $personas;
}

if($_SESSION['datos']['hogar_p1']['televisor_cant'] >= 0){
	$televisor_cant = $_SESSION['datos']['hogar_p1']['televisor_cant'];
	$electro_huella_eco += ($televisor_cant * $var_calculos['hogar']['electro']['televisor']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['televisor']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['televisor']['factor'] ) / $personas;
	$electro_huella_car += ($televisor_cant * $var_calculos['hogar']['electro']['televisor']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['televisor']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['televisor']['emisiones'] ) / $personas;
}

if($_SESSION['datos']['hogar_p1']['computadora_cant'] >= 0){
	$computadora_cant = $_SESSION['datos']['hogar_p1']['computadora_cant'];
	$electro_huella_eco += ($computadora_cant * $var_calculos['hogar']['electro']['computadora']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['computadora']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['computadora']['factor'] ) / $personas;
	$electro_huella_car += ($computadora_cant * $var_calculos['hogar']['electro']['computadora']['consumo_kwh'] * ( $var_calculos['hogar']['electro']['computadora']['tiempo'] / 60 ) * $var_calculos['hogar']['electro']['computadora']['emisiones'] ) / $personas;
}

// FIN ELECTRODOMÉSTICOS

?>