<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class registerController extends Controller
{
    public function index(){
        return view("register");
    }

    public function register(Request $request){

        $pass = Hash::make(request()->pass);

        //Storing form data into variables
        //Personal Information
        $PerInfo = [
            'Email' => $request->input('Email'),
            'Full Name' => $request->input('Fname'),            
            'Phone Number' => $request->input('Phone'),
            'DOB' => $request->input('DOB'),
            'Gender' => $request->input('gender'),
            'Street Address' => $request->input('address'),
            'City' => $request->input('city'),
            'Post Code' => $request->input('postC'),
            'Division' => $request->input('division'),
            'Password' => $pass,
        ];

        //Employment Information
        $empInfo = [
            'Email' => $request->input('Email'),
            'Start Date' => $request->input('StartDate'),
            'Contract Deadline' => $request->input('deadline'),
            'Department' => $request->input('department'),
            'Position' => $request->input('position'),
            'Experience' => $request->input('experience'),
            'Employment Status' => $request->input('EmpStat')
    ];

        //Bank Information
        $BankInfo = [
            'Email' => $request->input('Email'),
            'Account Number' => $request->input('AccNum'),
            'Bank Name' => $request->input('BankName'),
            'Branch' => $request->input('BranchName'),
            'Salary' => $request->input('Salary')
        ];

        //inserting into employee_info table
        DB::table('employee_info')->insert($PerInfo);
        DB::table('employment_info')->insert($empInfo);
        DB::table('bank_info')->insert($BankInfo);

        return redirect('AdminDash');
    }
}
