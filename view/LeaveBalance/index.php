<?php
    include("../../root/Header.php");
    include("../../Config/conect.php");
?>

<!-- DataTables CSS -->
<link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css" rel="stylesheet">

<!-- Add SweetAlert2 -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.min.css" rel="stylesheet">

<style>
/* Table Styling */
.table {
    border-collapse: separate;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #dee2e6;
    border-radius: 8px;
    overflow: hidden;
}

.table thead th {
    background-color: #f8f9fa;
    border-bottom: 2px solid #dee2e6;
    color: #495057;
    font-weight: 600;
    padding: 12px;
    text-align: left;
    white-space: nowrap;
}

.table tbody td {
    padding: 12px;
    vertical-align: middle;
    border-bottom: 1px solid #dee2e6;
}

.table tbody tr:last-child td {
    border-bottom: none;
}

.table tbody tr:hover {
    background-color: #f8f9fa;
}

/* DataTables Specific */
.dataTables_wrapper .dataTables_length select {
    padding: 4px 24px 4px 8px;
    border: 1px solid #dee2e6;
    border-radius: 4px;
    background-color: #fff;
}

.dataTables_wrapper .dataTables_filter input {
    border: 1px solid #dee2e6;
    border-radius: 4px;
    padding: 6px 12px;
    margin-left: 8px;
}

.dataTables_wrapper .dataTables_paginate .paginate_button {
    padding: 6px 12px;
    margin-left: 4px;
    border-radius: 4px;
    border: 1px solid #dee2e6;
}

.dataTables_wrapper .dataTables_paginate .paginate_button.current {
    background: #0d6efd;
    border-color: #0d6efd;
    color: white !important;
}

.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background: #e9ecef;
    border-color: #dee2e6;
    color: #0d6efd !important;
}

/* Button Styling */
.btn-success {
    background-color: #198754;
    border-color: #198754;
    color: white;
    padding: 8px 16px;
    border-radius: 4px;
}

.btn-success:hover {
    background-color: #157347;
    border-color: #146c43;
}

/* Card Styling */
.card {
    border: none;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,.05);
    margin-bottom: 24px;
}

.card-body {
    padding: 24px;
}

/* Action Buttons */
.btn-sm {
    padding: 4px 8px;
    font-size: 0.875rem;
    border-radius: 4px;
}

.btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
}

/* Profile Image */
.profile-img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
}

/* Status Badge */
.badge {
    padding: 6px 12px;
    border-radius: 20px;
    font-weight: 500;
}

.badge-active {
    background-color: #198754;
    color: white;
}

.badge-inactive {
    background-color: #dc3545;
    color: white;
}

/* Container Spacing */
.container-fluid {
    padding: 24px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container-fluid {
        padding: 16px;
    }
    
    .card-body {
        padding: 16px;
    }
    
    .table thead th {
        padding: 8px;
    }
    
    .table tbody td {
        padding: 8px;
    }
}
</style>

<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-start mb-3">
                <a href="create.php" class="btn btn-success me-2">
                    <i class="fas fa-plus"></i> Add New Leave Balance
                </a>
            </div>
            <table class="table table-bordered" id="LeaveTable">
                <thead>
                    <tr>
                        <th>Actions</th>
                        <th>EmpCode</th>
                        <th>Leave Type</th>
                        <th>Balance</th>
                        <th>Enitile</th>
                        <th>Current Balance</th>
                        <th>Taken</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- DataTables JavaScript -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>

<!-- Add SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>

<script>
</script>