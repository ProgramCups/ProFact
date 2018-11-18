<?php
/*Se coloca la conexion a la base de datos*/
require "./conection.php";
$usu = $_POST['usuario'];/*Se toma el valor del campo de usuario*/
$pass = $_POST['clave'];/*Se toma el valor del campo de la clave*/
$sql="SELECT * FROM usuario WHERE codigo_usuario='$usu';";/*Consulta SQL*/
$consulta=$con->query($sql);/*Ejecucion de la consulta*/
$usuario = mysqli_fetch_array($consulta);/*Tomando los valores de la consulta*/

if($usuario['codigo_usuario']== $usu && ($usuario['clave'] ==  $pass)){
        session_start();
        $_SESSION['usuario'] = $usu;
        header("Location:loader.php");        

}else{
	header("Location:login.php?status=0");
    }

?>



