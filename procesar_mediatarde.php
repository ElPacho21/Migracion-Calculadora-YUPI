<?php
 //Declaracion de variables
$alim_mediatarde_huella_eco = 0;
$alim_mediatarde_huella_car = 0;
$alim_mediatarde_huella_hid = 0;

 // MEDIATARDE
require_once __DIR__ . '/funciones.php';
$selecciones = (array)($_SESSION['datos']['alimentos_p3'] ?? []);
$res = calcular_huella_alimentos('mediatarde', $selecciones, $var_calculos);
$alim_mediatarde_huella_eco += $res['eco'];
$alim_mediatarde_huella_car += $res['car'];
$alim_mediatarde_huella_hid += $res['hid'];

 // FIN MEDIATARDE