<?php
include './includes/header.php';

if(isset($_GET[delid]))
{
    $sql ="DELETE FROM staff_timings WHERE staff_timings_id='$_GET[delid]'";
    $qsql=mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn) == 1)
    {
        echo "<script>alert('stafftimings record deleted successfully..');</script>";
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
                $sql ="SELECT * FROM staff_timings where staffid='$_SESSION[staffid]'";
                $qsql = mysqli_query($conn,$sql);
                while($rs = mysqli_fetch_array($qsql))
                {
                    $sqlstaff = "SELECT * FROM staff WHERE staffid='$rs[staffid]'";
                    $qsqlstaff = mysqli_query($conn,$sqlstaff);
                    $rsstaff = mysqli_fetch_array($qsqlstaff);

                    $sqldoct = "SELECT * FROM staff_timings WHERE staff_timings_id='$rs[staff_timings_id]'";
                    $qsqldoct = mysqli_query($conn,$sqldoct);
                    $rsdoct = mysqli_fetch_array($qsqldoct);

                    echo "<tr>
                    <td>&nbsp;$rsstaff[staffname]</td>
                    <td>&nbsp;$rsdoct[start_time] - $rsdoct[end_time]</td>
                    <td>&nbsp;$rs[status]</td>
                    <td>&nbsp;<a href='stafftimings.php?editid=$rs[staff_timings_id]'>Edit</a> | <a href='viewstafftimings.php?delid=$rs[staff_timings_id]'>Delete</a> </td>
                    </tr>";
                }
                ?>

            </tbody>
        </table>
        <p>&nbsp;</p>
    </div>
</div>

<?php include './includes/footer.php'; ?>