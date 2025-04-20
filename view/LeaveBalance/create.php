<?php
session_start();
    include("../../root/Header.php");
    include("../../Config/conect.php");
?>

<!-- Add SweetAlert2 CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>

<!-- Add custom CSS -->
<link href="../../Style/staffprofile.css" rel="stylesheet">

<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Leave Balance</h5>
            <a href="index.php" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
        <div class="card-body">
            <form id="staffForm" action="../../action/LeaveBalance/create.php" method="POST" enctype="multipart/form-data">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#personalInfo">
                            <i class="fas fa-user"></i> Leave Information
                        </a>
                    </li>
                    
                </ul>

                <div class="tab-content">
                    <!-- Personal Information Tab -->
                    <div class="tab-pane fade show active" id="personalInfo">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="empCode" class="form-label  ">Employee Code</label>
                                <select name="empcode" id="" class="form-select">
                                <?php
                                    $stmt = $con->prepare("SELECT EmpCode, EmpName FROM hrstaffprofile where Status = 'Active'");
                                    if ($stmt) {
                                        $stmt->execute();
                                        $result = $stmt->get_result();
                                        while($row = $result->fetch_assoc()) 
                                        {
                                            ?>
                                                 <option value="<?php echo $row['EmpCode']; ?>"><?php echo $row['EmpName']; ?></option>
                                            <?php
                                        }
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="empName" class="form-label  ">Leave Type</label>
                                <select name="leavetype" id="" class="form-select">
                                <?php
                                    $stmt = $con->prepare("SELECT Code, LeaveType FROM lmleavetype");
                                    if ($stmt) {
                                        $stmt->execute();
                                        $result = $stmt->get_result();
                                        while($row = $result->fetch_assoc()) 
                                        {
                                            ?>
                                                 <option value="<?php echo $row['Code']; ?>"><?php echo $row['LeaveType']; ?></option>
                                            <?php
                                        }
                                    }
                                ?>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="gender" class="form-label  ">Gender</label>
                                <select class="form-select" id="gender" name="gender"  >
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>


                <div class="d-flex justify-content-start mt-3">
                    <button type="submit" class="btn btn-primary me-2">Save</button>
                    <a href="index.php" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>


