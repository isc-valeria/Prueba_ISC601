<?php
/**
 * Created by PhpStorm.
 * User: octavio
 * Date: 20/06/2018
 * Time: 06:04 PM
 */
$varx;
$vary;
while($row=mysqli_fetch_array($datos))
{
    $varx[]=$row[1];
    $vary[]=intval($row[2]);

}
?>
<div id="container_grafica"></div>
<script type="text/javascript">
    Highcharts.chart('container_grafica', {
        chart: {
            type: 'column'
        },
        title: {
            text: ''
        },
        xAxis: {
            categories: <?php echo json_encode($varx)?>
        },
        yAxis: {
            min: 0,
            title: {
                text: 'productos'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                }
            }
        },
        legend: {
            align: 'right',
            x: -30,
            verticalAlign: 'top',
            y: 25,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                }
            }
        },
        series: [{
            name: 'existencia',
            data: <?php echo json_encode($vary)?>
        }]
    });
</script>