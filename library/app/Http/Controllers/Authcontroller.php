<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    public function registerform()
    {
return view("Auth.register");

    }

public function register(Request $request)
{

$request->validate([
'name'=>'required|string|max:255',
'email'=>'required|email|unique:users,email|max:255',
'password'=>'required|confirmed'

]);

User::create([

"name"=>$request->name,
"email"=>$request->email,
"password"=>bcrypt($request->password)
]);

return redirect(url('login'));
}

public function loginform()
{
    return view("Auth.login");
}

public function login(Request $request)
{

$request->validate([
'email'=>'required|email|max:255',
'password'=>'required'

]);

$islogin=Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
if(!$islogin){
$request->session()->flash('errorMassage');
    
 return  redirect(url('login'));
// return view('Auth.login');

}
$request->session()->flash('welcomeMassege');
   return redirect(url('cats'));

}
public function logout()
{
    Auth::logout();
    return redirect(url('login'));
}



}
