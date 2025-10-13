<?php
include __DIR__ . '/header.php';
$_SESSION['paso'] = 'paso2';
$_SESSION['subpage'] = 'transporte_p2';
$_SESSION['atras'] = 'transporte_p1';
?>
<script type="text/javascript">
var paso_atras = '<?php echo htmlspecialchars($_SESSION['atras'] ?? '', ENT_QUOTES, 'UTF-8')?>';
</script>
<?php  //echo (json_encode($_SESSION)) ?>

<input type="hidden" name="subpage" value="<?php echo htmlspecialchars($_SESSION['subpage'] ?? '', ENT_QUOTES, 'UTF-8')?>" />
<ul>
    <li style="width:50%"><a href="javascript:;">VIAJES DIARIOS</a></li>
    <li class="selected" style="width:50%"><a href="javascript:;">VACACIONES</a></li>
</ul>
<img src="images/1x1.gif" width="1" height="1" alt="Hogar" class="titulo_transporte" />

<p>&iquest;A d&oacute;nde te fuiste de vacaciones en el &uacute;ltimo verano?</p>
<p>
  <select name = "vacaciones_verano" id = "vacaciones_verano">
    <?php $vacVer = $_SESSION['datos']['transporte_p2']['vacaciones_verano'] ?? 'a_ningun_lado';
          $opVac = [
            'a_ningun_lado' => 'A ningun lado',
            'provincial' => 'A un lugar dentro de la provincia',
            'nacional' => 'A un lugar dentro del pais',
            'am_latina' => 'America latina',
            'am_norte' => 'America del norte',
            'europa' => 'Europa',
            'asia' => 'Asia',
            'africa' => 'Africa',
            'oceania' => 'Oceania'
          ];
          foreach ($opVac as $val => $label) {
              $sel = ($vacVer === $val) ? ' selected = "selected"' : '';
              echo '<option value = "' . $val . '"' . $sel . '>' . $label . '</option>';
          }
    ?>
  </select>
</p>
<p>&iquest;En qu&eacute; fuiste?</p>
<p>
  <select name = "vehiculo_verano" id = "vehiculo_verano">
    <?php $vehVer = $_SESSION['datos']['transporte_p2']['vehiculo_verano'] ?? 'no_hay_dato';
          $opVeh = [
            'no_hay_dato' => '-',
            'avion' => 'Avi&oacute;n',
            'automovil' => 'Automovil',
            'omnibus' => '&Oacute;mnibus',
            'barco_crucero' => 'Barco/Crucero',
            'tren' => 'Tren'
          ];
          foreach ($opVeh as $val => $label) {
              $sel = ($vehVer === $val) ? ' selected = "selected"' : '';
              echo '<option value = "' . $val . '"' . $sel . '>' . $label . '</option>';
          }
    ?>
  </select>
</p>
<p>&iquest;A d&oacute;nde te fuiste de vacaciones en el &uacute;ltimo invierno?</p>
<p>
  <select name = "vacaciones_invierno" id = "vacaciones_invierno">
    <?php $vacInv = $_SESSION['datos']['transporte_p2']['vacaciones_invierno'] ?? 'a_ningun_lado';
          foreach ($opVac as $val => $label) {
              $sel = ($vacInv === $val) ? ' selected = "selected"' : '';
              echo '<option value = "' . $val . '"' . $sel . '>' . $label . '</option>';
          }
    ?>
  </select>
</p>
<p>&iquest;En qu&eacute; fuiste?</p>
<p>
  <select name = "vehiculo_invierno" id = "vehiculo_invierno">
    <?php $vehInv = $_SESSION['datos']['transporte_p2']['vehiculo_invierno'] ?? 'no_hay_dato';
          foreach ($opVeh as $val => $label) {
              $sel = ($vehInv === $val) ? ' selected = "selected"' : '';
              echo '<option value = "' . $val . '"' . $sel . '>' . $label . '</option>';
          }
    ?>
  </select>
</p>
