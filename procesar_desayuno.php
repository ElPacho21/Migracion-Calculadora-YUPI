<?php
include_once('funciones.php');

// Inicializo variables de resultados
$alim_desayuno_huella_eco = 0;
$alim_desayuno_huella_car = 0;
$alim_desayuno_huella_hid = 0;

$alim = $_SESSION['datos']['alimentos_p1'] ?? [];
$personas = $_SESSION['datos']['hogar_p1']['personas'] ?? 1;

// Definición de los alimentos del desayuno
$alimentos_desayuno = ['pan', 'galletas', 'cafe', 'te', 'leche', 'manteca', 'mermelada'];

foreach ($alimentos_desayuno as $alimento) {
    if (isset($alim[$alimento])) {
        $data = $var_calculos['alim']['desayuno'][$alimento];

        // Calcular huella ecológica (factor)
        $alim_desayuno_huella_eco += calcular_huella(
            1,
            $data['cantidad_por_porcion'],
            1,
            $data['factor'],
            $personas
        );

        // Calcular huella de carbono (emisiones)
        $alim_desayuno_huella_car += calcular_huella(
            1,
            $data['cantidad_por_porcion'] / $data['unidad'],
            1,
            $data['emisiones'],
            $personas
        );

        // Calcular huella hídrica (agua virtual)
        $alim_desayuno_huella_hid += calcular_huella_actividad(
            1,
            $data['agua_virtual'],
            $data['cantidad_por_porcion'] / $data['unidad'],
            $personas
        );
    }
}
