<?php
session_start();
if (!isset($_SESSION["usuario"]))
{
	header("Location: ingreso.php");
	exit;
}
else
{
	if ($_SESSION["usuario"]=="nohay")
	{
		header("Location: ingreso.php");
		exit;
	}
}
?>
<html>
<div style="width: 100%; height: 30px; background-color: #dbdaf2 ">
	Usuario: <?php echo $_SESSION["usuario"]; ?>
	<img src="usuario.jpg" style="height: 15px; width:15px; "  />
	<a href="salir.php">Salir</a>
</div>
<body style="background-color: <?php echo $_SESSION["color"];?>;">
<table>
	<tr>
		<td>CI</td>
		<td>Nombre</td>
		<td>Paterno</td>
		<td>operaciones</td>
	</tr>
<?php
include "conexion.inc.php";
$resultado=mysqli_query($con, "select * from alumno");
while($registro=mysqli_fetch_array($resultado))
{
	echo "<tr>";
	echo "<td>".$registro["ci"]."</td>";
	echo "<td>".$registro["nombre"]."</td>";
	echo "<td>".$registro["paterno"]."</td>";
	echo "<td>";
	echo "Adicionar ";
	echo "<a href='eliminar.php?ci=".$registro["ci"]."'>Eliminar</a>";
	echo "<a href='modificar.php?ci=".$registro["ci"]."'>Modificar</a>";
	echo "</td>";
	echo "</tr>";
}
?>
</table>
<a href="modificar.php?bandera=1">Adicionar</a>
</body>
</html>