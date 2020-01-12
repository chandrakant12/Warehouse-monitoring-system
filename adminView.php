<?php
include './includes/header.php';

if(isset($_GET[delid]))
{
    $sql ="DELETE FROM admin WHERE adminid='$_GET[delid]'";
    $qsql=mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn) == 1)
    {
        echo "<script>alert('admin record deleted successfully..');</script>";
    }
}
?>

<div class="container text-center">
    <br>
    <div class="row">
        <div class="col">
            <h3>View Adminstrator Record</h3>
        </div>
        <div class="col">
            <h5>Search Admin - <input type="search" class="light-table-filter" data-table="order-table"placeholder="Filtrer" /></h5>
        </div>
    </div>
    <div class="conatiner">
        <br>
        <section class="container">
            <table class="table table-striped">
                <thead class="purple-gradient">
                    <tr>
                        <th >Admin Name</th>
                        <th >Login ID</th>
                        <th >Status</th>
                        <!-- <td >Action</td> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql ="SELECT * FROM admin";
                    $qsql = mysqli_query($conn,$sql);
                    while($rs = mysqli_fetch_array($qsql))
                    {
                        echo "<tr>
                        <td>$rs[adminname]</td>
                        <td>$rs[loginid]</td>
                        <td>$rs[status]</td>
                        <!--<td>
                        <a class=\"btn purple-gradient\" href='admin.php?editid=$rs[adminid]'>Edit</a> <a class=\"btn purple-gradient\" href='viewadmin.php?delid=$rs[adminid]'>Delete</a> </td>-->
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </div>
</div>

<?php
include './includes/footer.php';
?>