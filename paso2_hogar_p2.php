<?php
include("header.php");
$_SESSION['paso'] = 'paso2';
$_SESSION['subpage'] = 'hogar_p2';
$_SESSION['atras'] = 'hogar_p1';
?>
<script type="text/javascript">
var paso_atras = '<?php echo $_SESSION['atras']?>';
</script>
<?php  //echo (json_encode($_SESSION)) ?>
<input type="hidden" name="subpage" value="<?php echo $_SESSION['subpage']?>" />
<ul>
    <li style="width:33%"><a href="javascript:;">ELECTRODOMESTICOS</a></li>
    <li class="selected" style="width:33%"><a href="javascript:;">CALEFACCION</a></li>
    <li style="width:33%"><a href="javascript:;">OTROS</a></li>
</ul>
<img src="images/1x1.gif" width="1" height="1" alt="Hogar" class="titulo_hogar" />
<p>&iquest;C&oacute;mo calefaccion&aacute;s tu casa?
<div class="col1d2">	
    <dl>
      <dt><input name="con_gas_natural" type="checkbox" value="1" id="op1" <?php echo isset($_SESSION['datos']['hogar_p2']['con_gas_natural'])? 'checked="checked"':''?> /></dt>
      <dd><label for="op1">Con gas natural</label></dd>
      <dt><input name="con_garrafa" type="checkbox" value="1" id="op2" <?php echo isset($_SESSION['datos']['hogar_p2']['con_garrafa'])? 'checked="checked"':''?> /></dt>
      <dd><label for="op2">Con garrafa</label></dd>
    </dl>
</div>
<div class="col1d2">
    <dl>
      <dt><input name="con_electricidad" type="checkbox" value="1" id="op3" <?php echo isset($_SESSION['datos']['hogar_p2']['con_electricidad'])? 'checked="checked"':''?> /></dt>
      <dd><label for="op3">Con electricidad</label></dd>
      <dt><input name="con_lenia" type="checkbox" value="1" id="op4" <?php echo isset($_SESSION['datos']['hogar_p2']['con_lenia'])? 'checked="checked"':''?> /></dt>
      <dd><label for="op4">Con le&ntilde;a&nbsp;</label></dd>
    </dl>
</div>
<div class="col1d2">
    
</div>
</p>
<p>&iquest;Cu&aacute;ntos artefactos ten&eacute;s?
<div class="col1d2">	
    <dl>
      <dt class="selectable"><select name="estufa_a_gas_cant" id="op10">
        <?php  for($L=0;$L<=8;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p2']['estufa_a_gas_cant'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
        ?></select>
      </dt>
      <dd class="selectable"><label for="op10">Estufa a gas </label> </dd>
      <dt class="selectable"><select name="calefon_cant" id="op11">
        <?php  for($L=0;$L<=8;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p2']['calefon_cant'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
        ?></select>
      </dt>
      <dd class="selectable"><label for="op11">Calef&oacute;n</label> </dd>
      <dt class="selectable"><select name="estufas_electricas_cant" id="op12">
        <?php  for($L=0;$L<=8;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p2']['estufas_electricas_cant'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
        ?>
        </select>
      </dt>
      <dd class="selectable"><label for="op12">Estufa el&eacutectrica</label> </dd>
      <dt class="selectable"><select name="caldera_cant" id="op13">
        <?php  for($L=0;$L<=8;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p2']['caldera_cant'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
        ?>
        </select>
      </dt>
      <dd class="selectable"><label for="op13">Caldera</label> </dd>
    </dl>
</div>
<div class="col1d2">
    <dl>
      <dt class="selectable"><select name="aire_acondicionado_cant" id="op14">
        <?php  for($L=0;$L<=10;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p2']['aire_acondicionado_cant'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
        ?>
        </select>
      </dt>
      <dd class="selectable"><label for="op14">Aire acondicionado</label> </dd>
      <dt class="selectable"><select name="panel_electrico_cant" id="op15">
        <?php  for($L=0;$L<=8;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p2']['panel_electrico_cant'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
        ?>
        </select>
      </dt>
      <dd class="selectable"><label for="op15">Panel El&eacute;ctrico</label> </dd>
      <dt class="selectable"><select name="caloventor_cant" id="op16">
        <?php  for($L=0;$L<=8;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p2']['caloventor_cant'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
        ?>
        </select>
      </dt>
      <dd class="selectable"><label for="op16">Caloventor</label> </dd>
    </dl>
</div>
</p>
