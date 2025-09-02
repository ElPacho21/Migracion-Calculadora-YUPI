<?php
 //Declaracion de variables
$alim_mediatarde_huella_eco = 0;
$alim_mediatarde_huella_car = 0;
$alim_mediatarde_huella_hid = 0;

 // DESAYUNO
if(isset($_SESSION['datos']['alimentos_p3']['pan'])){
	$alim_mediatarde_huella_eco += $var_calculos['alim']['mediatarde']['pan']['factor'] * $var_calculos['alim']['mediatarde']['pan']['cantidad_por_porcion'];
	$alim_mediatarde_huella_car += $var_calculos['alim']['mediatarde']['pan']['emisiones'] * ( $var_calculos['alim']['mediatarde']['pan']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['pan']['unidad'] );
	$alim_mediatarde_huella_hid += $var_calculos['alim']['mediatarde']['pan']['agua_virtual'] * ( $var_calculos['alim']['mediatarde']['pan']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['pan']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p3']['galletas'])){
	$alim_mediatarde_huella_eco += $var_calculos['alim']['mediatarde']['galletas']['factor'] * $var_calculos['alim']['mediatarde']['galletas']['cantidad_por_porcion'];
	$alim_mediatarde_huella_car += $var_calculos['alim']['mediatarde']['galletas']['emisiones'] * ( $var_calculos['alim']['mediatarde']['galletas']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['galletas']['unidad'] );
	$alim_mediatarde_huella_hid += $var_calculos['alim']['mediatarde']['galletas']['agua_virtual'] * ( $var_calculos['alim']['mediatarde']['galletas']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['galletas']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p3']['tortitas'])){
	$alim_mediatarde_huella_eco += $var_calculos['alim']['mediatarde']['tortitas']['factor'] * $var_calculos['alim']['mediatarde']['tortitas']['cantidad_por_porcion'];
	$alim_mediatarde_huella_car += $var_calculos['alim']['mediatarde']['tortitas']['emisiones'] * ( $var_calculos['alim']['mediatarde']['tortitas']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['tortitas']['unidad'] );
	$alim_mediatarde_huella_hid += $var_calculos['alim']['mediatarde']['tortitas']['agua_virtual'] * ( $var_calculos['alim']['mediatarde']['tortitas']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['tortitas']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p3']['facturas'])){
	$alim_mediatarde_huella_eco += $var_calculos['alim']['mediatarde']['facturas']['factor'] * $var_calculos['alim']['mediatarde']['facturas']['cantidad_por_porcion'];
	$alim_mediatarde_huella_car += $var_calculos['alim']['mediatarde']['facturas']['emisiones'] * ( $var_calculos['alim']['mediatarde']['facturas']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['facturas']['unidad'] );
	$alim_mediatarde_huella_hid += $var_calculos['alim']['mediatarde']['facturas']['agua_virtual'] * ( $var_calculos['alim']['mediatarde']['facturas']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['facturas']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p3']['cereales'])){
	$alim_mediatarde_huella_eco += $var_calculos['alim']['mediatarde']['cereales']['factor'] * $var_calculos['alim']['mediatarde']['cereales']['cantidad_por_porcion'];
	$alim_mediatarde_huella_car += $var_calculos['alim']['mediatarde']['cereales']['emisiones'] * ( $var_calculos['alim']['mediatarde']['cereales']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['cereales']['unidad'] );
	$alim_mediatarde_huella_hid += $var_calculos['alim']['mediatarde']['cereales']['agua_virtual'] * ( $var_calculos['alim']['mediatarde']['cereales']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['cereales']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p3']['manteca'])){
	$alim_mediatarde_huella_eco += $var_calculos['alim']['mediatarde']['manteca']['factor'] * $var_calculos['alim']['mediatarde']['manteca']['cantidad_por_porcion'];
	$alim_mediatarde_huella_car += $var_calculos['alim']['mediatarde']['manteca']['emisiones'] * ( $var_calculos['alim']['mediatarde']['manteca']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['manteca']['unidad'] );
	$alim_mediatarde_huella_hid += $var_calculos['alim']['mediatarde']['manteca']['agua_virtual'] * ( $var_calculos['alim']['mediatarde']['manteca']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['manteca']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p3']['queso'])){
	$alim_mediatarde_huella_eco += $var_calculos['alim']['mediatarde']['queso']['factor'] * $var_calculos['alim']['mediatarde']['queso']['cantidad_por_porcion'];
	$alim_mediatarde_huella_car += $var_calculos['alim']['mediatarde']['queso']['emisiones'] * ( $var_calculos['alim']['mediatarde']['queso']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['queso']['unidad'] );
	$alim_mediatarde_huella_hid += $var_calculos['alim']['mediatarde']['queso']['agua_virtual'] * ( $var_calculos['alim']['mediatarde']['queso']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['queso']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p3']['mermelada'])){
	$alim_mediatarde_huella_eco += $var_calculos['alim']['mediatarde']['mermelada']['factor'] * $var_calculos['alim']['mediatarde']['mermelada']['cantidad_por_porcion'];
	$alim_mediatarde_huella_car += $var_calculos['alim']['mediatarde']['mermelada']['emisiones'] * ( $var_calculos['alim']['mediatarde']['mermelada']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['mermelada']['unidad'] );
	$alim_mediatarde_huella_hid += $var_calculos['alim']['mediatarde']['mermelada']['agua_virtual'] * ( $var_calculos['alim']['mediatarde']['mermelada']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['mermelada']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p3']['yogur'])){
	$alim_mediatarde_huella_eco += $var_calculos['alim']['mediatarde']['yogur']['factor'] * $var_calculos['alim']['mediatarde']['yogur']['cantidad_por_porcion'];
	$alim_mediatarde_huella_car += $var_calculos['alim']['mediatarde']['yogur']['emisiones'] * ( $var_calculos['alim']['mediatarde']['yogur']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['yogur']['unidad'] );
	$alim_mediatarde_huella_hid += $var_calculos['alim']['mediatarde']['yogur']['agua_virtual'] * ( $var_calculos['alim']['mediatarde']['yogur']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['yogur']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p3']['cafe'])){
	$alim_mediatarde_huella_eco += $var_calculos['alim']['mediatarde']['cafe']['factor'] * $var_calculos['alim']['mediatarde']['cafe']['cantidad_por_porcion'];
	$alim_mediatarde_huella_car += $var_calculos['alim']['mediatarde']['cafe']['emisiones'] * ( $var_calculos['alim']['mediatarde']['cafe']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['cafe']['unidad'] );
	$alim_mediatarde_huella_hid += $var_calculos['alim']['mediatarde']['cafe']['agua_virtual'] * ( $var_calculos['alim']['mediatarde']['cafe']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['cafe']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p3']['leche'])){
	$alim_mediatarde_huella_eco += $var_calculos['alim']['mediatarde']['leche']['factor'] * $var_calculos['alim']['mediatarde']['leche']['cantidad_por_porcion'];
	$alim_mediatarde_huella_car += $var_calculos['alim']['mediatarde']['leche']['emisiones'] * ( $var_calculos['alim']['mediatarde']['leche']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['leche']['unidad'] );
	$alim_mediatarde_huella_hid += $var_calculos['alim']['mediatarde']['leche']['agua_virtual'] * ( $var_calculos['alim']['mediatarde']['leche']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['leche']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p3']['te'])){
	$alim_mediatarde_huella_eco += $var_calculos['alim']['mediatarde']['te']['factor'] * $var_calculos['alim']['mediatarde']['te']['cantidad_por_porcion'];
	$alim_mediatarde_huella_car += $var_calculos['alim']['mediatarde']['te']['emisiones'] * ( $var_calculos['alim']['mediatarde']['te']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['te']['unidad'] );
	$alim_mediatarde_huella_hid += $var_calculos['alim']['mediatarde']['te']['agua_virtual'] * ( $var_calculos['alim']['mediatarde']['te']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['te']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p3']['mate'])){
	$alim_mediatarde_huella_eco += $var_calculos['alim']['mediatarde']['mate']['factor'] * $var_calculos['alim']['mediatarde']['mate']['cantidad_por_porcion'];
	$alim_mediatarde_huella_car += $var_calculos['alim']['mediatarde']['mate']['emisiones'] * ( $var_calculos['alim']['mediatarde']['mate']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['mate']['unidad'] );
	$alim_mediatarde_huella_hid += $var_calculos['alim']['mediatarde']['mate']['agua_virtual'] * ( $var_calculos['alim']['mediatarde']['mate']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['mate']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p3']['chocolatada'])){
	$alim_mediatarde_huella_eco += $var_calculos['alim']['mediatarde']['chocolatada']['factor'] * $var_calculos['alim']['mediatarde']['chocolatada']['cantidad_por_porcion'];
	$alim_mediatarde_huella_car += $var_calculos['alim']['mediatarde']['chocolatada']['emisiones'] * ( $var_calculos['alim']['mediatarde']['chocolatada']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['chocolatada']['unidad'] );
	$alim_mediatarde_huella_hid += $var_calculos['alim']['mediatarde']['chocolatada']['agua_virtual'] * ( $var_calculos['alim']['mediatarde']['chocolatada']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['chocolatada']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p3']['jugo_de_frutas_natural'])){
	$alim_mediatarde_huella_eco += $var_calculos['alim']['mediatarde']['jugo_de_frutas_natural']['factor'] * $var_calculos['alim']['mediatarde']['jugo_de_frutas_natural']['cantidad_por_porcion'];
	$alim_mediatarde_huella_car += $var_calculos['alim']['mediatarde']['jugo_de_frutas_natural']['emisiones'] * ( $var_calculos['alim']['mediatarde']['jugo_de_frutas_natural']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['jugo_de_frutas_natural']['unidad'] );
	$alim_mediatarde_huella_hid += $var_calculos['alim']['mediatarde']['jugo_de_frutas_natural']['agua_virtual'] * ( $var_calculos['alim']['mediatarde']['jugo_de_frutas_natural']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['jugo_de_frutas_natural']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p3']['soda'])){
	$alim_mediatarde_huella_eco += $var_calculos['alim']['mediatarde']['soda']['factor'] * $var_calculos['alim']['mediatarde']['soda']['cantidad_por_porcion'];
	$alim_mediatarde_huella_car += $var_calculos['alim']['mediatarde']['soda']['emisiones'] * ( $var_calculos['alim']['mediatarde']['soda']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['soda']['unidad'] );
	$alim_mediatarde_huella_hid += $var_calculos['alim']['mediatarde']['soda']['agua_virtual'] * ( $var_calculos['alim']['mediatarde']['soda']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['soda']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p3']['frutas'])){
	$alim_mediatarde_huella_eco += $var_calculos['alim']['mediatarde']['frutas']['factor'] * $var_calculos['alim']['mediatarde']['frutas']['cantidad_por_porcion'];
	$alim_mediatarde_huella_car += $var_calculos['alim']['mediatarde']['frutas']['emisiones'] * ( $var_calculos['alim']['mediatarde']['frutas']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['frutas']['unidad'] );
	$alim_mediatarde_huella_hid += $var_calculos['alim']['mediatarde']['frutas']['agua_virtual'] * ( $var_calculos['alim']['mediatarde']['frutas']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['frutas']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p3']['nueces_almend_mani'])){
	$alim_mediatarde_huella_eco += $var_calculos['alim']['mediatarde']['nueces_almend_mani']['factor'] * $var_calculos['alim']['mediatarde']['nueces_almend_mani']['cantidad_por_porcion'];
	$alim_mediatarde_huella_car += $var_calculos['alim']['mediatarde']['nueces_almend_mani']['emisiones'] * ( $var_calculos['alim']['mediatarde']['nueces_almend_mani']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['nueces_almend_mani']['unidad'] );
	$alim_mediatarde_huella_hid += $var_calculos['alim']['mediatarde']['nueces_almend_mani']['agua_virtual'] * ( $var_calculos['alim']['mediatarde']['nueces_almend_mani']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['nueces_almend_mani']['unidad'] );
}

if(isset($_SESSION['datos']['alimentos_p3']['chocolate'])){
	$alim_mediatarde_huella_eco += $var_calculos['alim']['mediatarde']['chocolate']['factor'] * $var_calculos['alim']['mediatarde']['chocolate']['cantidad_por_porcion'];
	$alim_mediatarde_huella_car += $var_calculos['alim']['mediatarde']['chocolate']['emisiones'] * ( $var_calculos['alim']['mediatarde']['chocolate']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['chocolate']['unidad'] );
	$alim_mediatarde_huella_hid += $var_calculos['alim']['mediatarde']['chocolate']['agua_virtual'] * ( $var_calculos['alim']['mediatarde']['chocolate']['cantidad_por_porcion'] / $var_calculos['alim']['mediatarde']['chocolate']['unidad'] );
}

 // FIN DESAYUNO
?>