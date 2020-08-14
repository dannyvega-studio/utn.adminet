<?php 
	include_once '../crud/update.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Modificar empresa</title>
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
		<h2>Modificar informacion de la empresa</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" id="Nombre_Empresa" name="Nombre_Empresa" value="<?php if($resultado) echo $resultado['Nombre_Empresa']; ?>" class="input__text">
				<input type="text" id="RFC_Empresa" name="RFC_Empresa" value="<?php if($resultado) echo $resultado['RFC_Empresa']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" id="Ubicacion_Empresa" name="Ubicacion_Empresa" value="<?php if($resultado) echo $resultado['Ubicacion_Empresa']; ?>" class="input__text">
				<input type="text" id="Telefono_Empresa" name="Telefono_Empresa" value="<?php if($resultado) echo $resultado['Telefono_Empresa']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" id="Correo_Empresa" name="Correo_Empresa" value="<?php if($resultado) echo $resultado['Correo_Empresa']; ?>" class="input__text">
			</div>
			<div class="btn__group">
				<a href="../empresas.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" id="actualizarEmpresaCliente" name="actualizar_empresa" value="Guardar" class="btn btn__primary">
			</div>
		</form>

		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="../js/sweetalert2@9.js"></script>
	<script src="../js/alerts.js"></script>
	</div>
</body>
</html>
