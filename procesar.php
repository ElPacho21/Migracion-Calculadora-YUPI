<?php 
//require_once 'classes/PHPExcel.php';
include("header.php");
header('Content-Type: application/json');
if($_GET){
	if(isset($_GET['subpage'])){
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
				
				
				$personas = $_SESSION['datos']['hogar_p1']['personas'];
				//Declaracion de variables para los resultados
				$huella_eco = 0;
				$huella_car = 0;
				$huella_hid = 0;

				//HOGAR
				include 'procesar_electrodomesticos.php';
				include 'procesar_calefaccion.php';
				include 'procesar_iluminacion.php';
				include 'procesar_actividades_diarias.php';
				// ALIMENTOS Y BEBIDAS
				include 'procesar_desayuno.php';
				include 'procesar_almuerzo.php';
				include 'procesar_mediatarde.php';
				include 'procesar_cena.php';
				// TRANSPORTE
				include 'procesar_viajes_diarios.php';
				include 'procesar_vacaciones_verano.php';
				include 'procesar_vacaciones_invierno.php';

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

				$_SESSION['resultados'] = array(
					'hogar' => array(
						'electro' => array(
							'eco' => $electro_huella_eco,
							'car' => $electro_huella_car,
							'hid' => $electro_huella_hid,
						),
						'calefaccion' => array(
							'eco' => $calefaccion_huella_eco,
							'car' => $calefaccion_huella_car,
							'hid' => $calefaccion_huella_hid,
						),
						'iluminacion' => array(
							'eco' => $iluminacion_huella_eco,
							'car' => $iluminacion_huella_car,
							'hid' => $iluminacion_huella_hid,
						),
						'act_diarias' => array(
							'eco' => $act_diarias_huella_eco,
							'car' => $act_diarias_huella_car,
							'hid' => $act_diarias_huella_hid,
						),
					),
					'alimentos' => array(
						'desayuno' => array(
							'eco' => $alim_desayuno_huella_eco,
							'car' => $alim_desayuno_huella_car,
							'hid' => $alim_desayuno_huella_hid,
						),
						'almuerzo' => array(
							'eco' => $alim_almuerzo_huella_eco,
							'car' => $alim_almuerzo_huella_car,
							'hid' => $alim_almuerzo_huella_hid,
						),
						'mediatarde' => array(
							'eco' => $alim_mediatarde_huella_eco,
							'car' => $alim_mediatarde_huella_car,
							'hid' => $alim_mediatarde_huella_hid,
						),
						'cena' => array(
							'eco' => $alim_cena_huella_eco,
							'car' => $alim_cena_huella_car,
							'hid' => $alim_cena_huella_hid,
						),
					),
					'transporte' => array(
						'viajes_diarios' => array(
							'eco' => $viajes_diarios_huella_eco,
							'car' => $viajes_diarios_huella_car,
							'hid' => $viajes_diarios_huella_hid,
						),
						'vacas_verano' => array(
							'eco' => $vacas_verano_huella_eco,
							'car' => $vacas_verano_huella_car,
							'hid' => $vacas_verano_huella_hid,
						),
						'vacas_invierno' => array(
							'eco' => $vacas_invierno_huella_eco,
							'car' => $vacas_invierno_huella_car,
							'hid' => $vacas_invierno_huella_hid,
						),
					),
					"eco"=>$huella_eco,
					"car"=>$huella_car,
					"hid"=>$huella_hid,
				);
			break;
		}
		$salida['success'] = true;
	}else{
		$salida['success'] = false;
		$salida['mensaje'] = "bad request";
	}
}
if($_POST){
	
}
die(array2json($salida));
?>