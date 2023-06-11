<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class loginController extends Controller
{
    public function index(){
        return view("login");
    }

    public function authenticate(Request $request){
        $email = $request->email;
        $pass = $request->pass;
        $date = date('Y/m/d');
        
        $sql = "SELECT * FROM employee_info WHERE Email = ?";
        $results = DB::select($sql, [$email]);     

        //checking if email exists in the database
        if($results != null)
        {
            foreach ($results as $row) {
                $hashedPass = $row->HashPass;
            }
            
            //cross checking HASH password
            if(Hash::check($pass, $hashedPass))
            {            
                //Checking Attendance
                $sql = "SELECT * FROM attendance WHERE Email = ?";
                
                $result2 = DB::select($sql, [$email]);
                
                if (empty($result2)) {
                    $attend = [
                        'Email' => $request->input('email'),
                        'Date' => $date,
                        'Present?' => "Yes",
                    ];
                    DB::table('attendance')->insert($attend);
                } 

                Session::put('email', $email);
                
                //Checking whether the logger is Admin or employee
                $sql2 = "SELECT Position FROM employment_info WHERE Email = ?";
                $results = DB::select($sql2, [$email]);

                foreach ($results as $row) {
                    $pos = $row->Position;
                }

                if($pos == "Admin")
                    return redirect('AdminDash');//if admin, then send to admin Dashboard
                else
                    return redirect('EmpDash');//if employee, then send to employee Dashboard
            }
        }
        else
        {
            return redirect('login')->with('error', '!! Login Unsuccessful !!');
        }
    }
}
