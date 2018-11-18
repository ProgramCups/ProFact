<!doctype html>
<html lang="en">
<head>
    <!-- INICIO <META>!-->
      <link rel="icon" type="image/png" href="./assets/img/logo.png" />
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
        <script src="./assets/js/jquery-3.2.1.min.js"></script>
        <script src="./assets/alertifyjs/alertify.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/select2/js/select2.js"></script>
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        <script src="./JS/products/product_features.js"></script>
        <?php include "./PHP/session_start.php"?>
    <!--FIN SCRIPTS !-->
    
    <!--INICIO TITULO !-->
        <title>Productos</title>
    <!--FIN TITULO!-->
    
    <!-- INICIO BOOTSTRAP -->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/alertifyjs/css/alertify.min.css">
        <link rel="stylesheet" href="./assets/alertifyjs/css/themes/bootstrap.min.css">
    <!--FIN BOOTSTRAP!-->
    
    <!-- INICIO CSS PERSONALIZADO -->
        <link href="./assets/css/dashboard.css" rel="stylesheet">
        <link rel="stylesheet" href="./assets/css/tooltips.css">
        <link rel="stylesheet" href="./assets/css/table_scroll.css">
    <!-- FIN CSS PERSONALIZADO!-->
    <?php
            require "./conection.php";
            $sql2="SELECT nombre, id_suplidor from suplidor;";
            $result2=mysqli_query($con,$sql2);
            require "./Conection.php";

            $result3=mysqli_query($con,$sql2);
        
        if(isset($_GET['resultado'])){
            $resultado=$_GET['resultado'];
        }
        else{
            
        }
        ?>
      
</head>

<body>
  
      

