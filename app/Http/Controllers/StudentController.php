<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::get();
        return view('student-list', compact('students'));
    }

    public function addStudent()
    {
        return view('add-student');
    }
    public function saveStudent(Request $request)
    {
        $ncin = $request->ncin;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;

        $newStudent = new Student();
        $newStudent->ncin = $ncin;
        $newStudent->name = $name;
        $newStudent->email = $email;
        $newStudent->phone = $phone;
        $newStudent->address = $address;

        $newStudent->save();

        return redirect()->back();
    }
}
