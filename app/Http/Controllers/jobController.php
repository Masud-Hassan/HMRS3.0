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
}
