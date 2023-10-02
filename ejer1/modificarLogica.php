<?php
include "conexion.inc.php";
$ci=$_GET["ci"];
$nombre=$_GET["nombre"];
$paterno=$_GET["paterno"];
$bandera=$_GET["bandera"];
if (isset($_GET["Aceptar"]))
{
	if ($bandera=="adicionar")
	{
		$resultado=mysqli_query($con, "insert into alumno(ci, nombre, paterno) values('$ci','$nombre','$paterno')");
	}
	else
		$resultado=mysqli_query($con, "update alumno set nombre='$nombre', paterno='$paterno' where ci=$ci");
	echo '<img src="iok.png" width="60px" height="60px"/>';
}
else
{
	echo '<img src="icancelar.png" width="60px" height="60px"/>';
}
echo "<br><a href='index.php'>Volver</a>";
?>
