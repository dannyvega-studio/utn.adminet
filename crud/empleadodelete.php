<?php 

    include_once '../bd/conexion.php';
	
	if(isset($_GET['ID_Empleado'])){
		$ID_Empleado=(int) $_GET['ID_Empleado'];
		$delete=$con->prepare('DELETE FROM empleado WHERE ID_Empleado=:ID_Empleado');
		$delete->execute(array(
			':ID_Empleado'=>$ID_Empleado
		));
		header('Location: ../empleados.php');
	}else{
		header('Location: ../empleados.php');
	}
?>