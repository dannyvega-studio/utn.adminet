<?php 

	include_once '../bd/conexion.php';
	
	if(isset($_GET['ID_Empresa'])){
		$ID_Empresa=(int) $_GET['ID_Empresa'];
		$delete=$con->prepare('DELETE FROM empresa_solicitante WHERE ID_Empresa=:ID_Empresa');
		$delete->execute(array(
			':ID_Empresa'=>$ID_Empresa
		));
		header('Location: ../empresas.php');
	}else{
		header('Location: ../empresas.php');
	}

 ?>