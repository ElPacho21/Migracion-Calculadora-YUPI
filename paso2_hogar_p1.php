<?php
include __DIR__ . '/header.php';
$_SESSION['paso'] = 'paso2';
$_SESSION['subpage'] = 'hogar_p1';
$_SESSION['atras'] = 'paso1';
?>
<script type="text/javascript">
var paso_atras = '<?php echo htmlspecialchars($_SESSION['atras'] ?? '', ENT_QUOTES, 'UTF-8')?>';
</script>
<?php  //echo (json_encode($_SESSION)) ?>
<input type="hidden" name="subpage" value="<?php echo htmlspecialchars($_SESSION['subpage'] ?? '', ENT_QUOTES, 'UTF-8')?>" />
<ul>
    <li class="selected" style="width:33%"><a href="javascript:;">ELECTRODOMESTICOS</a></li>
    <li style="width:33%"><a href="javascript:;">CALEFACCION</a></li>
    <li style="width:33%"><a href="javascript:;">OTROS</a></li>
</ul>
<img src="images/1x1.gif" width="1" height="1" alt="Hogar" class="titulo_hogar" />
<p>&iquest;Cu&aacute;ntas personas viven en tu casa? 
<select name="personas">
<?php
    $selectedPersonas = (int)($_SESSION['datos']['hogar_p1']['personas'] ?? 1);
    for ($L = 1; $L <= 12; $L++) {
        $sel = ($selectedPersonas === $L) ? ' selected="selected"' : '';
        echo '<option value="' . $L . '"' . $sel . '>' . $L . '</option>';
    }
?>
</select>
</p>
<p>&iquest;Qu&eacute;&nbsp;electrodom&eacute;sticos  us&aacute;s en tu casa?</p>
<div class="col2d3">	
    <dl>
    <dt><input name="cafetera" type="checkbox" value="1" id="op1" <?php echo isset($_SESSION['datos']['hogar_p1']['cafetera']) ? 'checked="checked"' : ''?> /></dt>
        <dd><label for="op1">Cafetera</label></dd>
    <dt><input name="tostadora" type="checkbox" value="1" id="op2" <?php echo isset($_SESSION['datos']['hogar_p1']['tostadora']) ? 'checked="checked"' : ''?> /></dt>
        <dd><label for="op2">Tostadora</label></dd>
    <dt><input name="pava_electrica" type="checkbox" value="1" id="op3" <?php echo isset($_SESSION['datos']['hogar_p1']['pava_electrica']) ? 'checked="checked"' : ''?> /></dt>
        <dd><label for="op3">Pava&nbsp;el&eacute;ctrica&nbsp;</label></dd>
    <dt><input name="microondas" type="checkbox" value="1" id="op5" <?php echo isset($_SESSION['datos']['hogar_p1']['microondas']) ? 'checked="checked"' : ''?> /></dt>
        <dd><label for="op5">Microondas</label></dd>
    <dt><input name="horno_electrico" type="checkbox" value="1" id="op6" <?php echo isset($_SESSION['datos']['hogar_p1']['horno_electrico']) ? 'checked="checked"' : ''?> /></dt>
        <dd><label for="op6">Horno el&eacute;ctrico</label></dd>
    <dt><input name="plancha" type="checkbox" value="1" id="op11" <?php echo isset($_SESSION['datos']['hogar_p1']['plancha']) ? 'checked="checked"' : ''?> /></dt>
        <dd><label for="op11">Plancha</label> </dd>
    </dl>
</div>
<div class="col2d3">
    <dl>
    <dt><input name="aspiradora" type="checkbox" value="1" id="op07" <?php echo isset($_SESSION['datos']['hogar_p1']['aspiradora']) ? 'checked="checked"' : ''?> /></dt>
        <dd><label for="op07">Aspiradora</label></dd>
    <dt><input name="hidrolavadora" type="checkbox" value="1" id="op10" <?php echo isset($_SESSION['datos']['hogar_p1']['hidrolavadora']) ? 'checked="checked"' : ''?> /></dt>
        <dd><label for="op10">Hidrolavadora</label></dd>
    <dt><input name="lavavajilla" type="checkbox" value="1" id="op08" <?php echo isset($_SESSION['datos']['hogar_p1']['lavavajilla']) ? 'checked="checked"' : ''?> /></dt>
        <dd><label for="op08">Lavavajilla</label></dd>
    <dt><input name="cocina_a_gas" type="checkbox" value="1" id="op09" <?php echo isset($_SESSION['datos']['hogar_p1']['cocina_a_gas']) ? 'checked="checked"' : ''?> /></dt>
        <dd><label for="op09">Cocina a gas</label></dd>
    <dt><input name="lavarropas" type="checkbox" value="1" id="op10" <?php echo isset($_SESSION['datos']['hogar_p1']['lavarropas']) ? 'checked="checked"' : ''?> /></dt>
        <dd><label for="op10">Lavarropas</label></dd>
    </dl>
</div>
<div class="col2d3">
    <dl>
        <dt class="selectable"><select name="equipo_de_musica_cant" id="op12">
          <?php  for($L=0;$L<=5;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p3']['equipo_de_musica_cant'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
          ?></select>
        </dt>
        <dd><label for="op12">Equipo de m&uacute;sica</label></dd>        
        <dt class="selectable">
            <select name="televisor_cant" id="op13">
            <?php   for($L=0;$L<=5;$L++){
                    echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p1']['televisor_cant'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';
                } 
            ?>
                
            </select>
        </dt>
        <dd class="selectable"><label for="op13">Televisor</label> </dd>
        <dt class="selectable"><select name="heladera_cant" id="op4">
          <?php  for($L=0;$L<=2;$L++){ echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p3']['heladera_cant'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';}
          ?></select>
        </dt>
        <dd><label for="op4">Heladera</label></dd>
        <dt class="selectable">
            <select name="computadora_cant" id="op14">
                <?php  for($L=0;$L<=10;$L++){
                        echo '<option value="'.$L.'" '.(($_SESSION['datos']['hogar_p1']['computadora_cant'] == $L)? 'selected="selected"':'').'>'.$L.'</option>';
                    }
                ?>
            </select>
        </dt>
        <dd class="selectable"><label for="op14">Computadora </label></dd>
    </dl>
</div>
