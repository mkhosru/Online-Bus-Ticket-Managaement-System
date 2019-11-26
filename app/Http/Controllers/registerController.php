<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;


class registerController extends Controller
{
    


    function register()
    {
    	return view('frontendpages/frontend/login/register');
    }


     function create(Request $request)
    {
      $request->validate([ 
      
          'fname' =>'required', 
          'lname' =>'required',
          'username' =>'required',
          'phone' =>'required',
          'email' =>'required',
          'password' =>'required',
          'password_confirmation' =>'required|same:password',

      
       ]);

    	User::insert([
          
          'FirstName' =>$request->fname, 
          'LastName' =>$request->lname,
          'username' =>$request->username,
          'PhoneNumber' =>$request->phone,
          'email' =>$request->email,
          'password' =>bcrypt($request->password),
          'roleid' =>2,
          'statusid' =>1,

          ]);
      return back();

    	
     }


    	
}



