<?php
include __DIR__ . '/header.php';
$_SESSION['paso'] = 'paso2';
$_SESSION['subpage'] = 'alimentos_p1';
$_SESSION['atras'] = 'hogar_p3';
?>
<script type="text/javascript">
var paso_atras = '<?php echo htmlspecialchars($_SESSION['atras'] ?? '', ENT_QUOTES, 'UTF-8')?>';
</script>
<?php  //echo (json_encode($_SESSION)) ?>
<input type="hidden" name="subpage" value="<?php echo htmlspecialchars($_SESSION['subpage'] ?? '', ENT_QUOTES, 'UTF-8')?>" />
<ul>
    <li class="selected" style="width:25%"><a href="javascript:;">DESAYUNO</a></li>
    <li style="width:25%"><a href="javascript:;">ALMUERZO</a></li>
    <li style="width:25%"><a href="javascript:;">MEDIA TARDE</a></li>
  <li style="width:25%"><a href="javascript:;">CENA</a></li>
</ul>
<img src="images/1x1.gif" width="1" height="1" alt="Hogar" class="titulo_alimento" />
<p>&iquest;Qu&eacute; desayunaste ayer?</p>
<div class="col2d3">
    <dl>
    <dt><input name="pan" type="checkbox" value="1" id="op1" <?php echo isset($_SESSION['datos']['alimentos_p1']['pan']) ? 'checked="checked"' : ''?> /></dt>
        <dd><label for="op1">Pan</label></dd>
    <dt><input name="galletas" type="checkbox" value="1" id="op2" <?php echo isset($_SESSION['datos']['alimentos_p1']['galletas']) ? 'checked="checked"' : ''?>  /></dt>
        <dd><label for="op2">Galletas</label></dd>
    <dt><input name="cereales" type="checkbox" value="1" id="op3" <?php echo isset($_SESSION['datos']['alimentos_p1']['cereales']) ? 'checked="checked"' : ''?>  /></dt>
        <dd><label for="op3">Cereales</label></dd>
    <dt><input name="manteca" type="checkbox" value="1" id="op4" <?php echo isset($_SESSION['datos']['alimentos_p1']['manteca']) ? 'checked="checked"' : ''?>  /></dt>
        <dd><label for="op4">Manteca</label></dd>
    <dt><input name="mermelada" type="checkbox" value="1" id="op5" <?php echo isset($_SESSION['datos']['alimentos_p1']['mermelada']) ? 'checked="checked"' : ''?>  /></dt>
        <dd><label for="op5">Mermelada</label></dd>
    <dt><input name="queso" type="checkbox" value="1" id="op6" <?php echo isset($_SESSION['datos']['alimentos_p1']['queso']) ? 'checked="checked"' : ''?>  /></dt>
        <dd><label for="op6">Queso</label></dd>
    <dt><input name="yogur" type="checkbox" value="1" id="op7" <?php echo isset($_SESSION['datos']['alimentos_p1']['yogur']) ? 'checked="checked"' : ''?>  /></dt>
        <dd><label for="op7">Yogur</label></dd>
    </dl> 
</div>
<div class="col2d3">
    <dl>
    <dt><input name="tortitas" type="checkbox" value="1" id="op8" <?php echo isset($_SESSION['datos']['alimentos_p1']['tortitas']) ? 'checked="checked"' : ''?>  /></dt>
        <dd><label for="op8">Tortitas</label></dd>
    <dt><input name="facturas" type="checkbox" value="1" id="op9" <?php echo isset($_SESSION['datos']['alimentos_p1']['facturas']) ? 'checked="checked"' : ''?>  /></dt>
        <dd><label for="op9">Facturas</label></dd>
    <dt><input name="cafe" type="checkbox" value="1" id="op10" <?php echo isset($_SESSION['datos']['alimentos_p1']['cafe']) ? 'checked="checked"' : ''?>  /></dt>
        <dd><label for="op10">Caf&eacute;</label></dd>
    <dt><input name="mate" type="checkbox" value="1" id="op11" <?php echo isset($_SESSION['datos']['alimentos_p1']['mate']) ? 'checked="checked"' : ''?>  /></dt>
        <dd><label for="op11">Mate</label></dd>
    <dt><input name="leche" type="checkbox" value="1" id="op12" <?php echo isset($_SESSION['datos']['alimentos_p1']['leche']) ? 'checked="checked"' : ''?>  /></dt>
        <dd><label for="op12">Leche</label> </dd>
    <dt><input name="te" type="checkbox" value="1" id="op13" <?php echo isset($_SESSION['datos']['alimentos_p1']['te']) ? 'checked="checked"' : ''?>  /></dt>
        <dd><label for="op13">T&eacute;</label></dd>
    <dt><input name="nueces_almend_mani" type="checkbox" value="1" id="op14" <?php echo isset($_SESSION['datos']['alimentos_p1']['nueces_almend_mani']) ? 'checked="checked"' : ''?>  /></dt>
        <dd><label for="op14">Nueces/almendras/man&iacute;</label></dd>
    </dl>
</div>
<div class="col2d3">
    <dl>
    <dt><input name="jugo_de_frutas_natural" type="checkbox" value="1" id="op15" <?php echo isset($_SESSION['datos']['alimentos_p1']['jugo_de_frutas_natural']) ? 'checked="checked"' : ''?>  /></dt>
        <dd><label for="op15">Jugo exprimido</label></dd>
    <dt><input name="soda" type="checkbox" value="1" id="op16" <?php echo isset($_SESSION['datos']['alimentos_p1']['soda']) ? 'checked="checked"' : ''?>  /></dt>
        <dd><label for="op15">Soda</label></dd>
    <dt><input name="frutas" type="checkbox" value="1" id="op17" <?php echo isset($_SESSION['datos']['alimentos_p1']['frutas']) ? 'checked="checked"' : ''?>  /></dt>
        <dd><label for="op16">Fruta</label> </dd>
    <dt><input name="chocolate" type="checkbox" value="1" id="op18" <?php echo isset($_SESSION['datos']['alimentos_p1']['chocolate']) ? 'checked="checked"' : ''?>  /></dt>
        <dd><label for="op17">Chocolate</label></dd>
    <dt><input name="chocolatada" type="checkbox" value="1" id="op19" <?php echo isset($_SESSION['datos']['alimentos_p1']['chocolatada']) ? 'checked="checked"' : ''?>  /></dt>
        <dd><label for="op18">Chocolatada</label></dd>
    </dl>
</div>
