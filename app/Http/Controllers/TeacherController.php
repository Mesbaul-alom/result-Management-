<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Models\ResultModel;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Section;



use Validator;

use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

         return view('teacher.teacher_master');

             }



             public function profile(){

                $id = session('id');

                $teacher_details = Teacher::where('id',$id)->first();
                return view('teacher.profile')->with('teacherdata',$teacher_details);

                    }



         public function TakenCourse(){
            $id = session('id');

            $data_list= Teacher::with(['subject'])->where('id',$id)->first();
            return view('teacher.takencourse')->with('subjectdata',$data_list);
}

        public function resultView($id){


            // $studentResult = DB::select('SELECT add_students.id,add_students.student_name,add_result.result
            // FROM add_students INNER JOIN add_result ON add_result.student_id=add_students.id WHERE add_result.subject_id=?',[$id]);

            // dd($studentResult);
        //
            //return view('teacher.result')->with('studentdata',$studentResult)->with('subject_idSu',$id);
         $students_of_class=Subject::with(['student','teacher'])->where('id',$id)->first();
        // dd($students_of_class);
        return view('teacher.damu')->with('subject',$students_of_class);

        }


        public function SubmitMarks (Request $req){

                $student_id= $req->input('student_id');
                $Subject_id= $req->input('Subject_id');
                $Student_marks=$req->input('marks');


   $result=Section::where(['student_id'=>$student_id,'Subject_id'=>$Subject_id])->update(array('marks' => $Student_marks));



             //$result = ResultModel::where('student_id',$student_id)->where('subject_id',$Subject_id)->update('result', $Student_marks);



          if($result==true){

                return "success";

              //  return view('teacher.result')->with('studentdata',$studentResult)->with('subject_id',$id);

          }
          else{

            return "fail";
          }

        }




        public function result($id){


            $studentResult = DB::select('SELECT add_students.id,add_students.student_name,add_result.result
            FROM add_students INNER JOIN add_result ON add_result.student_id=add_students.id WHERE add_result.student_id=?',[$id]);

             //dd($studentResult);
        //
            return response()->json(['student'=>$studentResult, ]);
        }




}
