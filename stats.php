<?php include './includes/header.php'; ?>


<?php 
session_start(); 
 $connect = mysqli_connect("localhost", "root", "", "ktm");  
 $cquery = "SELECT * FROM `account` where userid= 7";  
 // $cquery2 = "SELECT * FROM `ecategory` where userid= '{$_SESSION['id']}' ";
  // $cquery3 = "SELECT * FROM `icategory` where userid= '{$_SESSION['id']}' ";
 $cresult = mysqli_query($connect, $cquery);  
 // $cresult2 = mysqli_query($connect, $cquery2); 
  //$cresult3 = mysqli_query($connect, $cquery3); 
?>
  
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
 


		
		
	

		

<script src="js/highcharts.js"></script>
<script src="js/modules/exporting.js"></script>
<script src="js/modules/export-data.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>


<div>
		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Browser market shares in January, 2018'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
           // name: 'Chrome',
           // y: 61.41,
           // sliced: true,
           // selected: true
           <?php  
                          while($row = mysqli_fetch_array($cresult))  
                          {  
                               echo " name : '".$row["Account"]."',";
                               echo " y:".$row["Ammount"]."";  
                          }  
                          ?> 

        }, {
            name: 'Internet Explorer',
            y: 11.84
        }, {
            name: 'Firefox',
            y: 10.85
        }, {
            name: 'Edge',
            y: 4.67
        }, {
            name: 'Safari',
            y: 4.18
        }, {
            name: 'Sogou Explorer',
            y: 1.64
        }, {
            name: 'Opera',
            y: 1.6
        }, {
            name: 'QQ',
            y: 1.2
        }, {
            name: 'Other',
            y: 2.61
        }]
    }]
});
		</script>

        <h1> hello </h1>

</div>