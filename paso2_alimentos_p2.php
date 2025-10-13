<?php
include __DIR__ . '/header.php';
$_SESSION['paso'] = 'paso2';
$_SESSION['subpage'] = 'alimentos_p2';
$_SESSION['atras'] = 'alimentos_p1';
?>
<script type="text/javascript">
var paso_atras = '<?php echo htmlspecialchars($_SESSION['atras'] ?? '', ENT_QUOTES, 'UTF-8')?>';
</script>
<?php  //echo (json_encode($_SESSION)) ?>
<input type="hidden" name="subpage" value="<?php echo htmlspecialchars($_SESSION['subpage'] ?? '', ENT_QUOTES, 'UTF-8')?>" />
<ul>
    <li style="width:25%"><a href="javascript:;">DESAYUNO</a></li>
    <li class="selected" style="width:25%"><a href="javascript:;">ALMUERZO</a></li>
    <li style="width:25%"><a href="javascript:;">MEDIA TARDE</a></li>
  <li style="width:25%"><a href="javascript:;">CENA</a></li>
</ul>
<img src="images/1x1.gif" width="1" height="1" alt="Hogar" class="titulo_alimento" />
<p>&iquest;Qu&eacute; almorzaste ayer?<br />
    <div class="col2d3">
        <dl>
            <dt><input name="huevos" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['huevos']) ? 'checked="checked"' : ''?> /></dt>
            <dd><label for="op1">Huevos</label></dd>
            <dt><input name="verduras" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['verduras']) ? 'checked="checked"' : ''?> /></dt>
            <dd><label for="op2">Verduras</label></dd>
            <dt><input name="frutas" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['frutas']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op3">Frutas</label></dd>
            <dt><input name="carne_pollo" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['carne_pollo']) ? 'checked="checked"' : ''?> /></dt>
            <dd><label for="op5">Carne de Pollo</label></dd>
            <dt><input name="carne_cerdo" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['carne_cerdo']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op6">Carne de Cerdo</label></dd>
            <dt><input name="carne_vaca" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['carne_vaca']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op7">Carne de vaca</label></dd>
            <dt><input name="pescado" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['pescado']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op10">Pescado</label></dd>
            <dt><input name="sandwich" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['sandwich']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op11">Sandwich</label></dd>
      </dl>
    </div>
    <div class="col2d3">
        <dl>
            <dt><input name="hamburguesas" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['hamburguesas']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op8">Hamburguesas</label></dd>  
            <dt><input name="choripan" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['choripan']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op12">Choripan</label></dd>
            <dt><input name="arroz" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['arroz']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op9">Arroz</label> </dd>
            <dt><input name="trigo" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['trigo']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op14">Trigo</label></dd>
            <dt><input name="pasta" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['pasta']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op13">Pastas</label> </dd>
            <dt><input name="porotos_lentejas_soja" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['porotos_lentejas_soja']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op16">Porotos/lentejas/soja</label></dd>
            <dt><input name="polenta" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['polenta']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op15">Polenta</label></dd>
            <dt><input name="ensalada" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['ensalada']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op4">Ensalada</label></dd>
        </dl>
    </div>
    <div class="col2d3">
        <dl>
            <dt><input name="pan" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['pan']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op17">Pan</label> </dd>
            <dt><input name="cerveza" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['cerveza']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op18">Cerveza</label></dd>
            <dt><input name="vino" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['vino']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op19">Vino</label> </dd>
            <dt><input name="jugo_de_frutas_natural" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['jugo_de_frutas_natural']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op20">Jugo exprimido</label></dd>
            <dt><input name="gaseosa" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['gaseosa']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op21">Gasesosa</label> </dd>
            <dt><input name="soda" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['soda']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op23">Soda</label></dd>
            <dt><input name="agua" type="checkbox" value="1" <?php echo isset($_SESSION['datos']['alimentos_p2']['agua']) ? 'checked="checked"' : ''?>  /></dt>
            <dd><label for="op22">Agua</label></dd>
        </dl>
    </div>
</p>
