<?php 
require "../../conection.php";
$id=$_POST['id'];
$total=$_POST['total'];
$sql="UPDATE `factura` SET total_adeudado = ".$total.", total_pagado = ".$total.", monto_pagado = ".$total.", Estado = 'Cerrada' WHERE id_factura = '".$id."'";

$result=mysqli_query($con,$sql);
echo $result;

?>