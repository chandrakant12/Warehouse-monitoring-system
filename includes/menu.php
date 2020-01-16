
<?php
    if(isset($_SESSION[adminid]))
    {
        ?>
        <nav class="peach-gradient navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Options</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="adminAccount.php">Account</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu peach-gradient" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="adminProfile.php">Admin Profile</a>
                            <a class="dropdown-item" href="adminChangePassword.php">Change Password</a>
                            <a class="dropdown-item" href="adminAdd.php">Add Admin</a>
                            <a class="dropdown-item" href="adminView.php">View Admin</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Settings
                        </a>
                        <div class="dropdown-menu peach-gradient" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="adminAddDepartment.php">Add Department</a>
                            <a class="dropdown-item" href="adminViewDepartment.php">View Department</a>
                            <!--
                            <a class="dropdown-item" href="adminAddTreatment.php">Add Treatment</a>
                            <a class="dropdown-item" href="adminViewTreatment.php">View Treatment</a>
                            <a class="dropdown-item" href="adminAddMedicine.php">Add Medicine</a>
                            <a class="dropdown-item" href="adminViewMedicine.php">View Medicine</a>-->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            User
                        </a>
                        <div class="dropdown-menu peach-gradient" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="userRegister.php">Add User</a>
                            <a class="dropdown-item" href="doctorViewPatient.php">View User Records</a>
                        </div>
                    </li>    
                    <!--
                    <li class="nav-item">
                        <a class="nav-link" href="userElectricityStatus.php">Electricity Status</a>
                    </li> 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Staff
                        </a>
                        <div class="dropdown-menu peach-gradient" aria-labelledby="navbarDropdown">
                            
                            // TO BE LINKED
                            <a class="dropdown-item" href="doctorAddTimings.php">Add Staff</a>
                            <a class="dropdown-item" href="doctorAddTimings.php">View Staff</a>
                            //

                            <a class="dropdown-item" href="doctorAddTimings.php">Add Staff Timings</a>
                            <a class="dropdown-item" href="doctorViewTimings.php">View Staff Timings</a>
                        </div>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Appointment
                        </a>
                        <div class="dropdown-menu peach-gradient" aria-labelledby="navbarDropdown">
                            
                            // TO BE LINKED
                            <a class="dropdown-item" href="doctorTreatmentRecord.php">New Appointment</a>
                            


                            <a class="dropdown-item" href="doctorPendingAppointment.php">View Pending Appointments</a>
                            <a class="dropdown-item" href="doctorApprovedAppointment.php">View Approved Appointments</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doctorTreatmentRecord.php">Treatment</a>
                    </li>
                -->
                    <li class="nav-item">
                        <a class="nav-link" href="logOut.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>

        <?php
    }
?>

<?php
    if(isset($_SESSION[doctorid]))
    {
        ?>
        <nav class="peach-gradient navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Options</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="doctorAccount.php">Account</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Settings
                        </a>
                        <div class="dropdown-menu peach-gradient" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="doctorProfile.php">Staff Profile</a>
                            <a class="dropdown-item" href="doctorChangePassword.php">Change Password</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Appointment
                        </a>
                        <div class="dropdown-menu peach-gradient" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="doctorPendingAppointment.php">Pending Appointments</a>
                            <a class="dropdown-item" href="doctorApprovedAppointment.php">Approved Appointments</a>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="doctorViewPatient.php">View User</a>
                    </li>        

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Staff Timings
                        </a>
                        <div class="dropdown-menu peach-gradient" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="doctorAddTimings.php">Add Timings</a>
                            <a class="dropdown-item" href="doctorViewTimings.php">View Timings</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Treatment
                        </a>
                        <div class="dropdown-menu peach-gradient" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="doctorTreatmentRecord.php">Treatment Record</a>
                            <a class="dropdown-item" href="doctorViewTreatment.php">View Treatment</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doctorIncomeReport.php">Income Report</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="logOut.php">Log Out</a>
                    </li>

                </ul>
            </div>
        </nav>

        <?php
    }
?>

<?php
    if(isset($_SESSION[patientid]))
    {
        ?>

        <nav class="peach-gradient navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Options</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="userDashboard.php">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="userAccount.php">Account</a>
                    </li>

                    <!--
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Appointment
                        </a>
                        <div class="dropdown-menu peach-gradient" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="patientAppointment.php">Add Appointment</a>
                            <a class="dropdown-item" href="patientViewAppointment.php">View Appointment</a>
                        </div>
                    </li>
                    -->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu peach-gradient" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="userProfile.php">View Profile</a>
                            <a class="dropdown-item" href="userChangePassword.php">Change Password</a>
                        </div>
                    </li>

                    <!--
                    <li class="nav-item">
                        <a class="nav-link" href="patientViewPrescription.php">Prescription Record</a>
                    </li>        
                    -->
                    
                    <li class="nav-item">
                        <a class="nav-link" href="userElectricityStatus.php">Electricity Status</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="userAnalytics.php">Analytics</a>
                    </li>
                </ul>

                <a href="logOut.php"><button class="btn heavy-rain-gradient btn-outline-success my-2 my-sm-0">Log Out</button></a>
                
            </div>
        </nav>

        <?php
    }
?>