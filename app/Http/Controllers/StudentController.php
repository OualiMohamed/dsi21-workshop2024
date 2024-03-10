<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Student::get();
        return view('student-list', compact('students'));
    }

    public function addStudent() {
        return view('add-student');
    }
}