<!-- INICIO MODAL AGREGAR -->
<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="text-white">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <form method="post" enctype="multipart/form-data" action="./PHP/products/add_products.php">
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
                              
                          <input type="checkbox" class="custom-control-input" id="customCheck1" name="customCheck1" value="1" >
                          <label class="custom-control-label" for="customCheck1">No Aplica</label>
                        </div>
                            <select class="form-control mb-3" id="suplidor" name="suplidor" placeholder="Suplidor">

                                <?php
                                    while($ver2=mysqli_fetch_row($result2)){ 
                                    
                                ?><option value="<?php echo $ver2[1]; ?>"><?php echo $ver2[0]; ?></option>
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
              </div>
            </div>
          </div>
        </div>
<!--FIN DEL MODAL DE AGREGAR !--> 

       
              
                            
<!--INICIO MODAL MODIFICAR !-->
<div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="exampleModalLabel">Modificar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="text-white">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <form method="post" enctype="multipart/form-data" action="./PHP/products/update_products.php">
                      <div class="container">
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Codigo</span>
                            </div>
                            <input type="text" class="form-control" id="codigopm" name="codigopm"  placeholder="Codigo unico">
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                          </div>
                          
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Nombre</span>
                            </div>
                            <input type="text" class="form-control" id="nombrepm" name="nombrepm" placeholder="Nombre del Producto" required>
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                          </div>
                          
                          <div class="input-group ">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Fecha de Vencimiento</span>
                            </div>
                            <input type="text" class="form-control" id="fdvpm" name="fdvpm"  placeholder="Fecha de Vencimiento" value="">
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                          </div>
                          <div class="custom-control custom-checkbox mb-3">
                             <input type='checkbox' class='custom-control-input' id='customCheck2' name='customCheck2' value='1'>
                               <label class='custom-control-label' for='customCheck2'>No Aplica</label>
                            
                              
                         
                        </div>
                            <select class="form-control mb-3" id="suplidorm" name="suplidorm">
                               <option id="supliop"></option>
                                <?php
                                    while($ver3=mysqli_fetch_row($result3)){ 
                                    
                                ?><option value="<?php echo $ver3[1]; ?>"><?php echo $ver3[0]; ?></option>
                                <?php } ?>
                            </select>
                            
                            
                            
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Marca</span>
                            </div>
                            <input type="text" class="form-control" id="marcapm" name="marcapm" placeholder="Marca" required>
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                          </div>
                          
                          
                           <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Modelo</span>
                            </div>
                            <input type="text" class="form-control" id="modelopm" name="modelopm" placeholder="Modelo" required>
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                          </div>
                          
                          
                          
                           <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Descripcion</span>
                            </div>
                            <textarea class="form-control" id="descpm" name="descpm" placeholder="Descripcion"></textarea>
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                          </div>
                          
                          
                           <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Precio</span>
                            </div>
                            <input type="number" class="form-control" id="preciopm" name="preciopm" placeholder="Precio" required>
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                          </div>
                          
                          
                           <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Capacidad de Almacenaje</span>
                            </div>
                            <input type="number" class="form-control" id="cmam" name="cmam" placeholder="Capacidad Maxima de Almacenaje" required>
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                          </div>
                          
                          
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Cantidad actual</span>
                            </div>
                            <input type="number" class="form-control" id="cam" name="cam" placeholder="Cantidad actual" required>
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                          </div>
                           
                           
                           
                            <input type="file" class="form-control" id="fotopm" name="fotopm">
                        </div>
                        
                      

                <div class="modal-footer">
                <button type="submit" class="btn btn-warning text-white" aria-label="Close" id="">Actualizar</button>

                    </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
<!-- FIN MODAL MODIFICAR!-->  

     
              
               
<!-- INICIO MODAL ELIMINAR !-->
<div class="modal fade" id="elim" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="text-white">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <h5>Desea eliminar el producto?</h5><h5 id="codigoeliminar"></h5>
            </div>
                        
                      

                <div class="modal-footer">
                <button type="button" class="btn btn-danger" aria-label="Close" onclick="eliminarDatos()" data-dismiss="modal">Eliminar</button>
                <button type="button" class="btn btn-warning" aria-label="Close" data-dismiss="modal" id="cancelareliminar">Cancelar</button>

              </div>
            </div>
          </div>
        </div>
<!-- FIN MODAL ELIMINAR !-->
    <!--INICIO NAVBAR!-->
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">ProFact</a>
        <div class="text-white text-center pr-3"><strong> Usuario: <?php echo $_SESSION['usuario'];?></strong></div>
    </nav>
    
    <!--FIN NAVBAR!-->
    
    <!--INICIO CONTENEDOR!-->
    <div class="container-fluid">
        <div class="row">
           
           
            <!-- Side Bar!-->
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">

            <div class="sidebar-sticky">
            
            
            <!-- Seccion de INICIO en el menu!-->
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Inicio</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                    <span data-feather="plus-circle"></span>
                    </a>
                </h6>
            <ul class="nav flex-column">
                <?php  include('./PHP/menu/inicio.php');
                ?>
            </ul>
               
               
               
               <!-- Seccion de PERSONA en el menu!-->
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Persona</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                    <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column">
                <?php 
                    include('./PHP/menu/personas.php');
                ?>
                </ul>
                
                
                
                
                <!-- Seccion de FACTURACION en el menu!-->
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Facturacion</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                    <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column">
                <?php 
                    include('./PHP/menu/facturacion.php');
                ?>
                </ul>
                
                
                
                
                
                <!-- Seccion de CONFIGURACIOn en el menu!-->
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Configuracion</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                    <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                
                
                <ul class="nav flex-column mb-2">
                   <?php 
                        include('./PHP/menu/configuracion.php');
                    ?>
                </ul>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Version 0.0.0.1</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                    <span data-feather="plus-circle"></span>
                    </a>
                </h6>                
                
                </div>
                </nav>
            <!-- End's Side Bar!-->
        



            <!-- Content!-->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Productos</h1>
            </div>
                <div class="pb-3 text-right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#agregar" id="modalagregarproductos"><img src="./assets/img/baseline_add_white_18dp.png"></button>
                </div>
            
    
            <div class="card">
            <div class="col-12"id="tablaproductos">
            
                
            </div>
             </div>
              
            </main>
            <!-- End's Content!-->
            </div>
            </div>
    <!--FIN CONTENEDOR!-->
    
</body>
<script>
$(document).ready(function(){
     $('#tablaproductos').load('./PHP/products/products_table.php');
});

</script>
<?php 
    //Se Verifica que el campo de R no este vacio y si lo estas no se muestra la notificacion.
    if(isset($_GET['ra'])){
            if($_GET['ra']==1){
            echo "<script>alertify.success('Agregado Con exito!');</script>";   
        }else{
            echo "<script>alertify.error('No se pudo agregar!');</script>";
        }
    }
    ?>
</html>
