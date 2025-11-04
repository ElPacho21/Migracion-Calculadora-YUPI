<?php 
include("header.php");
$_SESSION['paso'] = 'datos';
$_SESSION['subpage'] = 'datos';
$_SESSION['atras'] = 'paso2';
?>
<script type="text/javascript">
var paso_atras = '<?php echo $_SESSION['atras']?>';
</script>

<?php ?>

<input type="hidden" name="subpage" value="<?php echo $_SESSION['subpage']?>" />
<div id="datos">
	<a href="javascript:;" onclick="loadPage('info');"><img src="images/1x1.gif" class="ubicateLoadInfo" border="0" /></a>
	<center>
<img src="images/1x1.gif" width="1" height="1" alt="Ya falta poco" class="titulo_datos" />
<div id="datosuser">
	<dl class="datos-usuario">
        <dt>Sexo</dt>
        <dd>
        <select name="sexo" id="op1" onchange="doSubOption(this);">
            <option value="-1">-</option>
            <option value="mujer">Mujer</option>
            <option value="hombre">Hombre</option>
        </select>
        </dd>
        <dt>Edad</dt>
        <dd>
            <select name="edad" id="op2" onchange="doSubOption(this);">
                <option value="-1">-</option>
                <option value="0-5">0-5 a&ntilde;os</option>
                <option value="6-12">6-12 a&ntilde;os</option>
                <option value="13-17">13-17 a&ntilde;os</option>
                <option value="18-21">18-21 a&ntilde;os</option>
                <option value="22-45">22-45 a&ntilde;os</option>
                <option value="46-65">46-65 a&ntilde;os</option>
                <option value="66 o mas"> m&aacute;s de 65 a&ntilde;os</option>
            </select>
        </dd>
        <dt>Provincia</dt>
        <dd>
            <select name="provincia" id="op3" onchange="doSubOption(this);">
                <option value="-1">-</option>
                <option value="Buenos Aires">Buenos Aires</option>
                <option value="Catamarca">Catamarca</option>
                <option value="Chaco">Chaco</option>
                <option value="Chubut">Chubut</option>
                <option value="Cordoba">C&oacute;rdoba</option>
                <option value="Corrientes">Corrientes</option>
                <option value="Entre Rios">Entre R&iacute;os</option>
                <option value="Formosa">Formosa</option>
                <option value="Jujuy">Jujuy</option>
                <option value="La Pampa">La Pampa</option>
                <option value="La Rioja">La Rioja</option>
                <option value="Mendoza">Mendoza</option>
                <option value="Misiones">Misiones</option>
                <option value="Neuquen">Neuqu&eacute;n</option>
                <option value="Rio Negro">R&iacute;o Negro</option>
                <option value="Salta">Salta</option>
                <option value="San Juan">San Juan</option>
                <option value="San Luis">San Luis</option>
                <option value="Santa Cruz">Santa Cruz</option>
                <option value="Santa Fe">Santa Fe</option>
                <option value="Santiago del Estero">Santiago del Estero</option>
                <option value="Tierra del Fuego">Tierra del Fuego</option>
                <option value="Tucuman">Tucum&aacute;n</option>
            </select>
        </dd>
    </dl>
</div>
<div id="navegacion">
    <a href="javascript:;" onclick="loadPage(paso_anterior);" class="btn_volver"><img src="images/1x1.gif" class="volver" border="0" /></a>
</div>
<div id="terminar">
	<a href="javascript:;" onclick="loadNextStep();"><img src="images/1x1.gif" width="1" height="1" alt="Caluclar" class="imgCalcular" border="0" /></a>
</div>
</center>
</div>
