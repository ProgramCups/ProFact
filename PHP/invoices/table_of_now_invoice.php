<!doctype html>
<html lang="en">
   
    <head>
       
    </head>
    <body >
            <div class="card">
            <table class="table table-hover table-condensed table-borderless">
                <thead>
                    <tr class="border-bottom">
                        <th scope="col">Cantidad</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio C/U</th>
                        <th scope="col">Total</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>  
                <tbody>
                   <?php
            require "../../conection.php";
            $sql="SELECT cantidad, p.codigo_producto, p.nombre, precio_por_unidad, total from detalle_factura df 
JOIN productos p on p.codigo_producto=df.codigo_producto
join factura f on df.id_factura=f.id_factura WHERE f.Estado='Abierta';";
            $result=mysqli_query($con,$sql);  
            while($ver2=mysqli_fetch_row($result)){ ?>
            <tr class="border-top">
                <td><p><?php echo $ver2[0]; ?></p></td>
                <td><p><?php echo $ver2[1]; ?></p></td>
                <td><p><?php echo $ver2[2]; ?></p></td>
                <td><p><?php echo $ver2[3]; ?></p></td>
                <td><p><?php echo $ver2[4]; ?></p></td>
                <td><p>ACCIONES</p></td>
            </tr>
            <?php }; ?>
                </tbody>
            </table>
            </div>

    </body>
</html>