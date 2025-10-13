<?php

include("header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cuál es tu impacto?</title>
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery-ui.min.js"></script>
<script src="scripts/js.js"></script>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="calculador">
	<div id="loading"><div id="loadingIN"><img src="images/ajax-loader.gif" width="31" height="31" alt="cargando" /><br />cargando</div></div>
	<div id="contenido">
    <form id="form_contenido">
	    <span></span>
    </form>
    </div>
</div>
<script language="javascript">
$(function(){
	<?php  if(isset($_SESSION['subpage']) && !empty($_SESSION['subpage'])){
		echo 'subpage = "'.$_SESSION['subpage'].'";
';
		}
	?>
	cargando(true);
	$.get("images/objetos.png", function (data) { 
		loadPage('<?=((!empty($_SESSION['paso']))? $_SESSION['paso']:'home')?>');
	});
});
</script>

</body>
</html>