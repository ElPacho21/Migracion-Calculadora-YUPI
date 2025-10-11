<?php
// Declaración de variables
$vacas_verano_huella_eco = 0;
$vacas_verano_huella_car = 0;
$vacas_verano_huella_hid = 0;

// Datos de sesión
$transporte = $_SESSION['datos']['transporte_p2'] ?? null;
$calculos    = $var_calculos['transporte']['vacas_verano'] ?? null;

if ($transporte && $calculos) {
    $vacaciones = $transporte['vacaciones_verano'] ?? 'a_ningun_lado';
    $vehiculo   = $transporte['vehiculo_verano'] ?? null;

    if ($vacaciones !== 'a_ningun_lado' && isset($calculos[$vacaciones], $calculos[$vehiculo])) {

        $distancia = $calculos[$vacaciones]['distancia_recorrida'] ?? 0;
        $vehiculo_data = $calculos[$vehiculo];

        $ida_vuelta = $vehiculo_data['viaje_ida_vuelta'] ?? 1;
        $consumo_l  = $vehiculo_data['consumo_l'] ?? 0;
        $consumo_kwh = $vehiculo_data['consumo_kwh'] ?? 0;
        $factor     = $vehiculo_data['factor'] ?? 0;
        $emisiones  = $vehiculo_data['emisiones'] ?? 0;
        $agua       = $vehiculo_data['agua_virtual'] ?? 0;

        // Cálculos
        $vacas_verano_huella_eco = ($distancia * ($consumo_l * $factor * $ida_vuelta)) / 365;
        $vacas_verano_huella_car = ($distancia * ($emisiones * $ida_vuelta)) / 365;
        $vacas_verano_huella_hid = ($distancia * ($consumo_kwh * $agua * $ida_vuelta)) / 365;
    }
}
?>
