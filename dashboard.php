<?php require_once "vistas/parte_superior.php"?>


<!--INICIO del cont principal-->
<div class="container">
 
    
 <?php
    require_once "bd/conexion.php";

    $sentencia_select=$con->prepare('SELECT Nombre_Servicio, COUNT(Nombre_Servicio) As Cantidad FROM servicios_realizados GROUP By(Nombre_Servicio) ');
    $sentencia_select->execute();
    $resultado=$sentencia_select->fetchAll();
    

?>

<div class="container">
    <h1  style="text-align: center;">Servicios brindados </h1>
    <br>
        <div class="row">
          <br>
            <?php foreach($resultado as $fila):?>

                   <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div style="text-align: center;" class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?php echo $fila['Nombre_Servicio']; ?> </div>
                      <div  style="font-size: 30px; "class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?php echo $fila['Cantidad']; ?> </div>
                    </div>
                    <div class="col-auto">
                      <i class="far fa-check-circle fa-3x text-gray-300"></i>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach ?>      
                                         
                    </div>
                </div>
        </div>  
      

<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>

