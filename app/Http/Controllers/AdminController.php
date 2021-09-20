<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Oparetor;
use App\Models\Subject;
use App\Models\Result;
use App\Models\Section;
use App\Models\Courses;
use App\Models\Admin;
use App\Http\Requests\TeacherRequest;
use App\Http\Requests\OparetorRequest;
use App\Http\Requests\StudentRequest;


use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $id = session('id');
         $user=User::where('id',$id)->first();
         $oparetors = Oparetor::all();
         $teachers = Teacher::all();
        $students = Student::all();
        $subjects = Subject::all();
        $courses = Courses::all();
        return view('admin.index')->with ('user',$user)
                                        ->with('oparetors',$oparetors)
                                        ->with('teachers',$teachers)
                                        ->with('subjects',$subjects)
                                        ->with('courses',$courses)
                                        ->with('students',$students);
    }

      public function dashboard()
    {
      $id = session('id');
      $user=User::where('id',$id)->first();
        $oparetors = Oparetor::all();
        $teachers = Teacher::all();
        $students = Student::all();
        $subjects = Subject::all();
        $courses = Courses::all();
      // return view('admin.studentlist')->with('users',$users); 
       return view('admin.dashboard')->with ('user',$user)
                                        ->with('oparetors',$oparetors)
                                        ->with('teachers',$teachers)
                                        ->with('subjects',$subjects)
                                        ->with('courses',$courses)
                                        ->with('students',$students);
    }
   //---------------------------------------Oparetor start---------------------------------------------------------------------//
    //---------view add oparetor page-------------//
    public function create_oparetor()
    {
        
       return view('admin.create_oparetor');
    }
