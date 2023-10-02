<?php 
include "conexion.inc.php";
$ci=$_GET["ci"];
$resultado=mysqli_query($con, "delete from alumno where ci=$ci");
?>
<a href="index.php">Volver</a>