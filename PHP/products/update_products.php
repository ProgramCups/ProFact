<?php 

	require "../../Conection.php";
            if(isset($_POST['customCheck2'])) {
                $fdvp="0001-01-01";
            }else{
                if($_POST['fdvpm']=="No Aplica"){
                    $fdvp="0001-01-01";
                }else{
                    $fdvp=date('Y-m-d',strtotime($_POST['fdvpm']));
                }
            }
            $codigo=$_POST['codigopm'];
            $nombre=$_POST['nombrepm'];
            $suplidor=$_POST['suplidorm'];
            $marca=$_POST['marcapm'];
            $modelo=$_POST['modelopm'];
            $desc=$_POST['descpm'];
            $precio=$_POST['preciopm'];
            $cma=$_POST['cmam'];
            $ca=$_POST['cam'];
            $foto=addslashes(file_get_contents($_FILES['fotopm']['tmp_name']));
            if(isset($_FILES['fotopm']['tmp_name'])){       
	           $sql1="UPDATE productos SET nombre='".$nombre."', fecha_de_vencimiento='".$fdvp."',id_suplidor=".$suplidor.",marca='".$marca."', modelo='".$modelo."', descripcion='".$desc."',precio=". $precio.",imagen='".$foto."' where codigo_producto='".$codigo."';";
                echo "Con foto";
            }else{
              $sql1="UPDATE productos SET nombre='".$nombre."', fecha_de_vencimiento='".$fdvp."',id_suplidor=".$suplidor.",marca= '".$marca."', modelo='".$modelo."', descripcion='".$desc."',precio=".$precio." where codigo_producto='".$codigo."';";
                echo "Sin foto";
            }
    $sql2="UPDATE inventario set cantidad=".$ca.", capacidad_almacenaje=".$cma." where codigo_producto='".$codigo."';";
    $result2=mysqli_query($con,$sql2); 
    $result1=mysqli_query($con,$sql1);
   if($result2=="1" && $result1=="1"){
       $resultado="1";
       header("Location: ../../products.php?resultado=".$resultado);
   }else{
       $resultado="0";
        header("Location: ../../products.php?resultado=".$resultado);
   }
 ?>
