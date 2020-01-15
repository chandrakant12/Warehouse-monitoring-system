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
?>

<div class="container text-center">
    <br>
    <h2>View  treatment</h2>
    <div class="container">
        <h1>View treatment record</h1>
        <table class="table" width="100%" border="3">
            <tbody>
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
                <?php
                $sql ="SELECT * FROM treatment";
                $qsql = mysqli_query($conn,$sql);
                while($rs = mysqli_fetch_array($qsql))
                {
                    echo "<tr>
                    <td>&nbsp;$rs[treatmenttype]</td>
                    <td>&nbsp;Rs. $rs[treatment_cost]</td>
                    <td>&nbsp;$rs[note]</td>
                    <td>&nbsp;$rs[status]</td>";
                    if(isset($_SESSION[adminid]))
                    {
                        echo "<td>&nbsp;
                        <a href='treatment.php?editid=$rs[treatmentid]'>Edit</a> | <a href='viewtreatment.php?delid=$rs[treatmentid]'>Delete</a> </td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
    </div>
</div>

<?php include './includes/footer.php'; ?>