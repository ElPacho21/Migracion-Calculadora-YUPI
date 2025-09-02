<?php 
//Declaracion de variables
$alim_almuerzo_huella_eco = 0;
$alim_almuerzo_huella_car = 0;
$alim_almuerzo_huella_hid = 0;

// ALMUERZO
if(isset($_SESSION['datos']['alimentos_p2']['huevos'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['huevos']['factor'] * $var_calculos['alim']['almuerzo']['huevos']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['huevos']['emisiones'] * ( $var_calculos['alim']['almuerzo']['huevos']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['huevos']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['huevos']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['huevos']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['huevos']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['verduras'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['verduras']['factor'] * $var_calculos['alim']['almuerzo']['verduras']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['verduras']['emisiones'] * ( $var_calculos['alim']['almuerzo']['verduras']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['verduras']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['verduras']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['verduras']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['verduras']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['frutas'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['frutas']['factor'] * $var_calculos['alim']['almuerzo']['frutas']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['frutas']['emisiones'] * ( $var_calculos['alim']['almuerzo']['frutas']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['frutas']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['frutas']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['frutas']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['frutas']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['carne_pollo'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['carne_pollo']['factor'] * $var_calculos['alim']['almuerzo']['carne_pollo']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['carne_pollo']['emisiones'] * ( $var_calculos['alim']['almuerzo']['carne_pollo']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['carne_pollo']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['carne_pollo']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['carne_pollo']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['carne_pollo']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['carne_cerdo'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['carne_cerdo']['factor'] * $var_calculos['alim']['almuerzo']['carne_cerdo']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['carne_cerdo']['emisiones'] * ( $var_calculos['alim']['almuerzo']['carne_cerdo']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['carne_cerdo']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['carne_cerdo']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['carne_cerdo']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['carne_cerdo']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['carne_vaca'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['carne_vaca']['factor'] * $var_calculos['alim']['almuerzo']['carne_vaca']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['carne_vaca']['emisiones'] * ( $var_calculos['alim']['almuerzo']['carne_vaca']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['carne_vaca']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['carne_vaca']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['carne_vaca']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['carne_vaca']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['pescado'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['pescado']['factor'] * $var_calculos['alim']['almuerzo']['pescado']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['pescado']['emisiones'] * ( $var_calculos['alim']['almuerzo']['pescado']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['pescado']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['pescado']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['pescado']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['pescado']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['sandwich'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['sandwich']['factor'] * $var_calculos['alim']['almuerzo']['sandwich']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['sandwich']['emisiones'] * ( $var_calculos['alim']['almuerzo']['sandwich']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['sandwich']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['sandwich']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['sandwich']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['sandwich']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['hamburguesas'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['hamburguesas']['factor'] * $var_calculos['alim']['almuerzo']['hamburguesas']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['hamburguesas']['emisiones'] * ( $var_calculos['alim']['almuerzo']['hamburguesas']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['hamburguesas']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['hamburguesas']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['hamburguesas']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['hamburguesas']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['choripan'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['choripan']['factor'] * $var_calculos['alim']['almuerzo']['choripan']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['choripan']['emisiones'] * ( $var_calculos['alim']['almuerzo']['choripan']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['choripan']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['choripan']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['choripan']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['choripan']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['arroz'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['arroz']['factor'] * $var_calculos['alim']['almuerzo']['arroz']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['arroz']['emisiones'] * ( $var_calculos['alim']['almuerzo']['arroz']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['arroz']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['arroz']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['arroz']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['arroz']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['trigo'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['trigo']['factor'] * $var_calculos['alim']['almuerzo']['trigo']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['trigo']['emisiones'] * ( $var_calculos['alim']['almuerzo']['trigo']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['trigo']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['trigo']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['trigo']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['trigo']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['pasta'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['pasta']['factor'] * $var_calculos['alim']['almuerzo']['pasta']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['pasta']['emisiones'] * ( $var_calculos['alim']['almuerzo']['pasta']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['pasta']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['pasta']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['pasta']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['pasta']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['porotos_lentejas_soja'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['porotos_lentejas_soja']['factor'] * $var_calculos['alim']['almuerzo']['porotos_lentejas_soja']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['porotos_lentejas_soja']['emisiones'] * ( $var_calculos['alim']['almuerzo']['porotos_lentejas_soja']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['porotos_lentejas_soja']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['porotos_lentejas_soja']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['porotos_lentejas_soja']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['porotos_lentejas_soja']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['polenta'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['polenta']['factor'] * $var_calculos['alim']['almuerzo']['polenta']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['polenta']['emisiones'] * ( $var_calculos['alim']['almuerzo']['polenta']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['polenta']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['polenta']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['polenta']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['polenta']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['ensalada'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['ensalada']['factor'] * $var_calculos['alim']['almuerzo']['ensalada']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['ensalada']['emisiones'] * ( $var_calculos['alim']['almuerzo']['ensalada']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['ensalada']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['ensalada']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['ensalada']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['ensalada']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['pan'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['pan']['factor'] * $var_calculos['alim']['almuerzo']['pan']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['pan']['emisiones'] * ( $var_calculos['alim']['almuerzo']['pan']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['pan']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['pan']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['pan']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['pan']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['cerveza'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['cerveza']['factor'] * $var_calculos['alim']['almuerzo']['cerveza']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['cerveza']['emisiones'] * ( $var_calculos['alim']['almuerzo']['cerveza']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['cerveza']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['cerveza']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['cerveza']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['cerveza']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['vino'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['vino']['factor'] * $var_calculos['alim']['almuerzo']['vino']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['vino']['emisiones'] * ( $var_calculos['alim']['almuerzo']['vino']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['vino']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['vino']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['vino']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['vino']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['jugo_de_frutas_natural'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['jugo_de_frutas_natural']['factor'] * $var_calculos['alim']['almuerzo']['jugo_de_frutas_natural']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['jugo_de_frutas_natural']['emisiones'] * ( $var_calculos['alim']['almuerzo']['jugo_de_frutas_natural']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['jugo_de_frutas_natural']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['jugo_de_frutas_natural']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['jugo_de_frutas_natural']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['jugo_de_frutas_natural']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['gaseosa'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['gaseosa']['factor'] * $var_calculos['alim']['almuerzo']['gaseosa']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['gaseosa']['emisiones'] * ( $var_calculos['alim']['almuerzo']['gaseosa']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['gaseosa']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['gaseosa']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['gaseosa']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['gaseosa']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['soda'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['soda']['factor'] * $var_calculos['alim']['almuerzo']['soda']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['soda']['emisiones'] * ( $var_calculos['alim']['almuerzo']['soda']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['soda']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['soda']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['soda']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['soda']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p2']['agua'])){
	$alim_almuerzo_huella_eco += $var_calculos['alim']['almuerzo']['agua']['factor'] * $var_calculos['alim']['almuerzo']['agua']['cantidad_por_porcion'];
	$alim_almuerzo_huella_car += $var_calculos['alim']['almuerzo']['agua']['emisiones'] * ( $var_calculos['alim']['almuerzo']['agua']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['agua']['unidad'] );
	$alim_almuerzo_huella_hid += $var_calculos['alim']['almuerzo']['agua']['agua_virtual'] * ( $var_calculos['alim']['almuerzo']['agua']['cantidad_por_porcion'] / $var_calculos['alim']['almuerzo']['agua']['unidad'] );
}

// FIN ALMUERZO
?>