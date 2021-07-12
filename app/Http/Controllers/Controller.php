<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\Teacher;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function insertNewTeacher(Request $request){
        $teacher = new Teacher();
        $teacher->name = "Saeed";
        $teacher->userName = "SaeedTheDEstroyer";
        $teacher->save();
        echo "DONE";
    }

    function insertNewStudent(Request $request){
        $student = new student();
        $student->name = "ahmad";
        $student->userName = "ahmad123";
        $student->teacher_id=1;
        $student->save();
        echo "DONE";
    }
    function getStudent(Request $request){
        $student= student::find(1);
        echo $student->name;
    }

    function updateTeacherName(Request $request){
        $teacher = Teacher::find($request->input("id"));
       // $teacher->name = "Ahmad";
      //  $teacher->userName= "1235";
        $teacher->delete();
        echo "UpdateDONE";
    }
    function getStudentTeacher(Request $request){
        $student = student::with("name","Ahmad");
        $teacher  = $student->teacher;
    }

    function showStudentList(Request $request){
        $id = $request->input("id"); //hi
        $teacher = Teacher::find($id);
        $students = $teacher->students;
        return view("list",[
            "teacher" => $teacher,
            "students" => $students
        ]);
    }

    function insertNewTeacherPost(Request $request){
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->userName = $request->userName;
        $teacher->save();
        echo "DONE";
    }

    function showDashboardPage(Request $request){
        return view("dashboard");
    }
}
