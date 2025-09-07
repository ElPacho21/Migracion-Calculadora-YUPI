<?php
include_once("header.php");
header('Content-Type: application/json');

$salida = ['success' => false];

if ($_GET) {
    if (isset($_GET['subpage'])) {
        $subpage = $_GET['subpage'];
        $_SESSION['datos'][$subpage] = $_GET;

        $salida['loadSubPage'] = true;
        $salida['goto'] = null;

        switch ($subpage) {
            case "hogar_p1": $salida['goto'] = 'hogar_p2'; break;
            case "hogar_p2": $salida['goto'] = 'hogar_p3'; break;
            case "hogar_p3": $salida['goto'] = 'alimentos_p1'; break;
            case "alimentos_p1": $salida['goto'] = 'alimentos_p2'; break;
            case "alimentos_p2": $salida['goto'] = 'alimentos_p3'; break;
            case "alimentos_p3": $salida['goto'] = 'alimentos_p4'; break;
            case "alimentos_p4": $salida['goto'] = 'transporte_p1'; break;
            case "transporte_p1": $salida['goto'] = 'transporte_p2'; break;
            case "transporte_p2":
                $salida['loadSubPage'] = false;
                $salida['goto'] = 'datos';
                break;
            case "datos":
                $salida['loadSubPage'] = false;
                $salida['goto'] = 'resultados';

                $personas = $_SESSION['datos']['hogar_p1']['personas'] ?? 0;

                $huella_eco = 0;
                $huella_car = 0;
                $huella_hid = 0;

                // HOGAR
                include_once 'procesar_electrodomesticos.php';
                include_once 'procesar_calefaccion.php';
                include_once 'procesar_iluminacion.php';
                include_once 'procesar_actividades_diarias.php';

                // ALIMENTOS Y BEBIDAS
                include_once 'procesar_desayuno.php';
                include_once 'procesar_almuerzo.php';
                include_once 'procesar_mediatarde.php';
                include_once 'procesar_cena.php';

                // TRANSPORTE
                include_once 'procesar_viajes_diarios.php';
                include_once 'procesar_vacaciones_verano.php';
                include_once 'procesar_vacaciones_invierno.php';

                $huella_eco = ($electro_huella_eco ?? 0)
                            + ($calefaccion_huella_eco ?? 0)
                            + ($iluminacion_huella_eco ?? 0)
                            + ($act_diarias_huella_eco ?? 0)
                            + ($alim_desayuno_huella_eco ?? 0)
                            + ($alim_almuerzo_huella_eco ?? 0)
                            + ($alim_mediatarde_huella_eco ?? 0)
                            + ($alim_cena_huella_eco ?? 0)
                            + ($viajes_diarios_huella_eco ?? 0)
                            + ($vacas_verano_huella_eco ?? 0)
                            + ($vacas_invierno_huella_eco ?? 0);

                $huella_car = ($electro_huella_car ?? 0)
                            + ($calefaccion_huella_car ?? 0)
                            + ($iluminacion_huella_car ?? 0)
                            + ($act_diarias_huella_car ?? 0)
                            + ($alim_desayuno_huella_car ?? 0)
                            + ($alim_almuerzo_huella_car ?? 0)
                            + ($alim_mediatarde_huella_car ?? 0)
                            + ($alim_cena_huella_car ?? 0)
                            + ($viajes_diarios_huella_car ?? 0)
                            + ($vacas_verano_huella_car ?? 0)
                            + ($vacas_invierno_huella_car ?? 0);

                $huella_hid = ($electro_huella_hid ?? 0)
                            + ($calefaccion_huella_hid ?? 0)
                            + ($iluminacion_huella_hid ?? 0)
                            + ($act_diarias_huella_hid ?? 0)
                            + ($alim_desayuno_huella_hid ?? 0)
                            + ($alim_almuerzo_huella_hid ?? 0)
                            + ($alim_mediatarde_huella_hid ?? 0)
                            + ($alim_cena_huella_hid ?? 0)
                            + ($viajes_diarios_huella_hid ?? 0)
                            + ($vacas_verano_huella_hid ?? 0)
                            + ($vacas_invierno_huella_hid ?? 0);

                $_SESSION['resultados'] = [
                    'hogar' => [
                        'electro' => [
                            'eco' => $electro_huella_eco ?? 0,
                            'car' => $electro_huella_car ?? 0,
                            'hid' => $electro_huella_hid ?? 0,
                        ],
                        'calefaccion' => [
                            'eco' => $calefaccion_huella_eco ?? 0,
                            'car' => $calefaccion_huella_car ?? 0,
                            'hid' => $calefaccion_huella_hid ?? 0,
                        ],
                        'iluminacion' => [
                            'eco' => $iluminacion_huella_eco ?? 0,
                            'car' => $iluminacion_huella_car ?? 0,
                            'hid' => $iluminacion_huella_hid ?? 0,
                        ],
                        'act_diarias' => [
                            'eco' => $act_diarias_huella_eco ?? 0,
                            'car' => $act_diarias_huella_car ?? 0,
                            'hid' => $act_diarias_huella_hid ?? 0,
                        ],
                    ],
                    'alimentos' => [
                        'desayuno' => [
                            'eco' => $alim_desayuno_huella_eco ?? 0,
                            'car' => $alim_desayuno_huella_car ?? 0,
                            'hid' => $alim_desayuno_huella_hid ?? 0,
                        ],
                        'almuerzo' => [
                            'eco' => $alim_almuerzo_huella_eco ?? 0,
                            'car' => $alim_almuerzo_huella_car ?? 0,
                            'hid' => $alim_almuerzo_huella_hid ?? 0,
                        ],
                        'mediatarde' => [
                            'eco' => $alim_mediatarde_huella_eco ?? 0,
                            'car' => $alim_mediatarde_huella_car ?? 0,
                            'hid' => $alim_mediatarde_huella_hid ?? 0,
                        ],
                        'cena' => [
                            'eco' => $alim_cena_huella_eco ?? 0,
                            'car' => $alim_cena_huella_car ?? 0,
                            'hid' => $alim_cena_huella_hid ?? 0,
                        ],
                    ],
                    'transporte' => [
                        'viajes_diarios' => [
                            'eco' => $viajes_diarios_huella_eco ?? 0,
                            'car' => $viajes_diarios_huella_car ?? 0,
                            'hid' => $viajes_diarios_huella_hid ?? 0,
                        ],
                        'vacas_verano' => [
                            'eco' => $vacas_verano_huella_eco ?? 0,
                            'car' => $vacas_verano_huella_car ?? 0,
                            'hid' => $vacas_verano_huella_hid ?? 0,
                        ],
                        'vacas_invierno' => [
                            'eco' => $vacas_invierno_huella_eco ?? 0,
                            'car' => $vacas_invierno_huella_car ?? 0,
                            'hid' => $vacas_invierno_huella_hid ?? 0,
                        ],
                    ],
                    "eco" => $huella_eco,
                    "car" => $huella_car,
                    "hid" => $huella_hid,
                ];
                break;
        }

        $salida['success'] = true;
    } else {
        $salida['mensaje'] = "bad request";
    }
}

if ($_POST) {}

echo json_encode($salida);
exit;