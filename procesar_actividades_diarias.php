<?php 
//Declaracion de variables
$act_diarias_huella_eco = 0;
$act_diarias_huella_car = 0;
$act_diarias_huella_hid = 0;

$platos_modo = $_SESSION['datos']['hogar_p3']['como_lavas_los'] ?? 'lavar_platos_a_mano';
$auto_modo = $_SESSION['datos']['hogar_p3']['como_lavas_auto'] ?? 'sin_auto';
$tenes_pileta = $_SESSION['datos']['hogar_p3']['tenes_pileta'] ?? 'sin_pileta';


// ACTIVIDADES DIARIAS
//Calculo Huella Hid
$var_tmp_hid = 0;
$var_tmp_hid = calcular_huella_hogar((float)($_SESSION['datos']['hogar_p3']['lavar_la_ropa_rep'] ?? 0), (float)($var_calculos['hogar']['act_diarias']['lavar_ropa']['agua_virtual'] ?? 0), 1, 1, $personas);
$var_tmp_hid += calcular_huella_hogar((float)($_SESSION['datos']['hogar_p3']['limpiar_la_casa_rep'] ?? 0), (float)($var_calculos['hogar']['act_diarias']['limpiar_casa']['agua_virtual'] ?? 0), 1, 1, $personas);
$var_tmp_hid += calcular_huella_hogar((float)($_SESSION['datos']['hogar_p3']['como_lavas_los_rep'] ?? 0), (float)($var_calculos['hogar']['act_diarias'][$platos_modo]['agua_virtual'] ?? 0), 1, 1, $personas);
$var_tmp_hid += calcular_huella_hogar((float)($_SESSION['datos']['hogar_p3']['regar_el_jardin_rep'] ?? 0), (float)($var_calculos['hogar']['act_diarias']['regar_jardin']['agua_virtual'] ?? 0), 1, 1, $personas);
$var_tmp_hid += calcular_huella_hogar((float)($_SESSION['datos']['hogar_p3']['como_lavas_auto_rep'] ?? 0), (float)($var_calculos['hogar']['act_diarias'][$auto_modo]['agua_virtual'] ?? 0), 1, 1, $personas);
$var_tmp_hid += calcular_huella_hogar(((float)($_SESSION['datos']['hogar_p3']['pileta_limp_rep'] ?? 0)) * (((float)($_SESSION['datos']['hogar_p3']['pileta_agua_anio_rep'] ?? 0)) / 52), (float)($var_calculos['hogar']['act_diarias'][$tenes_pileta]['agua_virtual'] ?? 0), 1, 1, $personas);

$act_diarias_huella_hid = ($var_tmp_hid/7);

//Calculo Huella Eco
$var_tmp_eco = 0;
$var_tmp_eco = calcular_huella_hogar((float)($_SESSION['datos']['hogar_p3']['lavar_la_ropa_rep'] ?? 0), (float)($var_calculos['hogar']['act_diarias']['lavar_ropa']['agua_virtual'] ?? 0), (float)($var_calculos['hogar']['act_diarias']['lavar_ropa']['factor'] ?? 0), 1, $personas);
$var_tmp_eco += calcular_huella_hogar((float)($_SESSION['datos']['hogar_p3']['limpiar_la_casa_rep'] ?? 0), (float)($var_calculos['hogar']['act_diarias']['limpiar_casa']['agua_virtual'] ?? 0), (float)($var_calculos['hogar']['act_diarias']['limpiar_casa']['factor'] ?? 0), 1, $personas);
$var_tmp_eco += calcular_huella_hogar((float)($_SESSION['datos']['hogar_p3']['como_lavas_los_rep'] ?? 0), (float)($var_calculos['hogar']['act_diarias'][$platos_modo]['agua_virtual'] ?? 0), (float)($var_calculos['hogar']['act_diarias'][$platos_modo]['factor'] ?? 0), 1, $personas);
$var_tmp_eco += calcular_huella_hogar((float)($_SESSION['datos']['hogar_p3']['regar_el_jardin_rep'] ?? 0), (float)($var_calculos['hogar']['act_diarias']['regar_jardin']['agua_virtual'] ?? 0), (float)($var_calculos['hogar']['act_diarias']['regar_jardin']['factor'] ?? 0), 1, $personas);
$var_tmp_eco += calcular_huella_hogar((float)($_SESSION['datos']['hogar_p3']['como_lavas_auto_rep'] ?? 0), (float)($var_calculos['hogar']['act_diarias'][$auto_modo]['agua_virtual'] ?? 0), (float)($var_calculos['hogar']['act_diarias'][$auto_modo]['factor'] ?? 0), 1, $personas);
$var_tmp_eco += calcular_huella_hogar(((float)($_SESSION['datos']['hogar_p3']['pileta_limp_rep'] ?? 0)) * (((float)($_SESSION['datos']['hogar_p3']['pileta_agua_anio_rep'] ?? 0)) / 52), (float)($var_calculos['hogar']['act_diarias'][$tenes_pileta]['agua_virtual'] ?? 0), (float)($var_calculos['hogar']['act_diarias'][$tenes_pileta]['factor'] ?? 0), 1, $personas);

$act_diarias_huella_eco = ($var_tmp_eco/7);

// FIN ACTIVIDADES DIARIAS
