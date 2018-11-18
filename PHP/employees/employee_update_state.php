<?php
require "../../conection.php";
    $state=$_POST['state'];
	$codigo_empleado=$_POST['codigo_empleado'];
	$sql="UPDATE empleado SET estado='".$state."' where codigo_empleado='".$codigo_empleado."'";
	echo $result=mysqli_query($con,$sql);
?>