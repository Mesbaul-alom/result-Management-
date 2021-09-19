<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistrationController;
use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\TeacherController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
return view('login.index');
});
Route::get('/login', [LoginController::class, 'index']);
//Route::get('/login', 'LoginController@index');
Route::post('/login',[LoginController::class, 'verify']);
Route::get('/forgot/password', [LoginController::class,'forgot']);
Route::get('/logout', [LogoutController::class, 'index']);
Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register', [RegistrationController::class,'verify']);
Route::group(['middleware'=>['sess']] , function(){
Route::group(['middleware'=>['type']] , function(){

	//----------------------admin route start---------------------------------------------//
Route::resource('/admin', 'AdminController')->only(['index']);
Route::get('/Admin/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('admin/profile', [AdminController::class,'adminprofile'])->name('admin.profile');
Route::get('/user/edit/{id}', [AdminController::class,'pro_update'])->name('admin.pro_update');
Route::post('/admin/profile', [AdminController::class,'profile_update'])->name('admin.update');
	//----------------------admin route end---------------------------------------------//


	//----------------------teacher route start---------------------------------------------//
Route::get('/create/teacher', [AdminController::class,'create_teacher'])->name('create_teacher');
Route::post('/create/teacher', [AdminController::class,'add_teacher'])->name('add_teacher');
Route::get('/Admin/teacherlist', [AdminController::class,'teacherlist'])->name('admin.teacherlist');
Route::get('/teacher/profile/{id}', [AdminController::class,'teacherprofile'])->name('admin.teacherprofile');
Route::get('/teacher/edit/{id}', [AdminController::class,'teacheredit'])->name('admin.teacheredit');
Route::post('/teacher/edit/{id}', [AdminController::class,'teacher_update'])->name('admin.teacher_update');
Route::get('/teacher/delete/{id}', [AdminController::class,'Teacherdestroy'])->name('admin.Teacherdestroy');
Route::get('/teacher/suspend/{id}', [AdminController::class,'Teachersuspend'])->name('admin.Teachersuspend');
Route::get('/teacher/active/{id}', [AdminController::class,'Teacheractive'])->name('admin.Teacheractive');
	//----------------------teacher route end---------------------------------------------//

	//----------------------oparetor route start---------------------------------------------//
Route::get('/create/oparetor', [AdminController::class,'create_oparetor'])->name('admin.create');
Route::post('/create/oparetor', [AdminController::class,'add_oparetor'])->name('admin.add');
Route::get('/Admin/oparetorlist', [AdminController::class,'oparetorlist'])->name('admin.oparetorlist');
Route::get('/oparetor/profile/{id}', [AdminController::class,'oparetorprofile'])->name('admin.oparetorprofile');
Route::get('/oparetor/edit/{id}', [AdminController::class,'oparetoredit'])->name('admin.oparetoredit');
Route::post('/oparetor/edit/{id}', [AdminController::class,'oparetor_update'])->name('admin.oparetor_update');
Route::get('/oparetor/delete/{id}', [AdminController::class,'Oparetordestroy'])->name('admin.Oparetordestroy');
Route::get('/oparetor/suspend/{id}', [AdminController::class,'Oparetorsuspend'])->name('admin.Operatorsuspend');
Route::get('/oparetor/active/{id}', [AdminController::class,'Oparetoractive'])->name('admin.Operatoractive');
	//----------------------oparetor route end---------------------------------------------//

	//----------------------student route start---------------------------------------------//
Route::get('/create/student', [AdminController::class,'create_student'])->name('create_student');
Route::post('/create/student', [AdminController::class,'add_student'])->name('student_add');
Route::get('/Admin/studentlist', [AdminController::class,'studentlist'])->name('admin.studentlist');
Route::get('/student/profile/{id}', [AdminController::class,'studentprofile'])->name('admin.studentprofile');
Route::get('/student/edit/{id}', [AdminController::class,'studentedit'])->name('admin.studentedit');
Route::post('/student/edit/{id}', [AdminController::class,'student_update'])->name('admin.student_update');
Route::get('/student/delete/{id}', [AdminController::class,'Studentdestroy'])->name('admin.Studentdestroy');
	//----------------------student route end---------------------------------------------//

	//----------------------subject route start---------------------------------------------//
//add subject route
Route::get('/create/subject', [AdminController::class,'create_subject'])->name('create_subject');
Route::post('/create/subject', [AdminController::class,'Addsubject'])->name('Addsubject');
Route::get('/Admin/subjectlist', [AdminController::class,'subjectlist'])->name('admin.subjectlist');
Route::get('/subject/edit/{id}', [AdminController::class,'subject_edit'])->name('admin.subject_edit');
Route::post('/subject/edit/{id}', [AdminController::class,'subject_update'])->name('admin.subject_update');
Route::get('/subject/delete/{id}', [AdminController::class,'Subjectdestroy'])->name('admin.Subjectdestroy');
	//----------------------subject route end---------------------------------------------//

	//----------------------section route start---------------------------------------------//
//-------------add section rout------------------------//
Route::get('/add/section', [AdminController::class,'create_section'])->name('create_section');
Route::post('/add/section', [AdminController::class,'Addsection'])->name('Addsection');
Route::post('/assign/student', [AdminController::class,'assignStudent'])->name('assignStudent');
Route::get('/Admin/sectionlist', [AdminController::class,'sectionlist'])->name('sectionlist');
Route::get('/details/section', [AdminController::class,'sectiondetails'])->name('sectiondetails');
Route::get('/section_edit/{id}', [AdminController::class,'section_edit'])->name('admin.section_edit');
Route::post('/section_edit/{id}', [AdminController::class,'section_update'])->name('admin.section_update');
Route::get('/section/delete/{id}', [AdminController::class,'Sectiondestroy'])->name('admin.Sectiondestroy');

Route::get('admin/Studentrecord/{id}',[AdminController::class, 'resultView']);

Route::post('/adminsubmitmarks',[AdminController::class,'SubmitMarks']);
	//----------------------section route end---------------------------------------------//








Route::get('/sub/delete/{id}', [AdminController::class,'subject_delete'])->name('admin.subject_delete');
Route::get('/suspend/{id}', [AdminController::class,'suspend'])->name('admin.suspend');
Route::get('/active/{id}', [AdminController::class,'active'])->name('admin.active');
Route::get('/delete/{id}', [AdminController::class,'destroy'])->name('admin.delete');
//Route::get('/update/{id}', [AdminController::class,'update')->name('admin.update');
//-------------add result rout------------------------//
Route::get('/create/result', [AdminController::class,'create_result'])->name('create_result');
Route::post('/create/result', [AdminController::class,'Addresult'])->name('Addresult');
Route::get('/Admin/result_list', [AdminController::class,'resultlist'])->name('admin.resultlist');
Route::get('/result_edit/{id}', [AdminController::class,'result_edit'])->name('admin.result_edit');
Route::post('/result_edit/{id}', [AdminController::class,'result_update'])->name('admin.result_update');

});
Route::group(['middleware'=>['type2']] , function(){
Route::resource('/oparetor', 'OparetorController');

});
Route::group(['middleware'=>['type3']] , function(){
	Route::get('/teacher',[TeacherController::class,'index'])->name('teacher');
	Route::get('teacher/Studentrecord/{id}',[TeacherController::class, 'resultView']);
	Route::get('teacher/profile',[TeacherController::class,'profile']);
	
	Route::get('teacher/TakenCourse',[TeacherController::class,'TakenCourse']);
	Route::post('/submitmarks',[TeacherController::class,'SubmitMarks']);
	
	
});
Route::group(['middleware'=>['type4']] , function(){
Route::get('/student', 'StudentController@index');

});
});
