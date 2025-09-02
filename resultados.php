<?php
include("header.php");
$_SESSION['paso'] = 'resultados';
?>
<?php //echo (json_encode($_SESSION)) ?>
<div id="paso2_img2"><a href="javascript:;" onclick="loadPage('info');"><img src="images/1x1.gif" class="ubicateLoadInfo" border="0" /></a></div>
<div id="resultados">

<img src="images/1x1.gif" width="1" height="1" alt="Acerca del Grupo CLIOPE" class="titulo_resultado" />
<div class="ecologica">
	<img src="images/1x1.gif" width="1" height="1" /><p>Tu HUELLA ECOLOGICA es de <strong><?php echo round($_SESSION['resultados']['eco']*365,4)?> hect&aacute;reas</strong>, si todos consumieramos como vos, necesitar&iacute;amos <strong><?php echo round(($_SESSION['resultados']['eco']*365)/1.8,2)?> planeta<?php echo (((round(($_SESSION['resultados']['eco']*365)/1.8,4)) == 1)? '':'s')?></strong> para mantenernos... </p>
</div>
<div class="carbono">
	<img src="images/1x1.gif" width="1" height="1" />
	<p> Tu HUELLA  DE CARBONO es de <strong><?php echo round($_SESSION['resultados']['car']*365,4)?> kg CO2</strong>, tus emisiones en un a&ntilde;o equivalen a <strong><?php echo ceil(($_SESSION['resultados']['car']*365)/853.2)?> viajes a Estados Unidos (ida y vuelta)</strong> con tu familia...</p>
</div>
<div class="hidrica">
	<img src="images/1x1.gif" width="1" height="1" />
