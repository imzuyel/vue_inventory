<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salary extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    public function employeename()
    {
        return $this->belongsTo(Employee::class, 'employee_id')->select('id', 'name','email','salary');
    }
}
