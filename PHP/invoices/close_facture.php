<?php 
require "../../conection.php";
$id=$_POST['id'];
$sql="UPDATE `factura` SET `Estado` = 'Cerrada' WHERE `factura`.`id_factura` = ".$id.";";
$result=mysqli_query($con,$sql);
echo $result;

?>