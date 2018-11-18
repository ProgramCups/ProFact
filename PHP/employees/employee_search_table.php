
<!doctype html>
<html lang="en">




<head>
        <link rel="icon" type="image/png" href="./assets/img/logo.png" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <!--  comienzan los archivos tipo JavaScript!-->
        <script src="../../assets/js/jquery-3.2.1.min.js"></script>
        <script src="../../assets/alertifyjs/alertify.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/select2/js/select2.js"></script>
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        <script src="./JS/tooltipsB4.js"></script>
        <script src="./JS/employees/employees_table_features.js"></script>
        <!-- Finaliza archivos JS !-->
        <!-- LLamado de librerias CSS !-->
        <link rel="stylesheet" type="text/css" href="../../assets/select2/css/select2.css">
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/alertifyjs/css/alertify.min.css">
        <link rel="stylesheet" href="../../assets/alertifyjs/css/themes/bootstrap.min.css">
       <!-- Termina el css!-->
        <title>Profact</title>
        <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/icono.png">
        <link rel="stylesheet" href="../../assets/css/dashboard.css">
    </head>









<body>
  <div id="contenedor"><div id="loader"></div></div>
  
   <div>

        <div class="form-inline my-2 my-lg-0 pt-3 float-right pb-3"><input class="form-control " type="search" placeholder="Buscar" aria-label="Search" id="buscar">
        
        </div>

</div>
<table class="table table-hover table-responsive-lg">
    <thead>
        <tr>
            <th scope="col" class="border-left">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Fecha de Ingreso</th>
            <th scope="col">Horario</th>
            <th scope="col">Estado</th>
            <th class="border-right" scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
                    
        <?php
           require "../../conection.php";
            $valor=$_POST['valor'];
	       $sql="SELECT codigo_empleado, e.nombre, e.apellido, fecha_de_nacimiento, fecha_ingreso, h.nombre, estado from empleado e JOIN horarios h ON e.id_horario=h.id_horario
            where codigo_empleado LIKE'%".$valor."%' OR e.nombre LIKE'%".$valor."%' Or e.apellido LIKE'%".$valor."%'";
            $result=mysqli_query($con,$sql);
            while($ver=mysqli_fetch_row($result)){?>  
                <tr>  
                    <td class="border-left border-bottom"><?php echo $ver[0];?></td>
                    <td class="border-bottom"><?php echo $ver[1]; ?></td>
                    <td class="border-bottom"><?php echo $ver[2]; ?></td>
                    <td class="border-bottom"><?php echo $ver[3]; ?></td>
                    <td class="border-bottom"><?php echo $ver[4]; ?></td>
                    <td class="border-bottom"><?php echo $ver[5]; ?></td>
                    <?php 
                        if($ver[6]=="Activo"){
                            echo '<td class="border-bottom"><button type="button" class="btn btn-success btn-block" disabled>'.$ver[6].'</button></td>';
                        }else{
                            echo '<td class="border-bottom"><button type="button" class="btn btn-secondary btn-block" disabled>'.$ver[6].'</button></td>';
                        }                         
                        if($ver[6]=="Activo"){
                            $valor="Desactivado";
                            $color="danger";
                            $img="./assets/img/baseline_block_white_18dp.png";
                         
                        }if($ver[6]=="Desactivado"){
                            $valor="Activo";
                            $color="success";
                            $img="./assets/img/baseline_check_white_18dp.png";
                    }    
                    ?>
                    <td class="border-right border-bottom pr-4" scope="col">
                    <p class="row">
                    <button class="btn btn-warning" data-toggle="modal" data-target="#modificar" onclick=""><img src="./assets/img/baseline_border_color_white_18dp.png" id="modificarboton"></button>&nbsp;&nbsp;
                    
                    <button type="button" class="btn btn-<?php echo $color;?>" data-toggle="modal" data-target=""><img src="<?php echo $img; ?>" onclick="change_state('<?php echo $valor; ?>','<?php echo $ver[0];?>')"></button>
                    <?php 
                    
                    ?>
                    </p>
                    </td>
                </tr>
                        <?php }; ?>
                </tbody>
                </table>
    </body>
</html>