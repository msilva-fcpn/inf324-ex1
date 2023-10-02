<html>
<head>
	<title>Ejemplo</title>
	<link rel="stylesheet" href="miestilo.css"/>
</head>
<body>
	<div id="cabecera">
		Universidad Mayor de San Andres<br>
		Facultad de Ciencias Puras y Naturales
	</div>
	<div class="menu">
		<a href="">Matematica</a><br>
		<a href="">Fisica</a><br>
		<a href="">Quimica</a><br>
	</div>
	<div id="contenido">
		Bienvenido a la facultad de ciencias puras
		  <?php
		  	echo "Mi ejemplin";
		  	echo "'Holas'<br>";
		  	echo '"Holas"<br>';
		  	echo '<a href="http://google'.'.com">Google</a>';
		  ?>
	</div>
</body>
</html>