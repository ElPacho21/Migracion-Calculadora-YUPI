<?php
// Declaración de variables
$alim_mediatarde_huella_eco = 0;
$alim_mediatarde_huella_car = 0;
$alim_mediatarde_huella_hid = 0;

// Lista de alimentos contemplados en la merienda de media tarde
$alimentos_mediatarde = [
    'pan', 'galletas', 'tortitas', 'facturas', 'cereales', 'manteca', 'queso',
    'mermelada', 'yogur', 'cafe', 'leche', 'te', 'mate', 'chocolatada',
    'jugo_de_frutas_natural', 'soda', 'frutas', 'nueces_almend_mani', 'chocolate'
];

foreach ($alimentos_mediatarde as $alimento) {
    if (isset($_SESSION['datos']['alimentos_p3'][$alimento])) {
        $datos = $var_calculos['alim']['mediatarde'][$alimento];

        $cantidad = $datos['cantidad_por_porcion'];
        $unidad = $datos['unidad'];

        $alim_mediatarde_huella_eco += $datos['factor'] * $cantidad;
        $alim_mediatarde_huella_car += $datos['emisiones'] * ($cantidad / $unidad);
        $alim_mediatarde_huella_hid += $datos['agua_virtual'] * ($cantidad / $unidad);
    }
}
?>
