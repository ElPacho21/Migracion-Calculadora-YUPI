<?php
include __DIR__ . '/header.php';
$_SESSION['paso'] = 'paso2';
$_SESSION['subpage'] = 'hogar_p3';
$_SESSION['atras'] = 'hogar_p2';
?>
<script type="text/javascript">
var paso_atras = '<?php echo htmlspecialchars($_SESSION['atras'] ?? '', ENT_QUOTES, 'UTF-8')?>';
</script>
<?php  //echo (json_encode($_SESSION)) ?>
<input type="hidden" name="subpage" value="<?php echo htmlspecialchars($_SESSION['subpage'] ?? '', ENT_QUOTES, 'UTF-8')?>" />
<ul>
    <li style="width:33%"><a href="javascript:;">ELECTRODOMESTICOS</a></li>
    <li style="width:33%"><a href="javascript:;">CALEFACCION</a></li>
    <li class="selected" style="width:33%"><a href="javascript:;">OTROS</a></li>
</ul>
<img src="images/1x1.gif" width="1" height="1" alt="Hogar" class="titulo_hogar" />
<p>&iquest;Cu&aacute;ntas l&aacute;mparas  ten&eacute;s en tu casa?</p>
<div class="col1d2">
  <p>
    <select name="lamparas_de_bajo_consumo_cant" id="op10">
      <?php  $selLamBajo = (int)($_SESSION['datos']['hogar_p3']['lamparas_de_bajo_consumo_cant'] ?? 0);
             for($L=0;$L<=20;$L++){ echo '<option value="'.$L.'" '.(($selLamBajo == $L)? 'selected="selected"':'').'>'.$L.'</option>';} 
      ?>
    </select>
    <label for="op10">L&aacute;mparas de bajo consumo</label>
  </p>

  <p>
    <select name="tubo_led_cant" id="op11">
      <?php  $selTuboLed = (int)($_SESSION['datos']['hogar_p3']['tubo_led_cant'] ?? 0);
             for($L=0;$L<=20;$L++){ echo '<option value="'.$L.'" '.(($selTuboLed == $L)? 'selected="selected"':'').'>'.$L.'</option>';} 
      ?>
    </select>
    <label for="op11">Tubos LED</label>
  </p>
</div>

<div class="col1d2">
  <p>
    <select name="tubo_fluorescente_cant" id="op12">
      <?php  $selTuboFluo = (int)($_SESSION['datos']['hogar_p3']['tubo_fluorescente_cant'] ?? 0);
             for($L=0;$L<=20;$L++){ echo '<option value="'.$L.'" '.(($selTuboFluo == $L)? 'selected="selected"':'').'>'.$L.'</option>';} 
      ?>
    </select>
    <label for="op12">Tubos fluorescentes</label>
  </p>
  <p>
  <select name="lampara_led_cant" id="op13">
      <?php  $selLamLed = (int)($_SESSION['datos']['hogar_p3']['lampara_led_cant'] ?? 0);
             for($L=0;$L<=20;$L++){ echo '<option value="'.$L.'" '.(($selLamLed == $L)? 'selected="selected"':'').'>'.$L.'</option>';} 
      ?>
    </select>
    <label for="op13">L&aacute;mparas LED</label>
  </p>
</div>

<p></br>&iquest;Cu&aacute;ntas veces realiz&aacute;s estas actividades por semana?</p>

<div class="col1d2">  
  <p>
    <select name="lavar_la_ropa_rep" id="op14">
      <?php  $selLavar = (int)($_SESSION['datos']['hogar_p3']['lavar_la_ropa_rep'] ?? 0);
             for($L=0;$L<=7;$L++){ echo '<option value="'.$L.'" '.(($selLavar == $L)? 'selected="selected"':'').'>'.$L.'</option>';} 
      ?>
    </select>
    <label for="op14">Lavar la ropa </label>
  </p>
  <p>
    <select name="limpiar_la_casa_rep" id="op15">
      <?php  $selLimpiar = (int)($_SESSION['datos']['hogar_p3']['limpiar_la_casa_rep'] ?? 0);
             for($L=0;$L<=7;$L++){ echo '<option value="'.$L.'" '.(($selLimpiar == $L)? 'selected="selected"':'').'>'.$L.'</option>';} 
      ?>
    </select>
    <label for="op15">Limpiar la casa</label>
  </p>
  <p>
    <select name="regar_el_jardin_rep" id="op16">
      <?php  $selRegar = (int)($_SESSION['datos']['hogar_p3']['regar_el_jardin_rep'] ?? 0);
             for($L=0;$L<=7;$L++){ echo '<option value="'.$L.'" '.(($selRegar == $L)? 'selected="selected"':'').'>'.$L.'</option>';} 
      ?>
    </select>
    <label for="op16">Regar el jard&iacute;n</label>
  </p>
  <p>
    <label for="op17">&iquest;C&oacute;mo lav&aacute;s los platos?</label>
    <select name="como_lavas_los" id="op17">
          <?php $selComoLavas = $_SESSION['datos']['hogar_p3']['como_lavas_los'] ?? 'no_hay_dato'; ?>
          <option value = "no_hay_dato" <?php echo (($selComoLavas == 'no_hay_dato')? 'selected="selected"':'')?>>-</option>
          <option value="platos_abierta" <?php echo (($selComoLavas == 'platos_abierta')? 'selected="selected"':'')?>>A mano con canilla abierta</option>
          <option value="platos_cerrando" <?php echo (($selComoLavas == 'platos_cerrando')? 'selected="selected"':'')?>>A mano cerrando la canilla</option>
          <option value="lavavajilla" <?php echo (($selComoLavas == 'lavavajilla')? 'selected="selected"':'')?>>Con lavavajillas</option>
    </select>
  </p>
  <p>
    <label for="op18">&iquest;cu&aacute;ntas veces? </label>
    <select name="como_lavas_los_rep" id="op18">
      <?php  $selComoLavasRep = (int)($_SESSION['datos']['hogar_p3']['como_lavas_los_rep'] ?? 0);
             for($L=0;$L<=20;$L++){ echo '<option value="'.$L.'" '.(($selComoLavasRep == $L)? 'selected="selected"':'').'>'.$L.'</option>';} 
      ?>
    </select>
  </p>
