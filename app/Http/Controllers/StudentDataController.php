<?php

namespace App\Http\Controllers;

use App\Models\StudentData;
use Illuminate\Http\Request;

class StudentDataController extends Controller
{
   

    public function studentFunction(Request $request) { 
        $request->validate([
            'name' =>'required|string|min:2',
            'number' =>'required|string|min:5',
            'email' =>'required|string|min:5',
            'description' =>'required|string|min:10',
        ]);

        $studentData = new StudentData();
        $studentData->name = $request->name;
        $studentData->number = $request->number;
        $studentData->email = $request->email;
        $studentData->description = $request->description;
        $studentData->date = now();
        $studentData->save();

        return redirect()->route('student');
    }

    public function index() { 
     
        return view('studentInfo');
    }
}

