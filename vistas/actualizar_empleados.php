<?php 
	include_once '../crud/empleadoupdate.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Modificar empleado</title>
	<link rel="stylesheet" href="../css/estilo.css">
		<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../bootstrap/bootstrap.min.css">    
	<link rel="stylesheet" href="../bootstrap/style.css">
	<link rel="stylesheet" href="../bootstrap/font-awesome.min.css">
</head>

<body>

	 <!-- Menu -->
    <header>          
       <div class="container-fluid menu" >
         <nav class="navbar navbar-expand-lg container">
            <a class="navbar-brand text-light bg-gray" href="#"><img src="../img/logo.png" class="img-fluid" width="60" alt="Multiversos">SoftCyS | Plataforma Interactiva'</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">               
              </ul>              
            </div>
          </nav>
      </div>            
    </header>
<!-- Fin Menu -->

	<div class="contenedor">
		<h2>Modificar informacion del empleado</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" id="Nombre1" name="Nombre1" value="<?php if($resultado) echo $resultado['Nombre1']; ?>" class="input__text">
				<input type="text" id="Nombre2" name="Nombre2" value="<?php if($resultado) echo $resultado['Nombre2']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" id="Apellido1" name="Apellido1" value="<?php if($resultado) echo $resultado['Apellido1']; ?>" class="input__text">
				<input type="text" id="Apellido2" name="Apellido2" value="<?php if($resultado) echo $resultado['Apellido2']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" id="E_MAIL"  name="E_MAIL" value="<?php if($resultado) echo $resultado['E_MAIL']; ?>" class="input__text">
				<input type="text" id="Domicilio" name="Domicilio" value="<?php if($resultado) echo $resultado['Domicilio']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" id="Telefono" name="Telefono" value="<?php if($resultado) echo $resultado['Telefono']; ?>" class="input__text">
				<input type="text" id="ID_Supervisor" name="ID_Supervisor" value="<?php if($resultado) echo $resultado['ID_Supervisor']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" id="ID_Departamento" name="ID_Departamento" value="<?php if($resultado) echo $resultado['ID_Departamento']; ?>" class="input__text">
			</div>
			<div class="btn__group">
				<a href="../empleados.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" id="actualizarEmpleado" name="actualizar_empleado" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="../js/sweetalert2@9.js"></script>
	<script src="../js/alerts.js"></script>
</body>
</html>