//---------view add oparetor page end-------------//
 //--------- add oparetor funtion start-------------//
     public function add_oparetor(OparetorRequest $request)
    {

         

        Oparetor::insert([
            'first_name'=>$request->first_name,
             'last_name'=>$request->last_name,
              'father_name'=>$request->father_name,
               'mother_name'=>$request->mother_name,
                'phone'=>$request->phone,
                 'email'=>$request->email,
                  'nid'=>$request->nid,
                   'gender'=>$request->gender,
                    'department'=>$request->department,
                    'present_address'=>$request->present_address,
                  'permanent_address'=>$request->permanent_address,
                   'dob'=>$request->dob,
                   'password'=>$request->password,
                   'image'=>"",
                   'role'=>"2",
                    'is_active'=>"1"

        ]);
        $oparetor_id=Oparetor::where('first_name',$request->first_name)->pluck('id');
            User::insert([
            'username'=>$request->first_name,
            'role'=>"2",
            'is_active'=>"1",
            'email'=>$request->email,
            'password'=>$request->password,
            'oparetor_id'=>$oparetor_id[0]


      ]);
        
       return view('admin.create_oparetor',['success'=>true]);
    }
    //--------- add oparetor funtion end-------------//
  //--------- add oparetor list view funtion start-------------//
     public function oparetorlist()
    {
        $oparetors = Oparetor::all();
        return view('admin.oparetorlist')->with('oparetors',$oparetors);
       
    }
      //--------- add oparetor list view funtion end-------------//
      public function oparetorprofile($id)
    {
        $oparetor = Oparetor::find($id);
        return view('admin.oparetor_profile')->with('oparetor',$oparetor);
   }
     //---------  oparetor edit start-------------//
 public function Oparetoredit($id)
    {  
        $oparetor = Oparetor::find($id);
       return view('admin.oparetor_edit')->with('oparetor',$oparetor);
    }
       //---------  oparetor edit end-------------//

     //-----------Oparetor update start----------// 
    public function oparetor_update(Request $request,$id)
    {
        $oparetor=Oparetor::find($id);
        $oparetor->first_name=$request->first_name;
        $oparetor->last_name=$request->last_name;
        $oparetor->father_name=$request->father_name;
         $oparetor->mother_name=$request->mother_name;
          $oparetor->phone=$request->phone;
           $oparetor->email=$request->email;
             $oparetor->gender=$request->gender;
              $oparetor->department=$request->department;
              $oparetor->present_address=$request->present_address;
            $oparetor->permanent_address=$request->permanent_address;
            $oparetor->nid=$request->nid;
             $oparetor->dob=$request->dob;
             $oparetor->password=$request->password;
             $oparetor->role="2";
              $oparetor->is_active=$request->is_active;
              $newImageName=time().'-'.$request->name.'.'.$request->image->extension();
              $image=$request->image->move(public_path('profile_img'),$newImageName);
               $oparetor->image=$newImageName;
      $oparetor->save();
      

      User::where('oparetor_id', $id)
      ->update(['is_active' => $request->is_active]);
        
      return view('admin.oparetor_edit',['success'=>true])->with('oparetor',$oparetor);
    }

    //delete funtion start
     public function   Oparetordestroy($id){
        Oparetor::destroy($id);
        $oparetors = Oparetor::all();
        return view('admin.oparetorlist',['success'=>true])->with('oparetors',$oparetors);
    }
 //delete funtion end
      //-----------oparetor update end----------// 
    //---------------------------------------Oparetorend-------------------------------------------------------------//
    //-------------------------------------teacherstart--------------------------------------------------------------//
    public function create_teacher()
    {
        //echo "mesba";
       return view('admin.create_teacher');
    }
     public function add_teacher(TeacherRequest $request)
    {
          Teacher::insert([
           
            'first_name'=>$request->first_name,
             'last_name'=>$request->last_name,
              'father_name'=>$request->father_name,
               'mother_name'=>$request->mother_name,
                'phone'=>$request->phone,
                 'email'=>$request->email,
                  'nid'=>$request->nid,
                   'gender'=>$request->gender,
                    'department'=>$request->department,
                    'present_address'=>$request->present_address,
                  'permanent_address'=>$request->permanent_address,
                   'dob'=>$request->dob,
                   'password'=>$request->password,
                   'image'=>"",
                   'role'=>"2",
                    'is_active'=>"1"
                   
                   
          ]);  
          $teacher_id=Teacher::where('first_name',$request->first_name)->pluck('id');
            User::insert([
            'username'=>$request->first_name,
            'role'=>"3",
            'is_active'=>"1",
            'email'=>$request->email,
            'password'=>$request->password,
            'teacher_id'=>$teacher_id[0]
            ]);

       return view('admin.create_teacher',['success'=>true]);
           }
    

      public function teacherlist()
    {
        $teachers = Teacher::all();
       return view('admin.teacherlist')->with('teachers',$teachers);
    }
    //student profile start
               
    public function teacherprofile($id)
    {
        $teacher = Teacher::find($id);
        return view('admin.teacher_profile')->with('teacher',$teacher);
   }
       //student profile end


  public function  teacheredit($id)
    {  
        $teacher = Teacher::find($id);
       return view('admin.teacher_edit')->with('teacher',$teacher);
    }

    //-----------teacher update start----------// 
public function teacher_update(TeacherRequest $request,$id)
    {
        
       $teacher= Teacher::find($id);
        $teacher->first_name=$request->first_name;
        $teacher->last_name=$request->last_name;
        $teacher->father_name=$request->father_name;
         $teacher->mother_name=$request->mother_name;
          $teacher->phone=$request->phone;
           $teacher->email=$request->email;
             $teacher->gender=$request->gender;
              $teacher->department=$request->department;
              $teacher->present_address=$request->present_address;
            $teacher->permanent_address=$request->permanent_address;
            $teacher->nid=$request->nid;
             $teacher->dob=$request->dob;
             $teacher->password=$request->password;
             $teacher->role="3";
              $teacher->is_active=$request->is_active;;
              $newImageName=time().'-'.$request->name.'.'.$request->image->extension();
              $image=$request->image->move(public_path('profile_img'),$newImageName);
               $teacher->image=$newImageName;
              $teacher->save();

              User::where('teacher_id', $id)
              ->update(['is_active' => $request->is_active]);

              return view('admin.teacher_edit',['success'=>true])->with('teacher',$teacher);
    }
    //-----------teacher update end ----------// 

    //delete funtion start
     public function Teacherdestroy($id){
        Teacher::destroy($id);
        $teachers = Teacher::all();
        return view('admin.teacherlist',['success'=>true])->with('teachers',$teachers);
    }
 //delete funtion end
