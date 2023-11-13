<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;

class studentController extends Controller
{
    public function index() 
    {
        return view('student.all_student', [
            "title" => "Students",
            "students" => students::all()
        ]);
    }

    public function show($student)
    {
        return view ('student.detail_student', [
            "title" => "detail.student",
            "student" => students::find($student)
        ]);
    }
}
