<?php
//Declaracion de variables
$alim_cena_huella_eco = 0;
$alim_cena_huella_car = 0;
$alim_cena_huella_hid = 0;

// CENA
if(isset($_SESSION['datos']['alimentos_p4']['huevos'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['huevos']['factor'] * $var_calculos['alim']['cena']['huevos']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['huevos']['emisiones'] * ( $var_calculos['alim']['cena']['huevos']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['huevos']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['huevos']['agua_virtual'] * ( $var_calculos['alim']['cena']['huevos']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['huevos']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['verduras'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['verduras']['factor'] * $var_calculos['alim']['cena']['verduras']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['verduras']['emisiones'] * ( $var_calculos['alim']['cena']['verduras']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['verduras']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['verduras']['agua_virtual'] * ( $var_calculos['alim']['cena']['verduras']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['verduras']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['frutas'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['frutas']['factor'] * $var_calculos['alim']['cena']['frutas']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['frutas']['emisiones'] * ( $var_calculos['alim']['cena']['frutas']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['frutas']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['frutas']['agua_virtual'] * ( $var_calculos['alim']['cena']['frutas']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['frutas']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['carne_pollo'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['carne_pollo']['factor'] * $var_calculos['alim']['cena']['carne_pollo']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['carne_pollo']['emisiones'] * ( $var_calculos['alim']['cena']['carne_pollo']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['carne_pollo']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['carne_pollo']['agua_virtual'] * ( $var_calculos['alim']['cena']['carne_pollo']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['carne_pollo']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['carne_cerdo'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['carne_cerdo']['factor'] * $var_calculos['alim']['cena']['carne_cerdo']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['carne_cerdo']['emisiones'] * ( $var_calculos['alim']['cena']['carne_cerdo']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['carne_cerdo']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['carne_cerdo']['agua_virtual'] * ( $var_calculos['alim']['cena']['carne_cerdo']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['carne_cerdo']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['carne_vaca'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['carne_vaca']['factor'] * $var_calculos['alim']['cena']['carne_vaca']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['carne_vaca']['emisiones'] * ( $var_calculos['alim']['cena']['carne_vaca']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['carne_vaca']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['carne_vaca']['agua_virtual'] * ( $var_calculos['alim']['cena']['carne_vaca']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['carne_vaca']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['pescado'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['pescado']['factor'] * $var_calculos['alim']['cena']['pescado']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['pescado']['emisiones'] * ( $var_calculos['alim']['cena']['pescado']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['pescado']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['pescado']['agua_virtual'] * ( $var_calculos['alim']['cena']['pescado']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['pescado']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['sandwich'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['sandwich']['factor'] * $var_calculos['alim']['cena']['sandwich']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['sandwich']['emisiones'] * ( $var_calculos['alim']['cena']['sandwich']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['sandwich']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['sandwich']['agua_virtual'] * ( $var_calculos['alim']['cena']['sandwich']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['sandwich']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['hamburguesas'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['hamburguesas']['factor'] * $var_calculos['alim']['cena']['hamburguesas']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['hamburguesas']['emisiones'] * ( $var_calculos['alim']['cena']['hamburguesas']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['hamburguesas']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['hamburguesas']['agua_virtual'] * ( $var_calculos['alim']['cena']['hamburguesas']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['hamburguesas']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['choripan'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['choripan']['factor'] * $var_calculos['alim']['cena']['choripan']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['choripan']['emisiones'] * ( $var_calculos['alim']['cena']['choripan']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['choripan']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['choripan']['agua_virtual'] * ( $var_calculos['alim']['cena']['choripan']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['choripan']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['arroz'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['arroz']['factor'] * $var_calculos['alim']['cena']['arroz']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['arroz']['emisiones'] * ( $var_calculos['alim']['cena']['arroz']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['arroz']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['arroz']['agua_virtual'] * ( $var_calculos['alim']['cena']['arroz']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['arroz']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['trigo'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['trigo']['factor'] * $var_calculos['alim']['cena']['trigo']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['trigo']['emisiones'] * ( $var_calculos['alim']['cena']['trigo']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['trigo']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['trigo']['agua_virtual'] * ( $var_calculos['alim']['cena']['trigo']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['trigo']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['pasta'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['pasta']['factor'] * $var_calculos['alim']['cena']['pasta']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['pasta']['emisiones'] * ( $var_calculos['alim']['cena']['pasta']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['pasta']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['pasta']['agua_virtual'] * ( $var_calculos['alim']['cena']['pasta']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['pasta']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['porotos_lentejas_soja'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['porotos_lentejas_soja']['factor'] * $var_calculos['alim']['cena']['porotos_lentejas_soja']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['porotos_lentejas_soja']['emisiones'] * ( $var_calculos['alim']['cena']['porotos_lentejas_soja']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['porotos_lentejas_soja']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['porotos_lentejas_soja']['agua_virtual'] * ( $var_calculos['alim']['cena']['porotos_lentejas_soja']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['porotos_lentejas_soja']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['polenta'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['polenta']['factor'] * $var_calculos['alim']['cena']['polenta']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['polenta']['emisiones'] * ( $var_calculos['alim']['cena']['polenta']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['polenta']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['polenta']['agua_virtual'] * ( $var_calculos['alim']['cena']['polenta']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['polenta']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['ensalada'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['ensalada']['factor'] * $var_calculos['alim']['cena']['ensalada']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['ensalada']['emisiones'] * ( $var_calculos['alim']['cena']['ensalada']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['ensalada']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['ensalada']['agua_virtual'] * ( $var_calculos['alim']['cena']['ensalada']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['ensalada']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['pan'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['pan']['factor'] * $var_calculos['alim']['cena']['pan']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['pan']['emisiones'] * ( $var_calculos['alim']['cena']['pan']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['pan']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['pan']['agua_virtual'] * ( $var_calculos['alim']['cena']['pan']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['pan']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['cerveza'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['cerveza']['factor'] * $var_calculos['alim']['cena']['cerveza']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['cerveza']['emisiones'] * ( $var_calculos['alim']['cena']['cerveza']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['cerveza']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['cerveza']['agua_virtual'] * ( $var_calculos['alim']['cena']['cerveza']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['cerveza']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['vino'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['vino']['factor'] * $var_calculos['alim']['cena']['vino']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['vino']['emisiones'] * ( $var_calculos['alim']['cena']['vino']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['vino']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['vino']['agua_virtual'] * ( $var_calculos['alim']['cena']['vino']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['vino']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['jugo_de_frutas_natural'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['jugo_de_frutas_natural']['factor'] * $var_calculos['alim']['cena']['jugo_de_frutas_natural']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['jugo_de_frutas_natural']['emisiones'] * ( $var_calculos['alim']['cena']['jugo_de_frutas_natural']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['jugo_de_frutas_natural']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['jugo_de_frutas_natural']['agua_virtual'] * ( $var_calculos['alim']['cena']['jugo_de_frutas_natural']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['jugo_de_frutas_natural']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['gaseosa'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['gaseosa']['factor'] * $var_calculos['alim']['cena']['gaseosa']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['gaseosa']['emisiones'] * ( $var_calculos['alim']['cena']['gaseosa']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['gaseosa']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['gaseosa']['agua_virtual'] * ( $var_calculos['alim']['cena']['gaseosa']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['gaseosa']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['soda'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['soda']['factor'] * $var_calculos['alim']['cena']['soda']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['soda']['emisiones'] * ( $var_calculos['alim']['cena']['soda']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['soda']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['soda']['agua_virtual'] * ( $var_calculos['alim']['cena']['soda']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['soda']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p4']['agua'])){
	$alim_cena_huella_eco += $var_calculos['alim']['cena']['agua']['factor'] * $var_calculos['alim']['cena']['agua']['cantidad_por_porcion'];
	$alim_cena_huella_car += $var_calculos['alim']['cena']['agua']['emisiones'] * ( $var_calculos['alim']['cena']['agua']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['agua']['unidad'] );
	$alim_cena_huella_hid += $var_calculos['alim']['cena']['agua']['agua_virtual'] * ( $var_calculos['alim']['cena']['agua']['cantidad_por_porcion'] / $var_calculos['alim']['cena']['agua']['unidad'] );
}

// FIN CENA
?>