//active suspend funtion start
     public function Teachersuspend(Request $req,$id)
    {  
        $user = Teacher::find($id);
        $user->username;
        $teacher = User::where('username', $user->username)
->first();
 //dd($teacher);
        $teacher->is_active=0;
        $teacher->save();
       return redirect('/Admin/teacherlist');
    }
     public function Teacheractive(Request $req,$id)
    {  
        $user = Teacher::find($id);
        $user->is_active=1;
        $user->save();
      return redirect('/Admin/teacherlist');
    }
    //active suspend funtion end
//---------------------------------------teacher end---------------------------------------------------------------------//
    //---------------------------------------student start---------------------------------------------------------------------//
     public function create_student()
    {
       return view('admin.create_student');
    }
    //add student
    
         public function add_student(StudentRequest $request)
    {

        Student::insert([
           
            'student_name'=>$request->student_name,
              'father_name'=>$request->father_name,
               'mother_name'=>$request->mother_name,
                'phone'=>$request->phone,
                 'email'=>$request->email,
                   'gender'=>$request->gender,
                    'department'=>$request->department,
                    'present_address'=>$request->present_address,
                  'permanent_address'=>$request->permanent_address,
                  'board'=>$request->board,
                    'reg_no'=>$request->reg_no,
                    'roll_number'=>$request->roll_number,
                  'institute_name'=>$request->institute_name,
                   'dob'=>$request->dob,
                   'password'=>$request->password,
                   'image'=>"",
                   'role'=>"4",
                    'is_active'=>"1"
                   
          ]);
          $student_id=Student::where('student_name',$request->student_name)->pluck('id');
          User::insert([
          'username'=>$request->student_name,
          'role'=>"4",
          'is_active'=>"1",
          'email'=>$request->email,
          'password'=>$request->password,
          'student_id'=>$student_id[0]
          ]);
          return view('admin.create_student',['success'=>true]);
    }
               //student profile start
               
            public function studentprofile($id)
            {
                $student = Student::find($id);
                return view('admin.student_profile')->with('student',$student);
           }
               //student profile end


    public function studentlist()
    {
        $students = Student::all();
       return view('admin.studentlist')->with('students',$students);
    }
    //-------------student edit
    public function  studentedit($id)
    {  
        $student = Student::find($id);
       return view('admin.student_edit')->with('student',$student);
    }
    // student edit end
    //............student update start
    public function student_update(StudentRequest $request,$id)
    {     
        $student = Student::find($id);
            $student->student_name=$request->student_name;
              $student->father_name=$request->father_name;
               $student->mother_name=$request->mother_name;
                $student->phone=$request->phone;
                 $student->email=$request->email;
                   $student->gender=$request->gender;
                    $student->department=$request->department;
                    $student->present_address=$request->present_address;
                  $student->permanent_address=$request->permanent_address;
                  $student->board=$request->board;
                    $student->reg_no=$request->reg_no;
                    $student->roll_number=$request->roll_number;
                  $student->institute_name=$request->institute_name;
                   $student->dob=$request->dob;
                   $student->password=$request->password;
                   $student->image="";
                   $student->role="4";
                    $student->is_active=$request->is_active;
                    $newImageName=time().'-'.$request->name.'.'.$request->image->extension();
                    $image=$request->image->move(public_path('profile_img'),$newImageName);
                     $student->image=$newImageName;
                        $student->save();


                        User::where('student_id', $id)
      ->update(['is_active' => $request->is_active]);
                        return view('admin.student_edit',['success'=>true])->with('student',$student);
    }

    //-----------student update end----------// 
    //delete funtion start
     public function Studentdestroy($id){
        Student::destroy($id);
        $students = Student::all();
        return view('admin.studentlist',['success'=>true])->with('students',$students);
    }
 //delete funtion end

//---------------------------------------student end---------------------------------------------------------------------//

//---------------------------------------subject start---------------------------------------------------------------------//
     public function create_subject()
    {
        
       return view('admin.create_subject');
    }
    
        public function Addsubject(Request $req)
    {

         $subject = new Subject;
        $subject->subject_name = $req->subject_name;
        $subject->subject_code = $req->subject_code;
           $subject->save();
       return view('admin.create_subject',['success'=>true]);
    } //end method
