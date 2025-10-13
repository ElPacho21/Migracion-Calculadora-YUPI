<?php
//Declaracion de variables
$electro_huella_eco = 0;
$electro_huella_car = 0;
$electro_huella_hid = 0;

// Reutilizamos helpers y evitamos repetición
require_once __DIR__ . '/funciones.php';

// Dispositivos booleanos (1 si está marcado)
$boolDevices = [
    'cafetera', 'tostadora', 'pava_electrica', 'microondas', 'horno_electrico',
    'aspiradora', 'lavavajilla', 'cocina_a_gas', 'lavarropas', 'plancha', 'hidrolavadora'
];

foreach ($boolDevices as $dev) {
    $count = isset($_SESSION['datos']['hogar_p1'][$dev]) ? 1.0 : 0.0;
    if ($count <= 0) continue;
    $consumo = (float)($var_calculos['hogar']['electro'][$dev]['consumo_kwh'] ?? 0);
    $tiempo_horas = (float)($var_calculos['hogar']['electro'][$dev]['tiempo'] ?? 0) / 60;
    $factor = (float)($var_calculos['hogar']['electro'][$dev]['factor'] ?? 0);
    $emisiones = (float)($var_calculos['hogar']['electro'][$dev]['emisiones'] ?? 0);
    $electro_huella_eco += calcular_huella_hogar($count, $consumo, $factor, $tiempo_horas, $personas);
    $electro_huella_car += calcular_huella_hogar($count, $consumo, $emisiones, $tiempo_horas, $personas);
}

// Dispositivos con cantidad numérica
$numericDevices = [
    'heladera' => 'heladera_cant',
    'equipo_de_musica' => 'equipo_de_musica_cant',
    'televisor' => 'televisor_cant',
    'computadora' => 'computadora_cant',
];

foreach ($numericDevices as $dev => $countKey) {
    $count = (float)($_SESSION['datos']['hogar_p1'][$countKey] ?? 0);
    if ($count <= 0) continue;
    $consumo = (float)($var_calculos['hogar']['electro'][$dev]['consumo_kwh'] ?? 0);
    $tiempo_horas = (float)($var_calculos['hogar']['electro'][$dev]['tiempo'] ?? 0) / 60;
    $factor = (float)($var_calculos['hogar']['electro'][$dev]['factor'] ?? 0);
    $emisiones = (float)($var_calculos['hogar']['electro'][$dev]['emisiones'] ?? 0);
    $electro_huella_eco += calcular_huella_hogar($count, $consumo, $factor, $tiempo_horas, $personas);
    $electro_huella_car += calcular_huella_hogar($count, $consumo, $emisiones, $tiempo_horas, $personas);
}

// FIN ELECTRODOMÉSTICOS