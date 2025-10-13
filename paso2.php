<?php
include __DIR__ . '/header.php';
$_SESSION['paso'] = 'paso2';
?>
<?php  //echo (json_encode($_SESSION)) ?>
<div id="paso2_img2"><a href="javascript:;" onclick="loadPage('info');"><img src="images/1x1.gif" class="ubicateLoadInfo" border="0" /></a></div>
<div id="paso2" class="centrado">
    <div class="colizq">
    	<img src="images/1x1.gif" class="hogar" />
    	<img src="images/1x1.gif" class="alimento" />
    	<img src="images/1x1.gif" class="transporte" />
    </div>
    <div class="colder" id="inside">
    	<span>
        </span>
        <?php  include("nav.php"); ?>
    </div>
</div>