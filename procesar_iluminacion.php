<?php
include_once('funciones.php');

// Inicializo variables de resultados
$iluminacion_huella_eco = 0;
$iluminacion_huella_car = 0;
$iluminacion_huella_hid = 0;

$hogar = $_SESSION['datos']['hogar_p3'] ?? [];

$luminarias = [
    'lamparas_de_bajo_consumo',
    'tubo_led',
    'tubo_fluorescente',
    'lampara_led'
];

foreach($luminarias as $luz) {
    $cant = $hogar[$luz . '_cant'] ?? 0;
    if($cant > 0) {
        $iluminacion_huella_eco += calcular_huella($cant, $var_calculos['hogar']['iluminacion'][$luz]['consumo_kwh'], $var_calculos['hogar']['iluminacion'][$luz]['tiempo'] / 60, $var_calculos['hogar']['iluminacion'][$luz]['factor'], $personas);
        $iluminacion_huella_car += calcular_huella($cant, $var_calculos['hogar']['iluminacion'][$luz]['consumo_kwh'], $var_calculos['hogar']['iluminacion'][$luz]['tiempo'] / 60, $var_calculos['hogar']['iluminacion'][$luz]['emisiones'], $personas);
    }
}

// FIN ILUMINACIÓN
?>