//subject list funtion
    public function subjectlist()
    {
        $subjects = Subject::all();
        
       return view('admin.subjectlist')->with('subjects',$subjects);
    }
    //subject edit view page
      public function    subject_edit($id)
    {  
        $subject = Subject::find($id);
       return view('admin.subject_edit')->with('subject',$subject);
    }

       //-----------subject update start----------// 
     public function subject_update(Request $request,$id)
    {
        
        $subject = Subject::find($id);
        $subject->subject_name = $request->subject_name;
        $subject->subject_code = $request->subject_code;
        
        $subject->save();
        return view('admin.subject_edit',['success'=>true])->with('subject',$subject);
    }
    
    //delete funtion start
     public function Subjectdestroy($id){
        Subject::destroy($id);
        $subjects = Subject::all();
        return view('admin.subjectlist',['success'=>true])->with('subjects',$subjects);
    }
 //delete funtion end
 //---------------------------------------subject   endt---------------------------------------------------------------------//
    //---------------------------------------section start---------------------------------------------------------------------//
//----------------create section view page-------------------------------------//
      public function create_section()
    {
        
        $subject = Subject::all();
        $teachers = Teacher::all();
        $students = Student::all();
        $error="";
       return view('admin.create_section')->with('subject',$subject)
                                          ->with('students',$students)
                                          ->with('error',$error)
                                          ->with('teachers',$teachers);
                                       
    }
    public function Addsection(Request $req)
    {     
              $course = Courses::where('subject_id', $req->subject)
             ->where('teacher_id', $req->teacher)
             ->first();
         if($course){
         $error="Already created.Please try another!!!";
         $subject = Subject::all();
           $teachers = Teacher::all();
          $students = Student::all();

          return view('admin.create_section')->with('subject',$subject)
          ->with('students',$students)
          ->with('error',$error)
        ->with('teachers',$teachers);
}
else{
      $courses = new Courses;
        $courses->subject_id = $req->subject;
        $courses->teacher_id = $req->teacher;
           $courses->save();
           $subject = Subject::all();
           $teachers = Teacher::all();
          $students = Student::all();
          $error="";
          return view('admin.create_section',['success'=>true])->with('subject',$subject)
                                                                ->with('students',$students)
                                                                ->with('error',$error)
                                                              ->with('teachers',$teachers);
}
           
        
        
    } //
    //section list funtion
    public function    assignStudent(Request $req)
    {

      $section = Section::where('subject_id', $req->subject)
      ->where('student_id', $req->student)
      ->first();
  if($section){
  $error="Already created.Please try another!!!";
  $subject = Subject::all();
    $teachers = Teacher::all();
   $students = Student::all();

   return view('admin.create_section')->with('subject',$subject)
                    ->with('students',$students)
                   ->with('error',$error)
                 ->with('teachers',$teachers);
}
else{
           $section = new Section;
           $section->subject_id = $req->subject;
           $section->student_id = $req->student;
           $section->marks =0.0;
           $section->save();
           $subject = Subject::all();
           $teachers = Teacher::all();
          $students = Student::all();
          $error='';
          return view('admin.create_section',['success'=>true])->with('subject',$subject)
                                                              ->with('students',$students)
                                                              ->with('error',$error)
                                                              ->with('teachers',$teachers);
}
    }
    public function sectionlist()
    {
     
      $courses = Courses::all();
      
    foreach ($courses->pluck('subject_id') as $subject) {
      $subject_ids[]=$subject;
    }
    $subjects=Subject::whereIn('id',$subject_ids)->get();
     return view('admin.sectionlist')->with('subjects',$subjects);

    }
       public function sectiondetails()
    {
        
      
       return view('admin.sectiondetails')->with('subject',$subject);
    }
     //section edit view page
      public function    section_edit($id)
    {  

        $section = Section::find($id);

        $sections=Section::all();
        $subject = Subject::all();
        $teachers = Teacher::all();
        $students = Student::all();
        
      // return view('admin.studentlist')->with('users',$users); 
       return view('admin.section_edit',)->with('subject',$subject)
                                        ->with('teachers',$teachers)
                                        ->with('students',$students)
                                        ->with('sections',$sections)
                                        ->with('section',$section);
                                        
       //return view('admin.section_edit')->with('sections',$sections);
    }

    public function resultView($id){
      
        $students=Student::all();
        $courses=Courses::all();
        // $sections=Section::all();
        // dd($section);
        $subject=Subject::with(['student','teacher'])->where('id',$id)->first();
        // foreach ($courses->pluck('teacher_id') as $teacher) {
        //   $teacher_ids[]=$teacher;
        // }
        // $teachers=Teacher::whereIn('id',$teacher_ids)->get();
        return view('admin.secStudentList') ->with('subject',$subject);
                                            // ->with('sections',$sections);
                                            // ->with('teachers',$teachers)
                                           
    }

    public function SubmitMarks (Request $req){

        $student_id= $req->input('student_id');
         $Subject_id= $req->input('Subject_id');
        $Student_marks=$req->input('marks');
        

   


//$result = ResultModel::where('student_id',$student_id)->where('subject_id',$Subject_id)->update('result', $Student_marks);

$result = DB::table('add_result')->where('student_id',$student_id)->where('Subject_id',$Subject_id)
->update(array('result' => $Student_marks)); 



if($result==true){

return "success";

//  return view('teacher.result')->with('studentdata',$studentResult)->with('subject_id',$id);

}
else{

return "fail";
}

}




    //section update
     public function section_update(Request $req,$id)
    {

        $sections = Section::find($id);
        $sections->student_name = $req->student;
        $sections->subject_name = $req->subject;
        $sections->teacher_name = $req->teacher;
        $sections->result = $req->result;
        $sections->section = $req->section;
           $sections->save();
       return redirect('/details/section');
    } //
