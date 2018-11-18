<?php
$mes=$_GET['fechap'];
$year=$_GET['fechas'];

require "../../conection.php";
if($mes=="1"){
    $sql="SELECT sum(ingresos) as ingresos, sum(egresos) as egresos, sum(ganancia) as resultados, mes
   FROM finanzas where year='".$year."';";   
    $mes="Año Completo";
}else{
    $sql="SELECT sum(ingresos) as ingresos, sum(egresos) as egresos, sum(ganancia) as resultados, mes
   FROM finanzas where mes='".$mes."' and year='".$year."';";
}


?>

<?php
$result=mysqli_query($con,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
                            $ver[3];
?>

            
            <!--Ingresos !-->
            <div class="card text-white text-center bg-success col-4" style="">
            <div class="card-body">
            <h5 class="card-text pt-3 pb-2">Ingresos</h5>
            <h1 class="card-title pb-3">$RD <?php echo $ver[0] ?></h1>
            <div class="card-footer bg-transparent border-top"><div class="d-flex justify-content-between align-items-center">

            <small class="text-white"><?php echo $mes; ?></small>
            
            </div>
            </div>

            </div>
            </div>
            <!-- FIn ingresos!-->
            <!-- Egresos!-->
            <div class="card text-white text-center bg-danger col-4" style="">
                <div class="card-body">
                <h5 class="card-text pt-3 pb-2">Egresos</h5>
                <h1 class="card-title pb-3"> $RD <?php echo $ver[1] ?></h1>
                <div class="card-footer bg-transparent border-top"><div class="d-flex justify-content-between align-items-center">

                <small class="text-white"><?php echo $mes; ?></small>

                </div>
                </div>

                </div>
            </div>
            <!-- fin egresos!-->
            <!-- resultados!-->
            <div class="card text-white text-center bg-info col-4" style="">
                <div class="card-body">
                    <h5 class="card-text pt-3 pb-2">Resultados</h5>
                    <h1 class="card-title pb-3">$RD <?php echo $ver[2] ?></h1>
                    <div class="card-footer bg-transparent border-top">
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-white"><?php echo $mes; ?></small>
                        </div>
                    </div>
                </div>
            </div>
    <?php }?>