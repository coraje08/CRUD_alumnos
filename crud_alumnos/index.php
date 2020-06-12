<?php 
include ('conexion.php');
$clientes = new Database();
$listado=$clientes->read();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD con PHP usando Programación Orientada a Objetos</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/lux/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
    .i{
        font-size: 60px;
        color: white;
    }
    .banner{
        height: 500px;
    }
</style>
</head>
<body>
    <div class="container-fuid">
        <div class="row">
           <div class="col-md-2 bg-dark">
                <h4 class="text-center p-4 text-white">SENATI</h4>
           </div>
           <div class="col-md-8 bg-warning">
                <h6 class="text-center p-4">Notas de alumnos</h6>
      
           </div>
           <div class="col-md-2 bg-warning p-3">
                <button class="btn btn-outline-dark ">Cerrar Secion</button>
           </div>
        </div><!----->

        <div class="row">
           <div class="col-md-2 bg-dark">
            <center>

                <i class=" i fa fa-user-circle-o " aria-hidden="true"></i>
                <br><br>
                <h6 class="text-white">Instrutor</h6>
                <hr>
                <div class="banner"></div>
            </center>
           </div>
           <div class="col-md-10 p-4">
                

        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de  <b>Alumnos</b></h2></div>
                    <div class="col-sm-4">
                        <a href="create.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar Alumno</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Nota</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                    
                <tbody>    

                    <?php 
                    while ($row=mysqli_fetch_object($listado)){
                    $id=$row->id;
                    $nombres=$row->nombres." ".$row->apellidos;
                    $telefono=$row->telefono;
                    $email=$row->correo_electronico;
                    $notas=$row->notas;
                    ?>
                    <tr>
                    <td><?php echo $nombres;?></td>
                    <td><?php echo $telefono;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $notas;?></td>
                    <td>
                    <a href="update.php?id=<?php echo $id;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                    <a href="delete.php?id=<?php echo $id;?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                    </td>
                    </tr>   
                    <?php
                    }
                    ?>

                   
                </tbody>
            </table>
        </div>
           </div><!-- fin del panel-- 1-->
        </div><!----->
    </div>     
</body>
</html>


