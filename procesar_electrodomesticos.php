<?php
include_once('funciones.php');

// Inicializo variables de resultados
$electro_huella_eco = 0;
$electro_huella_car = 0;
$electro_huella_hid = 0;

$hogar = $_SESSION['datos']['hogar_p1'] ?? [];

// CAFETERA
if(isset($hogar['cafetera'])) {
    $electro_huella_eco += calcular_huella(1, $var_calculos['hogar']['electro']['cafetera']['consumo_kwh'], $var_calculos['hogar']['electro']['cafetera']['tiempo']/60, $var_calculos['hogar']['electro']['cafetera']['factor'], $personas);
    $electro_huella_car += calcular_huella(1, $var_calculos['hogar']['electro']['cafetera']['consumo_kwh'], $var_calculos['hogar']['electro']['cafetera']['tiempo']/60, $var_calculos['hogar']['electro']['cafetera']['emisiones'], $personas);
}

// TOSTADORA
if(isset($hogar['tostadora'])) {
    $electro_huella_eco += calcular_huella(1, $var_calculos['hogar']['electro']['tostadora']['consumo_kwh'], $var_calculos['hogar']['electro']['tostadora']['tiempo']/60, $var_calculos['hogar']['electro']['tostadora']['factor'], $personas);
    $electro_huella_car += calcular_huella(1, $var_calculos['hogar']['electro']['tostadora']['consumo_kwh'], $var_calculos['hogar']['electro']['tostadora']['tiempo']/60, $var_calculos['hogar']['electro']['tostadora']['emisiones'], $personas);
}

// PAVA ELÉCTRICA
if(isset($hogar['pava_electrica'])) {
    $electro_huella_eco += calcular_huella(1, $var_calculos['hogar']['electro']['pava_electrica']['consumo_kwh'], $var_calculos['hogar']['electro']['pava_electrica']['tiempo']/60, $var_calculos['hogar']['electro']['pava_electrica']['factor'], $personas);
    $electro_huella_car += calcular_huella(1, $var_calculos['hogar']['electro']['pava_electrica']['consumo_kwh'], $var_calculos['hogar']['electro']['pava_electrica']['tiempo']/60, $var_calculos['hogar']['electro']['pava_electrica']['emisiones'], $personas);
}

// HELADERA
$heladera_cant = $hogar['heladera_cant'] ?? 0;
if($heladera_cant > 0) {
    $electro_huella_eco += calcular_huella($heladera_cant, $var_calculos['hogar']['electro']['heladera']['consumo_kwh'], $var_calculos['hogar']['electro']['heladera']['tiempo']/60, $var_calculos['hogar']['electro']['heladera']['factor'], $personas);
    $electro_huella_car += calcular_huella($heladera_cant, $var_calculos['hogar']['electro']['heladera']['consumo_kwh'], $var_calculos['hogar']['electro']['heladera']['tiempo']/60, $var_calculos['hogar']['electro']['heladera']['emisiones'], $personas);
}

// MICROONDAS
if(isset($hogar['microondas'])) {
    $electro_huella_eco += calcular_huella(1, $var_calculos['hogar']['electro']['microondas']['consumo_kwh'], $var_calculos['hogar']['electro']['microondas']['tiempo']/60, $var_calculos['hogar']['electro']['microondas']['factor'], $personas);
    $electro_huella_car += calcular_huella(1, $var_calculos['hogar']['electro']['microondas']['consumo_kwh'], $var_calculos['hogar']['electro']['microondas']['tiempo']/60, $var_calculos['hogar']['electro']['microondas']['emisiones'], $personas);
}

// HORNO ELÉCTRICO
if(isset($hogar['horno_electrico'])) {
    $electro_huella_eco += calcular_huella(1, $var_calculos['hogar']['electro']['horno_electrico']['consumo_kwh'], $var_calculos['hogar']['electro']['horno_electrico']['tiempo']/60, $var_calculos['hogar']['electro']['horno_electrico']['factor'], $personas);
    $electro_huella_car += calcular_huella(1, $var_calculos['hogar']['electro']['horno_electrico']['consumo_kwh'], $var_calculos['hogar']['electro']['horno_electrico']['tiempo']/60, $var_calculos['hogar']['electro']['horno_electrico']['emisiones'], $personas);
}

// Otros electrodomésticos (aspiro, lavavajilla, cocina a gas, lavarropas, plancha)
$otros = [
    'aspiradora','lavavajilla','cocina_a_gas','lavarropas','plancha'
];
foreach($otros as $elec) {
    if(isset($hogar[$elec])) {
        $electro_huella_eco += calcular_huella(1, $var_calculos['hogar']['electro'][$elec]['consumo_kwh'], $var_calculos['hogar']['electro'][$elec]['tiempo']/60, $var_calculos['hogar']['electro'][$elec]['factor'], $personas);
        $electro_huella_car += calcular_huella(1, $var_calculos['hogar']['electro'][$elec]['consumo_kwh'], $var_calculos['hogar']['electro'][$elec]['tiempo']/60, $var_calculos['hogar']['electro'][$elec]['emisiones'], $personas);
    }
}

// Equipos con cantidad variable
$equipos_cant = [
    'equipo_de_musica_cant' => 'equipo_de_musica',
    'hidrolavadora' => 'hidrolavadora',
    'televisor_cant' => 'televisor',
    'computadora_cant' => 'computadora'
];

foreach($equipos_cant as $key => $elec) {
    $cant = $hogar[$key] ?? 0;
    if($cant > 0) {
        $electro_huella_eco += calcular_huella($cant, $var_calculos['hogar']['electro'][$elec]['consumo_kwh'], $var_calculos['hogar']['electro'][$elec]['tiempo']/60, $var_calculos['hogar']['electro'][$elec]['factor'], $personas);
        $electro_huella_car += calcular_huella($cant, $var_calculos['hogar']['electro'][$elec]['consumo_kwh'], $var_calculos['hogar']['electro'][$elec]['tiempo']/60, $var_calculos['hogar']['electro'][$elec]['emisiones'], $personas);
    }
}

// FIN ELECTRODOMÉSTICOS
?>