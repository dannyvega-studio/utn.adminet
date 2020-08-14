<?php 

	include_once '../bd/conexion.php';
	
	if(isset($_GET['ID_Departamento'])){
		$ID_Departamento=(int) $_GET['ID_Departamento'];
		$delete=$con->prepare('DELETE FROM departamento WHERE ID_Departamento=:ID_Departamento');
		$delete->execute(array(
			':ID_Departamento'=>$ID_Departamento
		));
		header('Location: ../departamentos.php');
	}else{
		header('Location: ../departamentos.php');
	}

 ?>