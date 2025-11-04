
<?php
if (isset($_POST) && !empty($_POST)) {
  $sanitize = function ($value) use (&$sanitize) {
    if (is_array($value)) {
      return array_map($sanitize, $value);
    }
    if (is_string($value)) {
      $value = trim($value);
    }
    if (is_numeric($value)) {
      return $value + 0;
    }
    return $value;
  };

  $sanitized = array_map($sanitize, $_POST);
  $calculos = isset($sanitized['actividades_diarias']) && is_array($sanitized['actividades_diarias'])
    ? $sanitized['actividades_diarias']
    : array();

  $content = "<?php\n" . '$calculos = ' . var_export($calculos, true) . ";\n";
  file_put_contents('variables.php', $content, LOCK_EX);

  header('Location: ' . $_SERVER['PHP_SELF']);
  exit();
}
require_once("variables.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Calculador</title>
<style>
*{
	font-family:Verdana, Geneva, sans-serif;
	font-size:9px;
	}
input{
	width:50px;
	margin-bottom:5px;
	text-align:center;
	padding:3px;
}
</style>
<!--<meta charset="utf-8">    para que tome las ï¿½ y los tildes-->
</head>

<body>
<form action="<?= $_SERVER['PHP_SELF']?>" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><a href="http://www.sopix.net/" target="_blank"><img src="images/logo_270x100.jpg" alt="sopix" width="270" height="100" border="0" /></a></td>
    <td colspan="6" valign="bottom">Ingrese los valores correspondientes:</td>
    </tr>
  <tr>
    <td>Hogar</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7">ACTIVIDADES DIARIAS</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">&iquest;Cu&aacute;ntas veces realiz&aacute;s &eacute;stas actividades por    semana?</td>
    <td bgcolor="#FFFFEC">Agua virtual en l/unidad&nbsp;</td>
    <td bgcolor="#FFFFEC">Factor de conversion Huella Ecologica en ha/l anio</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td width="415" bgcolor="#FFFFEC">Lavar    la ropa</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][0][]" value="<?= htmlspecialchars($calculos[0][0][0][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][0][]" value="<?= htmlspecialchars($calculos[0][0][0][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Limpiar la casa con balde y/o    mopa</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][1][]" value="<?= htmlspecialchars($calculos[0][0][1][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][1][]" value="<?= htmlspecialchars($calculos[0][0][1][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Regar el jard&iacute;n</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][2][]" value="<?= htmlspecialchars($calculos[0][0][2][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][2][]" value="<?= htmlspecialchars($calculos[0][0][2][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
</tr>
  <tr>
    <td bgcolor="#FFFFEC">Lavar los platos a mano con la canilla abierta</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][3][]" value="<?= htmlspecialchars($calculos[0][0][3][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][3][]" value="<?= htmlspecialchars($calculos[0][0][3][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Lavar los platos a mano cerrando la canilla</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][4][]" value="<?= htmlspecialchars($calculos[0][0][4][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][4][]" value="<?= htmlspecialchars($calculos[0][0][4][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Lavar los platos con lavavajillas</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][5][]" value="<?= htmlspecialchars($calculos[0][0][5][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][5][]" value="<?= htmlspecialchars($calculos[0][0][5][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#FFFFEC">Lavar el auto con manguera</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][6][]" value="<?= htmlspecialchars($calculos[0][0][6][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][6][]" value="<?= htmlspecialchars($calculos[0][0][6][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#FFFFEC">Lavar el auto con hidrolavadora</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][7][]" value="<?= htmlspecialchars($calculos[0][0][7][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][7][]" value="<?= htmlspecialchars($calculos[0][0][7][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#FFFFEC">Lavar el auto con balde</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][8][]" value="<?= htmlspecialchars($calculos[0][0][8][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][8][]" value="<?= htmlspecialchars($calculos[0][0][8][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#FFFFEC">En lavadero</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][9][]" value="<?= htmlspecialchars($calculos[0][0][9][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][9][]" value="<?= htmlspecialchars($calculos[0][0][9][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#FFFFEC">No tengo</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][10][]" value="<?= htmlspecialchars($calculos[0][0][10][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][10][]" value="<?= htmlspecialchars($calculos[0][0][10][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#FFFFEC">Pileta de lona</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][11][]" value="<?= htmlspecialchars($calculos[0][0][11][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][11][]" value="<?= htmlspecialchars($calculos[0][0][11][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr> 
    <td bgcolor="#FFFFEC">Pileta fija</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][12][]" value="<?= htmlspecialchars($calculos[0][0][12][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][0][12][]" value="<?= htmlspecialchars($calculos[0][0][12][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">ELECTRODOM&Eacute;STICOS</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">&iquest;Qu&eacute;    electrodom&eacute;sticos ten&eacute;s en tu casa?</td>
    <td bgcolor="#FFFFEC">Potencia</td>
    <td bgcolor="#FFFFEC">Consumo kWh</td>
    <td bgcolor="#FFFFEC">Tiempo de funcionamiento    promedio (min/dia)</td>
    <td bgcolor="#FFFFEC">Emisiones GEI en kg CO2 eq/kWh</td>
    <td bgcolor="#FFFFEC">Factor de conversi&oacute;n Huella Ecol&oacute;gica en ha/kWh a&ntilde;o</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td width="415" bgcolor="#FFFFEC">Cafetera</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][0][]" value="<?= htmlspecialchars($calculos[0][1][0][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][0][]" value="<?= htmlspecialchars($calculos[0][1][0][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][0][]" value="<?= htmlspecialchars($calculos[0][1][0][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][0][]" value="<?= htmlspecialchars($calculos[0][1][0][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][0][]" value="<?= htmlspecialchars($calculos[0][1][0][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Tostadora</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][1][]" value="<?= htmlspecialchars($calculos[0][1][1][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][1][]" value="<?= htmlspecialchars($calculos[0][1][1][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][1][]" value="<?= htmlspecialchars($calculos[0][1][1][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][1][]" value="<?= htmlspecialchars($calculos[0][1][1][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][1][]" value="<?= htmlspecialchars($calculos[0][1][1][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Pava el&eacute;ctrica</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][2][]" value="<?= htmlspecialchars($calculos[0][1][2][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][2][]" value="<?= htmlspecialchars($calculos[0][1][2][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][2][]" value="<?= htmlspecialchars($calculos[0][1][2][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][2][]" value="<?= htmlspecialchars($calculos[0][1][2][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][2][]" value="<?= htmlspecialchars($calculos[0][1][2][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Heladera</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][3][]" value="<?= htmlspecialchars($calculos[0][1][3][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][3][]" value="<?= htmlspecialchars($calculos[0][1][3][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][3][]" value="<?= htmlspecialchars($calculos[0][1][3][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][3][]" value="<?= htmlspecialchars($calculos[0][1][3][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][3][]" value="<?= htmlspecialchars($calculos[0][1][3][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Microondas</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][4][]" value="<?= htmlspecialchars($calculos[0][1][4][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][4][]" value="<?= htmlspecialchars($calculos[0][1][4][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][4][]" value="<?= htmlspecialchars($calculos[0][1][4][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][4][]" value="<?= htmlspecialchars($calculos[0][1][4][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][4][]" value="<?= htmlspecialchars($calculos[0][1][4][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Horno el&eacute;ctrico</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][5][]" value="<?= htmlspecialchars($calculos[0][1][5][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][5][]" value="<?= htmlspecialchars($calculos[0][1][5][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][5][]" value="<?= htmlspecialchars($calculos[0][1][5][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][5][]" value="<?= htmlspecialchars($calculos[0][1][5][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][5][]" value="<?= htmlspecialchars($calculos[0][1][5][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Aspiradora</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][6][]" value="<?= htmlspecialchars($calculos[0][1][6][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][6][]" value="<?= htmlspecialchars($calculos[0][1][6][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][6][]" value="<?= htmlspecialchars($calculos[0][1][6][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][6][]" value="<?= htmlspecialchars($calculos[0][1][6][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][6][]" value="<?= htmlspecialchars($calculos[0][1][6][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Lavavajilla</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][7][]" value="<?= htmlspecialchars($calculos[0][1][7][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][7][]" value="<?= htmlspecialchars($calculos[0][1][7][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][7][]" value="<?= htmlspecialchars($calculos[0][1][7][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][7][]" value="<?= htmlspecialchars($calculos[0][1][7][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][7][]" value="<?= htmlspecialchars($calculos[0][1][7][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Cocina a gas</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][8][]" value="<?= htmlspecialchars($calculos[0][1][8][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][8][]" value="<?= htmlspecialchars($calculos[0][1][8][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][8][]" value="<?= htmlspecialchars($calculos[0][1][8][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][8][]" value="<?= htmlspecialchars($calculos[0][1][8][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][8][]" value="<?= htmlspecialchars($calculos[0][1][8][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Lavarropas&nbsp;</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][9][]" value="<?= htmlspecialchars($calculos[0][1][9][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][9][]" value="<?= htmlspecialchars($calculos[0][1][9][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][9][]" value="<?= htmlspecialchars($calculos[0][1][9][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][9][]" value="<?= htmlspecialchars($calculos[0][1][9][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][9][]" value="<?= htmlspecialchars($calculos[0][1][9][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Plancha</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][10][]" value="<?= htmlspecialchars($calculos[0][1][10][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][10][]" value="<?= htmlspecialchars($calculos[0][1][10][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][10][]" value="<?= htmlspecialchars($calculos[0][1][10][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][10][]" value="<?= htmlspecialchars($calculos[0][1][10][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][10][]" value="<?= htmlspecialchars($calculos[0][1][10][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Equipo de m&uacute;sica</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][11][]" value="<?= htmlspecialchars($calculos[0][1][11][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][11][]" value="<?= htmlspecialchars($calculos[0][1][11][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][11][]" value="<?= htmlspecialchars($calculos[0][1][11][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][11][]" value="<?= htmlspecialchars($calculos[0][1][11][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][11][]" value="<?= htmlspecialchars($calculos[0][1][11][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Hidrolavadora</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][12][]" value="<?= htmlspecialchars($calculos[0][1][12][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][12][]" value="<?= htmlspecialchars($calculos[0][1][12][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][12][]" value="<?= htmlspecialchars($calculos[0][1][12][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][12][]" value="<?= htmlspecialchars($calculos[0][1][12][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][12][]" value="<?= htmlspecialchars($calculos[0][1][12][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">TV</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][13][]" value="<?= htmlspecialchars($calculos[0][1][13][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][13][]" value="<?= htmlspecialchars($calculos[0][1][13][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][13][]" value="<?= htmlspecialchars($calculos[0][1][13][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][13][]" value="<?= htmlspecialchars($calculos[0][1][13][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][13][]" value="<?= htmlspecialchars($calculos[0][1][13][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Computadora</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][14][]" value="<?= htmlspecialchars($calculos[0][1][14][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][14][]" value="<?= htmlspecialchars($calculos[0][1][14][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][14][]" value="<?= htmlspecialchars($calculos[0][1][14][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][14][]" value="<?= htmlspecialchars($calculos[0][1][14][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][1][14][]" value="<?= htmlspecialchars($calculos[0][1][14][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">CALEFACCI&Oacute;N</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">&iquest;C&oacute;mo    calefaccionas tu casa?</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">Emisiones GEI en kg CO2 eq/kWh</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td width="415" bgcolor="#FFFFEC">Gas    Natural</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][2][0][]" value="<?= htmlspecialchars($calculos[0][2][0][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td width="415" bgcolor="#FFFFEC">Garrafas</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][2][1][]" value="<?= htmlspecialchars($calculos[0][2][1][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td width="415" bgcolor="#FFFFEC">Con electricidad</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][2][1][]" value="<?= htmlspecialchars($calculos[0][2][1][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td width="415" bgcolor="#FFFFEC">Le&ntilde;a</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][2][2][]" value="<?= htmlspecialchars($calculos[0][2][2][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">&iquest;Cu&aacute;ntos    artefactos ten&eacute;s en tu casa?</td>
    <td bgcolor="#FFFFEC">Potencia</td>
    <td bgcolor="#FFFFEC">Consumo (kcal/d&iacute;aA &oacute; kWhB)</td>
    <td bgcolor="#FFFFEC">Tiempo de funcionamiento    promedio (min/dia)</td>
    <td bgcolor="#FFFFEC">Agua virtual en l/unidad&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">Factor de conversi&oacute;n Huella    Ecol&oacute;gica en ha/kg de agua caliente a&ntilde;o para caldera y calef&oacute;n, y en ha/kWh    a&ntilde;o para estufa el&eacute;ctrica</td>
  </tr>
  <tr>
    <td width="415" bgcolor="#FFFFEC">EstufasA</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][0][]" value="<?= htmlspecialchars($calculos[0][3][0][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][0][]" value="<?= htmlspecialchars($calculos[0][3][0][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][0][]" value="<?= htmlspecialchars($calculos[0][3][0][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][0][]" value="<?= htmlspecialchars($calculos[0][3][0][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][0][]" value="<?= htmlspecialchars($calculos[0][3][0][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][0][]" value="<?= htmlspecialchars($calculos[0][3][0][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Calef&oacute;nA</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][1][]" value="<?= htmlspecialchars($calculos[0][3][1][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][1][]" value="<?= htmlspecialchars($calculos[0][3][1][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][1][]" value="<?= htmlspecialchars($calculos[0][3][1][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][1][]" value="<?= htmlspecialchars($calculos[0][3][1][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][1][]" value="<?= htmlspecialchars($calculos[0][3][1][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][1][]" value="<?= htmlspecialchars($calculos[0][3][1][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Estufas el&eacute;ctricasB</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][2][]" value="<?= htmlspecialchars($calculos[0][3][2][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][2][]" value="<?= htmlspecialchars($calculos[0][3][2][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][2][]" value="<?= htmlspecialchars($calculos[0][3][2][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][2][]" value="<?= htmlspecialchars($calculos[0][3][2][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][2][]" value="<?= htmlspecialchars($calculos[0][3][2][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][2][]" value="<?= htmlspecialchars($calculos[0][3][2][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">CalderaA</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][3][]" value="<?= htmlspecialchars($calculos[0][3][3][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][3][]" value="<?= htmlspecialchars($calculos[0][3][3][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][3][]" value="<?= htmlspecialchars($calculos[0][3][3][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][3][]" value="<?= htmlspecialchars($calculos[0][3][3][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][3][]" value="<?= htmlspecialchars($calculos[0][3][3][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][3][]" value="<?= htmlspecialchars($calculos[0][3][3][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Aire acondicionado</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][4][]" value="<?= htmlspecialchars($calculos[0][3][4][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][4][]" value="<?= htmlspecialchars($calculos[0][3][4][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][4][]" value="<?= htmlspecialchars($calculos[0][3][4][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][4][]" value="<?= htmlspecialchars($calculos[0][3][4][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][4][]" value="<?= htmlspecialchars($calculos[0][3][4][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][4][]" value="<?= htmlspecialchars($calculos[0][3][4][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Panel el&eacute;ctrico</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][5][]" value="<?= htmlspecialchars($calculos[0][3][5][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][5][]" value="<?= htmlspecialchars($calculos[0][3][5][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][5][]" value="<?= htmlspecialchars($calculos[0][3][5][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][5][]" value="<?= htmlspecialchars($calculos[0][3][5][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][5][]" value="<?= htmlspecialchars($calculos[0][3][5][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][5][]" value="<?= htmlspecialchars($calculos[0][3][5][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Caloventor</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][6][]" value="<?= htmlspecialchars($calculos[0][3][6][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][6][]" value="<?= htmlspecialchars($calculos[0][3][6][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][6][]" value="<?= htmlspecialchars($calculos[0][3][6][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][6][]" value="<?= htmlspecialchars($calculos[0][3][6][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][6][]" value="<?= htmlspecialchars($calculos[0][3][6][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][3][6][]" value="<?= htmlspecialchars($calculos[0][3][6][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">ILUMINACI&Oacute;N</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">&iquest;Cuantas    l&aacute;mparas ten&eacute;s en tu casa?</td>
    <td bgcolor="#FFFFEC">Potencia</td>
    <td bgcolor="#FFFFEC">Consumo kWh</td>
    <td bgcolor="#FFFFEC">Tiempo de funcionamiento    promedio (min/dia)</td>
    <td bgcolor="#FFFFEC">Emisiones GEI en kg CO2 eq/kWh</td>
    <td bgcolor="#FFFFEC">Factor de conversi&oacute;n Huella    Ecol&oacute;gica en ha/kWh a&ntilde;o</td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td width="415" bgcolor="#FFFFEC">L&aacute;mpara    bajo consumo</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][0][]" value="<?= htmlspecialchars($calculos[0][4][0][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][0][]" value="<?= htmlspecialchars($calculos[0][4][0][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][0][]" value="<?= htmlspecialchars($calculos[0][4][0][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][0][]" value="<?= htmlspecialchars($calculos[0][4][0][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][0][]" value="<?= htmlspecialchars($calculos[0][4][0][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td width="415" bgcolor="#FFFFEC">Tubos LED</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][1][]" value="<?= htmlspecialchars($calculos[0][4][1][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][1][]" value="<?= htmlspecialchars($calculos[0][4][1][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][1][]" value="<?= htmlspecialchars($calculos[0][4][1][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][1][]" value="<?= htmlspecialchars($calculos[0][4][1][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][1][]" value="<?= htmlspecialchars($calculos[0][4][1][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">Tubos fluorecentes</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][2][]" value="<?= htmlspecialchars($calculos[0][4][2][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][2][]" value="<?= htmlspecialchars($calculos[0][4][2][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][2][]" value="<?= htmlspecialchars($calculos[0][4][2][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][2][]" value="<?= htmlspecialchars($calculos[0][4][2][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][2][]" value="<?= htmlspecialchars($calculos[0][4][2][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFEC">L&aacute;mpara LED</td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][3][]" value="<?= htmlspecialchars($calculos[0][4][3][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][3][]" value="<?= htmlspecialchars($calculos[0][4][3][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][3][]" value="<?= htmlspecialchars($calculos[0][4][3][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][3][]" value="<?= htmlspecialchars($calculos[0][4][3][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC"><input type="text" name="actividades_diarias[0][4][3][]" value="<?= htmlspecialchars($calculos[0][4][3][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FFFFEC">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7">Alimentos</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">DESAYUNO</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">&iquest;Qu&eacute;    desayunaste ayer?</td>
    <td bgcolor="#F2ECEC">Unidad</td>
    <td bgcolor="#F2ECEC">Cantidad por porci&oacute;n</td>
    <td bgcolor="#F2ECEC">Agua virtual en l/unidad&nbsp;</td>
    <td bgcolor="#F2ECEC">Factor de conversi&oacute;n Huella    Ecol&oacute;gica en ha/kg a&ntilde;o</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td width="415" bgcolor="#F2ECEC">Pan&nbsp;</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][0][]" value="<?= htmlspecialchars($calculos[1][0][0][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][0][]" value="<?= htmlspecialchars($calculos[1][0][0][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][0][]" value="<?= htmlspecialchars($calculos[1][0][0][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][0][]" value="<?= htmlspecialchars($calculos[1][0][0][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][0][]" value="<?= htmlspecialchars($calculos[1][0][0][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Galletas&nbsp;</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][1][]" value="<?= htmlspecialchars($calculos[1][0][1][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][1][]" value="<?= htmlspecialchars($calculos[1][0][1][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][1][]" value="<?= htmlspecialchars($calculos[1][0][1][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][1][]" value="<?= htmlspecialchars($calculos[1][0][1][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][1][]" value="<?= htmlspecialchars($calculos[1][0][1][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Cereales</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][2][]" value="<?= htmlspecialchars($calculos[1][0][2][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][2][]" value="<?= htmlspecialchars($calculos[1][0][2][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][2][]" value="<?= htmlspecialchars($calculos[1][0][2][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][2][]" value="<?= htmlspecialchars($calculos[1][0][2][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][2][]" value="<?= htmlspecialchars($calculos[1][0][2][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Manteca</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][3][]" value="<?= htmlspecialchars($calculos[1][0][3][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][3][]" value="<?= htmlspecialchars($calculos[1][0][3][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][3][]" value="<?= htmlspecialchars($calculos[1][0][3][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][3][]" value="<?= htmlspecialchars($calculos[1][0][3][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][3][]" value="<?= htmlspecialchars($calculos[1][0][3][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
   <tr>
    <td bgcolor="#F2ECEC">Mermelada</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][4][]" value="<?= htmlspecialchars($calculos[1][0][4][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][4][]" value="<?= htmlspecialchars($calculos[1][0][4][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][4][]" value="<?= htmlspecialchars($calculos[1][0][4][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][4][]" value="<?= htmlspecialchars($calculos[1][0][4][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][4][]" value="<?= htmlspecialchars($calculos[1][0][4][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Queso</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][5][]" value="<?= htmlspecialchars($calculos[1][0][5][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][5][]" value="<?= htmlspecialchars($calculos[1][0][5][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][5][]" value="<?= htmlspecialchars($calculos[1][0][5][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][5][]" value="<?= htmlspecialchars($calculos[1][0][5][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][5][]" value="<?= htmlspecialchars($calculos[1][0][5][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Yogurt</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][6][]" value="<?= htmlspecialchars($calculos[1][0][6][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][6][]" value="<?= htmlspecialchars($calculos[1][0][6][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][6][]" value="<?= htmlspecialchars($calculos[1][0][6][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][6][]" value="<?= htmlspecialchars($calculos[1][0][6][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][6][]" value="<?= htmlspecialchars($calculos[1][0][6][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
   <tr>
    <td bgcolor="#F2ECEC">Tortitas</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][7][]" value="<?= htmlspecialchars($calculos[1][0][7][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][7][]" value="<?= htmlspecialchars($calculos[1][0][7][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][7][]" value="<?= htmlspecialchars($calculos[1][0][7][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][7][]" value="<?= htmlspecialchars($calculos[1][0][7][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][7][]" value="<?= htmlspecialchars($calculos[1][0][7][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
   <tr>
    <td bgcolor="#F2ECEC">Facturas</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][8][]" value="<?= htmlspecialchars($calculos[1][0][8][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][8][]" value="<?= htmlspecialchars($calculos[1][0][8][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][8][]" value="<?= htmlspecialchars($calculos[1][0][8][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][8][]" value="<?= htmlspecialchars($calculos[1][0][8][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][8][]" value="<?= htmlspecialchars($calculos[1][0][8][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Caf&eacute;</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][9][]" value="<?= htmlspecialchars($calculos[1][0][9][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][9][]" value="<?= htmlspecialchars($calculos[1][0][9][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][9][]" value="<?= htmlspecialchars($calculos[1][0][9][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][9][]" value="<?= htmlspecialchars($calculos[1][0][9][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][9][]" value="<?= htmlspecialchars($calculos[1][0][9][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Mate</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][10][]" value="<?= htmlspecialchars($calculos[1][0][10][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][10][]" value="<?= htmlspecialchars($calculos[1][0][10][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][10][]" value="<?= htmlspecialchars($calculos[1][0][10][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][10][]" value="<?= htmlspecialchars($calculos[1][0][10][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][10][]" value="<?= htmlspecialchars($calculos[1][0][10][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Leche</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][11][]" value="<?= htmlspecialchars($calculos[1][0][11][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][11][]" value="<?= htmlspecialchars($calculos[1][0][11][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][11][]" value="<?= htmlspecialchars($calculos[1][0][11][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][11][]" value="<?= htmlspecialchars($calculos[1][0][11][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][11][]" value="<?= htmlspecialchars($calculos[1][0][11][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Te</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][12][]" value="<?= htmlspecialchars($calculos[1][0][12][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][12][]" value="<?= htmlspecialchars($calculos[1][0][12][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][12][]" value="<?= htmlspecialchars($calculos[1][0][12][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][12][]" value="<?= htmlspecialchars($calculos[1][0][12][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][12][]" value="<?= htmlspecialchars($calculos[1][0][12][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Nueces/almendras/man&iacute;</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][13][]" value="<?= htmlspecialchars($calculos[1][0][13][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][13][]" value="<?= htmlspecialchars($calculos[1][0][13][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][13][]" value="<?= htmlspecialchars($calculos[1][0][13][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][13][]" value="<?= htmlspecialchars($calculos[1][0][13][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][13][]" value="<?= htmlspecialchars($calculos[1][0][13][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Jugo exprimido</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][14][]" value="<?= htmlspecialchars($calculos[1][0][14][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][14][]" value="<?= htmlspecialchars($calculos[1][0][14][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][14][]" value="<?= htmlspecialchars($calculos[1][0][14][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][14][]" value="<?= htmlspecialchars($calculos[1][0][14][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][14][]" value="<?= htmlspecialchars($calculos[1][0][14][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Fruta</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][15][]" value="<?= htmlspecialchars($calculos[1][0][15][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][15][]" value="<?= htmlspecialchars($calculos[1][0][15][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][15][]" value="<?= htmlspecialchars($calculos[1][0][15][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][15][]" value="<?= htmlspecialchars($calculos[1][0][15][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][15][]" value="<?= htmlspecialchars($calculos[1][0][15][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Chocolate</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][16][]" value="<?= htmlspecialchars($calculos[1][0][16][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][16][]" value="<?= htmlspecialchars($calculos[1][0][16][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][16][]" value="<?= htmlspecialchars($calculos[1][0][16][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][16][]" value="<?= htmlspecialchars($calculos[1][0][16][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][16][]" value="<?= htmlspecialchars($calculos[1][0][16][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Chocolatada</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][17][]" value="<?= htmlspecialchars($calculos[1][0][17][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][17][]" value="<?= htmlspecialchars($calculos[1][0][17][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][17][]" value="<?= htmlspecialchars($calculos[1][0][17][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][17][]" value="<?= htmlspecialchars($calculos[1][0][17][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][0][17][]" value="<?= htmlspecialchars($calculos[1][0][17][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">ALMUERZO</td> 
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">&iquest;Qu&eacute;    almorzaste ayer?</td>
    <td bgcolor="#F2ECEC">Unidad</td>
    <td bgcolor="#F2ECEC">Cantidad por porci&oacute;n</td>
    <td bgcolor="#F2ECEC">Agua virtual en l/unidad&nbsp;</td>
    <td bgcolor="#F2ECEC">Factor de conversi&oacute;n Huella    Ecol&oacute;gica</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td width="415" bgcolor="#F2ECEC">Huevos</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][0][]" value="<?= htmlspecialchars($calculos[1][1][0][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][0][]" value="<?= htmlspecialchars($calculos[1][1][0][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][0][]" value="<?= htmlspecialchars($calculos[1][1][0][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][0][]" value="<?= htmlspecialchars($calculos[1][1][0][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][0][]" value="<?= htmlspecialchars($calculos[1][1][0][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Verduras</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][1][]" value="<?= htmlspecialchars($calculos[1][1][1][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][1][]" value="<?= htmlspecialchars($calculos[1][1][1][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][1][]" value="<?= htmlspecialchars($calculos[1][1][1][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][1][]" value="<?= htmlspecialchars($calculos[1][1][1][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][1][]" value="<?= htmlspecialchars($calculos[1][1][1][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Frutas</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][2][]" value="<?= htmlspecialchars($calculos[1][1][2][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][2][]" value="<?= htmlspecialchars($calculos[1][1][2][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][2][]" value="<?= htmlspecialchars($calculos[1][1][2][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][2][]" value="<?= htmlspecialchars($calculos[1][1][2][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][2][]" value="<?= htmlspecialchars($calculos[1][1][2][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Ensalada</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][3][]" value="<?= htmlspecialchars($calculos[1][1][3][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][3][]" value="<?= htmlspecialchars($calculos[1][1][3][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][3][]" value="<?= htmlspecialchars($calculos[1][1][3][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][3][]" value="<?= htmlspecialchars($calculos[1][1][3][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][3][]" value="<?= htmlspecialchars($calculos[1][1][3][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Carne de pollo</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][4][]" value="<?= htmlspecialchars($calculos[1][1][4][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][4][]" value="<?= htmlspecialchars($calculos[1][1][4][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][4][]" value="<?= htmlspecialchars($calculos[1][1][4][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][4][]" value="<?= htmlspecialchars($calculos[1][1][4][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][4][]" value="<?= htmlspecialchars($calculos[1][1][4][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Carne de cerdo</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][5][]" value="<?= htmlspecialchars($calculos[1][1][5][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][5][]" value="<?= htmlspecialchars($calculos[1][1][5][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][5][]" value="<?= htmlspecialchars($calculos[1][1][5][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][5][]" value="<?= htmlspecialchars($calculos[1][1][5][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][5][]" value="<?= htmlspecialchars($calculos[1][1][5][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Carne de vaca</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][6][]" value="<?= htmlspecialchars($calculos[1][1][6][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][6][]" value="<?= htmlspecialchars($calculos[1][1][6][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][6][]" value="<?= htmlspecialchars($calculos[1][1][6][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][6][]" value="<?= htmlspecialchars($calculos[1][1][6][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][6][]" value="<?= htmlspecialchars($calculos[1][1][6][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Hamburguesa</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][7][]" value="<?= htmlspecialchars($calculos[1][1][7][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][7][]" value="<?= htmlspecialchars($calculos[1][1][7][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][7][]" value="<?= htmlspecialchars($calculos[1][1][7][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][7][]" value="<?= htmlspecialchars($calculos[1][1][7][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][7][]" value="<?= htmlspecialchars($calculos[1][1][7][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Arroz</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][8][]" value="<?= htmlspecialchars($calculos[1][1][8][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][8][]" value="<?= htmlspecialchars($calculos[1][1][8][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][8][]" value="<?= htmlspecialchars($calculos[1][1][8][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][8][]" value="<?= htmlspecialchars($calculos[1][1][8][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][8][]" value="<?= htmlspecialchars($calculos[1][1][8][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Pescado</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][9][]" value="<?= htmlspecialchars($calculos[1][1][9][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][9][]" value="<?= htmlspecialchars($calculos[1][1][9][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][9][]" value="<?= htmlspecialchars($calculos[1][1][9][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][9][]" value="<?= htmlspecialchars($calculos[1][1][9][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][9][]" value="<?= htmlspecialchars($calculos[1][1][9][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Sandwich</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][10][]" value="<?= htmlspecialchars($calculos[1][1][10][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][10][]" value="<?= htmlspecialchars($calculos[1][1][10][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][10][]" value="<?= htmlspecialchars($calculos[1][1][10][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][10][]" value="<?= htmlspecialchars($calculos[1][1][10][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][10][]" value="<?= htmlspecialchars($calculos[1][1][10][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Choripan</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][11][]" value="<?= htmlspecialchars($calculos[1][1][11][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][11][]" value="<?= htmlspecialchars($calculos[1][1][11][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][11][]" value="<?= htmlspecialchars($calculos[1][1][11][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][11][]" value="<?= htmlspecialchars($calculos[1][1][11][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][11][]" value="<?= htmlspecialchars($calculos[1][1][11][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Pastas</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][12][]" value="<?= htmlspecialchars($calculos[1][1][12][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][12][]" value="<?= htmlspecialchars($calculos[1][1][12][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][12][]" value="<?= htmlspecialchars($calculos[1][1][12][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][12][]" value="<?= htmlspecialchars($calculos[1][1][12][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][12][]" value="<?= htmlspecialchars($calculos[1][1][12][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Trigo</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][13][]" value="<?= htmlspecialchars($calculos[1][1][13][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][13][]" value="<?= htmlspecialchars($calculos[1][1][13][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][13][]" value="<?= htmlspecialchars($calculos[1][1][13][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][13][]" value="<?= htmlspecialchars($calculos[1][1][13][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][13][]" value="<?= htmlspecialchars($calculos[1][1][13][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Polenta</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][14][]" value="<?= htmlspecialchars($calculos[1][1][14][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][14][]" value="<?= htmlspecialchars($calculos[1][1][14][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][14][]" value="<?= htmlspecialchars($calculos[1][1][14][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][14][]" value="<?= htmlspecialchars($calculos[1][1][14][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][14][]" value="<?= htmlspecialchars($calculos[1][1][14][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Porotos/lentejas/soja</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][15][]" value="<?= htmlspecialchars($calculos[1][1][15][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][15][]" value="<?= htmlspecialchars($calculos[1][1][15][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][15][]" value="<?= htmlspecialchars($calculos[1][1][15][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][15][]" value="<?= htmlspecialchars($calculos[1][1][15][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][15][]" value="<?= htmlspecialchars($calculos[1][1][15][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Pan&nbsp;</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][16][]" value="<?= htmlspecialchars($calculos[1][1][16][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][16][]" value="<?= htmlspecialchars($calculos[1][1][16][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][16][]" value="<?= htmlspecialchars($calculos[1][1][16][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][16][]" value="<?= htmlspecialchars($calculos[1][1][16][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][16][]" value="<?= htmlspecialchars($calculos[1][1][16][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Cerveza</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][17][]" value="<?= htmlspecialchars($calculos[1][1][17][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][17][]" value="<?= htmlspecialchars($calculos[1][1][17][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][17][]" value="<?= htmlspecialchars($calculos[1][1][17][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][17][]" value="<?= htmlspecialchars($calculos[1][1][17][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][17][]" value="<?= htmlspecialchars($calculos[1][1][17][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
   <tr>
    <td bgcolor="#F2ECEC">Vino</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][18][]" value="<?= htmlspecialchars($calculos[1][1][18][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][18][]" value="<?= htmlspecialchars($calculos[1][1][18][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][18][]" value="<?= htmlspecialchars($calculos[1][1][18][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][18][]" value="<?= htmlspecialchars($calculos[1][1][18][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][18][]" value="<?= htmlspecialchars($calculos[1][1][18][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Jugo exprimido</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][19][]" value="<?= htmlspecialchars($calculos[1][1][19][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][19][]" value="<?= htmlspecialchars($calculos[1][1][19][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][19][]" value="<?= htmlspecialchars($calculos[1][1][19][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][19][]" value="<?= htmlspecialchars($calculos[1][1][19][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][19][]" value="<?= htmlspecialchars($calculos[1][1][19][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Gaseosas</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][20][]" value="<?= htmlspecialchars($calculos[1][1][20][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][20][]" value="<?= htmlspecialchars($calculos[1][1][20][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][20][]" value="<?= htmlspecialchars($calculos[1][1][20][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][20][]" value="<?= htmlspecialchars($calculos[1][1][20][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][20][]" value="<?= htmlspecialchars($calculos[1][1][20][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Agua</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][21][]" value="<?= htmlspecialchars($calculos[1][1][21][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][21][]" value="<?= htmlspecialchars($calculos[1][1][21][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][21][]" value="<?= htmlspecialchars($calculos[1][1][21][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][21][]" value="<?= htmlspecialchars($calculos[1][1][21][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][21][]" value="<?= htmlspecialchars($calculos[1][1][21][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Soda</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][22][]" value="<?= htmlspecialchars($calculos[1][1][22][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][22][]" value="<?= htmlspecialchars($calculos[1][1][22][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][22][]" value="<?= htmlspecialchars($calculos[1][1][22][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][22][]" value="<?= htmlspecialchars($calculos[1][1][22][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][1][22][]" value="<?= htmlspecialchars($calculos[1][1][22][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">MEDIATARDE</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">&iquest;Qu&eacute;    tomaste de mediatarde ayer?</td>
    <td bgcolor="#F2ECEC">Unidad</td>
    <td bgcolor="#F2ECEC">Cantidad por porci&oacute;n</td>
    <td bgcolor="#F2ECEC">Agua virtual en l/unidad&nbsp;</td>
    <td bgcolor="#F2ECEC">Factor de conversi&oacute;n Huella    Ecol&oacute;gica</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td width="415" bgcolor="#F2ECEC">Pan&nbsp;</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][0][]" value="<?= htmlspecialchars($calculos[1][2][0][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][0][]" value="<?= htmlspecialchars($calculos[1][2][0][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][0][]" value="<?= htmlspecialchars($calculos[1][2][0][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][0][]" value="<?= htmlspecialchars($calculos[1][2][0][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][0][]" value="<?= htmlspecialchars($calculos[1][2][0][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Galletas&nbsp;</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][1][]" value="<?= htmlspecialchars($calculos[1][2][1][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][1][]" value="<?= htmlspecialchars($calculos[1][2][1][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][1][]" value="<?= htmlspecialchars($calculos[1][2][1][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][1][]" value="<?= htmlspecialchars($calculos[1][2][1][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][1][]" value="<?= htmlspecialchars($calculos[1][2][1][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Cereales</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][2][]" value="<?= htmlspecialchars($calculos[1][2][2][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][2][]" value="<?= htmlspecialchars($calculos[1][2][2][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][2][]" value="<?= htmlspecialchars($calculos[1][2][2][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][2][]" value="<?= htmlspecialchars($calculos[1][2][2][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][2][]" value="<?= htmlspecialchars($calculos[1][2][2][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Manteca</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][3][]" value="<?= htmlspecialchars($calculos[1][2][3][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][3][]" value="<?= htmlspecialchars($calculos[1][2][3][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][3][]" value="<?= htmlspecialchars($calculos[1][2][3][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][3][]" value="<?= htmlspecialchars($calculos[1][2][3][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][3][]" value="<?= htmlspecialchars($calculos[1][2][3][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Mermelada</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][4][]" value="<?= htmlspecialchars($calculos[1][2][4][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][4][]" value="<?= htmlspecialchars($calculos[1][2][4][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][4][]" value="<?= htmlspecialchars($calculos[1][2][4][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][4][]" value="<?= htmlspecialchars($calculos[1][2][4][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][4][]" value="<?= htmlspecialchars($calculos[1][2][4][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Queso</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][5][]" value="<?= htmlspecialchars($calculos[1][2][5][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][5][]" value="<?= htmlspecialchars($calculos[1][2][5][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][5][]" value="<?= htmlspecialchars($calculos[1][2][5][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][5][]" value="<?= htmlspecialchars($calculos[1][2][5][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][5][]" value="<?= htmlspecialchars($calculos[1][2][5][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Yogurt</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][6][]" value="<?= htmlspecialchars($calculos[1][2][6][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][6][]" value="<?= htmlspecialchars($calculos[1][2][6][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][6][]" value="<?= htmlspecialchars($calculos[1][2][6][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][6][]" value="<?= htmlspecialchars($calculos[1][2][6][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][6][]" value="<?= htmlspecialchars($calculos[1][2][6][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Tortitas</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][7][]" value="<?= htmlspecialchars($calculos[1][2][7][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][7][]" value="<?= htmlspecialchars($calculos[1][2][7][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][7][]" value="<?= htmlspecialchars($calculos[1][2][7][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][7][]" value="<?= htmlspecialchars($calculos[1][2][7][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][7][]" value="<?= htmlspecialchars($calculos[1][2][7][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Facturas</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][8][]" value="<?= htmlspecialchars($calculos[1][2][8][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][8][]" value="<?= htmlspecialchars($calculos[1][2][8][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][8][]" value="<?= htmlspecialchars($calculos[1][2][8][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][8][]" value="<?= htmlspecialchars($calculos[1][2][8][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][8][]" value="<?= htmlspecialchars($calculos[1][2][8][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Caf&eacute;</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][9][]" value="<?= htmlspecialchars($calculos[1][2][9][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][9][]" value="<?= htmlspecialchars($calculos[1][2][9][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][9][]" value="<?= htmlspecialchars($calculos[1][2][9][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][9][]" value="<?= htmlspecialchars($calculos[1][2][9][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][9][]" value="<?= htmlspecialchars($calculos[1][2][9][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Mate</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][10][]" value="<?= htmlspecialchars($calculos[1][2][10][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][10][]" value="<?= htmlspecialchars($calculos[1][2][10][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][10][]" value="<?= htmlspecialchars($calculos[1][2][10][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][10][]" value="<?= htmlspecialchars($calculos[1][2][10][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][10][]" value="<?= htmlspecialchars($calculos[1][2][10][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Leche</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][11][]" value="<?= htmlspecialchars($calculos[1][2][11][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][11][]" value="<?= htmlspecialchars($calculos[1][2][11][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][11][]" value="<?= htmlspecialchars($calculos[1][2][11][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][11][]" value="<?= htmlspecialchars($calculos[1][2][11][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][11][]" value="<?= htmlspecialchars($calculos[1][2][11][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">T&eacute;&nbsp;</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][12][]" value="<?= htmlspecialchars($calculos[1][2][12][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][12][]" value="<?= htmlspecialchars($calculos[1][2][12][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][12][]" value="<?= htmlspecialchars($calculos[1][2][12][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][12][]" value="<?= htmlspecialchars($calculos[1][2][12][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][12][]" value="<?= htmlspecialchars($calculos[1][2][12][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Nueces/almendras/man&iacute;</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][13][]" value="<?= htmlspecialchars($calculos[1][2][13][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][13][]" value="<?= htmlspecialchars($calculos[1][2][13][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][13][]" value="<?= htmlspecialchars($calculos[1][2][13][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][13][]" value="<?= htmlspecialchars($calculos[1][2][13][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][13][]" value="<?= htmlspecialchars($calculos[1][2][13][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Jugo exprimido</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][14][]" value="<?= htmlspecialchars($calculos[1][2][14][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][14][]" value="<?= htmlspecialchars($calculos[1][2][14][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][14][]" value="<?= htmlspecialchars($calculos[1][2][14][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][14][]" value="<?= htmlspecialchars($calculos[1][2][14][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][14][]" value="<?= htmlspecialchars($calculos[1][2][14][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Fruta</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][15][]" value="<?= htmlspecialchars($calculos[1][2][15][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][15][]" value="<?= htmlspecialchars($calculos[1][2][15][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][15][]" value="<?= htmlspecialchars($calculos[1][2][15][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][15][]" value="<?= htmlspecialchars($calculos[1][2][15][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][15][]" value="<?= htmlspecialchars($calculos[1][2][15][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Chocolate</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][16][]" value="<?= htmlspecialchars($calculos[1][2][16][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][16][]" value="<?= htmlspecialchars($calculos[1][2][16][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][16][]" value="<?= htmlspecialchars($calculos[1][2][16][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][16][]" value="<?= htmlspecialchars($calculos[1][2][16][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][16][]" value="<?= htmlspecialchars($calculos[1][2][16][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Chocolatada</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][17][]" value="<?= htmlspecialchars($calculos[1][2][17][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][17][]" value="<?= htmlspecialchars($calculos[1][2][17][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][17][]" value="<?= htmlspecialchars($calculos[1][2][17][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][17][]" value="<?= htmlspecialchars($calculos[1][2][17][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][2][17][]" value="<?= htmlspecialchars($calculos[1][2][17][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">CENA</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">&iquest;Qu&eacute;    cenaste ayer?</td>
    <td bgcolor="#F2ECEC">Unidad</td>
    <td bgcolor="#F2ECEC">Cantidad por porci&oacute;n</td>
    <td bgcolor="#F2ECEC">Agua virtual en l/unidad&nbsp;</td>
    <td bgcolor="#F2ECEC">Factor de conversi&oacute;n Huella    Ecol&oacute;gica</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td width="415" bgcolor="#F2ECEC">Huevos</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][0][]" value="<?= htmlspecialchars($calculos[1][3][0][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][0][]" value="<?= htmlspecialchars($calculos[1][3][0][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][0][]" value="<?= htmlspecialchars($calculos[1][3][0][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][0][]" value="<?= htmlspecialchars($calculos[1][3][0][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][0][]" value="<?= htmlspecialchars($calculos[1][3][0][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Verduras</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][1][]" value="<?= htmlspecialchars($calculos[1][3][1][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][1][]" value="<?= htmlspecialchars($calculos[1][3][1][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][1][]" value="<?= htmlspecialchars($calculos[1][3][1][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][1][]" value="<?= htmlspecialchars($calculos[1][3][1][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][1][]" value="<?= htmlspecialchars($calculos[1][3][1][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Frutas</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][2][]" value="<?= htmlspecialchars($calculos[1][3][2][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][2][]" value="<?= htmlspecialchars($calculos[1][3][2][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][2][]" value="<?= htmlspecialchars($calculos[1][3][2][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][2][]" value="<?= htmlspecialchars($calculos[1][3][2][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][2][]" value="<?= htmlspecialchars($calculos[1][3][2][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Ensaladas</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][3][]" value="<?= htmlspecialchars($calculos[1][3][3][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][3][]" value="<?= htmlspecialchars($calculos[1][3][3][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][3][]" value="<?= htmlspecialchars($calculos[1][3][3][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][3][]" value="<?= htmlspecialchars($calculos[1][3][3][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][3][]" value="<?= htmlspecialchars($calculos[1][3][3][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Carne de pollo</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][4][]" value="<?= htmlspecialchars($calculos[1][3][4][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][4][]" value="<?= htmlspecialchars($calculos[1][3][4][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][4][]" value="<?= htmlspecialchars($calculos[1][3][4][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][4][]" value="<?= htmlspecialchars($calculos[1][3][4][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][4][]" value="<?= htmlspecialchars($calculos[1][3][4][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Carne de cerdo</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][5][]" value="<?= htmlspecialchars($calculos[1][3][5][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][5][]" value="<?= htmlspecialchars($calculos[1][3][5][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][5][]" value="<?= htmlspecialchars($calculos[1][3][5][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][5][]" value="<?= htmlspecialchars($calculos[1][3][5][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][5][]" value="<?= htmlspecialchars($calculos[1][3][5][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Carne de vaca</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][6][]" value="<?= htmlspecialchars($calculos[1][3][6][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][6][]" value="<?= htmlspecialchars($calculos[1][3][6][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][6][]" value="<?= htmlspecialchars($calculos[1][3][6][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][6][]" value="<?= htmlspecialchars($calculos[1][3][6][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][6][]" value="<?= htmlspecialchars($calculos[1][3][6][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Hamburguesa</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][7][]" value="<?= htmlspecialchars($calculos[1][3][7][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][7][]" value="<?= htmlspecialchars($calculos[1][3][7][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][7][]" value="<?= htmlspecialchars($calculos[1][3][7][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][7][]" value="<?= htmlspecialchars($calculos[1][3][7][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][7][]" value="<?= htmlspecialchars($calculos[1][3][7][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Arroz</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][8][]" value="<?= htmlspecialchars($calculos[1][3][8][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][8][]" value="<?= htmlspecialchars($calculos[1][3][8][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][8][]" value="<?= htmlspecialchars($calculos[1][3][8][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][8][]" value="<?= htmlspecialchars($calculos[1][3][8][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][8][]" value="<?= htmlspecialchars($calculos[1][3][8][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Pescado</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][9][]" value="<?= htmlspecialchars($calculos[1][3][9][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][9][]" value="<?= htmlspecialchars($calculos[1][3][9][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][9][]" value="<?= htmlspecialchars($calculos[1][3][9][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][9][]" value="<?= htmlspecialchars($calculos[1][3][9][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][9][]" value="<?= htmlspecialchars($calculos[1][3][9][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr><tr>
    <td bgcolor="#F2ECEC">Sandwich</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][10][]" value="<?= htmlspecialchars($calculos[1][3][10][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][10][]" value="<?= htmlspecialchars($calculos[1][3][10][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][10][]" value="<?= htmlspecialchars($calculos[1][3][10][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][10][]" value="<?= htmlspecialchars($calculos[1][3][10][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][10][]" value="<?= htmlspecialchars($calculos[1][3][10][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr><tr>
    <td bgcolor="#F2ECEC">Choripan</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][11][]" value="<?= htmlspecialchars($calculos[1][3][11][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][11][]" value="<?= htmlspecialchars($calculos[1][3][11][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][11][]" value="<?= htmlspecialchars($calculos[1][3][11][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][11][]" value="<?= htmlspecialchars($calculos[1][3][11][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][11][]" value="<?= htmlspecialchars($calculos[1][3][11][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Pastas</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][12][]" value="<?= htmlspecialchars($calculos[1][3][12][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][12][]" value="<?= htmlspecialchars($calculos[1][3][12][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][12][]" value="<?= htmlspecialchars($calculos[1][3][12][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][12][]" value="<?= htmlspecialchars($calculos[1][3][12][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][12][]" value="<?= htmlspecialchars($calculos[1][3][12][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Trigo</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][13][]" value="<?= htmlspecialchars($calculos[1][3][13][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][13][]" value="<?= htmlspecialchars($calculos[1][3][13][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][13][]" value="<?= htmlspecialchars($calculos[1][3][13][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][13][]" value="<?= htmlspecialchars($calculos[1][3][13][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][13][]" value="<?= htmlspecialchars($calculos[1][3][13][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Polenta</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][14][]" value="<?= htmlspecialchars($calculos[1][3][14][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][14][]" value="<?= htmlspecialchars($calculos[1][3][14][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][14][]" value="<?= htmlspecialchars($calculos[1][3][14][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][14][]" value="<?= htmlspecialchars($calculos[1][3][14][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][14][]" value="<?= htmlspecialchars($calculos[1][3][14][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Porotos/lentejas/soja</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][15][]" value="<?= htmlspecialchars($calculos[1][3][15][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][15][]" value="<?= htmlspecialchars($calculos[1][3][15][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][15][]" value="<?= htmlspecialchars($calculos[1][3][15][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][15][]" value="<?= htmlspecialchars($calculos[1][3][15][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][15][]" value="<?= htmlspecialchars($calculos[1][3][15][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Pan</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][16][]" value="<?= htmlspecialchars($calculos[1][3][16][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][16][]" value="<?= htmlspecialchars($calculos[1][3][16][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][16][]" value="<?= htmlspecialchars($calculos[1][3][16][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][16][]" value="<?= htmlspecialchars($calculos[1][3][16][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][16][]" value="<?= htmlspecialchars($calculos[1][3][16][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Cerveza</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][17][]" value="<?= htmlspecialchars($calculos[1][3][17][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][17][]" value="<?= htmlspecialchars($calculos[1][3][17][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][17][]" value="<?= htmlspecialchars($calculos[1][3][17][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][17][]" value="<?= htmlspecialchars($calculos[1][3][17][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][17][]" value="<?= htmlspecialchars($calculos[1][3][17][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Vino</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][18][]" value="<?= htmlspecialchars($calculos[1][3][18][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][18][]" value="<?= htmlspecialchars($calculos[1][3][18][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][18][]" value="<?= htmlspecialchars($calculos[1][3][18][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][18][]" value="<?= htmlspecialchars($calculos[1][3][18][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][18][]" value="<?= htmlspecialchars($calculos[1][3][18][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Jugo exprimido</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][19][]" value="<?= htmlspecialchars($calculos[1][3][19][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][19][]" value="<?= htmlspecialchars($calculos[1][3][19][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][19][]" value="<?= htmlspecialchars($calculos[1][3][19][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][19][]" value="<?= htmlspecialchars($calculos[1][3][19][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][19][]" value="<?= htmlspecialchars($calculos[1][3][19][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Gaseosas</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][20][]" value="<?= htmlspecialchars($calculos[1][3][20][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][20][]" value="<?= htmlspecialchars($calculos[1][3][20][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][20][]" value="<?= htmlspecialchars($calculos[1][3][20][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][20][]" value="<?= htmlspecialchars($calculos[1][3][20][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][20][]" value="<?= htmlspecialchars($calculos[1][3][20][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Agua</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][21][]" value="<?= htmlspecialchars($calculos[1][3][21][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][21][]" value="<?= htmlspecialchars($calculos[1][3][21][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][21][]" value="<?= htmlspecialchars($calculos[1][3][21][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][21][]" value="<?= htmlspecialchars($calculos[1][3][21][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][21][]" value="<?= htmlspecialchars($calculos[1][3][21][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#F2ECEC">Soda</td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][22][]" value="<?= htmlspecialchars($calculos[1][3][22][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][22][]" value="<?= htmlspecialchars($calculos[1][3][22][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][22][]" value="<?= htmlspecialchars($calculos[1][3][22][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][22][]" value="<?= htmlspecialchars($calculos[1][3][22][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC"><input type="text" name="actividades_diarias[1][3][22][]" value="<?= htmlspecialchars($calculos[1][3][22][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
    <td bgcolor="#F2ECEC">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7">TRANSPORTE</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">VIAJES DIARIOS</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">En qu&eacute;    vas a la escuela o al trabajo?</td>
    <td bgcolor="#FDEFEA">Viaje ida y vuelta</td>
    <td bgcolor="#FDEFEA">Consumo de combustible (kWh/km    pasajero)</td>
    <td bgcolor="#FDEFEA">Agua virtual en l/kWh</td>
    <td bgcolor="#FDEFEA">Emisiones GEI en kg CO2 eq/Km</td>
    <td bgcolor="#FDEFEA">Factor de conversi&oacute;n Huella    Ecol&oacute;gica en ha/kWh a&ntilde;o</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td width="415" bgcolor="#FDEFEA">A pie</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][0][]" value="<?= htmlspecialchars($calculos[2][0][0][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][0][]" value="<?= htmlspecialchars($calculos[2][0][0][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][0][]" value="<?= htmlspecialchars($calculos[2][0][0][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][0][]" value="<?= htmlspecialchars($calculos[2][0][0][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][0][]" value="<?= htmlspecialchars($calculos[2][0][0][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][0][]" value="<?= htmlspecialchars($calculos[2][0][0][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">Bicicleta</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][1][]" value="<?= htmlspecialchars($calculos[2][0][1][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][1][]" value="<?= htmlspecialchars($calculos[2][0][1][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][1][]" value="<?= htmlspecialchars($calculos[2][0][1][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][1][]" value="<?= htmlspecialchars($calculos[2][0][1][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][1][]" value="<?= htmlspecialchars($calculos[2][0][1][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][1][]" value="<?= htmlspecialchars($calculos[2][0][1][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">Transporte escolar</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][2][]" value="<?= htmlspecialchars($calculos[2][0][2][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][2][]" value="<?= htmlspecialchars($calculos[2][0][2][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][2][]" value="<?= htmlspecialchars($calculos[2][0][2][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][2][]" value="<?= htmlspecialchars($calculos[2][0][2][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][2][]" value="<?= htmlspecialchars($calculos[2][0][2][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][2][]" value="<?= htmlspecialchars($calculos[2][0][2][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">Colectivo</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][3][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][3][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][3][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][3][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][3][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][3][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">Subte</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][4][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][4][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][4][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][4][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][4][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][4][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">Tren</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][5][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][5][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][5][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][5][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][5][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][5][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">Tranvia</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][6][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][6][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][6][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][6][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][6][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][6][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">Trolebus</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][7][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][7][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][7][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][7][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][7][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][7][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">Moto</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][8][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][8][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][8][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][8][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][8][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][3][]" value="<?= htmlspecialchars($calculos[2][0][8][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">Taxi (1 pasajero)</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][4][]" value="<?= htmlspecialchars($calculos[2][0][9][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][4][]" value="<?= htmlspecialchars($calculos[2][0][9][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][4][]" value="<?= htmlspecialchars($calculos[2][0][9][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][4][]" value="<?= htmlspecialchars($calculos[2][0][9][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][4][]" value="<?= htmlspecialchars($calculos[2][0][9][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][4][]" value="<?= htmlspecialchars($calculos[2][0][9][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">Taxi (compartido)</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][5][]" value="<?= htmlspecialchars($calculos[2][0][10][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][5][]" value="<?= htmlspecialchars($calculos[2][0][10][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][5][]" value="<?= htmlspecialchars($calculos[2][0][10][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][5][]" value="<?= htmlspecialchars($calculos[2][0][10][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][5][]" value="<?= htmlspecialchars($calculos[2][0][10][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][5][]" value="<?= htmlspecialchars($calculos[2][0][10][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">Autom&oacute;vil (1 persona)</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][6][]" value="<?= htmlspecialchars($calculos[2][0][11][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][6][]" value="<?= htmlspecialchars($calculos[2][0][11][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][6][]" value="<?= htmlspecialchars($calculos[2][0][11][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][6][]" value="<?= htmlspecialchars($calculos[2][0][11][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][6][]" value="<?= htmlspecialchars($calculos[2][0][11][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][6][]" value="<?= htmlspecialchars($calculos[2][0][11][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">Autom&oacute;vil (compartido)</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][7][]" value="<?= htmlspecialchars($calculos[2][0][12][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][7][]" value="<?= htmlspecialchars($calculos[2][0][12][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][7][]" value="<?= htmlspecialchars($calculos[2][0][12][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][7][]" value="<?= htmlspecialchars($calculos[2][0][12][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][7][]" value="<?= htmlspecialchars($calculos[2][0][12][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][7][]" value="<?= htmlspecialchars($calculos[2][0][12][5], ENT_QUOTES)?>" /></td>  </tr>
  <tr>
    <td bgcolor="#FDEFEA">Autom&oacute;vil GNC (1 persona)</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][8][]" value="<?= htmlspecialchars($calculos[2][0][13][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][8][]" value="<?= htmlspecialchars($calculos[2][0][13][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][8][]" value="<?= htmlspecialchars($calculos[2][0][13][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][8][]" value="<?= htmlspecialchars($calculos[2][0][13][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][8][]" value="<?= htmlspecialchars($calculos[2][0][13][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][8][]" value="<?= htmlspecialchars($calculos[2][0][13][5], ENT_QUOTES)?>" /></td>
  <tr>
    <td bgcolor="#FDEFEA">Autom&oacute;vil GNC(compartido)</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][9][]" value="<?= htmlspecialchars($calculos[2][0][14][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][9][]" value="<?= htmlspecialchars($calculos[2][0][14][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][9][]" value="<?= htmlspecialchars($calculos[2][0][14][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][9][]" value="<?= htmlspecialchars($calculos[2][0][14][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][9][]" value="<?= htmlspecialchars($calculos[2][0][14][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][0][9][]" value="<?= htmlspecialchars($calculos[2][0][14][5], ENT_QUOTES)?>" /></td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">VACACIONES Verano</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">&iquest;A    d&oacute;nde te fuiste de vacaciones en el &uacute;ltimo verano?</td>
    <td bgcolor="#FDEFEA">Distancia recorrida promedio    (km)</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td width="415" bgcolor="#FDEFEA">A un    lugar dentro de la provincia</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][1][0][]" value="<?= htmlspecialchars($calculos[2][1][0][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">A un lugar dentro del pais</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][1][1][]" value="<?= htmlspecialchars($calculos[2][1][1][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">A un lugar de Am&eacute;rica Latina</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][1][3][]" value="<?= htmlspecialchars($calculos[2][1][2][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][1][3][]" value="<?= htmlspecialchars($calculos[2][1][2][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">A un lugar de Am&eacute;rica del    Norte</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][1][4][]" value="<?= htmlspecialchars($calculos[2][1][3][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">A un lugar de Europa</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][1][5][]" value="<?= htmlspecialchars($calculos[2][1][4][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">A un lugar de Asia</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][1][6][]" value="<?= htmlspecialchars($calculos[2][1][5][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">A un lugar de &Aacute;frica</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][1][7][]" value="<?= htmlspecialchars($calculos[2][1][6][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">A un lugar de Ocean&iacute;a</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][1][8][]" value="<?= htmlspecialchars($calculos[2][1][7][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">&iquest;En qu&eacute;    fuiste?</td>
    <td bgcolor="#FDEFEA">Viaje ida y vuelta</td>
    <td bgcolor="#FDEFEA">Consumo de combustible (kWh/km    pasajero)</td>
    <td bgcolor="#FDEFEA">Agua virtual en l/kWh</td>
    <td bgcolor="#FDEFEA">Emisiones GEI en kg CO2 eq/Km</td>
    <td bgcolor="#FDEFEA">Factor de conversi&oacute;n Huella    Ecol&oacute;gica en ha/kWh a&ntilde;o</td>
    <td bgcolor="#FDEFEA">Consumo de combustible (l/km    pasajero)</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td width="415" bgcolor="#FDEFEA">Avi&oacute;n</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][0][]" value="<?= htmlspecialchars($calculos[2][2][0][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][0][]" value="<?= htmlspecialchars($calculos[2][2][0][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][0][]" value="<?= htmlspecialchars($calculos[2][2][0][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][0][]" value="<?= htmlspecialchars($calculos[2][2][0][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][0][]" value="<?= htmlspecialchars($calculos[2][2][0][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][0][]" value="<?= htmlspecialchars($calculos[2][2][0][5], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">Autom&oacute;vil</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][2][]" value="<?= htmlspecialchars($calculos[2][2][1][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][2][]" value="<?= htmlspecialchars($calculos[2][2][1][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][2][]" value="<?= htmlspecialchars($calculos[2][2][1][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][2][]" value="<?= htmlspecialchars($calculos[2][2][1][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][2][]" value="<?= htmlspecialchars($calculos[2][2][1][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][2][]" value="<?= htmlspecialchars($calculos[2][2][1][5], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
   <tr>
    <td bgcolor="#FDEFEA">&Oacute;mnibus</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][1][]" value="<?= htmlspecialchars($calculos[2][2][2][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][1][]" value="<?= htmlspecialchars($calculos[2][2][2][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][1][]" value="<?= htmlspecialchars($calculos[2][2][2][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][1][]" value="<?= htmlspecialchars($calculos[2][2][2][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][1][]" value="<?= htmlspecialchars($calculos[2][2][2][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][1][]" value="<?= htmlspecialchars($calculos[2][2][2][5], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
   <tr>
    <td bgcolor="#FDEFEA">Barco/crucero</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][1][]" value="<?= htmlspecialchars($calculos[2][2][3][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][1][]" value="<?= htmlspecialchars($calculos[2][2][3][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][1][]" value="<?= htmlspecialchars($calculos[2][2][3][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][1][]" value="<?= htmlspecialchars($calculos[2][2][3][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][1][]" value="<?= htmlspecialchars($calculos[2][2][3][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][1][]" value="<?= htmlspecialchars($calculos[2][2][3][5], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
   <tr>
    <td bgcolor="#FDEFEA">Tren</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][1][]" value="<?= htmlspecialchars($calculos[2][2][4][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][1][]" value="<?= htmlspecialchars($calculos[2][2][4][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][1][]" value="<?= htmlspecialchars($calculos[2][2][4][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][1][]" value="<?= htmlspecialchars($calculos[2][2][4][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][1][]" value="<?= htmlspecialchars($calculos[2][2][4][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][2][1][]" value="<?= htmlspecialchars($calculos[2][2][4][5], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">VACACIONES Invierno</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">&iquest;A d&oacute;nde    te fuiste de vacaciones en el &uacute;ltimo invierno?</td>
    <td bgcolor="#FDEFEA">Distancia recorrida promedio    (km)</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td width="415" bgcolor="#FDEFEA">A un    lugar dentro de la provincia</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][3][0][]" value="<?= htmlspecialchars($calculos[2][3][0][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">A un lugar dentro del pais</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][3][1][]" value="<?= htmlspecialchars($calculos[2][3][1][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">A un lugar de Am&eacute;rica Latina</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][3][3][]" value="<?= htmlspecialchars($calculos[2][3][2][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][3][3][]" value="<?= htmlspecialchars($calculos[2][3][2][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">A un lugar de Am&eacute;rica del    Norte</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][3][4][]" value="<?= htmlspecialchars($calculos[2][3][3][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">A un lugar de Europa</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][3][5][]" value="<?= htmlspecialchars($calculos[2][3][4][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">A un lugar de Asia</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][3][6][]" value="<?= htmlspecialchars($calculos[2][3][5][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">A un lugar de &Aacute;frica</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][3][7][]" value="<?= htmlspecialchars($calculos[2][3][6][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">A un lugar de Ocean&iacute;a</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][3][8][]" value="<?= htmlspecialchars($calculos[2][3][7][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FDEFEA">&iquest;En qu&eacute;    fuiste?</td>
    <td bgcolor="#FDEFEA">Viaje ida y vuelta</td>
    <td bgcolor="#FDEFEA">Consumo de combustible (kWh/km    pasajero)</td>
    <td bgcolor="#FDEFEA">Agua virtual en l/kWh</td>
    <td bgcolor="#FDEFEA">Emisiones GEI en kg CO2 eq/Km</td>
    <td bgcolor="#FDEFEA">Factor de conversi&oacute;n Huella    Ecol&oacute;gica en ha/kWh a&ntilde;o</td>
    <td bgcolor="#FDEFEA">Consumo de combustible (l/km    pasajero)</td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
  <tr>
    <td width="415" bgcolor="#FDEFEA">Avi&oacute;n</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][0][]" value="<?= htmlspecialchars($calculos[2][4][0][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][0][]" value="<?= htmlspecialchars($calculos[2][4][0][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][0][]" value="<?= htmlspecialchars($calculos[2][4][0][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][0][]" value="<?= htmlspecialchars($calculos[2][4][0][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][0][]" value="<?= htmlspecialchars($calculos[2][4][0][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][0][]" value="<?= htmlspecialchars($calculos[2][4][0][5], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
   <tr>
    <td bgcolor="#FDEFEA">Autom&oacute;vil</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][2][]" value="<?= htmlspecialchars($calculos[2][4][1][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][2][]" value="<?= htmlspecialchars($calculos[2][4][1][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][2][]" value="<?= htmlspecialchars($calculos[2][4][1][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][2][]" value="<?= htmlspecialchars($calculos[2][4][1][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][2][]" value="<?= htmlspecialchars($calculos[2][4][1][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][2][]" value="<?= htmlspecialchars($calculos[2][4][1][5], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
   <tr>
    <td bgcolor="#FDEFEA">&Oacute;mnibus</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][1][]" value="<?= htmlspecialchars($calculos[2][4][2][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][1][]" value="<?= htmlspecialchars($calculos[2][4][2][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][1][]" value="<?= htmlspecialchars($calculos[2][4][2][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][1][]" value="<?= htmlspecialchars($calculos[2][4][2][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][1][]" value="<?= htmlspecialchars($calculos[2][4][2][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][1][]" value="<?= htmlspecialchars($calculos[2][4][2][5], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
 <tr>
    <td bgcolor="#FDEFEA">Barco/Crucero</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][1][]" value="<?= htmlspecialchars($calculos[2][4][3][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][1][]" value="<?= htmlspecialchars($calculos[2][4][3][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][1][]" value="<?= htmlspecialchars($calculos[2][4][3][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][1][]" value="<?= htmlspecialchars($calculos[2][4][3][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][1][]" value="<?= htmlspecialchars($calculos[2][4][3][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][1][]" value="<?= htmlspecialchars($calculos[2][4][3][5], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>
 <tr>
    <td bgcolor="#FDEFEA">Tren</td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][1][]" value="<?= htmlspecialchars($calculos[2][4][4][0], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][1][]" value="<?= htmlspecialchars($calculos[2][4][4][1], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][1][]" value="<?= htmlspecialchars($calculos[2][4][4][2], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][1][]" value="<?= htmlspecialchars($calculos[2][4][4][3], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][1][]" value="<?= htmlspecialchars($calculos[2][4][4][4], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA"><input type="text" name="actividades_diarias[2][4][1][]" value="<?= htmlspecialchars($calculos[2][4][4][5], ENT_QUOTES)?>" /></td>
    <td bgcolor="#FDEFEA">&nbsp;</td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><button type="submit">Guardar</button></td>
  </tr>
</table>
</form>
<p>&nbsp;</p>
</body>
</html>