<p> Tu HUELLA  HIDRICA es de <strong><?php echo round($_SESSION['resultados']['hid']*365,4)?> litros</strong>, es como si necesitaras <strong><?php echo round(($_SESSION['resultados']['hid']*365)/1250000,4)?> pileta<?php echo (((round(($_SESSION['resultados']['hid']*365)/1250000,4)) == 1)? '':'s')?></strong> ol&iacute;mpicas de agua por a&ntilde;o..</p>
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


	//Creamos un id unico
	date_default_timezone_set('America/Argentina/Mendoza');
	$id_datos = date("Y-m-d H:i:s");
	$id_datos = str_replace(":",".",$id_datos);
	$id_datos = str_replace(" ","_",$id_datos);
	$id_datos = str_replace("-",".",$id_datos);
	//CONVERTIR NOMBRE DEL ARCHIVO POR LA FECHA

	//Guardamos la info en un archivo de texto separado por comas.
	$fp = fopen("base_de_datos.txt","a+");
	fwrite($fp, $id_datos.",".$_SESSION['datos']['datos']['sexo'].",".$_SESSION['datos']['datos']['edad'].",".$_SESSION['datos']['datos']['provincia'].",".$_SESSION['resultados']['hogar']['electro']['eco'].",".$_SESSION['resultados']['hogar']['calefaccion']['eco'].",".$_SESSION['resultados']['hogar']['iluminacion']['eco'].",".$_SESSION['resultados']['hogar']['act_diarias']['eco'].",".$_SESSION['resultados']['alimentos']['desayuno']['eco'].",".$_SESSION['resultados']['alimentos']['almuerzo']['eco'].",".$_SESSION['resultados']['alimentos']['mediatarde']['eco'].",".$_SESSION['resultados']['alimentos']['cena']['eco'].",".$_SESSION['resultados']['transporte']['viajes_diarios']['eco'].",".$_SESSION['resultados']['transporte']['vacas_verano']['eco'].",".$_SESSION['resultados']['transporte']['vacas_invierno']['eco'].",".$_SESSION['resultados']['eco'].",".$_SESSION['resultados']['hogar']['electro']['car'].",".$_SESSION['resultados']['hogar']['calefaccion']['car'].",".$_SESSION['resultados']['hogar']['iluminacion']['car'].",".$_SESSION['resultados']['hogar']['act_diarias']['car'].",".$_SESSION['resultados']['alimentos']['desayuno']['car'].",".$_SESSION['resultados']['alimentos']['almuerzo']['car'].",".$_SESSION['resultados']['alimentos']['mediatarde']['car'].",".$_SESSION['resultados']['alimentos']['cena']['car'].",".$_SESSION['resultados']['transporte']['viajes_diarios']['car'].",".$_SESSION['resultados']['transporte']['vacas_verano']['car'].",".$_SESSION['resultados']['transporte']['vacas_invierno']['car'].",".$_SESSION['resultados']['car'].",".$_SESSION['resultados']['hogar']['electro']['hid'].",".$_SESSION['resultados']['hogar']['calefaccion']['hid'].",".$_SESSION['resultados']['hogar']['iluminacion']['hid'].",".$_SESSION['resultados']['hogar']['act_diarias']['hid'].",".$_SESSION['resultados']['alimentos']['desayuno']['hid'].",".$_SESSION['resultados']['alimentos']['almuerzo']['hid'].",".$_SESSION['resultados']['alimentos']['mediatarde']['hid'].",".$_SESSION['resultados']['alimentos']['cena']['hid'].",".$_SESSION['resultados']['transporte']['viajes_diarios']['hid'].",".$_SESSION['resultados']['transporte']['vacas_verano']['hid'].",".$_SESSION['resultados']['transporte']['vacas_invierno']['hid'].",".$_SESSION['resultados']['hid'].",".round($_SESSION['resultados']['eco']*365,4).",".round(($_SESSION['resultados']['eco']*365)/1.8,4).",".round($_SESSION['resultados']['car']*365,4).",".ceil(($_SESSION['resultados']['car']*365)/853.2).",".round($_SESSION['resultados']['hid']*365,4).",".round(($_SESSION['resultados']['hid']*365)/1250000,4).",".date("d-m-Y H:i:s").PHP_EOL);
	fclose($fp);

	//Guardamos la info en un archivo de texto separado por comas.
	$fp = fopen("datos_usuario/".$id_datos.".txt", "w");
	fwrite($fp, "ID,".$id_datos.PHP_EOL);
	fclose($fp);

	foreach ($_SESSION as $k1 => $v1) {
		if ($k1 == 'datos') {
			foreach ($v1 as $k2 => $v2) {
				foreach ($v2 as $k3 => $v3) {
					//Guardamos la info en un archivo de texto separado por comas.
					$fp = fopen("datos_usuario/".$id_datos.".txt","a+");
					fwrite($fp, $k1.".".$k2.".".$k3.",".$v3.PHP_EOL);
					fclose($fp);
				}
			}
		}
	}

	foreach ($_SESSION as $k1 => $v1) {
		if ($k1 == 'resultados') {
			foreach ($v1 as $k2 => $v2) {
				switch ($k2) {
					case 'hogar':
					case 'alimentos':
					case 'transporte':
						foreach ($v2 as $k3 => $v3) {
							foreach ($v3 as $k4 => $v4) {
								//Guardamos la info en un archivo de texto separado por comas.
								$fp = fopen("datos_usuario/".$id_datos.".txt","a+");
								fwrite($fp, $k1.".".$k2.".".$k3.".".$k4.",".$v4.PHP_EOL);
								fclose($fp);
							}
						}
						break;
					default:						
						//Guardamos la info en un archivo de texto separado por comas.
						$fp = fopen("datos_usuario/".$id_datos.".txt","a+");
						fwrite($fp, $k1.".".$k2.",".$v2.PHP_EOL);
						fclose($fp);
						break;
				}
			}
		}
	}

	//Guardamos la info en un archivo de texto separado por comas.
	$fp = fopen("datos_usuario/".$id_datos.".txt","a+");
	fwrite($fp, "Fecha,".date("d-m-Y H:i:s").PHP_EOL);
	fclose($fp);
?>