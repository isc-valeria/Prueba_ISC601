<?php
 $varx;
 $vary;
 // print_r($datos);
 while($row=mysqli_fetch_array($datos))
     {
         $varx[]=$row[0];
         $vary[]=intval($row[1]);

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
                         text: 'Repeticiones'
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
                     backgroundColor: (Highcharts.theme && Highcharts.theme.background3) || 'white',
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
             name: 'Imagenes',
                 data: <?php echo json_encode($vary)?>
         }]
     });
 </script>