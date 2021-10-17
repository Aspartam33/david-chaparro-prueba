<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

use App\Imports\EmployeesImport;
use Maatwebsite\Excel\Facades\Excel;
class EmployeesController extends Controller
{
    //
    //constructor
    public function  __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {    //dd(\App\Models\Category::all());
        $data = DB::table('employees')->orderBy('id', 'ASC')->get();
        return view('admin.employees.index',compact('data'));
    }
    public function import(Request $request)
    {    //dd(\App\Models\Category::all());
        
        Excel::import(new EmployeesImport,request()->file('file'));
        return redirect()->back();
    }
}
