<link href="./css/analytics.css" rel="stylesheet"></head>
<link href="./css/graphs1.css" rel="stylesheet"></head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php 
session_start(); 
//for graph one 
 $connect = mysqli_connect("localhost", "root", "", "ktm");  
 $cquery = "SELECT * FROM `account` where userid= 7";  
 $cresult = mysqli_query($connect, $cquery);  
//for graph two
 $connect1 = mysqli_connect("localhost", "root", "", "iicdc");  
 $cquery1 = "SELECT * FROM `sensors` where 1 ";  
  $gasd = "SELECT * FROM `sensors` where 1 ";  

 $cresult1 = mysqli_query($connect1, $cquery1);  
  $cresult3 = mysqli_query($connect1, $cquery1); 
    $gas = mysqli_query($connect1, $cquery1); 
    $gas1 = mysqli_query($connect1, $cquery1); 
?>
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
 

<!--script for graphs-->
<script src="./js/highcharts.js"></script>
<script src="./js/modules/exporting.js"></script>
<script src="./js/modules/export-data.js"></script>
<script src="./js/modules/accessibility.js"></script>
<script src="./js/graphs.js"></script>

<!--link to bootstrap-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>





<div class="row">
    <div class="col-sm-4" style="background-color:lavender;">
    	<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 "></div>
 
           <script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'areaspline'
    },
    title: {
        text: 'Average fruit consumption during one week'
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        verticalAlign: 'top',
        x: 150,
        y: 100,
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF'
    },
    xAxis: {
        categories: [
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday'
        ],
      
    },
    yAxis: {
        title: {
            text: 'Fruit units'
        }
    },
    tooltip: {
        shared: true,
        valueSuffix: ' units'
    },
    credits: {
        enabled: false
    },
    plotOptions: {
        areaspline: {
            fillOpacity: 0.5
        }
    },
    series: [{
        name: 'John',
        data: [  <?php
                      while($row = mysqli_fetch_array($gas1))  
                          {  
                               echo $row["vibration"].",";  
                          } 
                          ?>
                          ]
    }]
});
		</script>






    </div>


    <div class="col-sm-4" style="background-color:lavenderblush;">
    	


<div id="container2" style="min-width: 310px; height: 400px; max-width: 600px; margin: 300 "></div>

		<script type="text/javascript">
Highcharts.chart('container2', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: 'Average Monthly Temperature and Rainfall in Tokyo'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: [{
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        crosshair: true
    }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}°C',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        title: {
            text: 'Temperature',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: 'humidity',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value} mm',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        x: 120,
        verticalAlign: 'top',
        y: 100,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || // theme
            'rgba(255,255,255,0.25)'
    },
    series: [{
        name: 'humidity',
        type: 'column',
        yAxis: 1,
        data: [ <?php  
                    while($row = mysqli_fetch_array($cresult1))  
                          {  
                              echo $row["humidity"].",";  
                          }  
                 ?> 
                             52,56,110, 49.9, 71.5,67],
        tooltip: {
            valueSuffix: ' mm'
        }

    }, {
        name: 'Temperature',
        type: 'spline',
        data: [  <?php
                      while($row = mysqli_fetch_array($cresult3))  
                          {  
                               echo $row["temperature"].",";  
                          } 
                          ?>
                           7.0, 6.9, 9.5, 21.5, 9.6],
        tooltip: {
            valueSuffix: '°C'
        } 
    }]
});
		</script>

   
    
 </div>
    
    <div class="col-sm-4" style="background-color:lavenderblush;">
       <div id="container5"></div>

				<script type="text/javascript">
Highcharts.chart('container5', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Monthly Average Temperature'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Temperature (°C)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Tokyo',
        data: [  <?php
                      while($row = mysqli_fetch_array($gas))  
                          {  
                               echo $row["gas"].",";  
                          } 
                          ?>
                          7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2]
    }]
});
		</script>



</div>
</div>
<!--<div class="row">
    <div class="col-sm-6" style="background-color:lavender;">
    	<div id="container3" style="min-width: 310px; height: 400px; max-width: 310px; margin: 0 "></div>

    </div>
    <div class="col-sm-6" style="background-color:lavender;">
    	<div id="container4" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 "></div>

    </div>
  -->  


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

