<!doctype html>
<html lang="en">




<head>
        <link rel="icon" type="image/png" href="./assets/img/logo.png" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <!--  comienzan los archivos tipo JavaScript!-->
        <script src="./assets/js/jquery-3.2.1.min.js"></script>
        <script src="./assets/alertifyjs/alertify.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <?php include "./PHP/session_start.php"?>
        <!-- Finaliza archivos JS !-->
        <!-- LLamado de librerias CSS !-->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/alertifyjs/css/alertify.min.css">
        <link rel="stylesheet" href="./assets/alertifyjs/css/themes/bootstrap.min.css">
       <!-- Termina el css!-->
        <title>Facturas</title>
        <link rel="shortcut icon" type="image/x-icon" href="./assets/img/icono.png">
        <link rel="stylesheet" href="./assets/css/dashboard.css">
    </head>









<body>
    
    
    
    
    
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
            <h1 class="h2">Facturas</h1>
            
            <button class="btn btn-dark"><img src="./assets/img/baseline_add_white_18dp.png"></button><!-- BOTON DE AGREGAR FACTURAS !-->
                </div>
                <div class="card">
                <div class="card-deck pt-3 pb-3 pr-3 pl-3">
                   <div class="col-lg-6 col-md-12">
                       <div class="col-12" id="invoices_info"></div>
                       <div class="col-lg-12 col-md-12 pb-3" id="table_of_now_invoice"></div>
                   </div>
                   <div class="card col-md-12 col-lg-6 " style="height:310px;" id="add_products_df">
                   </div>
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
    $('#invoices_info').load('./PHP/invoices/invoices_info.php');
    $('#table_of_now_invoice').load('./PHP/invoices/table_of_now_invoice.php');
    $('#add_products_df').load('./PHP/invoices/add_products_df.php');
});
    
</script>




</html>