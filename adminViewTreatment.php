<?php
include './includes/header.php';

if(isset($_GET[delid]))
{
    $sql ="DELETE FROM treatment WHERE treatmentid='$_GET[delid]'";
    $qsql=mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn) == 1)
    {
        echo "<script>alert('treatment deleted successfully..');</script>";
    }
}
//comment
?>

<div class="container text-center">
    <br>
    <h3>View  treatment</h3>
    <div class="container">
        <h1>View treatment record</h1>
        <table class="table table-striped">
            <thead class="purple-gradient white-text">
                <tr>
                    <td><strong>Treatment Type</strong></td>
                    <td><strong>Treatment cost</strong></td>
                    <td><strong>Note</strong></td>
                    <td><strong>Status</strong></td>
                    <?php
                    if(isset($_SESSION[adminid]))
                    {
                        ?>
                        <td><strong>Action</strong></td>
                        <?php
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql ="SELECT * FROM treatment";
                $qsql = mysqli_query($conn,$sql);
                while($rs = mysqli_fetch_array($qsql))
                {
                    echo "<tr>
                    <td>$rs[treatmenttype]</td>
                    <td>Rs. $rs[treatment_cost]</td>
                    <td>$rs[note]</td>
                    <td>$rs[status]</td>";
                    if(isset($_SESSION[adminid]))
                    {
                        echo "<td>
                        <a class=\"btn purple-gradient\" href='treatment.php?editid=$rs[treatmentid]'>Edit</a> <a class=\"btn purple-gradient\" href='viewtreatment.php?delid=$rs[treatmentid]'>Delete</a> </td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include './includes/footer.php';
?>