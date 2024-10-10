<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        $students = Student::paginate(10);

        return view('student.index', ['students' => $students]);
    }

    public function destroy(Student $student){
      $student->delete();
      return redirect()->route('student.index');
    }

    public function store(Request $request, Student $student){
      $data = $request -> validate([
        'fname'=>'string',
        'lname'=>'string',
        'age'=>'integer'
      ]);
      $student->create($data);
      return redirect()->back();
    }

    public function show(Student $student){
      return view('student.edit', compact('student'));
    }
}
