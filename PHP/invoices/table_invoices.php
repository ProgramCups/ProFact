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
                   <th scope="col">Codigo</th>
                   <th scope="col">Total Adeudado</th>
                   <th scope="col">Total Pagado</th>
                   <th scope="col">Monto Pagado</th>
                   <th scope="col">Fecha de Emision</th>
                   <th scope="col">Fecha de Vencimiento</th>
                   <th scope="col">Razon Social</th>
                   <th scope="col">Sucursal</th>
                   <th scope="col">Estado</th>
                   <th scope="col">Acciones</th>
                </tr>
            </thead>
            <?php 
            require "../../conection.php";
            $sql="SELECT id_factura, total_adeudado, total_pagado, monto_pagado, DATE_FORMAT(fecha_emision,'%d-%m-%Y'), DATE_FORMAT(fecha_vencimiento,'%d-%m-%Y'), razon_social, sucursal, estado from factura;";
            $result=mysqli_query($con,$sql);  
            while($ver2=mysqli_fetch_row($result)){ ?>
            <tr class="border-top">
                <td><p><?php echo $ver2[0]; ?></p></td>
                <td><p><?php echo $ver2[1]; ?></p></td>
                <td><p><?php echo $ver2[2]; ?></p></td>
                <td><p><?php echo $ver2[3]; ?></p></td>
                <td><p><?php echo $ver2[4]; ?></p></td>
                <td><p><?php echo $ver2[5]; ?></p></td>
                <td><p><?php echo $ver2[6]; ?></p></td>
                <td><p><?php echo $ver2[7]; ?></p></td>
                <td><p><?php echo $ver2[8]; ?></p></td>
                <td><p><?php echo "JAJJAJA"; ?></p></td>
            </tr>
            <?php }; ?>
        </table>
    </body>

</html>