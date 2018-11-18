<?php
$mes=strftime( "%m", time() );
if($mes==1){
    $valormes="Enero";
}if($mes==2){
    $valormes="Febrero";
}if($mes==3){
    $valormes="Marzo";
}if($mes==4){
    $valormes="Abril";
}if($mes==5){
    $valormes="Mayo";
}if($mes==6){
    $valormes="Junio";
}if($mes==7){
    $valormes="Julio";
}if($mes==8){
    $valormes="Agosto";
}if($mes==9){
    $valormes="Septiembre";
}if($mes==10){
    $valormes="Octubre";
}if($mes==11){
    $valormes="Noviembre";
}if($mes==12){
    $valormes="Diciembre";
}else{}



$year=strftime( "%Y", time() );
require "../../conection.php";
$sql="SELECT sum(ingresos) as ingresos, sum(egresos) as egresos, sum(ganancia), mes, year as resultados
   FROM finanzas where mes='".$valormes."' and year='".$year."';";

?>
    
<?php
$result=mysqli_query($con,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos= $ver[0]."||".
                            $ver[1]."||".
                            $ver[2]."||".
                            $ver[3];
            ?>
            
            
            <!--Ingresos !-->
            <div class="card text-white text-center bg-success col-4 shadow-sm " style="">
            <div class="card-body">
            <h5 class="card-text pt-3 pb-2">Ingresos</h5>
            <h1 class="card-title pb-3">$RD <?php echo $ver[0] ?></h1>
            <div class="card-footer bg-transparent border-top"><div class="d-flex justify-content-between align-items-center">

            <small class="text-white">Fecha: <?php echo $ver[3];?></small>

            </div>
            </div>

            </div>
            </div>
            <!-- FIn ingresos!-->
            <!-- Egresos!-->
            <div class="card text-white text-center bg-danger col-4 shadow-sm" style="">
                <div class="card-body">
                <h5 class="card-text pt-3 pb-2">Egresos</h5>
                <h1 class="card-title pb-2"> $RD <?php echo $ver[1] ?></h1>
                <div class="card-footer bg-transparent border-top"><div class="d-flex justify-content-between align-items-center">

                <small class="text-white">Fecha: <?php echo $ver[3];?></small>

                </div>
                </div>

                </div>
            </div>
            <!-- fin egresos!-->
            <!-- resultados!-->
            <div class="card text-white text-center bg-info col-4 shadow-sm" style="">
                <div class="card-body">
                    <h5 class="card-text pt-3 pb-2">Resultados</h5>
                    <h1 class="card-title pb-2">$RD <?php echo $ver[2] ?></h1>
                    <div class="card-footer bg-transparent border-top">
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-white">Fecha: <?php echo $ver[3];?></small>
                        </div>
                    </div>
                </div>
            </div>
<?php }?>

