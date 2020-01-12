<?php
include './includes/header.php';

if(isset($_GET[delid]))
{
    $sql ="DELETE FROM medicine WHERE medicineid='$_GET[delid]'";
    $qsql=mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn) == 1)
    {
        echo "<script>alert('Medicine redcord deleted successfully..');</script>";
    }
}
?>

<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <h2>View  medicine list</h2>
        </div>
        <div class="col">
            <h4>Search medicine - <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" /></h4>
        </div>
    </div>
    <div class="container text-center">

        <section class="container">

            <br>
            <table class="table table-striped">
                <thead class="purple-gradient white-text">
                    <tr>
                        <th>Medicine name</th>
                        <th>Medicine cost</th>
                        <th>description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead> 
                <tbody>

                    <?php
                    $sql ="SELECT * FROM medicine";
                    $qsql = mysqli_query($conn,$sql);
                    while($rs = mysqli_fetch_array($qsql))
                    {
                        echo "<tr>
                        <td width=\"15%\">$rs[medicinename]</td>
                        <td width=\"15%\">$rs[medicinecost]</td>
                        <td width=\"15%\">$rs[description]</td>
                        <td width=\"15%\">$rs[status]</td>
                        <td width=\"40%\">
                        <a class=\"btn purple-gradient\" href='medicine.php?editid=$rs[medicineid]'>Edit</a> <a class=\"btn purple-gradient\" href='viewmedicine.php?delid=$rs[medicineid]'>Delete</a> </td>
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