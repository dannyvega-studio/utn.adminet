<?php
	include_once '../bd/conexion.php';

	//Actualizar empresas

	if(isset($_GET['ID_Departamento'])){
		$ID_Departamento=(int) $_GET['ID_Departamento'];

		$buscar_id=$con->prepare('SELECT * FROM departamento WHERE ID_Departamento=:ID_Departamento LIMIT 1');
		$buscar_id->execute(array(
			':ID_Departamento'=>$ID_Departamento
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: ../departamentos.php');
	}


	if(isset($_POST['actualizar_departamento'])){
		$Nombre_Departamento=$_POST['Nombre_Departamento'];
	    $ID_Director=(int) $_GET['ID_Director'];
	
		if(!empty($Nombre_Departamento) && !empty($ID_Director) ){
			
			}else{
				$consulta_update=$con->prepare('UPDATE departamento SET  

					Nombre_Departamento=:Nombre_Departamento,
					ID_Director=:ID_Director
					WHERE ID_Departamento=:ID_Departamento;'
				);
				$consulta_update->execute(array(
					':Nombre_Departamento' =>$Nombre_Departamento,
					':ID_Director' =>$ID_Director,
					':ID_Departamento' =>$ID_Departamento
				));
				header('Location: ../departamentos.php');
			}
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}

?>
