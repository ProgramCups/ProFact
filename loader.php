<html>
<head>
<link rel="icon" type="image/png" href="./assets/img/logo.png" />
<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
<link rel="stylesheet" href="./assets/css/register.css">
<script src="./assets/js/jquery.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta http-equiv="refresh" content="5;URL=./stats.php" /></head>
 
<title>Cargando</title>
<style>
    .loader {
    border: 10px solid #f3f3f3; /* Light grey */
    border-top: 10px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 500px;
    height: 500px;
    animation: spin 5s linear infinite;
}
    #texto{
        color: #FFFFFF;
        z-index: 1;
        position: absolute;
        text-align: center;
        width: 100%;
        padding-top: 215px;
    }

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
    </style>
    <body style="background-color:#1B1B1B;">
       <div style="padding-top:190px;"
        ></div>
        <div><h1 id="texto">Cargando</h1>
<div class="loader" style="background-color:#1B1B1B;margin:auto;"></div>
</div>
        </body>
</html>