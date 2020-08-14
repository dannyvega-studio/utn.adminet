<?php 
	include_once '../crud/insert.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo contrato</title>
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
		<h2>Registrar contrato </h2>
		<form action="" method="post">
			<div class="form-group">
				
			</div>
			<div class="form-group">
				<input type="text" id="ID_Departamento" name="ID_Departamento" placeholder="Identificador departamento" class="input__text">
				<input type="text" id="ID_Puesto" name="ID_Puesto" placeholder="Identificador puesto" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" id="Fecha_Contrato" name="Fecha_Contrato" placeholder="Fecha de contrato" class="input__text">
				<input type="text" id="Fecha_Renovacion_Contrato" name="Fecha_Renovacion_Contrato" placeholder="Fecha de renovacion" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" id="Sueldo" name="Sueldo" placeholder="Sueldo" class="input__text">
			</div>
			<div class="btn__group">
				<a href="../contratos.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" id="registrarContrato" name="guardarcontrato" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="../js/sweetalert2@9.js"></script>
	<script src="../js/alerts.js"></script>
</body>
</html>
