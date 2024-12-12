<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    public function create()
    {
        return view('employee_form');
    }

    public function store(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'employee_name' => 'required|string|max:255',
            'gender' => 'required|string',
            'marital_status' => 'required|string',
            'phone_no' => 'required|string|max:12|unique:employees,phone_no', // Validation for unique phone number
            'email' => 'required|email|max:255|unique:employees,email',
            'address' => 'required|string',
            'date_of_birth' => 'required|date',
            'nationality' => 'required|string|max:255',
            'hire_date' => 'required|date',
            'department' => 'required|string|max:255',
        ]);

        $employee = Employee::create($validated);

        $jsonData = json_encode($employee->toArray(), JSON_PRETTY_PRINT);
        Storage::disk('local')->put('employees.json', $jsonData);

        $csvData = implode(',', $employee->toArray()) . "\n";
        Storage::disk('local')->append('employees.csv', $csvData);

        return redirect()->route('employees.create')->with('success', 'Employee added successfully.');
        
    }

    public function showProfiles()
    {
        $jsonPath = storage_path('app/employees.json');
        $jsonData = file_exists($jsonPath) ? json_decode(file_get_contents($jsonPath), true) : [];

        $csvPath = storage_path('app/employees.csv');
        $csvData = [];
        if (file_exists($csvPath)) {
            $file = fopen($csvPath, 'r');
            while (($line = fgetcsv($file)) !== false) {
                $csvData[] = $line;
            }
            fclose($file);
        }
        return view('profile', compact('jsonData', 'csvData'));
    }
}