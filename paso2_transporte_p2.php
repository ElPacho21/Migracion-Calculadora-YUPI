<?php
include("header.php");
$_SESSION['paso'] = 'paso2';
$_SESSION['subpage'] = 'transporte_p2';
$_SESSION['atras'] = 'transporte_p1';
?>
<script type="text/javascript">
var paso_atras = '<?php echo $_SESSION['atras']?>';
</script>
<?php  //echo (json_encode($_SESSION)) ?>

<input type="hidden" name="subpage" value="<?php echo $_SESSION['subpage']?>" />
<ul>
    <li style="width:50%"><a href="javascript:;">VIAJES DIARIOS</a></li>
    <li class="selected" style="width:50%"><a href="javascript:;">VACACIONES</a></li>
</ul>
<img src="images/1x1.gif" width="1" height="1" alt="Hogar" class="titulo_transporte" />

<p>&iquest;A d&oacute;nde te fuiste de vacaciones en el &uacute;ltimo verano?</p>
<p>
  <select name = "vacaciones_verano" id = "vacaciones_verano">
    <option value = "a_ningun_lado" <?php echo (($_SESSION['datos']['transporte_p2']['vacaciones_verano']  ==  'a_ningun_lado')? 'selected = "selected"':'')?>>A ningun lado</option>
    <option value = "provincial" <?php echo (($_SESSION['datos']['transporte_p2']['vacaciones_verano']  ==  'provincial')? 'selected = "selected"':'')?>>A un lugar dentro de la provincia</option>
    <option value = "nacional" <?php echo (($_SESSION['datos']['transporte_p2']['vacaciones_verano']  ==  'nacional')? 'selected = "selected"':'')?>>A un lugar dentro del pais</option>
    <option value = "am_latina" <?php echo (($_SESSION['datos']['transporte_p2']['vacaciones_verano']  ==  'am_latina')? 'selected = "selected"':'')?>>America latina</option>
    <option value = "am_norte" <?php echo (($_SESSION['datos']['transporte_p2']['vacaciones_verano']  ==  'am_norte')? 'selected = "selected"':'')?>>America del norte</option>
    <option value = "europa" <?php echo (($_SESSION['datos']['transporte_p2']['vacaciones_verano']  ==  'europa')? 'selected = "selected"':'')?>>Europa</option>
    <option value = "asia" <?php echo (($_SESSION['datos']['transporte_p2']['vacaciones_verano']  ==  'asia')? 'selected = "selected"':'')?>>Asia</option>
    <option value = "africa" <?php echo (($_SESSION['datos']['transporte_p2']['vacaciones_verano']  ==  'africa')? 'selected = "selected"':'')?>>Africa</option>
    <option value = "oceania" <?php echo (($_SESSION['datos']['transporte_p2']['vacaciones_verano']  ==  'oceania')? 'selected = "selected"':'')?>>Oceania</option>
  </select>
</p>
<p>&iquest;En qu&eacute; fuiste?</p>
<p>
  <select name = "vehiculo_verano" id = "vehiculo_verano">
    <option value = "no_hay_dato" <?php echo (($_SESSION['datos']['transporte_p2']['vehiculo_verano']  == 'no_hay_dato')? 'selected = "selected"':'')?>>-</option>
    <option value = "avion" <?php echo (($_SESSION['datos']['transporte_p2']['vehiculo_verano']  ==  'avion')? 'selected = "selected"':'')?>>Avi&oacute;n</option>
    <option value = "automovil" <?php echo (($_SESSION['datos']['transporte_p2']['vehiculo_verano']  ==  'automovil')? 'selected = "selected"':'')?>>Automovil</option>
    <option value = "omnibus" <?php echo (($_SESSION['datos']['transporte_p2']['vehiculo_verano']  ==  'omnibus')? 'selected = "selected"':'')?>>&Oacute;mnibus</option>
    <option value = "barco_crucero" <?php echo (($_SESSION['datos']['transporte_p2']['vehiculo_verano']  ==  'barco_crucero')? 'selected = "selected"':'')?>>Barco/Crucero</option>
    <option value = "tren" <?php echo (($_SESSION['datos']['transporte_p2']['vehiculo_verano']  ==  'tren')? 'selected = "selected"':'')?>>Tren</option>
  </select>
</p>
<p>&iquest;A d&oacute;nde te fuiste de vacaciones en el &uacute;ltimo invierno?</p>
<p>
  <select name = "vacaciones_invierno" id = "vacaciones_invierno">
    <option value = "a_ningun_lado" <?php echo (($_SESSION['datos']['transporte_p2']['vacaciones_invierno']  ==  'a_ningun_lado')? 'selected = "selected"':'')?>>A ningun lado</option>
    <option value = "provincial" <?php echo (($_SESSION['datos']['transporte_p2']['vacaciones_invierno']  ==  'provincial')? 'selected = "selected"':'')?>>A un lugar dentro de la provincia</option>
    <option value = "nacional" <?php echo (($_SESSION['datos']['transporte_p2']['vacaciones_invierno']  ==  'nacional')? 'selected = "selected"':'')?>>A un lugar dentro del pais</option>
    <option value = "am_latina" <?php echo (($_SESSION['datos']['transporte_p2']['vacaciones_invierno']  ==  'am_latina')? 'selected = "selected"':'')?>>America latina</option>
    <option value = "am_norte" <?php echo (($_SESSION['datos']['transporte_p2']['vacaciones_invierno']  ==  'am_norte')? 'selected = "selected"':'')?>>America del norte</option>
    <option value = "europa" <?php echo (($_SESSION['datos']['transporte_p2']['vacaciones_invierno']  ==  'europa')? 'selected = "selected"':'')?>>Europa</option>
    <option value = "asia" <?php echo (($_SESSION['datos']['transporte_p2']['vacaciones_invierno']  ==  'asia')? 'selected = "selected"':'')?>>Asia</option>
    <option value = "africa" <?php echo (($_SESSION['datos']['transporte_p2']['vacaciones_invierno']  ==  'africa')? 'selected = "selected"':'')?>>Africa</option>
    <option value = "oceania" <?php echo (($_SESSION['datos']['transporte_p2']['vacaciones_invierno']  ==  'oceania')? 'selected = "selected"':'')?>>Oceania</option>
  </select>
</p>
<p>&iquest;En qu&eacute; fuiste?</p>
<p>
  <select name = "vehiculo_invierno" id = "vehiculo_invierno">
    <option value = "no_hay_dato" <?php echo (($_SESSION['datos']['transporte_p2']['vehiculo_invierno']  == 'no_hay_dato')? 'selected = "selected"':'')?>>-</option>
    <option value = "avion" <?php echo (($_SESSION['datos']['transporte_p2']['vehiculo_invierno']  ==  'avion')? 'selected = "selected"':'')?>>Avi&oacute;n</option>
    <option value = "automovil" <?php echo (($_SESSION['datos']['transporte_p2']['vehiculo_invierno']  ==  'automovil')? 'selected = "selected"':'')?>>Automovil</option>
    <option value = "omnibus" <?php echo (($_SESSION['datos']['transporte_p2']['vehiculo_invierno']  ==  'omnibus')? 'selected = "selected"':'')?>>&Oacute;mnibus</option>
    <option value = "barco_crucero" <?php echo (($_SESSION['datos']['transporte_p2']['vehiculo_invierno']  ==  'barco_crucero')? 'selected = "selected"':'')?>>Barco/Crucero</option>
    <option value = "tren" <?php echo (($_SESSION['datos']['transporte_p2']['vehiculo_invierno']  ==  'tren')? 'selected = "selected"':'')?>>Tren</option>
  </select>
</p>
