<?php

namespace App\Http\Controllers\Api;

use App\Models\Salary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalaryController extends Controller
{
    public function salarypaid(Request $request,$id)
    {
        $this->validate($request,[
            'salary_month'=>'required|string',
        ]);
        $month=$request->salary_month;
        $check=Salary::where(['employee_id'=>$id,'salary_month'=>$month])->first();
        if($check){
            return response()->json('ok');
        }else{
        $salary=new Salary;
        $salary->employee_id=$id;
        $salary->amount=$request->salary;
        $salary->salary_date=date('d/m/Y');
        $salary->salary_month=$month;
        $salary->salary_year=date('Y');
        $salary->save();
        }

    }
    public function allSalary()
    {
       $salaries=Salary::latest()->select('salary_month')->groupBy('salary_month')->get();
       return response()->json($salaries);
    }
    public function viewSalary($id)
    {
        $salaries=Salary::with('employeename')->where('salary_month',$id)->get();
        return response()->json($salaries);
    }
    public function editSalary($id)
    {
        $salary=Salary::with('employeename')->where('id',$id)->first();
        return response()->json($salary);
    }
    public function salaryupdate(Request $request,$id)
    {


        $this->validate($request,[
            'salary_month'=>'required|string',
        ]);
        $salary=Salary::findOrFail($id);
        $month=$request->salary_month;
        $check=Salary::where(['employee_id'=>$request->employee_id,'salary_month'=>$month])->first();
        if($check){
            return response()->json('ok');
        }else{

        $salary->employee_id=$request->employee_id;
        $salary->amount=$request->salary;
        $salary->salary_date=date('d/m/Y');
        $salary->salary_month=$month;
        $salary->salary_year=date('Y');
        $salary->save();
        }
    }
}
