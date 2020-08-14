<?php
	include_once '../bd/conexion.php';

	if(isset($_GET['ID_Empleado'])){
		$ID_Empleado=(int) $_GET['ID_Empleado'];

		$buscar_id=$con->prepare('SELECT * FROM empleado WHERE ID_Empleado=:ID_Empleado LIMIT 1');
		$buscar_id->execute(array(
			':ID_Empleado'=>$ID_Empleado
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: ../empleados.php');
	}


	if(isset($_POST['actualizar_empleado'])){
		$Nombre1=$_POST['Nombre1'];
		$Nombre2=$_POST['Nombre2'];
		$Apellido1=$_POST['Apellido1'];
		$Apellido2=$_POST['Apellido2'];
	    $ID_Empleado=(int) $_GET['ID_Empleado'];
		$E_MAIL=$_POST['E_MAIL'];
		$Domicilio=$_POST['Domicilio'];
		$Telefono=$_POST['Telefono'];
		$ID_Supervisor=$_POST['ID_Supervisor'];
		$ID_Departamento=$_POST['ID_Departamento'];
	
		if(!empty($Nombre1) && !empty($Apellido1) && !empty($Apellido2)  && !empty($E_MAIL) && !empty($Domicilio) && !empty($Telefono) && !empty($ID_Supervisor) && !empty($ID_Departamento) ){
			if(!filter_var($E_MAIL,FILTER_VALIDATE_EMAIL)){
				echo "<script> alert('Correo no valido');</script>";
			}else{
				$consulta_update=$con->prepare(' UPDATE empleado SET  

					Nombre1=:Nombre1,
					Nombre2=:Nombre2,
					Apellido1=:Apellido1,
					Apellido2=:Apellido2,
					E_MAIL=:E_MAIL,
					Domicilio=:Domicilio,
					Telefono=:Telefono,
					ID_Supervisor=:ID_Supervisor
					ID_Departamento=:ID_Departamento
					WHERE ID_Empleado=:ID_Empleado;'
				);
				$consulta_update->execute(array(
					':Nombre1' =>$Nombre1,
					':Nombre2' =>$Nombre2,
					':Apellido1' =>$Apellido1,
					':Apellido2' =>$Apellido2,
					':E_MAIL' =>$E_MAIL,
					':Domicilio' =>$Domicilio,
					':Telefono' =>$Telefono,
					':ID_Supervisor' =>$ID_Supervisor,
					':ID_Departamento' =>$ID_Departamento,
					':ID_Empleado' =>$ID_Empleado
				));
				header('Location: ../empleados.php');
			}
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}
	}


?>
