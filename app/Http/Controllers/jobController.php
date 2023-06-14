<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jobController extends Controller
{
    public function index(){
        return view("jobpost");
    }

    public function post(Request $request){
        $job = [
            'Title' => $request->input('title'),
            'Position' => $request->input('position'),
            'Department' => $request->input('department'),
            'Description' => $request->input('desc'),
        ];

        DB::table('job_posts')->insert($job);

        return redirect('AdminDash');
    }

    public function display(){
        $sql = "SELECT * FROM job_posts"; 
        $result = DB::select($sql);
        return view('jobcircular', compact('result'));
    }

    public function application(Request $request){
        $serial = $request->input('Button');
        $sql = "SELECT * FROM job_posts WHERE Serial = ?";
        $result = DB::select($sql, [$serial]);
        
        return view('application', compact('result'));
    }

    public function appSubmit(Request $request){

        $fileContent = file_get_contents($request->file('cv')->getRealPath());

        $application = [
            'Full Name' => $request->input('Fname'),
            'Email' => $request->input('email'),
            'Mailing Address' => $request->input('Maddress'),
            'Phone' => $request->input('phone'),
            'Position' => $request->input('pos'),
            'Department' => $request->input('dept'),
            'CV' => $fileContent,            
        ];

        DB::table('job_applications')->insert($application);

        return redirect('login');
    }
}
