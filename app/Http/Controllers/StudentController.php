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
        // paginate the all students
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
            "stdimg" => "required | mimes:png,jpg,jpeg,gif | max:5000",
        ],[
            "sname.required" =>"Username is required!",
            "sname.min" =>"The name is too short!",
            "sname.regex" =>"Invalid username!",
            "stdimg.required" =>"Please Select your image!",
            "stdimg.mimes" =>"Invalid image format!",
            "stdimg.max" =>"The image file is too long!",

        ]);

        $student->name = $request->sname;

        $fileName = "$request->sname" . time(). "." . $request->stdimg->extension();
        $request->stdimg->move(public_path('uploads'), $fileName);
        $student->image = $fileName;

        $msg = "New Student $request->sname added successfully!";
        $student->save();

        return redirect()->back()->with("msg", "$msg");
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        return view("show-student", compact("student"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        return view("edit-student", compact("student"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        $request->validate([
            "sname" => "required | min:03 | regex:/^[A-Za-z. ]*$/",
            "stdimg" => "required | mimes:png,jpg,jpeg,gif | max:5000",
        ],[
            "sname.required" =>"Username is required!",
            "sname.min" =>"The name is too short!",
            "sname.regex" =>"Invalid username!",
            "stdimg.required" =>"Please Select your image!",
            "stdimg.mimes" =>"Invalid image format!",
            "stdimg.max" =>"The image file is too long!",
        ]);

            // Get the current image path from the database
        $currentImage = $student->image;

        // Delete the previous image if it exists
        if ($currentImage && file_exists(public_path('uploads/' . $currentImage))) {
            unlink(public_path('uploads/' . $currentImage));
        }

        $student->name = $request->sname;

        $fileName = $request->sname . time() . "." . $request->stdimg->extension();
        $request->stdimg->move(public_path('uploads'), $fileName);
        $student->image =  $fileName;

        $student->update();

        return redirect()->back()->with("msg", "Data has been updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        $currentImage = $student->image;
        if($currentImage && file_exists(public_path('uploads/'. $currentImage))){
            unlink(public_path("uploads/". $currentImage));
        }

        $student->delete();
        $msg = $student->name. " has been deleted!";
        return redirect()->back()->with("msg", "$msg");
    }
}