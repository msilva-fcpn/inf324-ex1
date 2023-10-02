<?php
$usuario=$_POST["usuario"];
$contrasenia=$_POST["contrasenia"];
session_start();
if ($usuario=="juan" && $contrasenia=="123456")
{
	$_SESSION["usuario"]="juan";
	$_SESSION["color"]="#daf2e6";
	header("Location: index.php");
	exit;
}
if ($usuario=="maria" && $contrasenia=="123456")
{
	$_SESSION["usuario"]="maria";
	$_SESSION["color"]="#ecdaf2";
	header("Location: index.php");
	exit;
}
else
{
	$_SESSION["usuario"]="nohay";
	header("Location: ingreso.php");
	exit;
}
?>