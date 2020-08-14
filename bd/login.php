<?php
session_start();

include_once 'conexion.php';

    if(isset($_POST['login'])):
	    if(empty($_POST['usuario']) || empty($_POST['password'])):
		    echo 'No dejes campos en blanco';
		elseif(strlen($_POST['usuario']) > 20):
		    echo 'El usuario no puede tener mas de 20 caracteres';
		elseif(strlen($_POST['password']) > 20):
		    echo 'La contraseña no puede tener mas de 20 caracteres';
		else:
            $login = $con->prepare("SELECT usuario FROM usuarios WHERE usuario = :usuario AND password = :password");
            $login->bindParam(':usuario',$_POST['usuario']);
            $login->bindParam(':password',$_POST['password']);
            $login->execute();
            if($login = $login->fetch(PDO::FETCH_ASSOC)):
			    $_SESSION['usuario'] = $_POST['usuario'];
                header('Location: http://localhost/SOFTCYS/inicio');
                elseif($_POST["password"]==$_POST["password"]):

                    echo "La contraseña es incorrecta";
                    # code...
                
            else:
                echo 'Los datos son incorrectos';
            endif;
        endif;
    endif;

?>