<?php
// Declaración de variables
$alim_almuerzo_huella_eco = 0;
$alim_almuerzo_huella_car = 0;
$alim_almuerzo_huella_hid = 0;

// Lista de alimentos considerados en el almuerzo
$alimentos = [
    'huevos', 'verduras', 'frutas', 'carne_pollo', 'carne_cerdo', 'carne_vaca',
    'pescado', 'sandwich', 'hamburguesas', 'choripan', 'arroz', 'trigo', 'pasta',
    'porotos_lentejas_soja', 'polenta', 'ensalada', 'pan', 'cerveza', 'vino',
    'jugo_de_frutas_natural', 'gaseosa', 'soda'
];

// Función para acumular huellas de un alimento
function acumularHuella($categoria, $tipo, &$eco, &$car, &$hid, $var_calculos) {
    $datos = $var_calculos['alim'][$tipo][$categoria];
    $eco += $datos['factor'] * $datos['cantidad_por_porcion'];
    $car += $datos['emisiones'] * ($datos['cantidad_por_porcion'] / $datos['unidad']);
    $hid += $datos['agua_virtual'] * ($datos['cantidad_por_porcion'] / $datos['unidad']);
}

// Cálculo general para cada alimento seleccionado
foreach ($alimentos as $alimento) {
    if (isset($_SESSION['datos']['alimentos_p2'][$alimento])) {
        acumularHuella($alimento, 'almuerzo', 
            $alim_almuerzo_huella_eco, 
            $alim_almuerzo_huella_car, 
            $alim_almuerzo_huella_hid, 
            $var_calculos
        );
    }
}
