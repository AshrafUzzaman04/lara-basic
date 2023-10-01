<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Student $student)
    {
        // get all the students for this function
        // $student->all();
        // paiginate the all students
        $allstudents = $student->paginate(5);
        return view('student-list', compact('allstudents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('add-student');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Student $student)
    {
       $request->validate([
            "sname" => "required | min:03 | regex:/^[a-zA-z ]+$/",
        ],[
            "sname.required" =>"Username is required!",
            "sname.min" =>"The name is too short!",
            "sname.regex" =>"Invalid username!",
        ]);

        $student->name = $request->sname;
        $msg = "$request->sname added successfully!";
        $student->save();

        return redirect()->back()->with("msg", "$msg");
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        //
    }
}
