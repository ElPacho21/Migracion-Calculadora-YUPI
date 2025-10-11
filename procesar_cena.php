<?php
// Declaración de variables
$alim_cena_huella_eco = 0;
$alim_cena_huella_car = 0;
$alim_cena_huella_hid = 0;

// Lista de alimentos considerados para la cena
$alimentos_cena = [
    'huevos', 'verduras', 'frutas', 'carne_pollo', 'carne_cerdo',
    'carne_vaca', 'pescado', 'sandwich', 'hamburguesas', 'choripan',
    'arroz', 'trigo', 'pasta', 'porotos_lentejas_soja', 'polenta',
    'ensalada', 'pan', 'cerveza', 'vino', 'jugo_de_frutas_natural',
    'gaseosa', 'soda'
];

// Verificamos si hay datos de alimentos en la sesión
if (!empty($_SESSION['datos']['alimentos_p4']) && !empty($var_calculos['alim']['cena'])) {

    foreach ($alimentos_cena as $alimento) {
        if (!isset($_SESSION['datos']['alimentos_p4'][$alimento])) {
            continue;
        }

        $item = $var_calculos['alim']['cena'][$alimento] ?? null;
        if (!$item) {
            continue;
        }

        $cantidad = $item['cantidad_por_porcion'] ?? 0;
        $unidad   = $item['unidad'] ?? 1; // Evitar división por 0

        $alim_cena_huella_eco += ($item['factor'] ?? 0) * $cantidad;
        $alim_cena_huella_car += ($item['emisiones'] ?? 0) * ($cantidad / $unidad);
        $alim_cena_huella_hid += ($item['agua_virtual'] ?? 0) * ($cantidad / $unidad);
    }
}
