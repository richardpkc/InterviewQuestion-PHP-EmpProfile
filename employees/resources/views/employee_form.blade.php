<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Employee</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #343a40;
            color: #ffffff;
        }
        .form-container {
            background-color: #212529;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            margin: auto;
        }
        .form-label, .invalid-feedback {
            color: #ffffff;
        }
        .input-group-text {
            background-color: #495057;
            color: #ffffff;
            border: none;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #0d6efd;
        }
        .btn-primary {
            background-color: #0d6efd;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0b5ed7;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="form-container">
            <h1 class="text-center mb-4">Add New Employee</h1>
            <form action="{{ route('employees.store') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="employee_name" class="form-label">Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" id="employee_name" name="employee_name" class="form-control" placeholder="Ken" required>
                            <div class="invalid-feedback">Please provide a name.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="gender" class="form-label">Gender</label>
                        <select id="gender" name="gender" class="form-select" required>
                            <option value="" disabled selected>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                        <div class="invalid-feedback">Please select a gender.</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="marital_status" class="form-label">Marital Status</label>
                        <select id="marital_status" name="marital_status" class="form-select" required>
                            <option value="" disabled selected>Select Status</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="widowed">Widowed</option>
                        </select>
                        <div class="invalid-feedback">Please select a marital status.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="phone_no" class="form-label">Phone No.</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                            <input type="number" id="phone_no" name="phone_no" class="form-control" placeholder="1234567890" oninput="if(this.value.length > 12) this.value = this.value.slice(0, 12);"  required>
                            <div class="invalid-feedback">Please provide a valid phone number (up to 12 digits).</div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="email" id="email" name="email" class="form-control" placeholder="example@gmail.com" required>
                        <div class="invalid-feedback">Please provide a valid email address.</div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea id="address" name="address" class="form-control" rows="3" placeholder="No. 12, Jalan Bukit Bintang, 55100 Kuala Lumpur" required></textarea>
                    <div class="invalid-feedback">Please provide an address.</div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="date_of_birth" class="form-label">Date of Birth</label>
                        <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" required>
                        <div class="invalid-feedback">Please provide a valid date of birth.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="nationality" class="form-label">Nationality</label>
                        <input type="text" id="nationality" name="nationality" class="form-control" placeholder="Nationality" required>
                        <div class="invalid-feedback">Please provide a nationality.</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="hire_date" class="form-label">Hire Date</label>
                        <input type="date" id="hire_date" name="hire_date" class="form-control" required>
                        <div class="invalid-feedback">Please provide a valid hire date.</div>
                    </div>
                    <div class="col-md-6">
                        <label for="department" class="form-label">Department</label>
                        <input type="text" id="department" name="department" class="form-control" placeholder="Department Name" required>
                        <div class="invalid-feedback">Please provide a department.</div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-100">Add Employee</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            'use strict';

            document.querySelectorAll('.needs-validation').forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                });
            });
        });
    </script>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
