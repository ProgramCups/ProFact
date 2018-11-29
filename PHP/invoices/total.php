<!doctype html>
<?php 
require "../../conection.php";
$sql="SELECT id_factura from factura where Estado='Abierta';";
$result=mysqli_query($con,$sql);  
$ver=mysqli_fetch_row($result);
$sql2="SELECT SUM(total) FROM `detalle_factura` WHERE id_factura='".$ver[0]."';";
$result2=mysqli_query($con,$sql2); 
$ver2=mysqli_fetch_row($result2);

?>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Titulo</title>
    </head>
    <body>
        <div class="pr-4 row float-right">
            <h1 class="text-right"><span class="badge badge-dark">$RD:</span>&nbsp;<h1 class="text-right" id="totalf"> <?php echo $ver2[0];?></h1></h1>   
        </div>
    </body>
</html>