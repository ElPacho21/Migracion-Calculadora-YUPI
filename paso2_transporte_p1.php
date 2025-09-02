<?php
include("header.php");
$_SESSION['paso'] = 'paso2';
$_SESSION['subpage'] = 'transporte_p1';
$_SESSION['atras'] = 'alimentos_p4';
?>
<script type="text/javascript">
var paso_atras = '<?php echo $_SESSION['atras']?>';
</script>
<?php  //echo (json_encode($_SESSION)) ?>
<input type="hidden" name="subpage" value="<?php echo $_SESSION['subpage']?>" />
<ul>
    <li class="selected" style="width:50%"><a href="javascript:;">VIAJES DIARIOS</a></li>
    <li style="width:50%"><a href="javascript:;">VACACIONES</a></li>
</ul>
<img src="images/1x1.gif" width="1" height="1" alt="Hogar" class="titulo_transporte" />
<p><label for="op1">&iquest;Cu&aacute;nto te demor&aacute;s  en llegar a tu escuela/trabajo?</label></p>
<p>
	<select name="tiempo" id="op1">
		<option value="0" <?php echo (($_SESSION['datos']['transporte_p1']['tiempo'] == '0')? 'selected="selected"':'')?>>-</option>
		<option value="5" <?php echo (($_SESSION['datos']['transporte_p1']['tiempo'] == '5')? 'selected="selected"':'')?>>5 minutos </option>
		<option value="10" <?php echo (($_SESSION['datos']['transporte_p1']['tiempo'] == '10')? 'selected="selected"':'')?>>10 minutos </option>
		<option value="15" <?php echo (($_SESSION['datos']['transporte_p1']['tiempo'] == '15')? 'selected="selected"':'')?>>15 minutos </option>
		<option value="20" <?php echo (($_SESSION['datos']['transporte_p1']['tiempo'] == '20')? 'selected="selected"':'')?>>20 minutos </option>
		<option value="25" <?php echo (($_SESSION['datos']['transporte_p1']['tiempo'] == '25')? 'selected="selected"':'')?>>25 minutos </option>
		<option value="30" <?php echo (($_SESSION['datos']['transporte_p1']['tiempo'] == '30')? 'selected="selected"':'')?>>30 minutos</option>
		<option value="35" <?php echo (($_SESSION['datos']['transporte_p1']['tiempo'] == '35')? 'selected="selected"':'')?>>35 minutos </option>
		<option value="40" <?php echo (($_SESSION['datos']['transporte_p1']['tiempo'] == '40')? 'selected="selected"':'')?>>40 minutos </option>
		<option value="45" <?php echo (($_SESSION['datos']['transporte_p1']['tiempo'] == '45')? 'selected="selected"':'')?>>45 minutos</option>
		<option value="50" <?php echo (($_SESSION['datos']['transporte_p1']['tiempo'] == '50')? 'selected="selected"':'')?>>50 minutos</option>
		<option value="60" <?php echo (($_SESSION['datos']['transporte_p1']['tiempo'] == '60')? 'selected="selected"':'')?>>1 hora</option>
		<option value="90" <?php echo (($_SESSION['datos']['transporte_p1']['tiempo'] == '90')? 'selected="selected"':'')?>>1 hora y media</option>
		<option value="120" <?php echo  (($_SESSION['datos']['transporte_p1']['tiempo'] == '120')? 'selected="selected"':'')?>>2 horas</option>
		<option value="180" <?php echo (($_SESSION['datos']['transporte_p1']['tiempo'] == '180')? 'selected="selected"':'')?>>3 horas</option>
	</select>
</p>
<p><label for="op2">&iquest;En qu&eacute; vas?</label></p>
<p>
	<select name="en_que" id="op2" onchange="doSubOption(this);">
		<option value="no_hay_dato" <?php echo (($_SESSION['datos']['transporte_p1']['en_que'] == 'no_hay_dato')? 'selected="selected"':'')?>>-</option>
		<option value="a_pie" <?php echo (($_SESSION['datos']['transporte_p1']['en_que'] == 'a_pie')? 'selected="selected"':'')?>>A pie</option>
		<option value="bicicleta" <?php echo (($_SESSION['datos']['transporte_p1']['en_que'] == 'bicicleta')? 'selected="selected"':'')?>>Bicicleta</option>
		<option value="transporte_escolar" <?php echo (($_SESSION['datos']['transporte_p1']['en_que'] == 'transporte_escolar')? 'selected="selected"':'')?>>Transporte escolar</option>
		<option value="colectivo" <?php echo (($_SESSION['datos']['transporte_p1']['en_que'] == 'colectivo')? 'selected="selected"':'')?>>Colectivo</option>
		<option value="taxi" <?php echo (($_SESSION['datos']['transporte_p1']['en_que'] == 'taxi')? 'selected="selected"':'')?>>Taxi</option>
		<option value="tranvia" <?php echo (($_SESSION['datos']['transporte_p1']['en_que'] == 'tranvia')? 'selected="selected"':'')?>>Tranv&iacute;a</option>
		<option value="subte" <?php echo (($_SESSION['datos']['transporte_p1']['en_que'] == 'subte')? 'selected="selected"':'')?>>Subte</option>
		<option value="tren" <?php echo (($_SESSION['datos']['transporte_p1']['en_que'] == 'tren')? 'selected="selected"':'')?>>Tren</option>
		<option value="trole" <?php echo (($_SESSION['datos']['transporte_p1']['en_que'] == 'trole')? 'selected="selected"':'')?>>Trolebus</option>
		<option value="moto" <?php echo (($_SESSION['datos']['transporte_p1']['en_que'] == 'moto')? 'selected="selected"':'')?>>Moto</option>
		<option value="auto_gnc" <?php echo (($_SESSION['datos']['transporte_p1']['en_que'] == 'auto_gnc')? 'selected="selected"':'')?>>Auto GNC</option>
		<option value="auto" <?php echo (($_SESSION['datos']['transporte_p1']['en_que'] == 'auto')? 'selected="selected"':'')?>>Auto</option>
	</select>
</p>
<div id="suboption1" class="suboption">
	<p>
		<label for="op3">&iquest;Con qui&eacute;n vas?</label>
		<select name="con_quien" id="op3">
			<option value="solo" <?php echo (($_SESSION['datos']['transporte_p1']['con_quien'] == 'solo')? 'selected="selected"':'')?>>solo</option>
			<option value="acompaniado" <?php echo (($_SESSION['datos']['transporte_p1']['con_quien'] == 'acompaniado')? 'selected="selected"':'')?>>acompa&ntilde;ado</option>
		</select>
	</p>
</div>
