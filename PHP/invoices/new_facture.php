<?php 
require "../../conection.php";
$sql="INSERT INTO `factura` (`id_factura`, `total_adeudado`, `total_pagado`, `monto_pagado`, `fecha_emision`, `fecha_vencimiento`, `razon_social`, `sucursal`, `Estado`) VALUES (NULL, 0, 0, 0, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP , 'Ferreteria Los Colegas', 'Santiago,Pekin', 'Abierta')";
$result=mysqli_query($con,$sql);
echo $result;
?>