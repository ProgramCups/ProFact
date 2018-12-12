<?php 
	require "../../conection.php";
	$id=$_POST['id'];
	$sql="DELETE from productos where codigo_producto='$id'";
    $sql2="DELETE from inventario where codigo_producto='$id'";
    $result2=mysqli_query($con,$sql2);
	echo $result=mysqli_query($con,$sql);
 ?>