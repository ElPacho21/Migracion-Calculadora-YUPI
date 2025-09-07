<?php
include_once('funciones.php');

// Inicializo variables de resultados
$calefaccion_huella_eco = 0;
$calefaccion_huella_car = 0;
$calefaccion_huella_hid = 0;

$hogar = $_SESSION['datos']['hogar_p2'] ?? [];

// CALEFACCIÓN CON GAS NATURAL
if(!empty($hogar['con_gas_natural'])) {
    $var_temp_gas_car = 0;
    $var_temp_gas_car += calcular_huella($hogar['estufa_a_gas_cant'] ?? 0, $var_calculos['hogar']['calefaccion']['estufa_a_gas']['consumo_kwh'], 1, $var_calculos['hogar']['calefaccion']['con_gas_natural']['emisiones'], 860);
    $var_temp_gas_car += calcular_huella($hogar['calefon_cant'] ?? 0, $var_calculos['hogar']['calefaccion']['calefon']['consumo_kwh'], 1, $var_calculos['hogar']['calefaccion']['con_gas_natural']['emisiones'], 860);
    $var_temp_gas_car += calcular_huella($hogar['caldera_cant'] ?? 0, $var_calculos['hogar']['calefaccion']['caldera']['consumo_kwh'], 1, $var_calculos['hogar']['calefaccion']['con_gas_natural']['emisiones'], 860);

    $calefaccion_huella_car += $var_temp_gas_car / $personas;
}

// CALEFACCIÓN CON GARRAFA
if(!empty($hogar['con_garrafa'])) {
    $var_temp_garrafa_car = 0;
    $var_temp_garrafa_car += calcular_huella($hogar['estufa_a_gas_cant'] ?? 0, $var_calculos['hogar']['calefaccion']['estufa_a_gas']['consumo_kwh'], 1, $var_calculos['hogar']['calefaccion']['con_garrafa']['emisiones'], 860);
    $var_temp_garrafa_car += calcular_huella($hogar['calefon_cant'] ?? 0, $var_calculos['hogar']['calefaccion']['calefon']['consumo_kwh'], 1, $var_calculos['hogar']['calefaccion']['con_garrafa']['emisiones'], 860);
    $var_temp_garrafa_car += calcular_huella($hogar['caldera_cant'] ?? 0, $var_calculos['hogar']['calefaccion']['caldera']['consumo_kwh'], 1, $var_calculos['hogar']['calefaccion']['con_garrafa']['emisiones'], 860);

    $calefaccion_huella_car += $var_temp_garrafa_car / $personas;
}

// CALEFACCIÓN CON LEÑA
if(!empty($hogar['con_lenia'])) {
    $var_temp_lenia_car = 0;
    $var_temp_lenia_car += calcular_huella($hogar['estufa_a_gas_cant'] ?? 0, $var_calculos['hogar']['calefaccion']['estufa_a_gas']['consumo_kwh'], 1, $var_calculos['hogar']['calefaccion']['con_lenia']['emisiones'], 860);
    $var_temp_lenia_car += calcular_huella($hogar['calefon_cant'] ?? 0, $var_calculos['hogar']['calefaccion']['calefon']['consumo_kwh'], 1, $var_calculos['hogar']['calefaccion']['con_lenia']['emisiones'], 860);
    $var_temp_lenia_car += calcular_huella($hogar['caldera_cant'] ?? 0, $var_calculos['hogar']['calefaccion']['caldera']['consumo_kwh'], 1, $var_calculos['hogar']['calefaccion']['con_lenia']['emisiones'], 860);

    $calefaccion_huella_car += $var_temp_lenia_car / $personas;
}

// ELECTRICOS
$electricos = [
    'estufas_electricas','aire_acondicionado','panel_electrico','caloventor'
];

foreach($electricos as $elec) {
    $cant = $hogar[$elec.'_cant'] ?? 0;
    if($cant > 0) {
        $calefaccion_huella_eco += calcular_huella($cant, $var_calculos['hogar']['calefaccion'][$elec]['consumo_kwh'], $var_calculos['hogar']['calefaccion'][$elec]['tiempo']/60, $var_calculos['hogar']['calefaccion'][$elec]['factor'], $personas);
        $calefaccion_huella_car += calcular_huella($cant, $var_calculos['hogar']['calefaccion'][$elec]['consumo_kwh'], $var_calculos['hogar']['calefaccion'][$elec]['tiempo']/60, $var_calculos['hogar']['calefaccion'][$elec]['emisiones'], $personas);
    }
}

// AGUA VIRTUAL
$agua_virtual = [
    'calefon','caldera'
];

foreach($agua_virtual as $elec) {
    $cant = $hogar[$elec.'_cant'] ?? 0;
    $calefaccion_huella_eco += ($cant * ($var_calculos['hogar']['calefaccion'][$elec]['agua_virtual'] ?? 0)) / $personas;
    $calefaccion_huella_hid += ($cant * ($var_calculos['hogar']['calefaccion'][$elec]['agua_virtual'] ?? 0)) / $personas;
}

?>