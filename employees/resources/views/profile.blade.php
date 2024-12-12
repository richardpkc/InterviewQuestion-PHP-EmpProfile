<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Profiles</title>
    <!-- Add Bootstrap CSS (latest version) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ3Qah5EA4Ki1JtU9x9ZG1LQn4rtLr2dV/4n1JGjHeHhEl8cgmhVjLkKovl6" crossorigin="anonymous">
    <style>
        /* Dark Background for the whole page */
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: Arial, sans-serif;
        }

        /* Card Background */
        .card {
            background-color: #1e1e1e;
            border-radius: 10px;
            border: 1px solid #333;
            margin-bottom: 20px;
        }

        /* Table Styling */
        .table {
            background-color: #1e1e1e;
            color: #e0e0e0;
            border-radius: 5px;
        }

        .table th, .table td {
            vertical-align: middle;
            padding: 12px;
            border: 1px solid #444;
        }

        .table th {
            background-color: #333;
            color: #fff;
        }

        /* Striped Rows */
        .table-striped tbody tr:nth-child(odd) {
            background-color: #2a2a2a;
        }

        /* Highlight for important text */
        h1 {
            color: #64b5f6;
        }

        h2 {
            color: #90caf9;
        }

        /* Responsive design for better mobile experience */
        @media (max-width: 767px) {
            .table th, .table td {
                font-size: 12px;
            }
        }

        /* Button Styling */
        .btn {
            background-color: #64b5f6;
            border-color: #64b5f6;
            color: white;
        }

        .btn:hover {
            background-color: #42a5f5;
            border-color: #42a5f5;
        }

        .alert-warning {
            background-color: #ffeb3b;
            color: #212121;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Employee Profiles</h1>
        
        <div class="row mt-4">
            <!-- Display Data from JSON -->
            <div class="col-12">
                <h2 class="mb-4">From JSON</h2>
                @if($jsonData)
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Status</th>
                                        <th>Department</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Date Of Birth</th>
                                        <th>Nationality</th>
                                        <th>Hire Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $jsonData['employee_name'] }}</td>
                                        <td>{{ $jsonData['gender'] }}</td>
                                        <td>{{ $jsonData['marital_status'] }}</td>
                                        <td>{{ $jsonData['department'] }}</td>
                                        <td>{{ $jsonData['email'] }}</td>
                                        <td>{{ $jsonData['phone_no'] }}</td>
                                        <td>{{ $jsonData['address'] }}</td>
                                        <td>{{ $jsonData['date_of_birth'] }}</td>
                                        <td>{{ $jsonData['nationality'] }}</td>
                                        <td>{{ $jsonData['hire_date'] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <p class="alert alert-warning mt-3">No data available in JSON file.</p>
                @endif
            </div>

            <!-- Display Data from CSV -->
            <div class="col-12 mt-5">
                <h2 class="mb-4">From CSV</h2>
                @if($csvData)
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        @foreach($csvData[0] as $header)
                                            <th>{{ $header }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(array_slice($csvData, 1) as $row)
                                    <tr>
                                        @foreach($row as $value)
                                            <td>{{ $value }}</td>
                                        @endforeach
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @else
                    <p class="alert alert-warning mt-3">No data available in CSV file.</p>
                @endif
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS (for any interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-JVd5nJ1n6Xeoh1st39uLf05zNLCXkqlr4yo8N5BXz2k2XNWRqYYrZd8t6DhoPpjd" crossorigin="anonymous"></script>
</body>
</html>
