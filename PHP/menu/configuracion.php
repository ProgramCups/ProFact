<?php
        /* Aqui validaremos el tipo de usuario y los permisos que tiene*/
        require "./conection.php";
        $sql="SELECT descripcion, codigo_usuario FROM tipo_usuario t 
JOIN permisos p on p.codigo_permiso=t.codigo_permiso where codigo_usuario='".$_SESSION['usuario']."';";
     $result=mysqli_query($con,$sql);
while($ver=mysqli_fetch_row($result)){
    if($ver[0]=="Configuracion"){
                    echo '<li class="nav-item">
                        <a class="nav-link btn btn-light text-left border-right disabled" id="Configuracion" href="./configuration.php">
                        <span data-feather="file-text"><img src="./assets/img/baseline_settings_black_18dp.png" class="pb-1"></span>
                        Configuracion<span class="sr-only">(current)</span><span class="badge badge-pill badge-info float-right">Proximamente!</span>
                        </a>
                    </li>';  
                    }
    
};
                    echo '<li class="nav-item">
                        <a class="nav-link btn btn-light text-left border-right" href="./sign_off.php">
                        <span data-feather="bar-chart-2"><img src="./assets/img/baseline_power_settings_new_black_18dp.png" class="pb-1"></span>
                        Salir
                        </a>
                    </li>';
?>