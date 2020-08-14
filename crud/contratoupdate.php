<?php
	include_once '../bd/conexion.php';

	//Actualizar empresas

	if(isset($_GET['ID_Empleado'])){
		$ID_Empleado=(int) $_GET['ID_Empleado'];

		$buscar_id=$con->prepare('SELECT * FROM contrato WHERE ID_Empleado=:ID_Empleado LIMIT 1');
		$buscar_id->execute(array(
			':ID_Empleado'=>$ID_Empleado
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: ../contratos.php');
	}


	if(isset($_POST['actualizar_contrato']))
	{
	    $ID_Empleado=(int) $_GET['ID_Empleado'];
	    $ID_Departamento=$_POST['ID_Departamento'];
		$ID_Puesto=$_POST['ID_Puesto'];
		$Fecha_Contrato=$_POST['Fecha_Contrato'];
		$Fecha_Renovacion_Contrato=$_POST['Fecha_Renovacion_Contrato'];
		$Sueldo=$_POST['Sueldo'];
	
		if(!empty($ID_Departamento) && !empty($ID_Puesto) && !empty($Fecha_Contrato) && !empty($Fecha_Renovacion_Contrato) && !empty($Sueldo) )
		{
			
				$consulta_update=$con->prepare('UPDATE contrato SET  

					ID_Departamento=:ID_Departamento,
					ID_Puesto=:ID_Puesto,
					Fecha_Contrato=:Fecha_Contrato,
					Fecha_Renovacion_Contrato=:Fecha_Renovacion_Contrato
					Sueldo=:Sueldo
					WHERE ID_Empleado=:ID_Empleado;'
				);
				$consulta_update->execute(array(
					':ID_Departamento' =>$ID_Departamento,
					':ID_Puesto' =>$ID_Puesto,
					':Fecha_Contrato' =>$Fecha_Contrato,
					':Fecha_Renovacion_Contrato' =>$Fecha_Renovacion_Contrato,
					':Sueldo' =>$Sueldo,
					':ID_Empleado' =>$ID_Empleado
				));
				header('Location: ../contratos.php');
			
		}
		else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}
}
	

?>
