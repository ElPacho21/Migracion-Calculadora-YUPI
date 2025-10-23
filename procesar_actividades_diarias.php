<?php 
//Declaracion de variables
$act_diarias_huella_eco = 0;
$act_diarias_huella_car = 0;
$act_diarias_huella_hid = 0;

$platos_modo = $_SESSION['datos']['hogar_p3']['como_lavas_los'];
$auto_modo = $_SESSION['datos']['hogar_p3']['como_lavas_auto'];
$tenes_pileta = $_SESSION['datos']['hogar_p3']['tenes_pileta'];

// Evitar warnings cuando falten claves en $var_calculos o en modos dinámicos
$act_diarias_cfg = $var_calculos['hogar']['act_diarias'] ?? [];


// ACTIVIDADES DIARIAS
//Calculo Huella Hid
$var_tmp_hid = 0;
$var_tmp_hid = ( $_SESSION['datos']['hogar_p3']['lavar_la_ropa_rep'] * ($act_diarias_cfg['lavar_ropa']['agua_virtual'] ?? 0) ) / $personas;
$var_tmp_hid += ( $_SESSION['datos']['hogar_p3']['limpiar_la_casa_rep'] * ($act_diarias_cfg['limpiar_casa']['agua_virtual'] ?? 0) ) / $personas;
$var_tmp_hid += ( $_SESSION['datos']['hogar_p3']['como_lavas_los_rep'] * ($act_diarias_cfg[$platos_modo]['agua_virtual'] ?? 0) ) / $personas;
$var_tmp_hid += ( $_SESSION['datos']['hogar_p3']['regar_el_jardin_rep'] * ($act_diarias_cfg['regar_jardin']['agua_virtual'] ?? 0) ) / $personas;
$var_tmp_hid += ( $_SESSION['datos']['hogar_p3']['como_lavas_auto_rep'] * ($act_diarias_cfg[$auto_modo]['agua_virtual'] ?? 0) ) / $personas;
$var_tmp_hid += ( $_SESSION['datos']['hogar_p3']['pileta_limp_rep'] * ( $_SESSION['datos']['hogar_p3']['pileta_agua_anio_rep'] / 52 ) * ($act_diarias_cfg[$tenes_pileta]['agua_virtual'] ?? 0) ) / $personas;

$act_diarias_huella_hid = ($var_tmp_hid/7);

//Calculo Huella Eco
$var_tmp_eco = 0;
$var_tmp_eco = ( $_SESSION['datos']['hogar_p3']['lavar_la_ropa_rep'] * ($act_diarias_cfg['lavar_ropa']['agua_virtual'] ?? 0) * ($act_diarias_cfg['lavar_ropa']['factor'] ?? 0) ) / $personas;
$var_tmp_eco += ( $_SESSION['datos']['hogar_p3']['limpiar_la_casa_rep'] * ($act_diarias_cfg['limpiar_casa']['agua_virtual'] ?? 0) * ($act_diarias_cfg['limpiar_casa']['factor'] ?? 0) ) / $personas;
$var_tmp_eco += ( $_SESSION['datos']['hogar_p3']['como_lavas_los_rep'] * ($act_diarias_cfg[$platos_modo]['agua_virtual'] ?? 0) * ($act_diarias_cfg[$platos_modo]['factor'] ?? 0) ) / $personas;
$var_tmp_eco += ( $_SESSION['datos']['hogar_p3']['regar_el_jardin_rep'] * ($act_diarias_cfg['regar_jardin']['agua_virtual'] ?? 0) * ($act_diarias_cfg['regar_jardin']['factor'] ?? 0) ) / $personas;
$var_tmp_eco += ( $_SESSION['datos']['hogar_p3']['como_lavas_auto_rep'] * ($act_diarias_cfg[$auto_modo]['agua_virtual'] ?? 0) * ($act_diarias_cfg[$auto_modo]['factor'] ?? 0) ) / $personas;
$var_tmp_eco += $_SESSION['datos']['hogar_p3']['pileta_limp_rep'] * ( $_SESSION['datos']['hogar_p3']['pileta_agua_anio_rep'] / 52 ) * ($act_diarias_cfg[$tenes_pileta]['agua_virtual'] ?? 0) * ($act_diarias_cfg[$tenes_pileta]['factor'] ?? 0) / $personas;

$act_diarias_huella_eco = ($var_tmp_eco/7);

// FIN ACTIVIDADES DIARIAS
?>