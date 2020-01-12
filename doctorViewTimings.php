<?php
include './includes/header.php';

if(isset($_GET[delid]))
{
    $sql ="DELETE FROM doctor_timings WHERE doctor_timings_id='$_GET[delid]'";
    $qsql=mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn) == 1)
    {
        echo "<script>alert('doctortimings record deleted successfully..');</script>";
    }
}
?>

<div class="container text-center">
    <br>
    <h2>View Staff Timings</h2>
    <div class="container">
        <h4>View Staff Timings record</h4>
        <table class="table" width="200" border="3">
            <thead> 
                <tr>
                    <th>Staff</th>
                    <th>Timings available</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql ="SELECT * FROM doctor_timings where doctorid='$_SESSION[doctorid]'";
                $qsql = mysqli_query($conn,$sql);
                while($rs = mysqli_fetch_array($qsql))
                {
                    $sqldoctor = "SELECT * FROM doctor WHERE doctorid='$rs[doctorid]'";
                    $qsqldoctor = mysqli_query($conn,$sqldoctor);
                    $rsdoctor = mysqli_fetch_array($qsqldoctor);

                    $sqldoct = "SELECT * FROM doctor_timings WHERE doctor_timings_id='$rs[doctor_timings_id]'";
                    $qsqldoct = mysqli_query($conn,$sqldoct);
                    $rsdoct = mysqli_fetch_array($qsqldoct);

                    echo "<tr>
                    <td>&nbsp;$rsdoctor[doctorname]</td>
                    <td>&nbsp;$rsdoct[start_time] - $rsdoct[end_time]</td>
                    <td>&nbsp;$rs[status]</td>
                    <td>&nbsp;<a href='doctortimings.php?editid=$rs[doctor_timings_id]'>Edit</a> | <a href='viewdoctortimings.php?delid=$rs[doctor_timings_id]'>Delete</a> </td>
                    </tr>";
                }
                ?>

            </tbody>
        </table>
        <p>&nbsp;</p>
    </div>
</div>

<?php include './includes/footer.php'; ?>