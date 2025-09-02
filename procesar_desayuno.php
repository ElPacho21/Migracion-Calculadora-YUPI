<?php
 //Declaracion de variables
$alim_desayuno_huella_eco = 0;
$alim_desayuno_huella_car = 0;
$alim_desayuno_huella_hid = 0;

 // DESAYUNO
if(isset($_SESSION['datos']['alimentos_p1']['pan'])){
	$alim_desayuno_huella_eco += $var_calculos['alim']['desayuno']['pan']['factor'] * $var_calculos['alim']['desayuno']['pan']['cantidad_por_porcion'];
	$alim_desayuno_huella_car += $var_calculos['alim']['desayuno']['pan']['emisiones'] * ( $var_calculos['alim']['desayuno']['pan']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['pan']['unidad'] );
	$alim_desayuno_huella_hid += $var_calculos['alim']['desayuno']['pan']['agua_virtual'] * ( $var_calculos['alim']['desayuno']['pan']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['pan']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p1']['galletas'])){
	$alim_desayuno_huella_eco += $var_calculos['alim']['desayuno']['galletas']['factor'] * $var_calculos['alim']['desayuno']['galletas']['cantidad_por_porcion'];
	$alim_desayuno_huella_car += $var_calculos['alim']['desayuno']['galletas']['emisiones'] * ( $var_calculos['alim']['desayuno']['galletas']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['galletas']['unidad'] );
	$alim_desayuno_huella_hid += $var_calculos['alim']['desayuno']['galletas']['agua_virtual'] * ( $var_calculos['alim']['desayuno']['galletas']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['galletas']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p1']['tortitas'])){
	$alim_desayuno_huella_eco += $var_calculos['alim']['desayuno']['tortitas']['factor'] * $var_calculos['alim']['desayuno']['tortitas']['cantidad_por_porcion'];
	$alim_desayuno_huella_car += $var_calculos['alim']['desayuno']['tortitas']['emisiones'] * ( $var_calculos['alim']['desayuno']['tortitas']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['tortitas']['unidad'] );
	$alim_desayuno_huella_hid += $var_calculos['alim']['desayuno']['tortitas']['agua_virtual'] * ( $var_calculos['alim']['desayuno']['tortitas']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['tortitas']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p1']['facturas'])){
	$alim_desayuno_huella_eco += $var_calculos['alim']['desayuno']['facturas']['factor'] * $var_calculos['alim']['desayuno']['facturas']['cantidad_por_porcion'];
	$alim_desayuno_huella_car += $var_calculos['alim']['desayuno']['facturas']['emisiones'] * ( $var_calculos['alim']['desayuno']['facturas']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['facturas']['unidad'] );
	$alim_desayuno_huella_hid += $var_calculos['alim']['desayuno']['facturas']['agua_virtual'] * ( $var_calculos['alim']['desayuno']['facturas']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['facturas']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p1']['cereales'])){
	$alim_desayuno_huella_eco += $var_calculos['alim']['desayuno']['cereales']['factor'] * $var_calculos['alim']['desayuno']['cereales']['cantidad_por_porcion'];
	$alim_desayuno_huella_car += $var_calculos['alim']['desayuno']['cereales']['emisiones'] * ( $var_calculos['alim']['desayuno']['cereales']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['cereales']['unidad'] );
	$alim_desayuno_huella_hid += $var_calculos['alim']['desayuno']['cereales']['agua_virtual'] * ( $var_calculos['alim']['desayuno']['cereales']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['cereales']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p1']['manteca'])){
	$alim_desayuno_huella_eco += $var_calculos['alim']['desayuno']['manteca']['factor'] * $var_calculos['alim']['desayuno']['manteca']['cantidad_por_porcion'];
	$alim_desayuno_huella_car += $var_calculos['alim']['desayuno']['manteca']['emisiones'] * ( $var_calculos['alim']['desayuno']['manteca']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['manteca']['unidad'] );
	$alim_desayuno_huella_hid += $var_calculos['alim']['desayuno']['manteca']['agua_virtual'] * ( $var_calculos['alim']['desayuno']['manteca']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['manteca']['unidad'] );
}


if(isset($_SESSION['datos']['alimentos_p1']['queso'])){
	$alim_desayuno_huella_eco += $var_calculos['alim']['desayuno']['queso']['factor'] * $var_calculos['alim']['desayuno']['queso']['cantidad_por_porcion'];
	$alim_desayuno_huella_car += $var_calculos['alim']['desayuno']['queso']['emisiones'] * ( $var_calculos['alim']['desayuno']['queso']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['queso']['unidad'] );
	$alim_desayuno_huella_hid += $var_calculos['alim']['desayuno']['queso']['agua_virtual'] * ( $var_calculos['alim']['desayuno']['queso']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['queso']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p1']['mermelada'])){
	$alim_desayuno_huella_eco += $var_calculos['alim']['desayuno']['mermelada']['factor'] * $var_calculos['alim']['desayuno']['mermelada']['cantidad_por_porcion'];
	$alim_desayuno_huella_car += $var_calculos['alim']['desayuno']['mermelada']['emisiones'] * ( $var_calculos['alim']['desayuno']['mermelada']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['mermelada']['unidad'] );
	$alim_desayuno_huella_hid += $var_calculos['alim']['desayuno']['mermelada']['agua_virtual'] * ( $var_calculos['alim']['desayuno']['mermelada']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['mermelada']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p1']['yogur'])){
	$alim_desayuno_huella_eco += $var_calculos['alim']['desayuno']['yogur']['factor'] * $var_calculos['alim']['desayuno']['yogur']['cantidad_por_porcion'];
	$alim_desayuno_huella_car += $var_calculos['alim']['desayuno']['yogur']['emisiones'] * ( $var_calculos['alim']['desayuno']['yogur']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['yogur']['unidad'] );
	$alim_desayuno_huella_hid += $var_calculos['alim']['desayuno']['yogur']['agua_virtual'] * ( $var_calculos['alim']['desayuno']['yogur']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['yogur']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p1']['cafe'])){
	$alim_desayuno_huella_eco += $var_calculos['alim']['desayuno']['cafe']['factor'] * $var_calculos['alim']['desayuno']['cafe']['cantidad_por_porcion'];
	$alim_desayuno_huella_car += $var_calculos['alim']['desayuno']['cafe']['emisiones'] * ( $var_calculos['alim']['desayuno']['cafe']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['cafe']['unidad'] );
	$alim_desayuno_huella_hid += $var_calculos['alim']['desayuno']['cafe']['agua_virtual'] * ( $var_calculos['alim']['desayuno']['cafe']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['cafe']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p1']['leche'])){
	$alim_desayuno_huella_eco += $var_calculos['alim']['desayuno']['leche']['factor'] * $var_calculos['alim']['desayuno']['leche']['cantidad_por_porcion'];
	$alim_desayuno_huella_car += $var_calculos['alim']['desayuno']['leche']['emisiones'] * ( $var_calculos['alim']['desayuno']['leche']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['leche']['unidad'] );
	$alim_desayuno_huella_hid += $var_calculos['alim']['desayuno']['leche']['agua_virtual'] * ( $var_calculos['alim']['desayuno']['leche']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['leche']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p1']['te'])){
	$alim_desayuno_huella_eco += $var_calculos['alim']['desayuno']['te']['factor'] * $var_calculos['alim']['desayuno']['te']['cantidad_por_porcion'];
	$alim_desayuno_huella_car += $var_calculos['alim']['desayuno']['te']['emisiones'] * ( $var_calculos['alim']['desayuno']['te']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['te']['unidad'] );
	$alim_desayuno_huella_hid += $var_calculos['alim']['desayuno']['te']['agua_virtual'] * ( $var_calculos['alim']['desayuno']['te']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['te']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p1']['mate'])){
	$alim_desayuno_huella_eco += $var_calculos['alim']['desayuno']['mate']['factor'] * $var_calculos['alim']['desayuno']['mate']['cantidad_por_porcion'];
	$alim_desayuno_huella_car += $var_calculos['alim']['desayuno']['mate']['emisiones'] * ( $var_calculos['alim']['desayuno']['mate']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['mate']['unidad'] );
	$alim_desayuno_huella_hid += $var_calculos['alim']['desayuno']['mate']['agua_virtual'] * ( $var_calculos['alim']['desayuno']['mate']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['mate']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p1']['chocolatada'])){
	$alim_desayuno_huella_eco += $var_calculos['alim']['desayuno']['chocolatada']['factor'] * $var_calculos['alim']['desayuno']['chocolatada']['cantidad_por_porcion'];
	$alim_desayuno_huella_car += $var_calculos['alim']['desayuno']['chocolatada']['emisiones'] * ( $var_calculos['alim']['desayuno']['chocolatada']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['chocolatada']['unidad'] );
	$alim_desayuno_huella_hid += $var_calculos['alim']['desayuno']['chocolatada']['agua_virtual'] * ( $var_calculos['alim']['desayuno']['chocolatada']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['chocolatada']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p1']['jugo_de_frutas_natural'])){
	$alim_desayuno_huella_eco += $var_calculos['alim']['desayuno']['jugo_de_frutas_natural']['factor'] * $var_calculos['alim']['desayuno']['jugo_de_frutas_natural']['cantidad_por_porcion'];
	$alim_desayuno_huella_car += $var_calculos['alim']['desayuno']['jugo_de_frutas_natural']['emisiones'] * ( $var_calculos['alim']['desayuno']['jugo_de_frutas_natural']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['jugo_de_frutas_natural']['unidad'] );
	$alim_desayuno_huella_hid += $var_calculos['alim']['desayuno']['jugo_de_frutas_natural']['agua_virtual'] * ( $var_calculos['alim']['desayuno']['jugo_de_frutas_natural']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['jugo_de_frutas_natural']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p1']['soda'])){
	$alim_desayuno_huella_eco += $var_calculos['alim']['desayuno']['soda']['factor'] * $var_calculos['alim']['desayuno']['soda']['cantidad_por_porcion'];
	$alim_desayuno_huella_car += $var_calculos['alim']['desayuno']['soda']['emisiones'] * ( $var_calculos['alim']['desayuno']['soda']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['soda']['unidad'] );
	$alim_desayuno_huella_hid += $var_calculos['alim']['desayuno']['soda']['agua_virtual'] * ( $var_calculos['alim']['desayuno']['soda']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['soda']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p1']['frutas'])){
	$alim_desayuno_huella_eco += $var_calculos['alim']['desayuno']['frutas']['factor'] * $var_calculos['alim']['desayuno']['frutas']['cantidad_por_porcion'];
	$alim_desayuno_huella_car += $var_calculos['alim']['desayuno']['frutas']['emisiones'] * ( $var_calculos['alim']['desayuno']['frutas']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['frutas']['unidad'] );
	$alim_desayuno_huella_hid += $var_calculos['alim']['desayuno']['frutas']['agua_virtual'] * ( $var_calculos['alim']['desayuno']['frutas']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['frutas']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p1']['nueces_almend_mani'])){
	$alim_desayuno_huella_eco += $var_calculos['alim']['desayuno']['nueces_almend_mani']['factor'] * $var_calculos['alim']['desayuno']['nueces_almend_mani']['cantidad_por_porcion'];
	$alim_desayuno_huella_car += $var_calculos['alim']['desayuno']['nueces_almend_mani']['emisiones'] * ( $var_calculos['alim']['desayuno']['nueces_almend_mani']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['nueces_almend_mani']['unidad'] );
	$alim_desayuno_huella_hid += $var_calculos['alim']['desayuno']['nueces_almend_mani']['agua_virtual'] * ( $var_calculos['alim']['desayuno']['nueces_almend_mani']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['nueces_almend_mani']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p1']['chocolate'])){
	$alim_desayuno_huella_eco += $var_calculos['alim']['desayuno']['chocolate']['factor'] * $var_calculos['alim']['desayuno']['chocolate']['cantidad_por_porcion'];
	$alim_desayuno_huella_car += $var_calculos['alim']['desayuno']['chocolate']['emisiones'] * ( $var_calculos['alim']['desayuno']['chocolate']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['chocolate']['unidad'] );
	$alim_desayuno_huella_hid += $var_calculos['alim']['desayuno']['chocolate']['agua_virtual'] * ( $var_calculos['alim']['desayuno']['chocolate']['cantidad_por_porcion'] / $var_calculos['alim']['desayuno']['chocolate']['unidad'] );
}

 // FIN DESAYUNO
?>