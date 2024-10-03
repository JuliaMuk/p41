<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        $students = DB::table('students')->paginate(10);

        return view('student.index', ['students' => $students]);
    }

    public function destroy(Student $student){
      $student->delete();
      return redirect()->route('student.index');
    }
}
