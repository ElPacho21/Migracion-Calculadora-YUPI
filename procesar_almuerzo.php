<?php 
//Declaracion de variables
$alim_almuerzo_huella_eco = 0;
$alim_almuerzo_huella_car = 0;
$alim_almuerzo_huella_hid = 0;

// ALMUERZO
require_once __DIR__ . '/funciones.php';
$selecciones = (array)($_SESSION['datos']['alimentos_p2'] ?? []);
$res = calcular_huella_alimentos('almuerzo', $selecciones, $var_calculos);
$alim_almuerzo_huella_eco += $res['eco'];
$alim_almuerzo_huella_car += $res['car'];
$alim_almuerzo_huella_hid += $res['hid'];

// FIN ALMUERZO