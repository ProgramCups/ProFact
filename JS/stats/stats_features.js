$(document).ready(function(){
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
});