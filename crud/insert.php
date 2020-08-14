<?php 

	include_once '../bd/conexion.php';

        //Registro Empresas			
	if(isset($_POST['guardarempresa'])){ 
		$Nombre_Empresa=$_POST['Nombre_Empresa'];
		$RFC_Empresa=$_POST['RFC_Empresa'];
		$Ubicacion_Empresa=$_POST['Ubicacion_Empresa'];
		$Telefono_Empresa=$_POST['Telefono_Empresa'];
		$Correo_Empresa=$_POST['Correo_Empresa'];

		if(!empty($Nombre_Empresa) && !empty($RFC_Empresa) && !empty($Ubicacion_Empresa) && !empty($Telefono_Empresa) && !empty($Correo_Empresa) ){
			if(!filter_var($Correo_Empresa,FILTER_VALIDATE_EMAIL)){
				echo "<script> alert('Correo no valido');</script>";
			}else{
				$consulta_insert=$con->prepare('INSERT INTO empresa_solicitante (Nombre_Empresa,RFC_Empresa,Ubicacion_Empresa,Telefono_Empresa,Correo_Empresa) VALUES(:Nombre_Empresa,:RFC_Empresa,:Ubicacion_Empresa,:Telefono_Empresa,:Correo_Empresa)');
				$consulta_insert->execute(array(
					':Nombre_Empresa' =>$Nombre_Empresa,
					':RFC_Empresa' =>$RFC_Empresa,
					':Ubicacion_Empresa' =>$Ubicacion_Empresa,
					':Telefono_Empresa' =>$Telefono_Empresa,
					':Correo_Empresa' =>$Correo_Empresa
										
				));
				header('Location: ../empresas.php');
			}
		}
		}
	



       //Registro Empleados
if(isset($_POST['guardarempleado'])){
		$Nombre1=$_POST['Nombre1'];
		$Nombre2=$_POST['Nombre2'];
		$Apellido1=$_POST['Apellido1'];
		$Apellido2=$_POST['Apellido2'];
		$E_MAIL=$_POST['E_MAIL'];
		$Domicilio=$_POST['Domicilio'];
		$Telefono=$_POST['Telefono'];
		$ID_Supervisor=$_POST['ID_Supervisor'];
		$ID_Departamento=$_POST['ID_Departamento'];

		if(!empty($Nombre1)&& !empty($Apellido1) && !empty($Apellido2) && !empty($E_MAIL) && !empty($Domicilio) && !empty($Telefono) && !empty($ID_Supervisor) && !empty($ID_Departamento)){
			if(!filter_var($E_MAIL,FILTER_VALIDATE_EMAIL)){
				echo "<script> alert('Correo no valido');</script>";
			}else{
				$consulta_insert=$con->prepare('INSERT INTO empleado (Nombre1,Nombre2,Apellido1,Apellido2,E_MAIL,Domicilio, Telefono, ID_Supervisor, ID_Departamento) VALUES(:Nombre1,:Nombre2,:Apellido1,:Apellido2,:E_MAIL,:Domicilio, :Telefono, :ID_Supervisor, :ID_Departamento)');
				$consulta_insert->execute(array(
					':Nombre1' =>$Nombre1,
					':Nombre2' =>$Nombre2,
					':Apellido1' =>$Apellido1,
					':Apellido2' =>$Apellido2,
					':E_MAIL' =>$E_MAIL,
					':Domicilio' =>$Domicilio,
					':Telefono' =>$Telefono,
					':ID_Supervisor' =>$ID_Supervisor,
					':ID_Departamento' =>$ID_Departamento
					
				));
				header('Location: ../empleados.php');
			}
		}

	}


	       //Registro Contratos
if(isset($_POST['guardarcontrato'])){
		$ID_Departamento=$_POST['ID_Departamento'];
		$ID_Puesto=$_POST['ID_Puesto'];
		$Fecha_Contrato=$_POST['Fecha_Contrato'];
		$Fecha_Renovacion_Contrato=$_POST['Fecha_Renovacion_Contrato'];
		$Sueldo=$_POST['Sueldo'];

		if(!empty($ID_Departamento)&& !empty($ID_Puesto) && !empty($Fecha_Contrato) && !empty($Fecha_Renovacion_Contrato) && !empty($Sueldo)){
			}else{
				$consulta_insert=$con->prepare('INSERT INTO contrato (ID_Departamento,ID_Puesto,Fecha_Contrato,Fecha_Renovacion_Contrato,Sueldo) VALUES(:ID_Departamento,:ID_Puesto,:Fecha_Contrato,:Fecha_Renovacion_Contrato,:Sueldo)');
				$consulta_insert->execute(array(
					':ID_Departamento' =>$ID_Departamento,
					':ID_Puesto' =>$ID_Puesto,
					':Fecha_Contrato' =>$Fecha_Contrato,
					':Fecha_Renovacion_Contrato' =>$Fecha_Renovacion_Contrato,
					':Sueldo' =>$Sueldo
					
				));
				header('Location: ../contratos.php');
			}
		
		}

	

	       //Registro Servicios
if(isset($_POST['guardarservicio'])){
		$Nombre_Servicio=$_POST['Nombre_Servicio'];
		$ID_Departamento=$_POST['ID_Departamento'];

		if(!empty($Nombre_Servicio)&& !empty($ID_Departamento)){
			
				$consulta_insert=$con->prepare('INSERT INTO servicios (Nombre_Servicio,ID_Departamento) VALUES(:Nombre_Servicio,:ID_Departamento)');
				$consulta_insert->execute(array(
					':Nombre_Servicio' =>$Nombre_Servicio,
					':ID_Departamento' =>$ID_Departamento
					
				));
				header('Location: ../servicios.php');
			
		}
	}

	       //Registro Departamento
if(isset($_POST['guardardepartamento'])){
		$Nombre_Departamento=$_POST['Nombre_Departamento'];
		$ID_Director=$_POST['ID_Director'];

		if(!empty($Nombre_Departamento)&& !empty($ID_Director)){

				$consulta_insert=$con->prepare('INSERT INTO departamento (Nombre_Departamento,ID_Director) VALUES(:Nombre_Departamento,:ID_Director)');
				$consulta_insert->execute(array(
					':Nombre_Departamento' =>$Nombre_Departamento,
					':ID_Director' =>$ID_Director
					
				));
				header('Location: ../departamentos.php');
		
		}
	}
?>


