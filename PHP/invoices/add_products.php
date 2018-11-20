<?php
    $id=$_POST["id"];
    $idd=$_POST["idd"];
    $cant=$_POST["cant"];
    $precio=$_POST["precio"];
    $total=$cant*$precio;
    require "../../conection.php";
    $sql="INSERT INTO detalle_factura (codigo_producto, cantidad, precio_por_unidad, total, id_factura) VALUES ('".$idd."', ".$cant.", ".$precio.", ".$total.",".$id.")";
    $result=mysqli_query($con,$sql);
    echo $result;
    

?>