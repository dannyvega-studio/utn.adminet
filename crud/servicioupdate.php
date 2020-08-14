<?php
	include_once '../bd/conexion.php';

	//Actualizar servicios

	if(isset($_GET['ID_Servicio'])){
		$ID_Servicio=(int) $_GET['ID_Servicio'];

		$buscar_id=$con->prepare('SELECT * FROM servicios WHERE ID_Servicio=:ID_Servicio LIMIT 1');
		$buscar_id->execute(array(
			':ID_Servicio'=>$ID_Servicio
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: ../servicios.php');
	}


	if(isset($_POST['actualizar_servicio']))
	{
		$Nombre_Servicio=$_POST['Nombre_Servicio'];
	    $ID_Servicio=(int) $_GET['ID_Servicio'];
		$ID_Departamento=$_POST['ID_Departamento'];

		if(!empty($Nombre_Servicio) && !empty($ID_Servicio) )
		{
			$consulta_update=$con->prepare('UPDATE servicios SET  
					Nombre_Servicio=:Nombre_Servicio,
					ID_Departamento=:ID_Departamento
					WHERE ID_Servicio=:ID_Servicio;'
			);
			$consulta_update->execute(array(
				':Nombre_Servicio' =>$Nombre_Servicio,
				':ID_Departamento' =>$ID_Departamento,
				':ID_Servicio' =>$ID_Servicio
			));
			header('Location: ../servicios.php');
		}else
		{
			echo "<script> alert('Los campos estan vacios');</script>";
		}
	}
?>