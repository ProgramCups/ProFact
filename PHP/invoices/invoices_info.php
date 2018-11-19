<html>
    <head></head>
    <?php 
        require "../../conection.php";
        $sql="SELECT id_factura, fecha_emision, fecha_vencimiento from factura where Estado='Abierta';";
        $result=mysqli_query($con,$sql);
        $ver=mysqli_fetch_row($result);
        if(isset($ver)){
            echo '
            <body>
                <form class="pt-3" method="post" enctype="multipart/form-data">
            <div class="container">
                <!-- ID DE FACTURA!-->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                       <span class="input-group-text bg-dark text-light">Codigo de la Factura</span>
                    </div>
                    <input type="text" class="form-control" id="codigof" name="codigoe" value="'.$ver[0].'" disabled>
                    <div class="invalid-feedback" style="width: 100%;"></div>
                </div>
                <!-- Fecha de emision!-->
                <div class="input-group mb-3">
                   <div class="input-group-prepend">
                       <span class="input-group-text bg-dark text-light">Fecha de Emision</span>
                    </div>
                    <input type="text" class="form-control" id="fechadeemision" name="fechadeemision" value="'.$ver[1].'" disabled>
                    <div class="invalid-feedback" style="width: 100%;"></div>
                </div>
                <!-- Fecha de vencimiento !-->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                       <span class="input-group-text bg-dark text-light">Fecha de vencimiento</span>
                    </div>
                    <input type="text" class="form-control" id="fechadevencimiento" name="fechadevencimiento" value="'.$ver[2].'" disabled>
                    <div class="invalid-feedback" style="width: 100%;" ></div>
                </div>
            </div>
            </form>

            </body>';

        }else{
            echo'
            <form class="pt-3" method="post" enctype="multipart/form-data">
<div class="container">
    <!-- ID DE FACTURA!-->
    <div class="input-group mb-3">
        <div class="input-group-prepend">
           <span class="input-group-text bg-dark text-light">Codigo de la Factura</span>
        </div>
        <input type="text" class="form-control" id="codigof" name="codigoe" value="Cree una factura" disabled>
        <div class="invalid-feedback" style="width: 100%;"></div>
    </div>
    <!-- Fecha de emision!-->
    <div class="input-group mb-3">
       <div class="input-group-prepend">
           <span class="input-group-text bg-dark text-light">Fecha de Emision</span>
        </div>
        <input type="text" class="form-control" id="fechadeemision" name="fechadeemision" value="Cree una factura" disabled>
        <div class="invalid-feedback" style="width: 100%;"></div>
    </div>
    <!-- Fecha de vencimiento !-->
    <div class="input-group mb-3">
        <div class="input-group-prepend">
           <span class="input-group-text bg-dark text-light">Fecha de vencimiento</span>
        </div>
        <input type="text" class="form-control" id="fechadevencimiento" name="fechadevencimiento" value="Cree una factura" disabled>
        <div class="invalid-feedback" style="width: 100%;" ></div>
    </div>
</div>
</form>';
        }
       ?>
</html>