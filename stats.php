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
        <title>Estadisticas</title>
        <link rel="shortcut icon" type="image/x-icon" href="./assets/img/icono.png">
        <link rel="stylesheet" href="./assets/css/dashboard.css">
    </head>

<body>
   <!--INICIO PHP!-->
    <?php
        /*Determinacion de la fecha actual y realizando su equivalencia en letras*/
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
        $mes=$meses[date('n')-1];
        $year=strftime( "%Y", time() );
        
    ?>
    <!--FIN PHP!-->
    <!--INICIO NAVBAR!-->
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">ProFact</a>
        <div class="text-white text-center pr-3"><strong> Usuario: <?php echo $_SESSION['usuario'];?></strong></div>
    </nav>
    <!--FIN NAVBAR!-->
    
    <!--INICIO CONTAINER PRINCIPAL!-->
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
            <h1 class="h2">Estadisticas</h1>

            <!-- Modal!-->
            <div class="input-group col-3" style="alig-right">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Mes</label>
            </div>
            <!-- Seleccionador de la fecha para ver estadisticas!-->
            <select class="custom-select" id="fecha1">
                <option selected><?php echo $mes; ?></option>
                <option value="Enero">Enero</option>
                <option value="Febrero">Febrero</option>
                <option value="Marzo">Marzo</option>
                <option value="Abril">Abril</option>
                <option value="Mayo">Mayo</option>
                <option value="Junio">Junio</option>
                <option value="Julio">Julio</option>
                <option value="Agosto">Agosto</option>
                <option value="Septiembre">Septiembre</option>
                <option value="Octubre">Octubre</option>
                <option value="Noviembre">Noviembre</option>
                <option value="Diciembre">Diciembre</option>
                <option value="1">Todo</option>
            </select>
            <!-- Aqui termina el seleccionador de fechas!-->
            </div>
            <!-- Este es parte del seleccionador de fechas, pero este realiza un trabajo diferente, en este caso se recoge el año!-->
            <div class="input-group col-3" style="alig-right">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Año</label>
            </div>
            
            <select class="custom-select" id="fecha2">
                <?php 
                    
                    while($year<=2250){
                        echo "<option value='".$year."'>".$year."</option>";
                    $year=$year+1;
                    }
                ?>
            </select>
            </div>
            <!-- Aqui termina el seleccionador de años!-->

            </div>
              
              
              
               <!--Este es el container de las targetas de estado economico !-->
                <div class="card-deck card pt-3 pb-3 shadow-lg" id="finanzas"></div><!-- Tarjetas de estado economico!-->
                <br>
                <!-- Container de los graficos!-->
                <div class="card-deck card pt-3 shadow-lg">
                <div id="chart" class="col-8 pb-2"></div><!-- Grafico de lineas!-->
                <div id="chart2" class="col-4 "></div><!-- Grafico de DONUT!-->
                </div>
                <br>
               
            </main>
            <!-- End's Content!-->
        </div>
        </div>
    <!--FIN CONTAINER PRINCIPAL!-->
    
</body>
<script>$(document).ready(function(){
    $('#finanzas').load('./PHP/stats/finance_cards.php');
    $('#chart').load('./PHP/grafico.php');
    $('#chart2').load('./PHP/grafico2.php');
    $('#fecha1').change(function(){  
        var fecha1 = document.getElementById('fecha1').value;
        var fecha2 = document.getElementById('fecha2').value;  
        $('#finanzas').load("./PHP/stats/statistics_search_engine.php?fechap="+fecha1+"&fechas="+fecha2+"");
        alertify.success("Cargado correctamente :)");
    });
    $('#fecha2').change(function(){
        var fecha1 = document.getElementById('fecha1').value;
        var fecha2 = document.getElementById('fecha2').value;
    $('#finanzas').load("./PHP/stats/statistics_search_engine.php?fechap="+fecha1+"&fechas="+fecha2+"");
    });
});</script><!-- Inicio de las funciones de stats, esto se encarga de cargar en la pagina los diferentes componentes !-->
</html>
