<!doctype html>
<html lang="en">




<head>
</head>
<body>
  <div id="contenedor"><div id="loader"></div></div>
  
   <div>

        <div class="form-inline my-2 my-lg-0 pt-3 float-right pb-3"><input class="form-control " type="search" placeholder="Buscar" aria-label="Search" id="buscar">&nbsp;&nbsp;
        
        <button type="button" class="btn btn-info" id="boton_buscar">Buscar</button>
        
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
            $sql="SELECT `codigo_empleado`, e.nombre, e.apellido, fecha_de_nacimiento, fecha_ingreso, h.nombre, estado, e.sueldo from empleado e JOIN horarios h ON e.id_horario=h.id_horario;";    
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
                        $usuario=$ver[0];
                        if($ver[6]=="Activo"){
                            $col="success";
                            $valor="Desactivado";
                            $color="danger"; $img="./assets/img/baseline_block_white_18dp.png";
                        }else{
                            $col="danger";
                            $valor="Activo";
                            $color="success"; $img="./assets/img/baseline_check_white_18dp.png";
                        }
                            ?>
                    <td class="border-bottom">
                    <button type="button" class="btn btn-<?php echo $col;?> btn-block btn-sm" disabled><?php echo $ver[6]; ?></button>
                    <button type="button" class="btn btn-secondary btn-block btn-sm" disabled><?php echo $ver[7]; ?></button>
                    </td>
                    <td class="border-right border-bottom" scope="col">
                    <div class="row">
                    <button class="btn btn-warning btn-sm"><img src="./assets/img/baseline_border_color_white_18dp.png" id="modificarboton"></button>&nbsp;&nbsp;
                    <button class="btn btn-<?php echo $color;?> btn-sm" id="change_state"><img src="<?php echo $img; ?>" onclick="change_state('<?php echo $valor;?>','<?php echo $ver[0];?>')"></button>
                    </div>
                    <div class="row pt-2">
                        <button class="btn btn-info btn-sm disabled" data-toggle="tooltip" data-placement="left" title="<h4>Funcion no disponible</h4>"><img src="./assets/img/baseline_info_white_18dp.png" ></button>&nbsp;&nbsp;
                        <button class="btn btn-dark btn-sm"><img src="./assets/img/baseline_delete_white_18dp.png"></button>
                    </div>
                    </td>
                </tr>
                        <?php }; ?>
                </tbody>
                </table>
    </body>
    <script>$('[data-toggle="tooltip"]').tooltip({
            html: true
        })</script>
</html>