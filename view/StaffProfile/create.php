<?php
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
            <h5 class="mb-0">Staff Profile</h5>
            <a href="index.php" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
        <div class="card-body">
            <form id="staffForm" action="../../action/StaffProfile/create.php" method="POST" enctype="multipart/form-data">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#personalInfo">Personal Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#jobInfo">Job Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#contactInfo">Contact Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#familyInfo">Family</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#documentInfo">Staff Document</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <!-- Personal Information Tab -->
                    <div class="tab-pane fade show active" id="personalInfo">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="empCode" class="form-label required">Employee Code</label>
                                <input type="text" class="form-control" id="empCode" name="empCode" required>
                            </div>
                            <div class="col-md-6">
                                <label for="empName" class="form-label required">Employee Name</label>
                                <input type="text" class="form-control" id="empName" name="empName" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="gender" class="form-label required">Gender</label>
                                <select class="form-select" id="gender" name="gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="dob" class="form-label required">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="photo" class="form-label">Profile Photo</label>
                                <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                            </div>
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                                <div class="text-center mt-2">
                                    <div class="img-preview border rounded p-2">
                                        <img id="photoPreview" src="../../assets/images/images.jpg" alt="Profile Preview" class="img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Job Information Tab -->
                    <div class="tab-pane fade" id="jobInfo">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="position" class="form-label required">Position</label>
                                <input type="text" class="form-control" id="position" name="position" required>
                            </div>
                            <div class="col-md-6">
                                <label for="department" class="form-label required">Department</label>
                                <input type="text" class="form-control" id="department" name="department" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="division" class="form-label">Division</label>
                                <input type="text" class="form-control" id="division" name="division">
                            </div>
                            <div class="col-md-4">
                                <label for="startDate" class="form-label required">Start Date</label>
                                <input type="date" class="form-control" id="startDate" name="startDate" required>
                            </div>
                            <div class="col-md-4">
                                <label for="status" class="form-label required">Status</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="lineManager" class="form-label">Line Manager</label>
                                <input type="text" class="form-control" id="lineManager" name="lineManager">
                            </div>
                            <div class="col-md-6">
                                <label for="hod" class="form-label">Head of Department</label>
                                <input type="text" class="form-control" id="hod" name="hod">
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information Tab -->
                    <div class="tab-pane fade" id="contactInfo">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="contact" class="form-label">Contact Number</label>
                                <input type="tel" class="form-control" id="contact" name="contact">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Family Information Tab -->
                    <div class="tab-pane fade" id="familyInfo">
                        <div class="card mb-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">Family Members</h6>
                                <button type="button" class="btn btn-success btn-sm" id="addFamilyMember">
                                    <i class="fas fa-plus"></i> Add Member
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="familyMembersTable">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Relation Type</th>
                                                <th>Gender</th>
                                                <th>Is Tax</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Document Information Tab -->
                    <div class="tab-pane fade" id="documentInfo">
                        <div class="card mb-3">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">Staff Documents</h6>
                                <button type="button" class="btn btn-success btn-sm" id="addDocument">
                                    <i class="fas fa-plus"></i> Add Document
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="documentsTable">
                                        <thead>
                                            <tr>
                                                <th>Document Type</th>
                                                <th>Description</th>
                                                <th>File</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
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

<!-- Family Member Modal -->
<div class="modal fade" id="familyMemberModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Family Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="familyMemberForm">
                    <input type="hidden" id="familyMemberIndex" value="">
                    <div class="mb-3">
                        <label for="relationName" class="form-label required">Name</label>
                        <input type="text" class="form-control" id="relationName" required>
                    </div>
                    <div class="mb-3">
                        <label for="relationType" class="form-label required">Relation Type</label>
                        <select class="form-select" id="relationType" required>
                            <option value="">Select Relation</option>
                            <option value="Spouse">Spouse</option>
                            <option value="Child">Child</option>
                            <option value="Parent">Parent</option>
                            <option value="Sibling">Sibling</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="relationGender" class="form-label required">Gender</label>
                        <select class="form-select" id="relationGender" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="isTax">
                            <label class="form-check-label" for="isTax">Include in Tax Calculation</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveFamilyMember">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Document Modal -->
<div class="modal fade" id="documentModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Document</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="documentForm">
                    <input type="hidden" id="documentIndex" value="">
                    <div class="mb-3">
                        <label for="docType" class="form-label required">Document Type</label>
                        <select class="form-select" id="docType" required>
                            <option value="">Select Document Type</option>
                            <option value="Contract">Contract</option>
                            <option value="CV">CV</option>
                            <option value="Certificate">Certificate</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="docFile" class="form-label required">Document File</label>
                        <input type="file" class="form-control" id="docFile" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="saveDocument">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Document View Modal -->
