<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\UserRequest;
use App\Models\User;

class LoginController extends Controller
{
public function index(){
return view('login.index');

 }

 //public function regverify(){
//return redirect('/login');
//}

 public function verify(userRequest $req){
$validation = Validator::make($req->all(), [
'username' => 'required',
'password'=> 'required|min:5'
]);
$user = User::where('username', $req->username)
->where('password', $req->password)
->first();
if($user->role =='1' && $user->is_active=='1' ){
$req->session()->put('username', $req->username);
$req->session()->put('role', $user->role);
$req->session()->put('id', $user->id);
return redirect('/admin');
}
elseif($user->role =='2' && $user->is_active=='1'){
$req->session()->put('username', $req->username);
$req->session()->put('role', $user->role);
$req->session()->put('id', $user->id);
return redirect('/oparetor');
}
elseif($user->role =='3'  && $user->is_active=='1'){
$req->session()->put('username', $req->username);
$req->session()->put('role', $user->role);
$req->session()->put('id', $user->teacher_id);
return redirect('/teacher/TakenCourse');
}
elseif($user->role =='4'  && $user->is_active=='1'){
$req->session()->put('username', $req->username);
$req->session()->put('role', $user->role);
$req->session()->put('id', $user->id);
return redirect('/student');
}
else{
$req->session()->flash('msg', 'invaild username or password');
return redirect('/login');
}
}
public function forgot(Request $req){
	return view('login.index');
}
}