<?php
require_once 'header.php';
$_SESSION['paso'] = 'resultados';

// Preparar valores seguros para la vista
$res = $_SESSION['resultados'] ?? [];
$ecoDiario = (float)($res['eco'] ?? 0.0);
$carDiario = (float)($res['car'] ?? 0.0);
$hidDiario = (float)($res['hid'] ?? 0.0);

$ecoAnual = round($ecoDiario * 365, 4);
$planetas = round(($ecoDiario * 365) / 1.8, 2);
$planetasRounded4 = round(($ecoDiario * 365) / 1.8, 4); // para pluralización como el original

$carAnual = round($carDiario * 365, 4);
$viajesUSA = (int)ceil(($carDiario * 365) / 853.2);

$hidAnual = round($hidDiario * 365, 4);
$piletas = round(($hidDiario * 365) / 1250000, 4);
?>
<?php //echo (json_encode($_SESSION)) ?>
<div id="paso2_img2"><a href="javascript:;" onclick="loadPage('info');"><img src="images/1x1.gif" class="ubicateLoadInfo" border="0" /></a></div>
<div id="resultados">

<img src="images/1x1.gif" width="1" height="1" alt="Acerca del Grupo CLIOPE" class="titulo_resultado" />
<div class="ecologica">
	<img src="images/1x1.gif" width="1" height="1" /><p>Tu HUELLA ECOLOGICA es de <strong><?php echo $ecoAnual; ?> hect&aacute;reas</strong>, si todos consumieramos como vos, necesitar&iacute;amos <strong><?php echo $planetas; ?> planeta<?php echo ($planetasRounded4 == 1 ? '' : 's'); ?></strong> para mantenernos... </p>
</div>
<div class="carbono">
	<img src="images/1x1.gif" width="1" height="1" />
	<p> Tu HUELLA  DE CARBONO es de <strong><?php echo $carAnual; ?> kg CO2</strong>, tus emisiones en un a&ntilde;o equivalen a <strong><?php echo $viajesUSA; ?> viajes a Estados Unidos (ida y vuelta)</strong> con tu familia...</p>
</div>
<div class="hidrica">
	<img src="images/1x1.gif" width="1" height="1" />
<p> Tu HUELLA  HIDRICA es de <strong><?php echo $hidAnual; ?> litros</strong>, es como si necesitaras <strong><?php echo $piletas; ?> pileta<?php echo (($piletas == 1) ? '' : 's'); ?></strong> ol&iacute;mpicas de agua por a&ntilde;o..</p>
</div>
<p>&nbsp;</p>

<div id="navegacion">
    <a href="javascript:;" onclick="window.location.href='index.php?p=paso1';" class="btn_volveraempezar"><img src="images/1x1.gif" class="volveraempezar" border="0" /></a>
    <a href="javascript:;" onclick="goBack();" class="btn_volver"><img src="images/1x1.gif" class="volver" border="0" /></a>
    <a href="javascript:;" onclick="loadNextStep();" class="btn_siguiente"><img src="images/1x1.gif" class="siguiente" border="0" /></a>
</div>

<a href="javascript:;" onclick="loadPage('como_reducir');"><img src="images/1x1.gif" width="1" height="1" alt="C&oacute;mo puedo reducir mis huellas" class="info_nuve_reducir" border="0" /></a>
</div>

