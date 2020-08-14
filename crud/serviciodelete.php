<?php 

	include_once '../bd/conexion.php';
	
	if(isset($_GET['ID_Servicio'])){
		$ID_Servicio=(int) $_GET['ID_Servicio'];
		$delete=$con->prepare('DELETE FROM servicios WHERE ID_Servicio=:ID_Servicio');
		$delete->execute(array(
			':ID_Servicio'=>$ID_Servicio
		));
		header('Location: ../servicios.php');
	}else{
		header('Location: ../servicios.php');
	}

 ?>