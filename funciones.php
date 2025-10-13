<?php
/**
 * Calcula huella para hogar (electro/iluminación/actividades) en una sola función.
 * Compatible con:
 * - Electro/iluminación: cantidad * consumo_kwh * tiempo_horas * factor / personas
 * - Actividades: cantidad * agua_virtual * factor / personas (con tiempo_horas = 1)
 */
function calcular_huella_hogar(
    float $cantidad,
    float $coeficiente,
    float $factor = 1.0,
    float $tiempo_horas = 1.0,
    float $personas = 1.0
): float {
    if ($personas <= 0) { $personas = 1.0; }
    return ($cantidad * $coeficiente * $tiempo_horas * $factor) / $personas;
}

/**
 * Calcula huellas (eco, car, hid) para un conjunto de alimentos seleccionados en una comida.
 * - Selecciones: array de claves de alimento marcadas (ej: ['pan' => 'on', 'cafe' => 'on']).
 * - var_calculos: debe contener var_calculos['alim'][$mealKey][$item] con
 *   'factor', 'emisiones', 'agua_virtual', 'cantidad_por_porcion' y 'unidad'.
 */
function calcular_huella_alimentos(string $mealKey, array $selecciones, array $var_calculos): array {
    $eco = 0.0; $car = 0.0; $hid = 0.0;
    if (!isset($var_calculos['alim'][$mealKey]) || !is_array($selecciones)) {
        return ['eco' => 0.0, 'car' => 0.0, 'hid' => 0.0];
    }
    foreach ($selecciones as $item => $_on) {
        if (!isset($var_calculos['alim'][$mealKey][$item])) continue;
        $cfg = $var_calculos['alim'][$mealKey][$item];
        $cantidad = (float)($cfg['cantidad_por_porcion'] ?? 0);
        $unidad = (float)($cfg['unidad'] ?? 1);
        if ($unidad == 0.0) { $unidad = 1.0; }
        $factor = (float)($cfg['factor'] ?? 0);
        $emisiones = (float)($cfg['emisiones'] ?? 0);
        $agua = (float)($cfg['agua_virtual'] ?? 0);

        $eco += $factor * $cantidad;
        $car += $emisiones * ($cantidad / $unidad);
        $hid += $agua * ($cantidad / $unidad);
    }
    return ['eco' => $eco, 'car' => $car, 'hid' => $hid];
}

/**
 * Calcula huellas de transporte (eco, car, hid) a partir de un factor base y parámetros del medio.
 * - base: multiplicador común (ej: tiempo*ida_vuelta o distancia*ida_vuelta/365)
 * - consumoEco: consumo energético para la huella ecológica (kWh o litros, según corresponda)
 * - factor: factor de huella ecológica del medio
 * - emisiones: emisiones del medio (para huella de carbono)
 * - consumoHid: consumo energético para huella hídrica (suele ser kWh)
 * - aguaVirtual: agua virtual del medio
 */
function calcular_huella_transporte(
    float $base,
    float $consumoEco,
    float $factor,
    float $emisiones,
    float $consumoHid,
    float $aguaVirtual
): array {
    $eco = $base * $consumoEco * $factor;
    $car = $base * $emisiones;
    $hid = $base * $consumoHid * $aguaVirtual;
    return ['eco' => $eco, 'car' => $car, 'hid' => $hid];
}

?>
