<?php
/**
 * Calcula la huella (eco, carbo, etc.) de un elemento.
 *
 * @param float $cantidad Cantidad del elemento (ej: 2 hornos)
 * @param float $consumo Consumo en kWh
 * @param float $tiempo Tiempo de uso (horas)
 * @param float $factor Factor de huella (eco, emisiones, etc.)
 * @param float $personas Cantidad de personas para dividir (opcional)
 * @return float Resultado de la huella
 */
function calcular_huella(float $cantidad, float $consumo, float $tiempo, float $factor, float $personas = 1): float {
    if($personas <= 0) $personas = 1;
    return ($cantidad * $consumo * $tiempo * $factor) / $personas;
}

function calcular_huella_actividad($cantidad, $agua_virtual, $factor = 1, $personas = 1) {
    return ($cantidad * $agua_virtual * $factor) / $personas;
}

?>
