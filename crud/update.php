<?php
	include_once '../bd/conexion.php';

	//Actualizar empresas

	if(isset($_GET['ID_Empresa'])){
		$ID_Empresa=(int) $_GET['ID_Empresa'];

		$buscar_id=$con->prepare('SELECT * FROM empresa_solicitante WHERE ID_Empresa=:ID_Empresa LIMIT 1');
		$buscar_id->execute(array(
			':ID_Empresa'=>$ID_Empresa
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: ../empresas.php');
	}


	if(isset($_POST['actualizar_empresa'])){
		$Nombre_Empresa=$_POST['Nombre_Empresa'];
	    $ID_Empresa=(int) $_GET['ID_Empresa'];
		$RFC_Empresa=$_POST['RFC_Empresa'];
		$Ubicacion_Empresa=$_POST['Ubicacion_Empresa'];
		$Telefono_Empresa=$_POST['Telefono_Empresa'];
		$Correo_Empresa=$_POST['Correo_Empresa'];
	
		if(!empty($Nombre_Empresa) && !empty($RFC_Empresa) && !empty($Ubicacion_Empresa) && !empty($Telefono_Empresa) && !empty($Correo_Empresa) ){
			if(!filter_var($Correo_Empresa,FILTER_VALIDATE_EMAIL)){
				echo "<script> alert('Correo no valido');</script>";
			}else{
				$consulta_update=$con->prepare('UPDATE empresa_solicitante SET  

					Nombre_Empresa=:Nombre_Empresa,
					RFC_Empresa=:RFC_Empresa,
					Ubicacion_Empresa=:Ubicacion_Empresa,
					Telefono_Empresa=:Telefono_Empresa,
					Correo_Empresa=:Correo_Empresa
					WHERE ID_Empresa=:ID_Empresa;'
				);
				$consulta_update->execute(array(
					':Nombre_Empresa' =>$Nombre_Empresa,
					':RFC_Empresa' =>$RFC_Empresa,
					':Ubicacion_Empresa' =>$Ubicacion_Empresa,
					':Telefono_Empresa' =>$Telefono_Empresa,
					':Correo_Empresa' =>$Correo_Empresa,
					':ID_Empresa' =>$ID_Empresa
				));
				header('Location: ../empresas.php');
			}
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}
	}

?>
