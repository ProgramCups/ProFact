<!doctype html>
<html lang="en">
<body>
        
<h1 class="h2 text-center pt-3">Nuevo Empleado</h1>
<hr class="mb-4 mt-4">       
<form class="pt-3" method="post" enctype="multipart/form-data">
<div class="container">
    <!-- Input de CODIGO !-->
    <div class="input-group mb-3">
        <input type="text" class="form-control" id="codigoe" name="codigoe"  placeholder="Codigo unico" required>
        <div class="invalid-feedback" style="width: 100%;"></div>
    </div>
    <!-- INPUT de NOMBRE!-->
    <div class="input-group mb-3">
        <input type="text" class="form-control" id="nombree" name="nombree" placeholder="Nombre" required>
        <div class="invalid-feedback" style="width: 100%;"></div>
    </div>
    <!-- INPUT DE APELLIDOS !-->
    <div class="input-group mb-3">
        <input type="text" class="form-control" id="apellidoe" name="apellidoe" placeholder="Apellidos" required>
        <div class="invalid-feedback" style="width: 100%;"></div>
    </div>
    <!-- INPUT DE NACIMIENTO !-->
    <div class="input-group mb-3">
        <div class="input-group-prepend">
           <span class="input-group-text">Nacimiento</span>
        </div>
        <input type="date" class="form-control" id="born" name="born"  placeholder="Fecha de nacimiento" value="">
        <div class="invalid-feedback" style="width: 100%;"></div>
    </div>
    <!--  !-->
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Nomina</span>
        </div>
        <input type="number" class="form-control" id="nominae" name="nominae" placeholder="Modelo" required>
        <div class="invalid-feedback" style="width: 100%;"></div>
    </div>
    <!-- INPUT DE NACIMIENTO !-->                      
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Direccion</span>
        </div>
        <textarea class="form-control" id="diree" name="diree" placeholder="Direccion"></textarea>
        <div class="invalid-feedback" style="width: 100%;"></div>
    </div>
    <!--Horario de inicio!-->                 
    <div class="input-group mb-3">
        <select class="form-control mb-3" id="suplidor" name="suplidor" placeholder="Suplidor">
        <?php
            require "../../conection.php";
            $sql2="SELECT h.id_horario, h.nombre FROM horarios h";
            $result2=mysqli_query($con,$sql2);
            while($ver2=mysqli_fetch_row($result2)){ ?>
                <option value="<?php echo $ver2[0]; ?>"><?php echo $ver2[1]; ?></option>
            <?php } ?>
        </select>
        <div class="invalid-feedback" style="width: 100%;"></div>
    </div>
</div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-success" aria-label="Close" id="Guardar_empleado">Guardar</button>
    </div>
</form>
</body> 
</html>