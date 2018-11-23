<?php
    $id=$_POST["id"];
    $total=$_POST["total"];
    require "../../conection.php";
    $sql="UPDATE inventario SET cantidad = $total WHERE codigo_producto = '$id';";
    $result=mysqli_query($con,$sql);
    echo $result;
    

?>