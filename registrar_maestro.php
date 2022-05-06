<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="proyecto_rosario";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Eweik diseño de pagina web</title>
	<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="ext/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/keyframes.css">
	<link rel="stylesheet" type="text/css" href="css/keyframes.css">
	<link rel="stylesheet" type="text/css" href="css/banner.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<nav class="ewk_navbar navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">Menú</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Ayuda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacto escolar</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Desarrollador
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Contacto Desarrollador</a>
          <a class="dropdown-item" href="#">Soporte técnico</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Contrato</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Información</a>
      </li>
    </ul>
  
  </div>
</nav>
	</header>
	<section>
		<div class="ewk_cont_banner">
			<div class="ewk_sombra">
				<h1>Registrar Maestro</h1>
				<p>Ingrese los datos</p>
				<hr/>
					<form action="#" class="proyecto_rosario" id="proyecto_rosario" name="proyecto_rosario" method="POST">
				<div class="ewk_cont_ban_link">
					
					<a class="ewk_banner_link" ><input type='text' name="clave" size="17" maxlength="40" placeholder="Clave"></a>
					<!--<a class="ewk_banner_link_1" href="">Licitaciones</a>-->

					<a class="ewk_banner_link_2" ><input type='text' name="nombre" size="17" maxlength="40" placeholder="Nombre Completo"></a>

					<a class="ewk_banner_link" ><input type='text' name="usuario" size="17" maxlength="40" placeholder="Usuario"></a>

					<a class="ewk_banner_link_2" ><input type='password' name="password" size="17" maxlength="40" placeholder="Contraseña"></a>

					<a class="ewk_banner_link" ><input type='text' name="curp" size="17" maxlength="40" placeholder="CURP"></a>

					<a class="ewk_banner_link" ><input type='text' name="grupo" size="17" maxlength="40" placeholder="Grupo"></a>

					<a class="ewk_banner_link" ><input type='text' name="grado" size="17" maxlength="40" placeholder="Grado"></a>

					<p><br></p>

					<a class="ewk_banner_link_3" ><input type="submit" name='Registrar' value='Registrar' style='width:145px; height:25px'> </a>
				</div>
			</form>
			</div>
		</div>
	</section>
<script type="text/javascript" src="ext/bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="ext/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>

</body>
</html>
<?php
	if(isset($_POST['Registrar'])){
		$clave =$_POST["clave"];
		$nombre =$_POST["nombre"];
		$usuario =$_POST["usuario"];
		$curp=$_POST["password"];
		$grupo =$_POST["grupo"];
		$grado =$_POST["grado"];

		
		$insertarDatos = "INSERT INTO maestros VALUES('$clave',
													'$nombre',
													'$usuario',
													'$password',
													'curp',
													'grupo',
													'grado')";

		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}
	}
?>