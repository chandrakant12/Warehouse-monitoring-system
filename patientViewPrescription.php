<?php
    include './includes/header.php';

    if(isset($_GET[delid]))
    {
        $sql ="DELETE FROM prescription WHERE prescriptionid='$_GET[delid]'";
        $qsql=mysqli_query($conn,$sql);
        if(mysqli_affected_rows($conn) == 1)
        {
            echo "<script>alert('prescription deleted successfully..');</script>";
        }
    }
?>

<div class="container">
    <br>
    <h4>View Prescription</h4> 

    <div class="container">
        <h4>View prescription record</h4>
        <?php
        $sql ="SELECT * FROM prescription where patientid='$_SESSION[patientid]'";
        $qsql = mysqli_query($conn,$sql);
        while($rs = mysqli_fetch_array($qsql))
        {
            $sqlpatient = "SELECT * FROM user WHERE patientid='$rs[patientid]'";
            $qsqlpatient = mysqli_query($conn,$sqlpatient);
            $rspatient = mysqli_fetch_array($qsqlpatient);

            $sqldoctor = "SELECT * FROM doctor WHERE doctorid='$rs[doctorid]'";
            $qsqldoctor = mysqli_query($conn,$sqldoctor);
            $rsdoctor = mysqli_fetch_array($qsqldoctor);
            ?>			
            <table class="table table-hover" width="200" border="3">
                <tbody>
                    <tr>
                        <td><strong>Doctor</strong></td>
                        <td><strong>User</strong></td>
                        <td><strong>Prescription Date</strong></td>
                        <td><strong>Status</strong></td>
                    </tr>
                    <?php
                    echo "<tr>
                    <td>&nbsp;$rsdoctor[doctorname]</td>
                    <td>&nbsp;$rspatient[patientname]</td>
                    <td>&nbsp;$rs[prescriptiondate]</td>
                    <td>&nbsp;$rs[status]</td>

                    </tr>";

                    ?>
                </tbody>
            </table>

            <h4>Medicine</h4>
            <table class="table" width="200" border="3">
                <tbody>
                    <tr>
                        <td>Medicine</td>
                        <td>Cost</td>
                        <td>Unit</td>
                        <td>Dosage</td>
                    </tr>
                    <?php
                    $sqlprescription_records ="SELECT * FROM prescription_records LEFT JOIN medicine ON prescription_records.medicine_name=medicine.medicineid WHERE prescription_records.prescription_id='$rs[0]'";
                    $qsqlprescription_records = mysqli_query($conn,$sqlprescription_records);
                    while($rsprescription_records = mysqli_fetch_array($qsqlprescription_records))
                    {
                        echo "<tr>
                        <td>&nbsp;$rsprescription_records[medicinename]</td>
                        <td>&nbsp;$rsprescription_records[cost]</td>
                        <td>&nbsp;$rsprescription_records[unit]</td>
                        <td>&nbsp;$rsprescription_records[dosage]</td>

                        </tr>";
                    }
                    ?>
                    <tr>
                        <td colspan="6"><div align="center">
                            <input type="submit" name="print" id="print" value="Print" onclick="myFunction()"/>
                        </div></td>
                    </tr>
                </tbody>
            </table>
            <?php
        }
        ?>        
    </div>
</div>
</div>
<div class="clear"></div>
</div>
</div>

<?php include './includes/footer.php'; ?>

<script>
    function myFunction()
    {
        window.print();
    }
</script>