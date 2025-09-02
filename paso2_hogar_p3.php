<?php
include("header.php");
$_SESSION['paso'] = 'paso2';
$_SESSION['subpage'] = 'hogar_p3';
$_SESSION['atras'] = 'hogar_p2';
?>
<script type="text/javascript">
var paso_atras = '<?php echo $_SESSION['atras']?>';
</script>
<?php  //echo (json_encode($_SESSION)) ?>
<input type="hidden" name="subpage" value="<?php echo $_SESSION['subpage']?>" />
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
      <?php  for($L=0;$L<=20;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p3']['lamparas_de_bajo_consumo_cant'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
      ?>
    </select>
    <label for="op10">L&aacute;mparas de bajo consumo</label>
  </p>

  <p>
    <select name="tubo_led_cant" id="op11">
      <?php  for($L=0;$L<=20;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p3']['tubo_led_cant'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
      ?>
    </select>
    <label for="op11">Tubos LED</label>
  </p>
</div>

<div class="col1d2">
  <p>
    <select name="tubo_fluorescente_cant" id="op12">
      <?php  for($L=0;$L<=20;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p3']['tubo_fluorescente_cant'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
      ?>
    </select>
    <label for="op12">Tubos fluorescentes</label>
  </p>
  <p>
  <select name="lampara_led_cant" id="op13">
      <?php  for($L=0;$L<=20;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p3']['lampara_led_cant'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
      ?>
    </select>
    <label for="op13">L&aacute;mparas LED</label>
  </p>
</div>

<p></br>&iquest;Cu&aacute;ntas veces realiz&aacute;s estas actividades por semana?</p>

<div class="col1d2">  
  <p>
    <select name="lavar_la_ropa_rep" id="op14">
      <?php  for($L=0;$L<=7;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p3']['lavar_la_ropa_rep'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
      ?>
    </select>
    <label for="op14">Lavar la ropa </label>
  </p>
  <p>
    <select name="limpiar_la_casa_rep" id="op15">
      <?php  for($L=0;$L<=7;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p3']['limpiar_la_casa_rep'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
      ?>
    </select>
    <label for="op15">Limpiar la casa</label>
  </p>
  <p>
    <select name="regar_el_jardin_rep" id="op16">
      <?php  for($L=0;$L<=7;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p3']['regar_el_jardin_rep'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
      ?>
    </select>
    <label for="op16">Regar el jard&iacute;n</label>
  </p>
  <p>
    <label for="op17">&iquest;C&oacute;mo lav&aacute;s los platos?</label>
    <select name="como_lavas_los" id="op17">
          <option value = "no_hay_dato" <?php echo (($_SESSION['datos']['hogar_p3']['como_lavas_los'] == 'no_hay_dato')? 'selected="selected"':'')?>>-</option>
          <option value="platos_abierta" <?php echo (($_SESSION['datos']['hogar_p3']['como_lavas_los'] == 'platos_abierta')? 'selected="selected"':'')?>>A mano con canilla abierta</option>
          <option value="platos_cerrando" <?php echo (($_SESSION['datos']['hogar_p3']['como_lavas_los'] == 'platos_cerrando')? 'selected="selected"':'')?>>A mano cerrando la canilla</option>
          <option value="lavavajilla" <?php echo (($_SESSION['datos']['hogar_p3']['como_lavas_los'] == 'lavavajilla')? 'selected="selected"':'')?>>Con lavavajillas</option>
    </select>
  </p>
  <p>
    <label for="op18">&iquest;cu&aacute;ntas veces? </label>
    <select name="como_lavas_los_rep" id="op18">
      <?php  for($L=0;$L<=20;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p3']['como_lavas_los_rep'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
      ?>
    </select>
  </p>
</div>
<div class="col1d2">
  <p>
    <label for="op19">&iquest;Lav&aacute;s tu auto?, &iquest;C&oacute;mo?</label>
    <select name="como_lavas_auto" id="op19">
          <option value = "no_hay_dato" <?php echo (($_SESSION['datos']['hogar_p3']['como_lavas_auto'] == 'no_hay_dato')? 'selected="selected"':'')?>>-</option>
          <option value="auto_manguera" <?php echo (($_SESSION['datos']['hogar_p3']['como_lavas_auto'] == 'auto_manguera')? 'selected="selected"':'')?>>Con manguera</option>
          <option value="auto_hidro" <?php echo (($_SESSION['datos']['hogar_p3']['como_lavas_auto'] == 'auto_hidro')? 'selected="selected"':'')?>>Con hidrolavadora</option>
          <option value="auto_balde" <?php echo (($_SESSION['datos']['hogar_p3']['como_lavas_auto'] == 'auto_balde')? 'selected="selected"':'')?>>Con balde</option>
          <option value="auto_lavadero" <?php echo (($_SESSION['datos']['hogar_p3']['como_lavas_auto'] == 'auto_lavadero')? 'selected="selected"':'')?>>En lavadero</option>
    </select>
  </p>
  <p>
    <label for="op20">&iquest;cu&aacute;ntas veces? </label>
    <select name="como_lavas_auto_rep" id="op20">
      <?php  for($L=0;$L<=20;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p3']['como_lavas_auto_rep'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
      ?>
    </select>
  </p>
  <p>
    <label for="op21">&iquest;Ten&eacute;s pileta?, &iquest;De qu&eacute; tipo?</label>
    <select name="tenes_pileta" id="op21">
      <option value = "no_hay_dato" <?php echo (($_SESSION['datos']['hogar_p3']['tenes_pileta'] == 'no_hay_dato')? 'selected="selected"':'')?>>-</option>
      <option value="pileta_fija" <?php echo (($_SESSION['datos']['hogar_p3']['tenes_pileta'] == 'pileta_fija')? 'selected="selected"':'')?>>Pileta fija</option>
      <option value="pileta_lona" <?php echo (($_SESSION['datos']['hogar_p3']['tenes_pileta'] == 'pileta_lona')? 'selected="selected"':'')?>>Pileta de lona</option>
      <option value="no_tengo" <?php echo (($_SESSION['datos']['hogar_p3']['tenes_pileta'] == 'no_tengo')? 'selected="selected"':'')?>>No tengo</option>
    </select>
  </p>
  <p>
    <label for="op20">&iquest;cu&aacute;ntas veces por semana la limpias?</label>
    <select name="pileta_limp_rep" id="op20">
      <?php  for($L=0;$L<=20;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p3']['pileta_limp_rep'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
      ?>
    </select>
  </p>
  <p>
    <label for="op20">&iquest;cu&aacute;ntas veces cambias el agua al a&ntilde;o? </label>
    <select name="pileta_agua_anio_rep" id="op20">
      <?php  for($L=0;$L<=20;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p3']['pileta_agua_anio_rep'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
      ?>
    </select>
  </p>
</div>