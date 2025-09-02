<?php 
//Declaracion de variables
$act_diarias_huella_eco = 0;
$act_diarias_huella_car = 0;
$act_diarias_huella_hid = 0;

$platos_modo = $_SESSION['datos']['hogar_p3']['como_lavas_los'];
$auto_modo = $_SESSION['datos']['hogar_p3']['como_lavas_auto'];
$tenes_pileta = $_SESSION['datos']['hogar_p3']['tenes_pileta'];


// ACTIVIDADES DIARIAS
//Calculo Huella Hid
$var_tmp_hid = 0;
$var_tmp_hid = ( $_SESSION['datos']['hogar_p3']['lavar_la_ropa_rep'] * $var_calculos['hogar']['act_diarias']['lavar_ropa']['agua_virtual'] ) / $personas;
$var_tmp_hid += ( $_SESSION['datos']['hogar_p3']['limpiar_la_casa_rep'] * $var_calculos['hogar']['act_diarias']['limpiar_casa']['agua_virtual'] ) / $personas;
$var_tmp_hid += ( $_SESSION['datos']['hogar_p3']['como_lavas_los_rep'] * $var_calculos['hogar']['act_diarias'][$platos_modo]['agua_virtual']  ) / $personas;
$var_tmp_hid += ( $_SESSION['datos']['hogar_p3']['regar_el_jardin_rep'] * $var_calculos['hogar']['act_diarias']['regar_jardin']['agua_virtual'] ) / $personas;
$var_tmp_hid += ( $_SESSION['datos']['hogar_p3']['como_lavas_auto_rep'] * $var_calculos['hogar']['act_diarias'][$auto_modo]['agua_virtual'] ) / $personas;
$var_tmp_hid += ( $_SESSION['datos']['hogar_p3']['pileta_limp_rep'] * ( $_SESSION['datos']['hogar_p3']['pileta_agua_anio_rep'] / 52 ) * $var_calculos['hogar']['act_diarias'][$tenes_pileta]['agua_virtual'] ) / $personas;

$act_diarias_huella_hid = ($var_tmp_hid/7);

//Calculo Huella Eco
$var_tmp_eco = 0;
$var_tmp_eco = ( $_SESSION['datos']['hogar_p3']['lavar_la_ropa_rep'] * $var_calculos['hogar']['act_diarias']['lavar_ropa']['agua_virtual'] * $var_calculos['hogar']['act_diarias']['lavar_ropa']['factor'] ) / $personas;
$var_tmp_eco += ( $_SESSION['datos']['hogar_p3']['limpiar_la_casa_rep'] * $var_calculos['hogar']['act_diarias']['limpiar_casa']['agua_virtual'] * $var_calculos['hogar']['act_diarias']['limpiar_casa']['factor'] ) / $personas;
$var_tmp_eco += ( $_SESSION['datos']['hogar_p3']['como_lavas_los_rep'] * $var_calculos['hogar']['act_diarias'][$platos_modo]['agua_virtual'] * $var_calculos['hogar']['act_diarias'][$platos_modo]['factor'] ) / $personas;
$var_tmp_eco += ( $_SESSION['datos']['hogar_p3']['regar_el_jardin_rep'] * $var_calculos['hogar']['act_diarias']['regar_jardin']['agua_virtual'] * $var_calculos['hogar']['act_diarias']['regar_jardin']['factor'] ) / $personas;
$var_tmp_eco += ( $_SESSION['datos']['hogar_p3']['como_lavas_auto_rep'] * $var_calculos['hogar']['act_diarias'][$auto_modo]['agua_virtual'] * $var_calculos['hogar']['act_diarias'][$auto_modo]['factor'] ) / $personas;
$var_tmp_eco += $_SESSION['datos']['hogar_p3']['pileta_limp_rep'] * ( $_SESSION['datos']['hogar_p3']['pileta_agua_anio_rep'] / 52 ) * $var_calculos['hogar']['act_diarias'][$tenes_pileta]['agua_virtual'] * $var_calculos['hogar']['act_diarias'][$tenes_pileta]['factor'] / $personas;

$act_diarias_huella_eco = ($var_tmp_eco/7);

// FIN ACTIVIDADES DIARIAS
?>