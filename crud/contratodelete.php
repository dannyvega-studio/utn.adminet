<?php 

	include_once '../bd/conexion.php';
	
	if(isset($_GET['ID_Empleado'])){
		$ID_Empleado=(int) $_GET['ID_Empleado'];
		$delete=$con->prepare('DELETE FROM contrato WHERE ID_Empleado=:ID_Empleado');
		$delete->execute(array(
			':ID_Empleado'=>$ID_Empleado
		));
		header('Location: ../contratos.php');
	}else{
		header('Location: ../contratos.php');
	}

 ?>