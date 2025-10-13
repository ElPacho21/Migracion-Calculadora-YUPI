<?php 
//require_once 'classes/PHPExcel.php';
include("header.php");
header('Content-Type: application/json');

// Default response to avoid undefined variable notices
$salida = [
	'success' => false,
	'mensaje' => 'bad request',
];

if (!empty($_GET)){
	if(isset($_GET['subpage']) && $_GET['subpage'] !== ''){
		$_SESSION['datos'][$_GET['subpage']] = $_GET;
		switch($_GET['subpage']){
			case "hogar_p1":
				$salida['loadSubPage'] = true;
				$salida['goto'] = 'hogar_p2';
			break;
			case "hogar_p2":
				$salida['loadSubPage'] = true;
				$salida['goto'] = 'hogar_p3';
			break;
			case "hogar_p3":
				$salida['loadSubPage'] = true;
				$salida['goto'] = 'alimentos_p1';
			break;
			case "alimentos_p1":
				$salida['loadSubPage'] = true;
				$salida['goto'] = 'alimentos_p2';
			break;
			case "alimentos_p2":
				$salida['loadSubPage'] = true;
				$salida['goto'] = 'alimentos_p3';
			break;
			case "alimentos_p3":
				$salida['loadSubPage'] = true;
				$salida['goto'] = 'alimentos_p4';
			break;
			case "alimentos_p4":
				$salida['loadSubPage'] = true;
				$salida['goto'] = 'transporte_p1';
			break;
			case "transporte_p1":
				$salida['loadSubPage'] = true;
				$salida['goto'] = 'transporte_p2';
			break;
			case "transporte_p2":
				$salida['loadSubPage'] = false;
				$salida['goto'] = 'datos';
			break;
			case "datos":
				$salida['loadSubPage'] = false;
				$salida['goto'] = 'resultados';
                
				// Personas por hogar con valor seguro por defecto
				$personas = max(1, (int)($_SESSION['datos']['hogar_p1']['personas'] ?? 1));
				//Declaracion de variables para los resultados
				$huella_eco = 0;
				$huella_car = 0;
				$huella_hid = 0;

				//HOGAR
				require_once 'procesar_electrodomesticos.php';
				require_once 'procesar_calefaccion.php';
				require_once 'procesar_iluminacion.php';
				require_once 'procesar_actividades_diarias.php';
				// ALIMENTOS Y BEBIDAS
				require_once 'procesar_desayuno.php';
				require_once 'procesar_almuerzo.php';
				require_once 'procesar_mediatarde.php';
				require_once 'procesar_cena.php';
				// TRANSPORTE
				require_once 'procesar_viajes_diarios.php';
				require_once 'procesar_vacaciones_verano.php';
				require_once 'procesar_vacaciones_invierno.php';

				$huella_eco = 	$electro_huella_eco
								+ $calefaccion_huella_eco
								+ $iluminacion_huella_eco
								+ $act_diarias_huella_eco
								+ $alim_desayuno_huella_eco
								+ $alim_almuerzo_huella_eco
								+ $alim_mediatarde_huella_eco
								+ $alim_cena_huella_eco
								+ $viajes_diarios_huella_eco
								+ $vacas_verano_huella_eco
								+ $vacas_invierno_huella_eco ;

				$huella_car = 	$electro_huella_car
								+ $calefaccion_huella_car
								+ $iluminacion_huella_car
								+ $act_diarias_huella_car
								+ $alim_desayuno_huella_car
								+ $alim_almuerzo_huella_car
								+ $alim_mediatarde_huella_car
								+ $alim_cena_huella_car
								+ $viajes_diarios_huella_car
								+ $vacas_verano_huella_car
								+ $vacas_invierno_huella_car ;

				$huella_hid = 	$electro_huella_hid
								+ $calefaccion_huella_hid
								+ $iluminacion_huella_hid
								+ $act_diarias_huella_hid
								+ $alim_desayuno_huella_hid
								+ $alim_almuerzo_huella_hid
								+ $alim_mediatarde_huella_hid
								+ $alim_cena_huella_hid
								+ $viajes_diarios_huella_hid
								+ $vacas_verano_huella_hid
								+ $vacas_invierno_huella_hid ;

				$_SESSION['resultados'] = [
					'hogar' => [
						'electro' => [
							'eco' => $electro_huella_eco,
							'car' => $electro_huella_car,
							'hid' => $electro_huella_hid,
						],
						'calefaccion' => [
							'eco' => $calefaccion_huella_eco,
							'car' => $calefaccion_huella_car,
							'hid' => $calefaccion_huella_hid,
						],
						'iluminacion' => [
							'eco' => $iluminacion_huella_eco,
							'car' => $iluminacion_huella_car,
							'hid' => $iluminacion_huella_hid,
						],
						'act_diarias' => [
							'eco' => $act_diarias_huella_eco,
							'car' => $act_diarias_huella_car,
							'hid' => $act_diarias_huella_hid,
						],
					],
					'alimentos' => [
						'desayuno' => [
							'eco' => $alim_desayuno_huella_eco,
							'car' => $alim_desayuno_huella_car,
							'hid' => $alim_desayuno_huella_hid,
						],
						'almuerzo' => [
							'eco' => $alim_almuerzo_huella_eco,
							'car' => $alim_almuerzo_huella_car,
							'hid' => $alim_almuerzo_huella_hid,
						],
						'mediatarde' => [
							'eco' => $alim_mediatarde_huella_eco,
							'car' => $alim_mediatarde_huella_car,
							'hid' => $alim_mediatarde_huella_hid,
						],
						'cena' => [
							'eco' => $alim_cena_huella_eco,
							'car' => $alim_cena_huella_car,
							'hid' => $alim_cena_huella_hid,
						],
					],
					'transporte' => [
						'viajes_diarios' => [
							'eco' => $viajes_diarios_huella_eco,
							'car' => $viajes_diarios_huella_car,
							'hid' => $viajes_diarios_huella_hid,
						],
						'vacas_verano' => [
							'eco' => $vacas_verano_huella_eco,
							'car' => $vacas_verano_huella_car,
							'hid' => $vacas_verano_huella_hid,
						],
						'vacas_invierno' => [
							'eco' => $vacas_invierno_huella_eco,
							'car' => $vacas_invierno_huella_car,
							'hid' => $vacas_invierno_huella_hid,
						],
					],
					'eco' => $huella_eco,
					'car' => $huella_car,
					'hid' => $huella_hid,
				];
			break;
		}
		$salida['success'] = true;
	}
}

// POST not used currently; reserved for future use
if(!empty($_POST)){
	// no-op
}

echo array2json($salida);
exit;