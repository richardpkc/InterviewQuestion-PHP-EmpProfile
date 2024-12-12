<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_name',
        'gender',
        'marital_status',
        'phone_no',
        'email',
        'address',
        'date_of_birth',
        'nationality',
        'hire_date',
        'department'
    ];
}
