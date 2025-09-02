<?php
include("header.php");
$_SESSION['paso'] = 'terminar';
?>
<?php  //echo (json_encode($_SESSION)) ?>
<div id="terminar_img4"></div>
<div id="terminar_img2"><a href="javascript:;" onclick="loadPage('info');"><img src="images/1x1.gif" class="ubicateLoadInfo" border="0" /></a></div>
<div id="terminar_img1"></div>
<div id="terminarnavegacion">
    <a href="javascript:;" onclick="window.location.href='index.php?p=paso1';" class="btn_volveraempezar"><img src="images/1x1.gif" class="volveraempezarterminar" border="0" /></a>
</div>