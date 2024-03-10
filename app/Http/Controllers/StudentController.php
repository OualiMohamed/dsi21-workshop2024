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
        // Request validation
        $request->validate([
            'ncin' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

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

        return redirect()->back()->with('success', 'Student Added Successfully');
    }

    public function editStudent($id)
    {
        $student = Student::find($id);
        return view('edit-student', compact('student'));
    }

    public function updateStudent(Request $request, $id)
    {
        // Request validation
        $request->validate([
            'ncin' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $ncin = $request->ncin;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;

        $student = Student::find($id);
        $student->ncin = $ncin;
        $student->name = $name;
        $student->email = $email;
        $student->phone = $phone;
        $student->address = $address;

        $student->save();

        return redirect()->back()->with('success', 'Student Updated Successfully');
    }
}
