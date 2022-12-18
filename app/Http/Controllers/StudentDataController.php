<?php

namespace App\Http\Controllers;

use App\Models\StudentData;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;

class StudentDataController extends Controller
{
   

    public function studentFunction(Request $request, FlasherInterface $flasher ) { 
        $request->validate([
            'name' =>'required|string|min:2',
            'number' =>'required|string|min:5',
            'email' =>'required|string|min:5',
            'description' =>'required|string|min:10',
        ]);
        
        // if validation fails
        // if ($request->fails()) {
        //     dd('dasd');
        // $flasher->addWarning("Please fill in all required fields");
        // return redirect()->back();

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

