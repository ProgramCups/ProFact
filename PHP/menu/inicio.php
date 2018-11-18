<?php
        /* Aqui validaremos el tipo de usuario y los permisos que tiene*/
        require "./conection.php";
        $sql="SELECT descripcion, codigo_usuario FROM tipo_usuario t 
JOIN permisos p on p.codigo_permiso=t.codigo_permiso where codigo_usuario='".$_SESSION['usuario']."';";
     $result=mysqli_query($con,$sql);
while($ver=mysqli_fetch_row($result)){
                    
                if($ver[0]=="Ver estadisticas"){
                    echo "<li class='nav-item'>
                        <a class='nav-link btn btn-light text-left border-right disabled' id='Estadisticas' href='./stats.php'>
                        <span data-feather='home'><img src='./assets/img/baseline_insert_chart_black_18dp.png' class='pb-1'></span>Estadisticas <span class='sr-only'>(current)</span><span class='badge badge-pill badge-info'>Proximamente!</span>
                        </a>
                    </li>";
                    }
                
                if($ver[0]=="Productos"){
                    echo "<li class='nav-item'>
                    <a class='nav-link btn btn-light text-left border-right' id='Productos' href='products.php'>
                    <span data-feather='file'><img src='./assets/img/baseline_shopping_cart_black_18dp.png' class='pb-1'></span>Productos
                    </a>
                </li>";  
                    }
                };
?>