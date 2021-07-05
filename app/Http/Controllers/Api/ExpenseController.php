<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{

    public function index()
    {
        $expenses=Expense::get();
        return response()->json($expenses);
    }



    public function store(Request $request)
    {
       $this->validate($request,[
           'details'=>'required|string',
           'amount'=>'required|integer',
       ]);
       $expense=new Expense;
       $expense->details=$request->details;
       $expense->amount=$request->amount;
       $expense->expense_date=date('d/m/y');
       $expense->save();

    }


    public function show(Expense $expense)
    {
        return response()->json($expense);
    }




    public function update(Request $request, Expense $expense)
    {
        $this->validate($request,[
            'details'=>'required|string',
            'amount'=>'required|integer',
        ]);
        $expense->details=$request->details;
        $expense->amount=$request->amount;
        $expense->save();
    }


    public function destroy(Expense $expense)
    {
        $expense->delete();
    }
}
