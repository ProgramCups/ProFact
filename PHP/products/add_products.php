<?php 

	require "../../conection.php";
            if(isset($_POST['customCheck1'])) {
                $fdvp="0001-01-01";
            }else{
                $fdvp=date('Y-m-d',strtotime($_POST['fdvp']));
            }
            $codigo=$_POST['codigop'];
            $nombre=$_POST['nombrep'];
            $suplidor=$_POST['suplidor'];
            $marca=$_POST['marcap'];
            $modelo=$_POST['modelop'];
            $desc=$_POST['descp'];
            $precio=$_POST['preciop'];
            $cma=$_POST['cma'];
            $ca=$_POST['ca'];
            if(isset($_POST['fotop'])){
                $foto=addslashes(file_get_contents($_FILES['fotop']['tmp_name']));
                
            }else{
                $foto="NULL";
            }
	

$sql1="INSERT INTO productos VALUES ('".$codigo."', '".$nombre."', '".$fdvp."', '".$suplidor."', '".$marca."', '".$modelo."', '".$desc."','null',". $precio.",'".$foto."');";
                
    $sql2="INSERT INTO inventario VALUES('".$codigo."',".$ca.", ".$cma.")";
    $result2=mysqli_query($con,$sql2); 
$result1=mysqli_query($con,$sql1);
echo $result1." ".$result2;

   if($result2=="1" && $result1=="1"){
       $resultado="1";
       header("Location: ../../products.php?ra=".$resultado);
   }else{
       $resultado="0";
       echo $result1;
       header("Location: ../../products.php?ra=".$resultado);
   }
 ?>








