<?php
 //Declaracion de variables
$alim_desayuno_huella_eco = 0;
$alim_desayuno_huella_car = 0;
$alim_desayuno_huella_hid = 0;

 // DESAYUNO
require_once __DIR__ . '/funciones.php';
$selecciones = (array)($_SESSION['datos']['alimentos_p1'] ?? []);
$res = calcular_huella_alimentos('desayuno', $selecciones, $var_calculos);
$alim_desayuno_huella_eco += $res['eco'];
$alim_desayuno_huella_car += $res['car'];
$alim_desayuno_huella_hid += $res['hid'];

 // FIN DESAYUNO