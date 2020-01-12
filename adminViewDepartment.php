<?php
include './includes/header.php';

if(isset($_GET[delid]))
{
    $sql ="DELETE FROM department WHERE departmentid='$_GET[delid]'";
    $qsql=mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn) == 1)
    {
        echo "<script>alert('department deleted successfully..');</script>";
    }
}
?>

<div class="container text-center">
    <br>
    <div class="row">
        <div class="col">
            <h2>View Department</h2></li></ul>
        </div>
        <div class="col">
            <h4>Search Department - <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" /></h4>
        </div>
    </div>
    <br>
    <div class="container">
        <section class="container">


            <table class="table table-striped">
                <thead class="purple-gradient white-text">
                    <tr>
                        <th width="33%">departmentname</th>
                        <th width="33%">description</th>
                        <th width="33%">Status</th>
                        <!--<th width="25$">Action</th>-->
                    </tr>
                </thead> 
                <tbody>

                    <?php
                    $sql ="SELECT * FROM department";
                    $qsql = mysqli_query($conn,$sql);
                    while($rs = mysqli_fetch_array($qsql))
                    {
                        echo "<tr>
                        <td>$rs[departmentname]</td>
                        <td>$rs[description]</td>
                        <td>$rs[status]</td>
                        <!--<td>
                        <a class=\"btn purple-gradient\" href='department.php?editid=$rs[departmentid]'>Edit</a>  <a class=\"btn purple-gradient\"  href='viewdepartment.php?delid=$rs[departmentid]'>Delete</a> </td>-->
                        </tr>";
                    }
                    ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</div>

<?php
include './includes/footer.php';
?>