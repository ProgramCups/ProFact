<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    <!-- FIN <META>!-->
    
    <!--INICIO ICONO NAVEGADOR !-->
        <link rel="icon" href="">
    <!--FIN ICONO NAVEGADOR !-->
    
    <!--INICIO SCRIPTS !-->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
        <script src="./assets/js/jquery-3.2.1.min.js"></script>
        <script src="./assets/aletify/js/alertify.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script> 
        
        
        
        
    <!--FIN SCRIPTS !-->
    
    <!--INICIO TITULO !-->
        <title>Profact</title>
    <!--FIN TITULO!-->
    
    <!-- INICIO BOOTSTRAP -->
        <link href="./assets/aletify/css/alertify.core.css" rel="stylesheet">
        <link href="./assets/aletify/css/alertify.default.css" rel="stylesheet">
        
        <link rel="stylesheet" type="text/css" href="./assets/select2/css/select2.css">
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <!--FIN BOOTSTRAP!-->
    
    <!-- INICIO CSS PERSONALIZADO -->
        <link href="./assets/css/dashboard.css" rel="stylesheet">
        <link rel="stylesheet" href="./assets/css/tooltips.css">
        <!-- Bootstrap CSS -->
        <?php
        
    require "./Conection.php";
    $sql="SELECT nombre, id_suplidor from suplidor;";
    $result=mysqli_query($con,$sql);
        ?>
    <title>Comprobando</title>
    </head>
    <body>
        
        
        
        
        
        
        
        
        
        
        
        
         <form method="post" enctype="multipart/form-data" action="./PHP/agregarproductos.php">
                        <div class="container">
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Codigo</span>
                            </div>
                            
                            
                            
                            <input type="text" class="form-control" id="codigop" name="codigop"  placeholder="Codigo unico" required>
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                          </div>
                           
                           
                           
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Nombre</span>
                            </div>
                            <input type="text" class="form-control" id="nombrep" name="nombrep" placeholder="Nombre del Producto" required>
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                          </div>
                           
                           
                            <div class="input-group ">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Fecha de Vencimiento</span>
                            </div>
                            <input type="date" class="form-control" id="fdvp" name="fdvp"  placeholder="Fecha de Vencimiento" value="<?php echo date("Y-m-d");?>">
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                          </div>
                            <div class="custom-control custom-checkbox mb-3">
                          <input type="checkbox" class="custom-control-input" id="customCheck1" name="customCheck1" value="1">
                          <label class="custom-control-label" for="customCheck1">No Aplica</label>
                        </div>
                            <select class="form-control mb-3" id="suplidor" name="suplidor" placeholder="Suplidor">

                                <?php
                                    while($ver=mysqli_fetch_row($result)){ 
                                    
                                ?><option value="<?php echo $ver[1]; ?>"><?php echo $ver[0]; ?></option>
                                <?php } ?>
                            </select>
                            
                            
                            
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Marca</span>
                            </div>
                            <input type="text" class="form-control" id="marcap" name="marcap" placeholder="Marca" required>
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                          </div>
                          
                          
                           <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Modelo</span>
                            </div>
                            <input type="text" class="form-control" id="modelop" name="modelop" placeholder="Modelo" required>
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                          </div>
                          
                          
                          
                           <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Descripcion</span>
                            </div>
                            <textarea class="form-control" id="descp" name="descp" placeholder="Descripcion"></textarea>
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                          </div>
                          
                          
                           <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Precio</span>
                            </div>
                            <input type="number" class="form-control" id="preciop" name="preciop" placeholder="Precio" required>
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                          </div>
                          
                          
                           <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Capacidad de Almacenaje</span>
                            </div>
                            <input type="number" class="form-control" id="cma" name="cma" placeholder="Capacidad Maxima de Almacenaje" required>
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                          </div>
                          
                          
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Cantidad actual</span>
                            </div>
                            <input type="number" class="form-control" id="ca" name="ca" placeholder="Cantidad actual" required>
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                          </div>
                           
                           
                           
                            <input type="file" class="form-control" id="fotop" name="fotop">
                        </div>
                        
                      

                <div class="modal-footer">
                <button type="submit" class="btn btn-success" aria-label="Close" id="">Guardar</button>
                </div>
                </form>
    </body>
   
</html>