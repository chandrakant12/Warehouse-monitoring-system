<link href="./css/analytics.css" rel="stylesheet">
<?php 
session_start(); 
 $i=1;
 $connect1 = mysqli_connect("localhost", "root", "", "iicdc");  
 $cquery1 = " SELECT * FROM sensors ORDER BY id DESC LIMIT 1";  
 $gasd = " SELECT * FROM predictedhumid ORDER BY id asc LIMIT 1" ;  
 $gasd1 = " SELECT * FROM predictedtemp ORDER BY id DESC LIMIT 1" ; 

$predicttemp= mysqli_query($connect1, $gasd1); 
$predicthumid= mysqli_query($connect1, $gasd);
$predicttemp1= mysqli_query($connect1, $gasd);
$predicthumid1= mysqli_query($connect1, $gasd);

 $flame = mysqli_query($connect1, $cquery1); 
 $temp = mysqli_query($connect1, $cquery1);  
  $vibr= mysqli_query($connect1, $cquery1); 
    $humb = mysqli_query($connect1, $cquery1); 
    $gas = mysqli_query($connect1, $cquery1); 
?>


<script src="./js/highcharts.js"></script>
<script src="./js/modules/exporting.js"></script>
<script src="./js/modules/export-data.js"></script>
<script src="./js/modules/accessibility.js"></script>
<script src="./js/graphs.js"></script>


<div class="app-container app-theme-white fixed-header ">
  <div class="app-main">
         
            
            <link href="./css/graphs1.css" rel="stylesheet"></head>
             <div class="app-main__outer">
                <div class="app-main__inner">
                   <div class="app-page-title">
                       <!-- <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="">
                                    <i class=" icon-gradient bg-ripe-malin">
                                        <img src="https://img.icons8.com/color/48/000000/conflict.png">
                                    </i>
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div>climate status
                                    <div class="page-title-subheading">
                                    </div>
                                </div>
                            </div>
                            </div>-->
                    </div> 

                    <div class="tabs-animation">
                        <div class="row">
                            <div class="col-lg-12 col-xl-6">
                                <div id="container2" style="min-width: 400px; height: 400px; max-width: 600px; margin: 300 "></div>

        <script type="text/javascript">
