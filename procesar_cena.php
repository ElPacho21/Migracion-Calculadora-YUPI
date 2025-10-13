<?php
//Declaracion de variables
$alim_cena_huella_eco = 0;
$alim_cena_huella_car = 0;
$alim_cena_huella_hid = 0;

// CENA
require_once __DIR__ . '/funciones.php';
$selecciones = (array)($_SESSION['datos']['alimentos_p4'] ?? []);
$res = calcular_huella_alimentos('cena', $selecciones, $var_calculos);
$alim_cena_huella_eco += $res['eco'];
$alim_cena_huella_car += $res['car'];
$alim_cena_huella_hid += $res['hid'];

// FIN CENA