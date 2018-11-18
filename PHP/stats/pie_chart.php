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
        }else{}?>
<div>
<div class="bg-primary text-white rounded text-center pt-1 pb-1"><h3>Tendencia de <?php echo $valormes;?></h3></div>
<canvas id="myChart" width="450" height="450"></canvas>
</div>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Red", "Blue"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'red',
                'blue'
                
            ],
        }]
    },
    options: {
        
    }
});
