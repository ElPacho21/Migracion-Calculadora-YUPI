<?php
include __DIR__ . '/header.php';
$_SESSION['paso'] = 'paso2';
$_SESSION['subpage'] = 'transporte_p1';
$_SESSION['atras'] = 'alimentos_p4';
?>
<script type="text/javascript">
var paso_atras = '<?php echo htmlspecialchars($_SESSION['atras'] ?? '', ENT_QUOTES, 'UTF-8')?>';
</script>
<?php ?>
<input type="hidden" name="subpage" value="<?php echo htmlspecialchars($_SESSION['subpage'] ?? '', ENT_QUOTES, 'UTF-8')?>" />
<ul>
    <li class="selected" style="width:50%"><a href="javascript:;">VIAJES DIARIOS</a></li>
    <li style="width:50%"><a href="javascript:;">VACACIONES</a></li>
</ul>
<img src="images/1x1.gif" width="1" height="1" alt="Hogar" class="titulo_transporte" />
<p><label for="op1">&iquest;Cu&aacute;nto te demor&aacute;s  en llegar a tu escuela/trabajo?</label></p>
<p>
	<select name="tiempo" id="op1">
    <?php $tiempoSel = (string)($_SESSION['datos']['transporte_p1']['tiempo'] ?? '0');
          $tiempos = ['0'=>'-','5'=>'5 minutos','10'=>'10 minutos','15'=>'15 minutos','20'=>'20 minutos','25'=>'25 minutos','30'=>'30 minutos','35'=>'35 minutos','40'=>'40 minutos','45'=>'45 minutos','50'=>'50 minutos','60'=>'1 hora','90'=>'1 hora y media','120'=>'2 horas','180'=>'3 horas'];
          foreach ($tiempos as $val => $label) {
              $sel = ($tiempoSel === $val) ? ' selected="selected"' : '';
              echo '<option value="' . $val . '"' . $sel . '>' . $label . '</option>';
          }
    ?>
	</select>
</p>
<p><label for="op2">&iquest;En qu&eacute; vas?</label></p>
<p>
	<select name="en_que" id="op2" onchange="doSubOption(this);">
		<?php $enQueSel = (string)($_SESSION['datos']['transporte_p1']['en_que'] ?? 'no_hay_dato');
					$opcs = [
						'no_hay_dato' => '-',
						'a_pie' => 'A pie',
						'bicicleta' => 'Bicicleta',
						'transporte_escolar' => 'Transporte escolar',
						'colectivo' => 'Colectivo',
						'taxi' => 'Taxi',
						'tranvia' => 'Tranv&iacute;a',
						'subte' => 'Subte',
						'tren' => 'Tren',
						'trole' => 'Trolebus',
						'moto' => 'Moto',
						'auto_gnc' => 'Auto GNC',
						'auto' => 'Auto'
					];
					foreach ($opcs as $val => $label) {
							$sel = ($enQueSel === $val) ? ' selected="selected"' : '';
							echo '<option value="' . $val . '"' . $sel . '>' . $label . '</option>';
					}
		?>
	</select>
</p>
<div id="suboption1" class="suboption">
	<p>
		<label for="op3">&iquest;Con qui&eacute;n vas?</label>
		<select name="con_quien" id="op3">
      <?php $conQuien = (string)($_SESSION['datos']['transporte_p1']['con_quien'] ?? 'solo'); ?>
			<option value="solo" <?php echo (($conQuien == 'solo')? 'selected="selected"':'')?>>solo</option>
			<option value="acompaniado" <?php echo (($conQuien == 'acompaniado')? 'selected="selected"':'')?>>acompa&ntilde;ado</option>
		</select>
	</p>
</div>
