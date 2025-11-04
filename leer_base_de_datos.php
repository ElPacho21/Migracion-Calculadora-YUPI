<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Leer la base de datos</title>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<!-- Bootstrap JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Jquery Plugin Export -->
	<script type="text/javascript" src="js/tableExport.js"></script>
	<script type="text/javascript" src="js/jquery.base64.js"></script>
	<!-- Export PNG -->
	<script type="text/javascript" src="js/html2canvas.js"></script>
	<!-- Export PDF -->
	<script type="text/javascript" src="js/jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="js/jspdf/jspdf.js"></script>
	<script type="text/javascript" src="js/jspdf/libs/base64.js"></script>

	<script type="text/javascript">
		
		jQuery.get('base_de_datos.txt', function(data) {
			var data_base = data;
			var filas = data_base.split("\n");
			var cabecera = filas[0].split(",");
			tabla ="<table id='tabla-datos' class='table table-striped'>"
			for (i = 0; i < filas.length-1; i++) {
				var columna = filas[i].split(",");

				(i==0) ? tabla = tabla + "<thead>" : tabla = tabla + "<tr>";

				for (j = 0; j < columna.length; j++) {
					(i==0) ? tabla = tabla + "<th nowrap><span>" + columna[j] + "</span></th>" : tabla = tabla + "<td nowrap> <span  data-toggle='tooltip' data-placement='auto' title='" + cabecera[j] + "'>" + columna[j] + "</span></td>";				
				}

				(i==0) ? tabla = tabla + "</thead><tbody>" : tabla = tabla + "</tr>";
			}
			tabla = tabla + "</tbody></table>"
			document.getElementById("datos").innerHTML = tabla;
		});
	</script>
	<style type="text/css">
		a{
			cursor: pointer;
			background: url(images/xls.png);
			background-size: 100% 100%;
		}
		a:hover{
			background: url(images/xls_hover.png);
			background-size: 100% 100%;
		}

		span{
			width: 100%;
			text-align: center;
			display: block;
		}
		th, td {
			padding-right: 5px !important;
			padding-left: 5px !important;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<h1 class="col-xs-10">Base de datos <small style="font-size: 0.5em;">usa las flechas del teclado o el scroll en la parte inferior</small></h1>
			<a class="col-xs-1" download="base_de_datos.xls" onClick ="$('#tabla-datos').tableExport({type:'excel',escape:'false'});" style="margin-top: 20px;"><img class="img-responsive" src="images/xls_bg.png"></a>
			<a id="dlink" style="display: none;"></a>
			<div id="datos" class="col-xs-12" style="overflow-x: scroll;"></div>
		</div>
	</div>
	<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>