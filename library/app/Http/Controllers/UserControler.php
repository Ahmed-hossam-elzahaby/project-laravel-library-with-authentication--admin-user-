<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserControler extends Controller
{
    public function user(){

$users=User::all();
return view('users.index',[

'users'=>$users

]);


    }
}
