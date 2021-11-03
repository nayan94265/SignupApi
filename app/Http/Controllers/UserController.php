<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    function signup(Request $request){

        $user=new User;
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->mobileno=$request->input('mobileno');
        $user->password= ($request->input('password'));
        $user->save();
       return redirect('/api/fetch');
    //    return $request->input();
       

    }
}