<?php 
	// Creamos un id unico (nombre de archivo por fecha)
	date_default_timezone_set('America/Argentina/Mendoza');
	$id_datos = date("Y-m-d H:i:s");
	$id_datos = str_replace(":",".",$id_datos);
	$id_datos = str_replace(" ","_",$id_datos);
	$id_datos = str_replace("-",".",$id_datos);

	// Asegurar existencia del directorio de salida
	if (!is_dir('datos_usuario')) {
		@mkdir('datos_usuario', 0777, true);
	}

	// Recoger datos de formulario con valores por defecto
	$datosForm = $_SESSION['datos']['datos'] ?? [];
	$sexo = (string)($datosForm['sexo'] ?? '');
	$edad = (string)($datosForm['edad'] ?? '');
	$provincia = (string)($datosForm['provincia'] ?? '');

	// Fila CSV para base_de_datos.txt (usar fputcsv y bloqueo)
	$row = [
		$id_datos,
		$sexo,
		$edad,
		$provincia,
		(float)($res['hogar']['electro']['eco'] ?? 0),
		(float)($res['hogar']['calefaccion']['eco'] ?? 0),
		(float)($res['hogar']['iluminacion']['eco'] ?? 0),
		(float)($res['hogar']['act_diarias']['eco'] ?? 0),
		(float)($res['alimentos']['desayuno']['eco'] ?? 0),
		(float)($res['alimentos']['almuerzo']['eco'] ?? 0),
		(float)($res['alimentos']['mediatarde']['eco'] ?? 0),
		(float)($res['alimentos']['cena']['eco'] ?? 0),
		(float)($res['transporte']['viajes_diarios']['eco'] ?? 0),
		(float)($res['transporte']['vacas_verano']['eco'] ?? 0),
		(float)($res['transporte']['vacas_invierno']['eco'] ?? 0),
		(float)($res['eco'] ?? 0),
		(float)($res['hogar']['electro']['car'] ?? 0),
		(float)($res['hogar']['calefaccion']['car'] ?? 0),
		(float)($res['hogar']['iluminacion']['car'] ?? 0),
		(float)($res['hogar']['act_diarias']['car'] ?? 0),
		(float)($res['alimentos']['desayuno']['car'] ?? 0),
		(float)($res['alimentos']['almuerzo']['car'] ?? 0),
		(float)($res['alimentos']['mediatarde']['car'] ?? 0),
		(float)($res['alimentos']['cena']['car'] ?? 0),
		(float)($res['transporte']['viajes_diarios']['car'] ?? 0),
		(float)($res['transporte']['vacas_verano']['car'] ?? 0),
		(float)($res['transporte']['vacas_invierno']['car'] ?? 0),
		(float)($res['car'] ?? 0),
		(float)($res['hogar']['electro']['hid'] ?? 0),
		(float)($res['hogar']['calefaccion']['hid'] ?? 0),
		(float)($res['hogar']['iluminacion']['hid'] ?? 0),
		(float)($res['hogar']['act_diarias']['hid'] ?? 0),
		(float)($res['alimentos']['desayuno']['hid'] ?? 0),
		(float)($res['alimentos']['almuerzo']['hid'] ?? 0),
		(float)($res['alimentos']['mediatarde']['hid'] ?? 0),
		(float)($res['alimentos']['cena']['hid'] ?? 0),
		(float)($res['transporte']['viajes_diarios']['hid'] ?? 0),
		(float)($res['transporte']['vacas_verano']['hid'] ?? 0),
		(float)($res['transporte']['vacas_invierno']['hid'] ?? 0),
		(float)($res['hid'] ?? 0),
		$ecoAnual,
		round(($ecoDiario*365)/1.8, 4),
		$carAnual,
		$viajesUSA,
		$hidAnual,
		$piletas,
		date('d-m-Y H:i:s'),
	];

	if ($fp = @fopen('base_de_datos.txt', 'a+')) {
		if (@flock($fp, LOCK_EX)) {
			@fputcsv($fp, $row);
			@flock($fp, LOCK_UN);
		}
		@fclose($fp);
	}

	// Guardamos la info detallada por usuario
	$usuarioPath = "datos_usuario/".$id_datos.".txt";
	// Crear/limpiar y escribir el ID primero
	file_put_contents($usuarioPath, "ID,".$id_datos.PHP_EOL, LOCK_EX);

	$lines = [];
	// a) Datos crudos del formulario
	if (!empty($_SESSION['datos']) && is_array($_SESSION['datos'])) {
		foreach ($_SESSION['datos'] as $k2 => $v2) {
			if (!is_array($v2)) continue;
			foreach ($v2 as $k3 => $v3) {
				$value = is_scalar($v3) ? (string)$v3 : json_encode($v3);
				$lines[] = 'datos'.'.'.$k2.'.'.$k3.','.$value;
			}
		}
	}

	// b) Resultados (estructura especial)
	if (!empty($res) && is_array($res)) {
		foreach ($res as $k2 => $v2) {
			switch ($k2) {
				case 'hogar':
				case 'alimentos':
				case 'transporte':
					foreach ($v2 as $k3 => $v3) {
						if (!is_array($v3)) continue;
						foreach ($v3 as $k4 => $v4) {
							$lines[] = 'resultados'.'.'.$k2.'.'.$k3.'.'.$k4.','.$v4;
						}
					}
					break;
				default:
					$lines[] = 'resultados'.'.'.$k2.','.$v2;
					break;
			}
		}
	}

	// c) Fecha de guardado
	$lines[] = 'Fecha,'.date('d-m-Y H:i:s');

	if (!empty($lines)) {
		file_put_contents($usuarioPath, implode(PHP_EOL, $lines).PHP_EOL, FILE_APPEND | LOCK_EX);
	}
?>