<link href="./css/graphs1.css" rel="stylesheet"></head>


 <br>
<div class="container">
<form class="form-group" action="" method="post">
    
    <div class="row">
        <div class="col">
    <div class="input-group mb-3 align">
  
  <select class="custom-select " style="height: 60px" name="warevalue">
    <option selected>choose warehouse</option>
    <option value="1">Warehouse1</option>
    <option value="2">Warehouse2</option>
    <option value="3">Warehouse3</option>
    <option value="4">Warehouse4</option>

  </select>
  </div>
</div>
  <div class="col">
  <input class="btn btn-light"type='submit' value='analyse'/>
</div>

</div>


    </form>
</div>
<div>
<?php

echo "<h1 class = \"text-center\">Warehouse $_POST[warevalue]</h1>"?>
</div>

<?php
session_start(); 
//for graph two
$connect1 = mysqli_connect("localhost", "root", "", "iicdc");  
$cquery1 = "SELECT * FROM `sensors` where userid = 1 and whid = '$_POST[warevalue]' "; 
$cquery2 = "SELECT * FROM `sensors` where userid = 1 and whid = '$_POST[warevalue]' ";   
$gasd = "SELECT * FROM `sensors` where userid = 1 and whid =  '$_POST[warevalue]' ";  

$cresult1 = mysqli_query($connect1, $cquery1);  
$cresult3 = mysqli_query($connect1, $cquery1); 
$gas = mysqli_query($connect1, $cquery1); 
$gaslpg = mysqli_query($connect1, $cquery1); 

$gasco = mysqli_query($connect1, $cquery1); 

$gassmoke = mysqli_query($connect1, $cquery1); 

$gas1 = mysqli_query($connect1, $cquery1); 
$date= mysqli_query($connect1, $cquery2);
$date1= mysqli_query($connect1, $cquery2);
$date2= mysqli_query($connect1, $cquery2);
$date3= mysqli_query($connect1, $cquery2);

?>
<!--script for graphs-->
<script src="./js/highcharts.js"></script>
<script src="./js/modules/exporting.js"></script>
<script src="./js/modules/export-data.js"></script>
<script src="./js/modules/accessibility.js"></script>
<script src="./js/modules/series-label.js"></script>
<script src="./js/graphs.js"></script>

<!--link to bootstrap-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<br><br>



<!--
session_start(); 
//for graph two
$connect1 = mysqli_connect("localhost", "root", "", "iicdc");  
$cquery1 = "SELECT * FROM `sensors` where userid = 1 and whid = $_POST['warevalue'] ";  
$gasd = "SELECT * FROM `sensors` where userid = 1 and whid = 1 ";  

$cresult1 = mysqli_query($connect1, $cquery1);  
$cresult3 = mysqli_query($connect1, $cquery1); 
$gas = mysqli_query($connect1, $cquery1); 
$gas1 = mysqli_query($connect1, $cquery1); 
-->
<div class="row">
    <div class="col-sm-4">
    	<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 "></div>
 
           <script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'areaspline'
    },
    title: {
        text: 'Average vibrations during one week'
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

                    <?php

                      while($row = mysqli_fetch_array($date))  
                          {    
                           
                               echo "\"".date("h:ia",strtotime($row['Time']))."\",";  
                          } 
                          ?>

        ],
      
    },
    yAxis: {
        title: {
            text: 'vibrations in hz'
        }
    },
    tooltip: {
        shared: true,
        valueSuffix: ' hz'
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
        name: 'warehouse',
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


    <div class="col-sm-4" >
    	


<div id="container2" style="min-width: 310px; height: 400px; max-width: 600px; margin: 300 "></div>

		<script type="text/javascript">
Highcharts.chart('container2', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: 'Average Monthly Temperature and humidity in warehouse'
    },
    subtitle: {
        text: 'Source: sensors data'
    },
    xAxis: [{
        categories: [ <?php

                      while($row = mysqli_fetch_array($date2))  
                          {    
                           
                               echo "\"".date("h:ia",strtotime($row['Time']))."\",";  
                          } 
                          ?>],
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
            format: '{value} %',
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
                            // 52,56,110, 49.9, 71.5,67
                            ],
        tooltip: {
            valueSuffix: ' %'
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
                           //7.0, 6.9, 9.5, 21.5, 9.6
                           ],
        tooltip: {
            valueSuffix: '°C'
        } 
    }]
});
		</script>

   
    
 </div>
    
    <div class="col-sm-4" >
       <div id="container5"></div>

				<script type="text/javascript">
Highcharts.chart('container5', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Monthly Average gas composition(ppm)'
    },
    subtitle: {
        text: 'Source: sensors data'
    },
    xAxis: {
        categories: [ <?php

                      while($row = mysqli_fetch_array($date1))  
                          {    
                           
                               echo "\"".date("h:ia",strtotime($row['Time']))."\",";  
                          } 
                          ?>]
    },
    yAxis: {
        title: {
            text: 'gas (ppm)'
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
        name: 'warehouse',
        data: [  <?php
                      while($row = mysqli_fetch_array($gas))  
                          {  
                               echo $row["gas"].",";  
                          } 
                          ?>
                          //7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2
                          ]
    }]
});
		</script>



</div>
</div> <br><br>
<!--<div class="row">
    <div class="col-sm-6" style="background-color:lavender;">
    	<div id="container3" style="min-width: 310px; height: 400px; max-width: 310px; margin: 0 "></div>

    </div>
    <div class="col-sm-6" style="background-color:lavender;">
    	<div id="container4" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 "></div>

    </div>
  -->   <figure class="highcharts-figure">
    <div id="container10"></div>
    
</figure>



        <script type="text/javascript">
Highcharts.chart('container10', {
    title: {
        text: 'Combination chart'
    },
    xAxis: {
        categories: [ <?php

                      while($row = mysqli_fetch_array($date3))  
                          {    
                           
                               echo "\"".date("h:ia",strtotime($row['Time']))."\",";  
                          } 
                          ?>]
    },
    labels: {
        items: [{
            html: 'Gas Composition In Warehouse',
            style: {
                left: '50px',
                top: '18px',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'black'
            }
        }]
    },
    series: [{
        type: 'column',
        name: 'lpg',
        data: [<?php
                      while($row = mysqli_fetch_array($gaslpg))  
                          {  
                               echo $row["gaslpg"].",";  
                          } 
                          ?>]
    }, {
        type: 'column',
        name: 'co',
        data: [<?php
                      while($row = mysqli_fetch_array($gasco))  
                          {  
                               echo $row["gasco"].",";  
                          } 
                          ?>]
    }, {
        type: 'column',
        name: 'smoke',
        data: [<?php
                      while($row = mysqli_fetch_array($gassmoke))  
                          {  
                               echo $row["gassmoke"].",";  
                          } 
                          ?>]
    }, {
        type: 'spline',
        name: 'Average',
        data: [],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    }, {
        type: 'pie',
        name: 'Total consumption',
        data: [{
            name: 'Jane',
            y: 13,
            color: Highcharts.getOptions().colors[0] // Jane's color
        }, {
            name: 'John',
            y: 23,
            color: Highcharts.getOptions().colors[1] // John's color
        }, {
            name: 'Joe',
            y: 19,
            color: Highcharts.getOptions().colors[2] // Joe's color
        }],
        center: [100, 80],
        size: 100,
        showInLegend: false,
        dataLabels: {
            enabled: false
        }
    }]
});

        </script>


