<?php
// Declaración de variables
$viajes_diarios_huella_eco = 0;
$viajes_diarios_huella_car = 0;
$viajes_diarios_huella_hid = 0;

// Verificamos que existan los datos necesarios en la sesión
$transporte = $_SESSION['datos']['transporte_p1'] ?? null;
$factores   = $var_calculos['transporte']['viaje_diario'] ?? null;

if ($transporte && $factores) {

    // Tiempo diario total (40 horas mensuales convertido a horas)
    $tiempo = (($transporte['tiempo'] ?? 0) * 40) / 60;

    $modo       = $transporte['en_que'] ?? '';
    $companero  = $transporte['con_quien'] ?? null;

    // Determinar clave de cálculo según modo y compañía
    $en_que = match ($modo) {
        'taxi'      => $companero === 'solo' ? 'taxi_solo'      : 'taxi_acompaniado',
        'auto'      => $companero === 'solo' ? 'auto_solo'      : 'auto_acompaniado',
        'auto_gnc'  => $companero === 'solo' ? 'auto_gnc_solo'  : 'auto_gnc_acompaniado',
        default     => $modo,
    };

    $datos = $factores[$en_que] ?? null;

    if ($datos) {
        $ida_vuelta = $datos['viaje_ida_vuelta'] ?? 1;
        $consumo    = $datos['consumo_kwh'] ?? 0;
        $factor     = $datos['factor'] ?? 0;
        $emisiones  = $datos['emisiones'] ?? 0;
        $agua       = $datos['agua_virtual'] ?? 0;

        $viajes_diarios_huella_eco = $tiempo * $ida_vuelta * $consumo * $factor;
        $viajes_diarios_huella_car = $tiempo * $ida_vuelta * $emisiones;
        $viajes_diarios_huella_hid = $tiempo * $ida_vuelta * $consumo * $agua;
    }
}
?>