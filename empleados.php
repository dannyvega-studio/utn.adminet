<?php
	include_once 'bd/conexion.php';
	

	$sentencia_select=$con->prepare('SELECT * FROM empleado ORDER BY ID_Empleado ASC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT * FROM empleado WHERE Nombre1 LIKE :campo OR ID_Empleado LIKE :campo;'
		);

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));

		$resultado=$select_buscar->fetchAll();

	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Soft CyS</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/estiloinicios.css">
		<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">    
	<link rel="stylesheet" href="bootstrap/style.css">
	<link rel="stylesheet" href="bootstrap/font-awesome.min.css">

	<!---->
	<link rel="stylesheet" type="text/css" href="css/estiloinicios.css">
      <link rel="stylesheet" type="text/css" href="css/estilocarrusel.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    	<script src="jquery/jquery-3.3.1.min.js" type="text/javascript"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">   
    	  
    	<link rel="stylesheet" type="text/css" href="css/estiloinicios.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 


	<script src="jquery/jquery-3.3.1.min.js" type="text/javascript"></script>   

</head>

<body>

	<header>			

		     <!-- Inicio Nabvar -->
			 <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <!-- Brand -->
    <a href="inicio.html">
      <img src="img/adminet.png" width="100" class="img-thumbnail ml-4 mt-2 mb-2" alt="Proyecto Adminet">
    </a>
    <!-- Toggler/Collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
    </button>
   
    <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link text-success mr-1" href="inicio.html" style="font-size: 16px;">
          <img src="img/inicio.png" style="width: 30px; height: 30px;">
           Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-success mr-1" href="panel.html" style="font-size: 16px;">
          <img src="img/panel.png" style="width: 30px; height: 30px;">
           Panel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-success mr-1" href="reportes.html" style="font-size: 16px;">
          <img src="img/report.png" style="width: 30px; height: 30px;">
          Reportes</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link text-success dropdown-toggle mr-1" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 16px;">
          <img src="img/pdf.png" style="width: 30px; height: 30px;">
          Manuales
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item text-success" href="pdfDocuments/MANUALTECNICO.pdf" target="_blank" style="font-size: 16px;">Manual Tecnico</a>
          <a class="dropdown-item text-success" href="pdfDocuments/MANUALUSUARIO.pdf" target="_blank" style="font-size: 16px;">Manual de Usuario</a>
        </div>
        </li>
        <li class="nav-item">
          <a class="nav-link text-success" href="bd/logout.php" style="font-size: 16px;">
            <img src="img/cerrar.png" style="width: 30px; height: 30px;">
            Cerrar Sesion</a>
        </li>
      </ul>
  </div>
</nav>
  <!-- Fin Navbar -->

	        </header>	

	<!-- Inicio Bienvenida -->
	<div class="container-fliud fondo" style="margin-top: 70px;">
	<div class="container">
	  <div class="row align-items-center text-center text-light py-5">
	  	<div class="col-md-12">
			  <h1 class="display-4">Bienvenido a SoftCyS</h1>
			  <img src="img/adminet.png" style="max-width: 30%;">
		<p class="lead">Administracion de los empleados</p>
	  	</div>
	  </div>	
	</div>  
</div><!-- Fin Bienvenida -->

	<div class="contenedor">
		<h2>Registro de empleados</h2>
		<div class="barra__buscador">
			<form action="" class="formulario" method="post">
				<input type="text" name="buscar" placeholder="Buscar Empresa" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
				<a href="vistas/registro_empleados.php" class="btn btn__nuevo">Nuevo</a>
			</form>
		</div>
		<table id="tablaempleados" class="table table-striped table-bordered table-condensed"  style="width: 100%">
			<tr class="head">
				            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Correo </th>  
                            <th>Domicilio</th>
                            <th>Telefono</th> 
				            <td colspan="2">Acciones</td>
			</tr>
			<?php foreach($resultado as $fila):?>
				<tr >
					<td><?php echo $fila['Nombre1']; ?></td>
					<td><?php echo $fila['Apellido1']; ?></td>
					<td><?php echo $fila['Apellido2']; ?></td>
					<td><?php echo $fila['E_MAIL']; ?></td>
					<td><?php echo $fila['Domicilio']; ?></td>
					<td><?php echo $fila['Telefono']; ?></td>
					<td><a href="vistas/actualizar_empleados.php?ID_Empleado=<?php echo $fila['ID_Empleado']; ?>"  class="btn__update" >Editar</a></td>
					<td><a href="crud/empleadodelete.php?ID_Empleado=<?php echo $fila['ID_Empleado']; ?>" class="btn__delete">Eliminar</a></td>
				</tr>
			<?php endforeach ?>

		</table>
	</div>
</body>
</html>