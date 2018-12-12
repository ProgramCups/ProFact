
<?php
require "./conection.php";
        $sql="SELECT descripcion, codigo_usuario FROM tipo_usuario t 
JOIN permisos p on p.codigo_permiso=t.codigo_permiso where codigo_usuario='".$_SESSION['usuario']."';";
     $result=mysqli_query($con,$sql);
while($ver=mysqli_fetch_row($result)){
                if($ver[0]=="Clientes"){
                    echo '<li class="nav-item">
                    <a class="nav-link btn btn-light text-left border-right disabled" id="Clientes" href="customers.php">
                    <span data-feather="shopping-cart"><img src="./assets/img/baseline_face_black_18dp.png" class="pb-1"></span>Clientes<span class="sr-only">(current)</span><span class="badge badge-pill badge-info float-right">Proximamente!</span>
                    </a>
                </li>';  
                    }
                if($ver[0]=="Proveedores"){
                    echo '<li class="nav-item">
                    <a class="nav-link btn btn-light text-left border-right disabled" id="Proveedores" href="providers.php">
                    <span data-feather="shopping-cart"><img src="./assets/img/baseline_contact_phone_black_18dp.png" class="pb-1"></span>Proveedores<span class="sr-only">(current)</span><span class="badge badge-pill badge-info float-right">Proximamente!</span>
                    </a>
                </li>';  
                    }
                if($ver[0]=="Usuarios"){
                    echo '<li class="nav-item">
                    <a class="nav-link btn btn-light text-left border-right disabled" id="Usuario" href="users.php">
                    <span data-feather="users"><img src="./assets/img/baseline_account_box_black_18dp.png" class="pb-1"></span>
                    Usuarios<span class="sr-only">(current)</span><span class="badge badge-pill badge-info float-right">Proximamente!</span>
                    </a>
                </li>';  
                    }
                if($ver[0]=="Empleados"){
                    echo '<li class="nav-item">
                    <a class="nav-link btn btn-light text-left border-right disabled" id="Usuario" href="employees.php">
                    <span data-feather="users"><img src="./assets/img/baseline_accessibility_new_black_18dp.png" class="pb-1"></span>
                    Empleados<span class="sr-only">(current)</span><span class="badge badge-pill badge-info float-right">Proximamente!</span>
                    </a>
                </li>';  
                    }
};

?>