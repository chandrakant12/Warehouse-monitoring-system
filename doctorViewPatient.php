<?php
include './includes/header.php';

if(isset($_GET[delid]))
{
    $sql ="DELETE FROM user WHERE patientid='$_GET[delid]'";
    $qsql=mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn) == 1)
    {
        echo "<script>alert('patient record deleted successfully..');</script>";
    }
}
?>

<div class="container text-center">
    <br><br>
    <div class="row">
        <div class="col">    
            <h2>View User records</h2>
        </div>
        <div class="col">
        <!--     <h4>Search User - <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" /></h4>
        </div> -->
    </div>
    <br>
    <div class="container">
        <section class="container">

            <table class="table table-striped">
                <thead class="purple-gradient white-text">
                    <tr>
                        <th width="14%" height="36"><div align="center">User Name</div></th>
                        <th width="17%"><div align="center">Admission details</div></th>
                        <th width="22%"><div align="center">Address</div></th>    
                        <th width="17%"><div align="center">User Profile</div></th>
                        <!--<th width="30%"><div align="center">Action</div></th>-->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql ="SELECT * FROM user";
                    $qsql = mysqli_query($conn,$sql);
                    while($rs = mysqli_fetch_array($qsql))
                    {
                        echo "<tr>
                        <td>$rs[patientname]<br>
                        <strong>Login ID :</strong> $rs[loginid] <br> <strong>Status </strong>: $rs[status] </td>
                        <td>
                        <strong>Date</strong>: $rs[admissiondate]<br>
                        <strong>Time</strong>: $rs[admissiontime]</td>
                        <td>$rs[address]<br>$rs[city] -  $rs[pincode]<br>
                        <strong>Mob No</strong> : $rs[mobileno]</td>
                        <td><strong>Blood group</strong> - $rs[bloodgroup]<br>
                        <strong>Gender</strong> - $rs[gender]<br>
                        <strong>DOB</strong> - $rs[dob]</td>
                        <!--
                        <td align='center'>";
                        
                        if(isset($_SESSION[adminid]))
                        {
                            echo "<a class=\"btn-sm white-text purple-gradient\" href='patient.php?editid=$rs[patientid]'>Edit</a> | <a class=\"btn-sm white-text purple-gradient\" href='viewpatient.php?delid=$rs[patientid]'>Delete</a> <hr>
                            <a class=\"btn-sm white-text purple-gradient\" href='patientreport.php?patientid=$rs[patientid]'>View Report</a>";
                        }
                        echo "</td>
                        -->
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
        <p></p>
    </div>
</div>

<?php include './includes/footer.php'; ?>