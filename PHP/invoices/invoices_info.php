<html>
<head>
        <link rel="icon" type="image/png" href="./assets/img/logo.png" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <!--  comienzan los archivos tipo JavaScript!-->
        <script src="../../assets/js/jquery-3.2.1.min.js"></script>
        <script src="../../assets/alertifyjs/alertify.min.js"></script>
        <script src="../../assets/js/bootstrap.min.js"></script>
        <!-- Finaliza archivos JS !-->
        <!-- LLamado de librerias CSS !-->
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/alertifyjs/css/alertify.min.css">
        <link rel="stylesheet" href="../../assets/alertifyjs/css/themes/bootstrap.min.css">
       <!-- Termina el css!-->
        <title>Facturas</title>
        <link rel="shortcut icon" type="image/x-icon" href="./assets/img/icono.png">
        <link rel="stylesheet" href="./assets/css/dashboard.css">
</head>
<body>
    <form class="pt-3" method="post" enctype="multipart/form-data">
<div class="container">
    <!-- ID DE FACTURA!-->
    <div class="input-group mb-3">
        <div class="input-group-prepend">
           <span class="input-group-text bg-dark text-light">Codigo de la Factura</span>
        </div>
        <input type="text" class="form-control" id="codigof" name="codigoe" disabled>
        <div class="invalid-feedback" style="width: 100%;"></div>
    </div>
    <!-- Fecha de emision!-->
    <div class="input-group mb-3">
       <div class="input-group-prepend">
           <span class="input-group-text bg-dark text-light">Fecha de Emision</span>
        </div>
        <input type="text" class="form-control" id="fechadeemision" name="fechadeemision" disabled>
        <div class="invalid-feedback" style="width: 100%;"></div>
    </div>
    <!-- Fecha de vencimiento !-->
    <div class="input-group mb-3">
        <div class="input-group-prepend">
           <span class="input-group-text bg-dark text-light">Fecha de vencimiento</span>
        </div>
        <input type="text" class="form-control" id="fechadevencimiento" name="fechadevencimiento" disabled>
        <div class="invalid-feedback" style="width: 100%;"></div>
    </div>
</div>
</form>
    
</body>
</html>