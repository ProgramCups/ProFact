<?php
        /* Aqui validaremos el tipo de usuario y los permisos que tiene*/
        require "./conection.php";
        $sql="SELECT descripcion, codigo_usuario FROM tipo_usuario t 
JOIN permisos p on p.codigo_permiso=t.codigo_permiso where codigo_usuario='".$_SESSION['usuario']."';";
     $result=mysqli_query($con,$sql);
while($ver=mysqli_fetch_row($result)){
    if($ver[0]=="Facturas"){
                    echo '<li class="nav-item">
                    <a class="nav-link btn btn-light text-left border-right" id="Facturas" href="./manage_invoices.php">
                    <span data-feather="layers"><img src="./assets/img/baseline_find_in_page_black_18dp.png" class="pb-1"></span>
                    Facturas
                    </a>
                </li>';  
                    }
                    if($ver[0]=="Pedidos"){
                    echo '<li class="nav-item">
                    <a class="nav-link btn btn-light text-left border-right" id="Pedidos" href="./orders.php">
                    <span data-feather="bar-chart-2"><img src="./assets/img/baseline_event_note_black_18dp.png" class="pb-1"></span>
                    Pedidos
                    </a>
                </li>';  
                    }
                    if($ver[0]=="Reportes"){
                    echo '<li class="nav-item">
                    <a class="nav-link btn btn-light text-left border-right" id="Reportes" href="./reports.php">
                    <span data-feather="bar-chart-2"><img src="./assets/img/baseline_description_black_18dp.png" class="pb-1"></span>
                    Reportes
                    </a>
                </li>';  
                    }
};
?>