<div class="modal fade" id="documentViewModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">View Document</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Document Type:</label>
                        <p id="viewDocType" class="form-control-plaintext"></p>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Description:</label>
                        <p id="viewDescription" class="form-control-plaintext"></p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label class="form-label">File Name:</label>
                        <p id="viewFileName" class="form-control-plaintext"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a id="downloadDocument" href="#" class="btn btn-primary" download>
                    <i class="fas fa-download"></i> Download
                </a>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Initialize Toast notification
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true
    });

    // Form validation before submission
    function validateForm() {
        const requiredFields = {
            'empCode': 'Employee Code',
            'empName': 'Employee Name',
            'gender': 'Gender',
            'dob': 'Date of Birth',
            'position': 'Position',
            'department': 'Department',
            'startDate': 'Start Date',
            'status': 'Status'
        };

        let isValid = true;
        let firstError = null;

        // Check required fields
        for (let [fieldId, fieldName] of Object.entries(requiredFields)) {
            const field = $('#' + fieldId);
            const value = field.val();
            
            if (!value || value.trim() === '') {
                isValid = false;
                field.addClass('is-invalid');
                if (!firstError) firstError = field;
                
                // Add error message below the field
                if (!field.next('.invalid-feedback').length) {
                    field.after(`<div class="invalid-feedback">${fieldName} is required</div>`);
                }
            } else {
                field.removeClass('is-invalid');
                field.next('.invalid-feedback').remove();
            }
        }

        // Scroll to first error if any
        if (firstError) {
            firstError.focus();
            $('html, body').animate({
                scrollTop: firstError.offset().top - 100
            }, 500);
        }

        return isValid;
    }

    // Remove validation styling on input
    $('input, select').on('input change', function() {
        $(this).removeClass('is-invalid');
        $(this).next('.invalid-feedback').remove();
    });
    
    // Photo preview with validation
    $('#photo').change(function() {
        const file = this.files[0];
        const preview = $('#photoPreview');
        
        if (file) {
            // Check if file is an image
            if (!file.type.startsWith('image/')) {
                Toast.fire({
                    icon: 'error',
                    title: 'Please select an image file'
                });
                this.value = '';
                preview.attr('src', '../../assets/images/default-avatar.png');
                return;
            }

            // Check file size (max 2MB)
            if (file.size > 2 * 1024 * 1024) {
                Toast.fire({
                    icon: 'error',
                    title: 'Image size should be less than 2MB'
                });
                this.value = '';
                preview.attr('src', '../../assets/images/default-avatar.png');
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                preview.attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        } else {
            preview.attr('src', '../../assets/images/default-avatar.png');
        }
    });




    //#region Family Members Management
    let familyMembers = [];

    // Initialize family member modal
    const familyMemberModal = new bootstrap.Modal(document.getElementById('familyMemberModal'));

    // Add family member button click
    $('#addFamilyMember').click(function() {
        $('#familyMemberIndex').val('');
        $('#familyMemberForm')[0].reset();
        familyMemberModal.show();
    });

    // Save family member
    $('#saveFamilyMember').click(function() {
        const form = $('#familyMemberForm');
        if (!form[0].checkValidity()) {
            form[0].reportValidity();
            return;
        }

        const index = $('#familyMemberIndex').val();
        const member = {
            relationName: $('#relationName').val(),
            relationType: $('#relationType').val(),
            gender: $('#relationGender').val(),
            isTax: $('#isTax').is(':checked') ? 1 : 0
        };

        if (index === '') {
            // Add new member
            familyMembers.push(member);
        } else {
            // Update existing member
            familyMembers[parseInt(index)] = member;
        }

        updateFamilyMembersTable();
        familyMemberModal.hide();
        
        Toast.fire({
            icon: 'success',
            title: index === '' ? 'Family member added' : 'Family member updated'
        });
    });

    // Update family members table
    function updateFamilyMembersTable() {
        const tbody = $('#familyMembersTable tbody');
        tbody.empty();

        familyMembers.forEach((member, index) => {
            tbody.append(`
                <tr>
                    <td>${member.relationName}</td>
                    <td>${member.relationType}</td>
                    <td>${member.gender}</td>
                    <td>${member.isTax ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'}</td>
                    <td>
                        <button type="button" class="btn btn-sm btn-secondary edit-family" data-index="${index}">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger delete-family" data-index="${index}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            `);
        });
    }

    // Edit family member
    $(document).on('click', '.edit-family', function() {
        const index = $(this).data('index');
        const member = familyMembers[index];

        $('#familyMemberIndex').val(index);
        $('#relationName').val(member.relationName);
        $('#relationType').val(member.relationType);
        $('#relationGender').val(member.gender);
        $('#isTax').prop('checked', member.isTax === 1);

        familyMemberModal.show();
    });

    // Delete family member
    $(document).on('click', '.delete-family', function() {
        const index = $(this).data('index');
        
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                familyMembers.splice(index, 1);//index remove
                updateFamilyMembersTable();
                Toast.fire({
                    icon: 'success',
                    title: 'Family member removed'
                });
            }
        });
    });

    //#endregion

    //#region Document Management
    let documents = [];

    // Initialize document modal
    const documentModal = new bootstrap.Modal(document.getElementById('documentModal'));

    // Add document button click
    $('#addDocument').click(function() {
        $('#documentIndex').val('');
        $('#documentForm')[0].reset();
        documentModal.show();
    });

    // Save document
    $('#saveDocument').click(function() {
        const form = $('#documentForm');
        if (!form[0].checkValidity()) {
            form[0].reportValidity();
            return;
        }

        const index = $('#documentIndex').val();
        const document = {
            docType: $('#docType').val(),
            description: $('#description').val(),
            file: $('#docFile')[0].files[0]
        };

        if (index === '') {
            // Add new document
            documents.push(document);
        } else {
            // Update existing document
            documents[parseInt(index)] = document;
        }

        updateDocumentsTable();
        documentModal.hide();
        
        Toast.fire({
            icon: 'success',
            title: index === '' ? 'Document added' : 'Document updated'
        });
    });

    // Update documents table
    function updateDocumentsTable() {
        const tbody = $('#documentsTable tbody');
        tbody.empty();

        documents.forEach((document, index) => {
            tbody.append(`
                <tr>
                    <td>${document.docType}</td>
                    <td>${document.description}</td>
                    <td>${document.file.name}</td>
                    <td>
                        <button type="button" class="btn btn-sm btn-info view-document" data-index="${index}">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-secondary edit-document" data-index="${index}">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger delete-document" data-index="${index}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            `);
        });
    }

    // Initialize document view modal
    const documentViewModal = new bootstrap.Modal(document.getElementById('documentViewModal'));

    // View document
    $(document).on('click', '.view-document', function() {
        const index = $(this).data('index');
        const document = documents[index];
        
        $('#viewDocType').text(document.docType);
        $('#viewDescription').text(document.description || 'No description');
        $('#viewFileName').text(document.file.name);
        
        // Create object URL for download
        const objectUrl = URL.createObjectURL(document.file);
        
        // Set up download link
        $('#downloadDocument').attr('href', objectUrl);
        $('#downloadDocument').attr('download', document.file.name);
        
        documentViewModal.show();
        
        // Clean up object URL when modal is hidden
        $('#documentViewModal').one('hidden.bs.modal', function() {
            URL.revokeObjectURL(objectUrl);
        });
    });

    // Edit document
    $(document).on('click', '.edit-document', function() {
        const index = $(this).data('index');
        const document = documents[index];

        $('#documentIndex').val(index);
        $('#docType').val(document.docType);
        $('#description').val(document.description);
        $('#docFile').val('');

        documentModal.show();
    });

    // Delete document
    $(document).on('click', '.delete-document', function() {
        const index = $(this).data('index');
        
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                documents.splice(index, 1);
                updateDocumentsTable();
                Toast.fire({
                    icon: 'success',
                    title: 'Document removed'
                });
            }
        });
    });

    //#endregion

    // Form submission
    $('#staffForm').submit(function(e) {
        e.preventDefault();
        
        // Validate form
        if (!validateForm()) {
            Toast.fire({
                icon: 'error',
                title: 'Please fill in all required fields'
            });
            return;
        }
        
        let formData = new FormData(this);
        
        // Add family members data
        formData.append('familyMembers', JSON.stringify(familyMembers));

        // Add documents data and files
        formData.append('documents', JSON.stringify(documents));
        documents.forEach((doc, index) => {
            if (doc.file) {
                formData.append('document_' + index, doc.file);
            }
        });

        // Debug: Log form data
        console.log('Form Data:');
        for (let pair of formData.entries()) {
            console.log(pair[0] + ': ' + pair[1]);
        }
        
        $.ajax({
            url: '../../action/StaffProfile/create.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(response) {
                console.log('Success Response:', response);
                if (response.status === 'success') {
                    Swal.fire({
                        title: 'Success!',
                        text: response.message,
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        window.location.href = 'index.php';
                    });
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: response.message || 'Error creating staff profile',
                        icon: 'error'
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error('Error Status:', status);
                console.error('Error:', error);
                console.error('Response Text:', xhr.responseText);
                
                let errorMessage = 'Error creating staff profile';
                
                try {
                    const response = JSON.parse(xhr.responseText);
                    errorMessage = response.message || errorMessage;
                } catch (e) {
                    errorMessage += ': ' + (error || 'Unknown error');
                }

                Swal.fire({
                    title: 'Error!',
                    text: errorMessage,
                    icon: 'error'
                });
            }
        });
    });
});
</script>