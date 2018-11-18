<?php
session_start();
if($_SESSION['usuario']){           
}
else{
    header('Location:error.php');
}
?>