<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
</head>
<body>
<form action="http://localhost/bd/usuario.php" method="post">
	usuario
	<input type="text" name="usuario" value=""/>
	<br/>
	contrasenia
	<input type="password" name="contrasenia" value=""/>
	<br/>
	<input type="submit" name="aceptar" value="Aceptar"/>
</form>
</body>
</html>
