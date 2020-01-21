
<?php 
session_start(); 
 
 $connect1 = mysqli_connect("localhost", "root", "", "iicdc");  
 $cquery1 = " SELECT * FROM sensors ORDER BY id DESC LIMIT 1";  
 $gasd = " SELECT * FROM predictedhumid where id = 1 ";  

$predicttemp= mysqli_query($connect1, $gasd); 
$predicttemp1= mysqli_query($connect1, $gasd); 
//$predichumid= mysqli_query($connect1, $gasd);

 //$flame = mysqli_query($connect1, $cquery1); 
 //$temp = mysqli_query($connect1, $cquery1);  
  //$vibr= mysqli_query($connect1, $cquery1); 
    //$humb = mysqli_query($connect1, $cquery1); 
    //$gas = mysqli_query($connect1, $cquery1); 
?>

<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
  
<!-- Button trigger modal -->
<?php 
while($row = mysqli_fetch_array($predicttemp1)) 
{  $a = "hour";
  $a .= 2;
  echo "<p>".$row[$a]."</p>"; 
}
    


     ?>
<?php 
$v=0;
if ($v==0){
echo  " <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
  Launch demo modal
</button>";

$a = "Hello";

$a .= 2;

echo $a;
}
else {
  echo "not really";
}


?>

     

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>