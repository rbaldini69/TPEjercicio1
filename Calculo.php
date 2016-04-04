<?php

	if(isset($_GET['precio1'])&&isset($_GET['precio2'])&&isset($_GET['precio3']))
	{
		$precio1=$_GET['precio1'];
		$precio2=$_GET['precio2'];
		$precio3=$_GET['precio3'];

		if ($_GET['suma']) {
		$suma=$precio1+$precio2+$precio3;
		$muestro=$suma;
		$operacion="Ud. deberÃ­a pagar unos: $ ";

		}
		if ($_GET['promedio']) {
		$promedio=($precio1+$precio2+$precio3)/3;
		$muestro=$promedio;
		$operacion="Promedio de precios ingresados: $";

		}
		if ($_GET['pfinal']) {
		$pfinal=($precio1+$precio2+$precio3)*1.21;
		$operacion="Precio final con IVA: $";
		$muestro=$pfinal;
		}
		$_GET['precio1']==$precio1;

		include"index.html";
	}
?>
