<?php
include_once('funciones.php');

// Declaración de variables
$act_diarias_huella_eco = 0;
$act_diarias_huella_car = 0;
$act_diarias_huella_hid = 0;

$hogar = $_SESSION['datos']['hogar_p3'] ?? [];

$platos_modo = $hogar['como_lavas_los'] ?? '';
$auto_modo = $hogar['como_lavas_auto'] ?? '';
$tenes_pileta = $hogar['tenes_pileta'] ?? '';

// Huella Hid
$act_diarias_huella_hid = (
    calcular_huella_actividad($hogar['lavar_la_ropa_rep'] ?? 0, $var_calculos['hogar']['act_diarias']['lavar_ropa']['agua_virtual'], 1, $personas) +
    calcular_huella_actividad($hogar['limpiar_la_casa_rep'] ?? 0, $var_calculos['hogar']['act_diarias']['limpiar_casa']['agua_virtual'], 1, $personas) +
    calcular_huella_actividad($hogar['como_lavas_los_rep'] ?? 0, $var_calculos['hogar']['act_diarias'][$platos_modo]['agua_virtual'], 1, $personas) +
    calcular_huella_actividad($hogar['regar_el_jardin_rep'] ?? 0, $var_calculos['hogar']['act_diarias']['regar_jardin']['agua_virtual'], 1, $personas) +
    calcular_huella_actividad($hogar['como_lavas_auto_rep'] ?? 0, $var_calculos['hogar']['act_diarias'][$auto_modo]['agua_virtual'], 1, $personas) +
    calcular_huella_actividad(($hogar['pileta_limp_rep'] ?? 0) * (($hogar['pileta_agua_anio_rep'] ?? 0)/52), $var_calculos['hogar']['act_diarias'][$tenes_pileta]['agua_virtual'], 1, $personas)
) / 7;

// Huella Eco
$act_diarias_huella_eco = (
    calcular_huella_actividad($hogar['lavar_la_ropa_rep'] ?? 0, $var_calculos['hogar']['act_diarias']['lavar_ropa']['agua_virtual'], $var_calculos['hogar']['act_diarias']['lavar_ropa']['factor'], $personas) +
    calcular_huella_actividad($hogar['limpiar_la_casa_rep'] ?? 0, $var_calculos['hogar']['act_diarias']['limpiar_casa']['agua_virtual'], $var_calculos['hogar']['act_diarias']['limpiar_casa']['factor'], $personas) +
    calcular_huella_actividad($hogar['como_lavas_los_rep'] ?? 0, $var_calculos['hogar']['act_diarias'][$platos_modo]['agua_virtual'], $var_calculos['hogar']['act_diarias'][$platos_modo]['factor'], $personas) +
    calcular_huella_actividad($hogar['regar_el_jardin_rep'] ?? 0, $var_calculos['hogar']['act_diarias']['regar_jardin']['agua_virtual'], $var_calculos['hogar']['act_diarias']['regar_jardin']['factor'], $personas) +
    calcular_huella_actividad($hogar['como_lavas_auto_rep'] ?? 0, $var_calculos['hogar']['act_diarias'][$auto_modo]['agua_virtual'], $var_calculos['hogar']['act_diarias'][$auto_modo]['factor'], $personas) +
    calcular_huella_actividad(($hogar['pileta_limp_rep'] ?? 0) * (($hogar['pileta_agua_anio_rep'] ?? 0)/52), $var_calculos['hogar']['act_diarias'][$tenes_pileta]['agua_virtual'], $var_calculos['hogar']['act_diarias'][$tenes_pileta]['factor'], $personas)
) / 7;

// Huella Carbono
$act_diarias_huella_car = (
    calcular_huella_actividad($hogar['lavar_la_ropa_rep'] ?? 0, $var_calculos['hogar']['act_diarias']['lavar_ropa']['agua_virtual'], $var_calculos['hogar']['act_diarias']['lavar_ropa']['emisiones'], $personas) +
    calcular_huella_actividad($hogar['limpiar_la_casa_rep'] ?? 0, $var_calculos['hogar']['act_diarias']['limpiar_casa']['agua_virtual'], $var_calculos['hogar']['act_diarias']['limpiar_casa']['emisiones'], $personas) +
    calcular_huella_actividad($hogar['como_lavas_los_rep'] ?? 0, $var_calculos['hogar']['act_diarias'][$platos_modo]['agua_virtual'], $var_calculos['hogar']['act_diarias'][$platos_modo]['emisiones'], $personas) +
    calcular_huella_actividad($hogar['regar_el_jardin_rep'] ?? 0, $var_calculos['hogar']['act_diarias']['regar_jardin']['agua_virtual'], $var_calculos['hogar']['act_diarias']['regar_jardin']['emisiones'], $personas) +
    calcular_huella_actividad($hogar['como_lavas_auto_rep'] ?? 0, $var_calculos['hogar']['act_diarias'][$auto_modo]['agua_virtual'], $var_calculos['hogar']['act_diarias'][$auto_modo]['emisiones'], $personas) +
    calcular_huella_actividad(($hogar['pileta_limp_rep'] ?? 0) * (($hogar['pileta_agua_anio_rep'] ?? 0)/52), $var_calculos['hogar']['act_diarias'][$tenes_pileta]['agua_virtual'], $var_calculos['hogar']['act_diarias'][$tenes_pileta]['emisiones'], $personas)
) / 7;
?>
