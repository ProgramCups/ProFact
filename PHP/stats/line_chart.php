<!doctype html>
<html lang="en">
   <?php $year=strftime( "%Y", time() );?>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        <div>
        <div class="bg-primary text-white rounded text-center pt-1 pb-1"><h3>Estadisticas del <?php echo $year;?></h3></div>
        <canvas id="myChart"></canvas>
        </div>
    </body>
</html>  
<?php
$labels=["Diciembre", "Noviembre", "Octubre", "Septiembre", "Agosto", "Julio", "Junio", "Mayo", "Abril", "Marzo","Febrero", "Enero"];
$fecha=strftime( "%Y-%m", time() );
require "./conection.php";
$i=11;
while($i>=0){
    $sql="SELECT sum(ingresos) as ingresos, sum(egresos)
   FROM finanzas where mes='".$labels[$i]."';";
    $result=mysqli_query($con,$sql);
				while($ver=mysqli_fetch_row($result)){ 
				$arrayIngresos[]=$ver[0];
                $arrayEgresos[]=$ver[1];
}


    
 $i=$i-1;   


}
$Ingresos1=$arrayIngresos[0];
$Ingresos2=$arrayIngresos[1];
$Ingresos3=$arrayIngresos[2];
$Ingresos4=$arrayIngresos[3];
$Ingresos5=$arrayIngresos[4];
$Ingresos6=$arrayIngresos[5];
$Ingresos7=$arrayIngresos[6];
$Ingresos8=$arrayIngresos[7];
$Ingresos9=$arrayIngresos[8];
$Ingresos10=$arrayIngresos[9];
$Ingresos11=$arrayIngresos[10];
$Ingresos12=$arrayIngresos[11];

$Egresos1=$arrayEgresos[0];
$Egresos2=$arrayEgresos[1];
$Egresos3=$arrayEgresos[2];
$Egresos4=$arrayEgresos[3];
$Egresos5=$arrayEgresos[4];
$Egresos6=$arrayEgresos[5];
$Egresos7=$arrayEgresos[6];
$Egresos8=$arrayEgresos[7];
$Egresos9=$arrayEgresos[8];
$Egresos10=$arrayEgresos[9];
$Egresos11=$arrayEgresos[10];
$Egresos12=$arrayEgresos[11];
?>
<script>
    
    var labels=["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre","Noviembre", "Diciembre"];
    var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            
    // The type of chart we want to create
    type: 'line',
            
    // The data for our dataset
    data: {
        labels: labels ,
        datasets: [{
            label: "Ingresos",
            borderColor: 'rgb(72, 242, 0)',
            fill: false,
            backgroundColor: 'rgb(72, 242, 0)',
            data:["<?php echo $Ingresos1;?>",
                    "<?php echo $Ingresos2;?>",
                    "<?php echo $Ingresos3;?>",
                    "<?php echo $Ingresos4;?>",
                    "<?php echo $Ingresos5;?>",
                    "<?php echo $Ingresos6;?>",
                    "<?php echo $Ingresos7;?>",
                    "<?php echo $Ingresos8;?>",
                    "<?php echo $Ingresos9;?>",
                    "<?php echo $Ingresos10;?>",
                    "<?php echo $Ingresos11;?>",
                    "<?php echo $Ingresos12;?>"],
            
        },
        {
            label: "Egresos",
            borderColor: 'rgb(255, 99, 132)',
            fill: false,
            backgroundColor: 'rgb(255, 99, 132)',
            data: ["<?php echo $Egresos1;?>",
                    "<?php echo $Egresos2;?>",
                    "<?php echo $Egresos3;?>",
                    "<?php echo $Egresos4;?>",
                    "<?php echo $Egresos5;?>",
                    "<?php echo $Egresos6;?>",
                    "<?php echo $Egresos7;?>",
                    "<?php echo $Egresos8;?>",
                    "<?php echo $Egresos9;?>",
                    "<?php echo $Egresos10;?>",
                    "<?php echo $Egresos11;?>",
                    "<?php echo $Egresos12;?>"],         
        }],
    },

    // Configuration options go here
    options: {}
});
</script>