</div>
<div class="col1d2">
  <p>
    <label for="op19">&iquest;Lav&aacute;s tu auto?, &iquest;C&oacute;mo?</label>
    <?php $selComoAuto = $_SESSION['datos']['hogar_p3']['como_lavas_auto'] ?? 'no_hay_dato'; ?>
    <select name="como_lavas_auto" id="op19">
          <option value = "no_hay_dato" <?php echo (($selComoAuto == 'no_hay_dato')? 'selected="selected"':'')?>>-</option>
          <option value="auto_manguera" <?php echo (($selComoAuto == 'auto_manguera')? 'selected="selected"':'')?>>Con manguera</option>
          <option value="auto_hidro" <?php echo (($selComoAuto == 'auto_hidro')? 'selected="selected"':'')?>>Con hidrolavadora</option>
          <option value="auto_balde" <?php echo (($selComoAuto == 'auto_balde')? 'selected="selected"':'')?>>Con balde</option>
          <option value="auto_lavadero" <?php echo (($selComoAuto == 'auto_lavadero')? 'selected="selected"':'')?>>En lavadero</option>
    </select>
  </p>
  <p>
    <label for="op20">&iquest;cu&aacute;ntas veces? </label>
    <?php $selComoAutoRep = (int)($_SESSION['datos']['hogar_p3']['como_lavas_auto_rep'] ?? 0); ?>
    <select name="como_lavas_auto_rep" id="op20">
      <?php  for($L=0;$L<=20;$L++){ echo '<option value="'.$L.'" '.(($selComoAutoRep == $L)? 'selected="selected"':'').'>'.$L.'</option>';} 
      ?>
    </select>
  </p>
  <p>
    <?php $selTenesPileta = $_SESSION['datos']['hogar_p3']['tenes_pileta'] ?? 'no_hay_dato'; ?>
    <label for="op21">&iquest;Ten&eacute;s pileta?, &iquest;De qu&eacute; tipo?</label>
    <select name="tenes_pileta" id="op21">
      <option value = "no_hay_dato" <?php echo (($selTenesPileta == 'no_hay_dato')? 'selected="selected"':'')?>>-</option>
      <option value="pileta_fija" <?php echo (($selTenesPileta == 'pileta_fija')? 'selected="selected"':'')?>>Pileta fija</option>
      <option value="pileta_lona" <?php echo (($selTenesPileta == 'pileta_lona')? 'selected="selected"':'')?>>Pileta de lona</option>
      <option value="no_tengo" <?php echo (($selTenesPileta == 'no_tengo')? 'selected="selected"':'')?>>No tengo</option>
    </select>
  </p>
  <p>
    <?php $selPiletaLimp = (int)($_SESSION['datos']['hogar_p3']['pileta_limp_rep'] ?? 0); ?>
    <label for="op20">&iquest;cu&aacute;ntas veces por semana la limpias?</label>
    <select name="pileta_limp_rep" id="op20">
      <?php  for($L=0;$L<=20;$L++){ echo '<option value="'.$L.'" '.(($selPiletaLimp == $L)? 'selected="selected"':'').'>'.$L.'</option>';} 
      ?>
    </select>
  </p>
  <p>
    <?php $selPiletaAgua = (int)($_SESSION['datos']['hogar_p3']['pileta_agua_anio_rep'] ?? 0); ?>
    <label for="op20">&iquest;cu&aacute;ntas veces cambias el agua al a&ntilde;o? </label>
    <select name="pileta_agua_anio_rep" id="op20">
      <?php  for($L=0;$L<=20;$L++){ echo '<option value="'.$L.'" '.(($selPiletaAgua == $L)? 'selected="selected"':'').'>'.$L.'</option>';} 
      ?>
    </select>
  </p>
</div>