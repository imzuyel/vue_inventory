<?php

namespace App\Http\Controllers\Api;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Intervention\Image\Facades\Image;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::latest()->get();
        return response()->json($employees);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required|string',
            'email'         => 'required|email|unique:employees',
            'phone'         => 'required|regex:/(01)[0-9]{9}/|unique:employees|min:11,max:11',
            'nid'           => 'required|integer|unique:employees',
            'salary'        => 'required|integer',
            'address'       => 'required|string',
            'joining_date'  => 'required|string',
        ]);
        $employee               = new Employee();
        $employee->name         = $request->name;
        $employee->email        = $request->email;
        $employee->phone        = $request->phone;
        $employee->nid          = $request->nid;
        $employee->salary       = $request->salary;
        $employee->address      = $request->address;
        $employee->joining_date = $request->joining_date;
        if ($request->photo) {
            $position        = strpos($request->photo, ';');
            $sub             = substr($request->photo, 0, $position);
            $ext             = explode('/', $sub)[1];
            $name            = time() . "." . $ext;
            $img             = Image::make($request->photo)->resize(240, 240);
            $upload_path     = 'images/employees/';
            $imageUrl        = $upload_path . $name;
            $employee->photo = $imageUrl;
            $img->save($imageUrl);
        }
        $employee->save();
    }
    public function show(Employee $employee)
    {
        return response()->json($employee);
    }
    public function update(Request $request, Employee $employee)
    {
        $this->validate($request, [
            'name'          => 'required|string',
            'email'         => 'required|email|unique:employees,email,' . $employee->id,
            'phone'         => 'required|regex:/(01)[0-9]{9}/|unique:employees,phone,' . $employee->id,
            'nid'           => 'required|integer|unique:employees,nid,' . $employee->id,
            'salary'        => 'required|integer',
            'address'       => 'required|string',
            'joining_date'  => 'required|string',
        ]);
        $employee->name         = $request->name;
        $employee->email        = $request->email;
        $employee->phone        = $request->phone;
        $employee->nid          = $request->nid;
        $employee->salary       = $request->salary;
        $employee->address      = $request->address;
        $employee->joining_date = $request->joining_date;
        if ($request->newphoto) {
            if (file_exists($employee->photo)) {
                unlink($employee->photo);
            }
            $position        = strpos($request->newphoto, ';');
            $sub             = substr($request->newphoto, 0, $position);
            $ext             = explode('/', $sub)[1];
            $name            = time() . "." . $ext;
            $img             = Image::make($request->newphoto)->resize(240, 240);
            $upload_path     = 'images/employees/';
            $imageUrl        = $upload_path . $name;
            $employee->photo = $imageUrl;
            $img->save($imageUrl);
        }
        $employee->save();
    }
    public function destroy(Employee $employee)
    {
        if (file_exists($employee->photo)) {
            unlink($employee->photo);
        }
        $employee->delete();
    }
}