Highcharts.chart('container2', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: 'the 24 hours future data prediction '
    },
    subtitle: {
        text: 'Source: sensors data'
    },
    xAxis: [{
        categories: ['hour1', 'hour2', 'hour3', 'hour4', 'hour5', 'hour6',
            'hour7', 'hour8', 'hour9', 'hour10', 'hour11', 'hour12' , 'hour13' , 'hour14' , 'hour15','hour16','hour17','hour18','hour19','hour20','hour21','hour22','hour23','hour24'],
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
                    while($row = mysqli_fetch_array($predicthumid))  
                          {  
                              echo "".$row["hour1"].",".$row["hour2"].",".$row["hour3"].",".$row["hour4"].",".$row["hour5"].",".$row["hour6"].",".$row["hour7"].",".$row["hour8"].",".$row["hour9"].",".$row["hour10"].",".$row["hour11"].",".$row["hour12"].",".$row["hour13"].",".$row["hour14"].",".$row["hour15"].",".$row["hour16"].",".$row["hour17"].",".$row["hour18"].",".$row["hour19"].",".$row["hour20"].",".$row["hour21"].",".$row["hour22"].",".$row["hour23"].",".$row["hour24"]."";  
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
                    while($row = mysqli_fetch_array($predicttemp))  
                          {  
                              echo "".$row["hour1"].",".$row["hour2"].",".$row["hour3"].",".$row["hour4"].",".$row["hour5"].",".$row["hour6"].",".$row["hour7"].",".$row["hour8"].",".$row["hour9"].",".$row["hour10"].",".$row["hour11"].",".$row["hour12"].",".$row["hour13"].",".$row["hour14"].",".$row["hour15"].",".$row["hour16"].",".$row["hour17"].",".$row["hour18"].",".$row["hour19"].",".$row["hour20"].",".$row["hour21"].",".$row["hour22"].",".$row["hour23"].",".$row["hour24"]."";  
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

       <!-- <script type="text/javascript">
Highcharts.chart('container19', {
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
        categories: ['hour1', 'hour2', 'hour3', 'hour4', 'hour5', 'hour6',
            'hour7', 'hour8', 'hour9', 'hour10', 'hour11', 'hour12' , 'hour13' , 'hour14' , 'hour15','hour16','hour17','hour18','hour19','hour20','hour21','hour22','hour23','hour24'],
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
        data: [   
        <?php  
                    while($row = mysqli_fetch_array($predicthumid))  
                          {  
                              echo "".$row["hour1"].",".$row["hour2"].",".$row["hour3"].",".$row["hour4"].",".$row["hour5"].",".$row["hour6"].",".$row["hour7"].",".$row["hour8"].",".$row["hour9"].",".$row["hour10"].",".$row["hour11"].",".$row["hour12"].",".$row["hour13"].",".$row["hour14"].",".$row["hour15"].",".$row["hour16"].",".$row["hour17"].",".$row["hour18"].",".$row["hour19"].",".$row["hour20"].",".$row["hour21"].",".$row["hour22"].",".$row["hour23"].",".$row["hour24"]."";  
                          }  
                 ?> 
                            
                            ],
        tooltip: {
            valueSuffix: ' %'
        }

    }, {
        name: 'Temperature',
        type: 'spline',
        data: [  
                 <?php  
                    while($row = mysqli_fetch_array($predicttemp))  
                          {  
                              echo "".$row["hour1"].",".$row["hour2"].",".$row["hour3"].",".$row["hour4"].",".$row["hour5"].",".$row["hour6"].",".$row["hour7"].",".$row["hour8"].",".$row["hour9"].",".$row["hour10"].",".$row["hour11"].",".$row["hour12"].",".$row["hour13"].",".$row["hour14"].",".$row["hour15"].",".$row["hour16"].",".$row["hour17"].",".$row["hour18"].",".$row["hour19"].",".$row["hour20"].",".$row["hour21"].",".$row["hour22"].",".$row["hour23"].",".$row["hour24"]."";  
                          }  
                 ?> 
                           ],
        tooltip: {
            valueSuffix: '°C'
        } 
    }]
});
        </script>-->

   
    
 </div>
                              <!--  <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Status Report</h5>
                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                            <div style="height: 227px;">
                                                <canvas id="line-chart"></canvas>
                                            </div>
                                        </div>
                                        <h5 class="card-title">Failure Probability</h5>
                                        <div class="mt-3 row">
                                            <div class="col-sm-12 col-md-4">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-numbers text-dark">65%</div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-progress-wrapper mt-1">
                                                            <div class="progress-bar-xs progress-bar-animated-alt progress">
                                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
                                                            </div>
                                                            <div class="progress-sub-label">
                                                                <div class="sub-label-left font-size-md">Windings</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-4">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-numbers text-dark">22%</div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-progress-wrapper mt-1">
                                                            <div class="progress-bar-xs progress-bar-animated-alt progress">
                                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%;"></div>
                                                            </div>
                                                            <div class="progress-sub-label">
                                                                <div class="sub-label-left font-size-md">Oil</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-4">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-numbers text-dark">83%</div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-progress-wrapper mt-1">
                                                            <div class="progress-bar-xs progress-bar-animated-alt progress">
                                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width: 83%;"></div>
                                                            </div>
                                                            <div class="progress-sub-label">
                                                                <div class="sub-label-left font-size-md">Gases</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <div class="col-lg-12 col-xl-6">
                                <div class="main-card mb-3 card">
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6">
                                                <div class="widget-chart widget-chart-hover">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg bg-primary"></div>
                                                        <i class="text-primary">
                                                            <img src="https://img.icons8.com/color/48/000000/temperature.png">
                                                        </i></div>
                                                    <div class="widget-numbers">
                                                    <?php

                      while($row = mysqli_fetch_array($temp))  
                          {  
                               echo $row["temperature"] ;  
                          } 
                          ?> C</div>
                                                    <div class="widget-subheading">Temperature</div>
                                                    <div class="widget-description text-success">
                                                        <i class="fa fa-angle-up"></i>
                                                        <span class="pl-1"></span></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="widget-chart widget-chart-hover">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg bg-info"></div>
                                                        <i class="text-info">
                                                            <img style="width: 40px;" src="https://img.icons8.com/dusk/64/000000/temperature-sensitive.png">
                                                        </i>
                                                    </div>
                                                    <div class="widget-numbers">
                                                    <?php

                      while($row = mysqli_fetch_array($gas))  
                          {  
                               echo $row["gas"] ;  
                          } 
                          ?>ppm</div>
                                                    <div class="widget-subheading">gas composition</div>
                                                    <div class="widget-description text-info">
                                                        <i class="fa fa-arrow-right"></i>
                                                        <span class="pl-1"></span></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="widget-chart widget-chart-hover">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg bg-danger"></div>
                                                        <i class="text-danger">
                                                            <img style="width:40px " src="https://img.icons8.com/dusk/64/000000/humidity.png">
                                                        </i>
                                                    </div>
                                                    <div class="widget-numbers"><?php

                      while($row = mysqli_fetch_array($humb))  
                          {  
                               echo $row["humidity"] ;  
                          } 
                          ?> %</div>
                                                    <div class="widget-subheading">Humidity</div>
                                                    <div class="widget-description text-primary"><span class="pr-1"></span>
                                                        <i class="fa fa-angle-up"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="widget-chart widget-chart-hover br-br">
                                                    <div class="icon-wrapper rounded-circle">
                                                        <div class="icon-wrapper-bg bg-success"></div>
                                                        <i class="">
                                                            <img style="width: 50px;" src="https://img.icons8.com/clouds/100/000000/speed.png">
                                                        </i></div>
                                                    <div class="widget-numbers">
                                                        
                                                        <?php

                      while($row = mysqli_fetch_array($vibr))  
                          {  
                               echo $row["vibration"] ;  
                          } 
                          ?> Hz
                                                    </div>
                                                    <div class="widget-subheading">vibration</div>
                                                    <div class="widget-description text-warning"><span class="pr-1"></span>
                                                        <i class="fa fa-arrow-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



<div class="tabs-animation">
                        <div class="mb-3 card">
                            
                              
                                <div class= "" style="height: 70 px">
                                 <?php 
while($row = mysqli_fetch_array($predicttemp1)) 
{ 
    for ($i=1; $i <=24; $i++) { 
        $a = "hour";
          $a .= $i;
          if($row[$a] >= 39)
          {
 // echo "<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
 // Launch demo modal
//</button>"<div class="card-header-tab card-header">;

echo "<h2  class=\"text-center bg-danger\" data-toggle=\"modal\" data-target=\"#exampleModal\">
  Danger!! high temperature  raise detected ! 
</h2>";

break;

}
    
    }
        
}
while($row = mysqli_fetch_array($predicthumid1)) 
{ 
    for ($i=1; $i <=24; $i++) { 
        $a = "hour";
          $a .= $i;
          if($row[$a] >= 61)
          {
 // echo "<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
 // Launch demo modal
//</button>"<div class="card-header-tab card-header">;

echo "<h2  class=\"text-center bg-danger\" data-toggle=\"modal\" data-target=\"#exampleModal2\">
  Danger!! high  humidity  raise detected ! 
</h2>";
break;

}
    
    }
        
}

?>

                            </div>
                            <div class="no-gutters row">
                                <div class="col-sm-6 col-md-4 col-xl-4">
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                            <i class="text-dark opacity-8">
                                                <img style="width: 55px;" src="https://img.icons8.com/clouds/100/000000/slot-machine.png">
                                            </i></div>
                                        <div class="widget-chart-content">
                                            <div class="widget-subheading">warehouse Repairs</div>
                                            <div class="widget-numbers">NO</div>
                                            
                                        </div>
                                    </div>
                                    <div class="divider m-0 d-md-none d-sm-block"></div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl-4">
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                            <i class=" text-white">
                                                <img style="width:40px;" src="https://img.icons8.com/dusk/64/000000/power-strip.png">
                                            </i></div>
                                        <div class="widget-chart-content">
                                            <div class="widget-subheading">flames detected???</div>
                                            <div class="widget-numbers"><span>          <?php

                      while($row = mysqli_fetch_array($flame))  
                          {  
                               echo $row["flame"] ;  
                          } 
                          ?> </span></div>
                                            
                                        </div>
                                    </div>
                                    <div class="divider m-0 d-md-none d-sm-block"></div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-xl-4">
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                            <i class="text-white">
                                                <img style="width: 40px;" src="https://img.icons8.com/color/48/000000/switch-on--v2.png">
                                            </i></div>
                                        <div class="widget-chart-content">
                                            <div class="widget-subheading">Power</div>
                                            <div class="widget-numbers text-success"><span>ON</span></div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center d-block p-3 card-footer">
                                <div class="btn-pill btn-shadow btn-wide fsize-1 disabled btn btn-primary btn-lg">
                                    <span class="mr-2 opacity-7">
                                        <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
                                    </span>
                                    <span class="mr-1">Current climate status</span>
                                </div>
                            </div>
                        </div>
                    </div>





















                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Technicians Report
                                        <i>
                                            &nbsp;<img style="width:45px;" src="https://img.icons8.com/nolan/64/000000/video-card.png">
                                        </i>
                                        
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th width="20%" class="text-center">Temperature</th>
                                                <th class="text-center">Gas</th>
                                                <th class="text-center">Humidity</th>
                                                <th class="text-center">Vibrations</th>
                                            
                                            </tr>
                                            </thead>
                                            <tbody>


                                            <?php
                                            $sql ="SELECT * FROM sensors";
                                            $qsql = mysqli_query($conn,$sql);
                                            while($rs = mysqli_fetch_array($qsql))
                                            {
                                                echo "<tr class=\"text-center\">
                                                <td>
                                                <strong><strong>  </strong>" .$rs["temperature"]. "'C</td>
                                                <td>
                                                <strong> <strong>".$rs["gas"]."ppm</strong></strong>
                                                </td>
                                                <td>
                                                <strong>Mob No</strong> : ".$rs["humidity"]."%</td>
                                                <td><strong> ".$rs["vibration"]. "hz</strong></td>
                                               
                                                </tr>";
                                            }
                                            ?>
                                            
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                   </div>
    </div>
</div>
<div>
   
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">warning !!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    The learning model predicts the  temperature may rise above highest limit in near future!!!
     plz take required actions before it gets worst !! 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <!-- <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">warning !!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    The learning model predicts the  temperature may rise above highest limit in near future!!!
     plz take required actions before it gets worst !! 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <!-- <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>


<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="./js/analytics.js"></script></body>
</html>
