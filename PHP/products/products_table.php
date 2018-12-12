<!doctype html>
<html lang="en">
    <head>
        
    <!-- INICIO <META>!-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    <!-- FIN <META>!-->
    
    <!--INICIO ICONO NAVEGADOR !-->
    <!--FIN ICONO NAVEGADOR !-->
    
    <!--INICIO SCRIPTS !-->

    <!--FIN SCRIPTS !-->
    
    <!-- Required meta tags -->
        <title>Comprobando</title>
    </head>
    
    <body>
        <table class="table table-hover table-condensed table-borderless">
            <thead>
                <tr>
                   <th>#</th>
                   <th scope="col">Codigo</th>
                   <th scope="col">Nombre</th>
                   <th scope="col">Fecha de Vencimiento</th>
                   <th scope="col">Suplidor</th>
                   <th scope="col">Marca</th>
                   <th scope="col">Modelo</th>
                   <th scope="col">Descripcion</th>
                   <th scope="col">Precio</th>
                   <th scope="col">Acciones</th>
                </tr>
            </thead>
            <?php 
                require "../../conection.php";
        
            $sql="SELECT p.codigo_producto, p.nombre,  DATE_FORMAT(`fecha_de_vencimiento`,'%d-%m-%Y'), s.nombre, marca, modelo, descripcion, precio, imagen,i.cantidad, i.capacidad_almacenaje, s.id_suplidor from productos p join suplidor s on p.id_suplidor=s.id_suplidor join inventario i on p.codigo_producto=i.codigo_producto;";

            $result=mysqli_query($con,$sql);
            $no=1;
            
                while($ver=mysqli_fetch_row($result)){ 
                    if($ver[2]=="01-01-0001"){
                        $ver[2]="No Aplica";
                        $valor="checked";
                        
                    }else{
                        $ver[2]=$ver[2];
                        $valor="";
                    }
                    
            ?>
            <tr class="border-top">
                <td class="border-right"><?php echo $no;?></td>
                <?php 
                if(isset($ver[8])){
                    $img='<img src="data:image/jpg;base64,'.base64_encode($ver[8]).'" style="max-width:150px;max-height:150;">';
                }else{
                    $img="<h6>No disponible</h6>";
                }
                
            ?>
                <td><p><?php echo $ver[0]; ?></p></td>
                <td><p><?php echo $ver[1]; ?></p></td>
                <td><p><?php echo $ver[2]; ?></p></td>
                <td><p><?php echo $ver[3]; ?></p></td>
                <td><p><?php echo $ver[4]; ?></p></td>
                <td><p><?php echo $ver[5]; ?></p></td>
                <td  ><p style="max-height:80px;max-width:300px;overflow:hidden;"><?php echo $ver[6]; ?></p></td>
                <td><p><?php echo $ver[7];?></p></td>
                <td>
                    <div class="row">
                        <button class="btn btn-warning" data-toggle="modal" data-target="#modificar" onclick="agregardatos(<?php echo "'".$ver[0]."','".$ver[1]."','".$ver[3]."','".$ver[4]."','".$ver[5]."','".$ver[6]."','".$ver[7]."',".$ver[9].",".$ver[10].",'". $ver[2]."','".$ver[11]."'";?>)"><img src="./assets/img/baseline_border_color_white_18dp.png" id="modificarboton"></button>&nbsp;&nbsp;
                        <button type="button" class="btn btn-danger" onclick="eliminarDatos('<?php echo $ver[0];?>')"><img src="./assets/img/baseline_delete_white_18dp.png"></button>
                    </div>
                    <div class="row pt-2">
                        <button class="btn btn-info disabled" data-toggle="tooltip" data-placement="left" title="<h6>Funcion no disponible</h6>"><img src="./assets/img/baseline_info_white_18dp.png" ></button>&nbsp;&nbsp;
                    </div>
                </td>
            </tr>
            <?php $no=$no+1;} ?>
        </table>
        
       <script>$('[data-toggle="tooltip"]').tooltip({
            html: true
        })</script>
    </body>

</html>