//delete funtion start
     public function Sectiondestroy($id){
      //  $C=Courses::destroy($id);
       $deletedRows =Courses::where('subject_id', $id)->delete();
        return redirect('/Admin/sectionlist');
        //return redirect()->route('admin.index');
    }
 //delete funtion end
 public function Sec_Studentdestroy($id){
  // dd($id);
   $secstudent=Section::where('student_id', $id)->delete();
  
    return redirect('/Admin/sectionlist');
    //return redirect()->route('admin.index');
}
 
    //--------------------------------------section end---------------------------------------------------------------------//
     public function create_result()
    {
        //echo "mesba";
       return view('admin.create_result');
    }

          public function Addresult(Request $req)
    {

         $user = new Subject;
        $user->subject_name = $req->subject_name;
        $user->subject_code = $req->subject_code;
           $user->save();
       return view('admin.create_student');
    } //end method





  //---------------------------------------Admin start--------------------------------------------------------------------//
    public function adminprofile(Request $req)
    {
         $id = session('id');
        
          $user=User::where('id',$id)->first();
       
         return view('admin.admin_profile')->with ('user',$user);
        
    }
    public function pro_update( $id)
    {
     
    $admin=User::find($id);
   
      return view('admin.admin_profile_edit')->with('admin',$admin);
    }
    public function profile_update(Request $req)
    {
        $id = session('id');
        $user = User::find($id);
        $user->username = $req->username;
        // $user->first_name =$req->first_name;
        // $user->last_name =$req->last_name;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->password =$req->password;

        $user->save();
      //   $user->is_active="1";
       
      //   $newImageName=time().'-'.$req->name.'.'.$req->image->extension();
      //  $image=$req->image->move(public_path('profile_img'),$newImageName);
      //   $user->image=$newImageName;
      $user=User::where('id',$id)->first();
       
      return view('admin.admin_profile')->with ('user',$user);
    }
   

//---------------------------------------admin end---------------------------------------------------------------------//
   
  
    
    public function resultlist()
    {
        $users = User::all();
       return view('admin.resultlist')->with('users',$users);
    }
 
    

  
   
 public function  result_edit($id)
    {  
        $user = User::find($id);
       return view('admin.result_edit')->with('user',$user);
    }
   
    
    
     public function usersPending()
    {  
      $users = User::all();
       return view('admin.usersPending')->with('users',$users);
    }

   
 
     
}
