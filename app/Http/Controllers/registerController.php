<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Contact;
use Hash;


class registerController extends Controller
{
    
    //contact
    function contact()
    {
     return view('frontendpages/frontend/contact');
    }

    function contact_customer(Request $request)
    {
      Contact::insert([
        'name' =>$request->name,
        'email' =>$request->email,
        'phone' =>$request->phone,
        'enquiry' =>$request->enquiry,
      ]);
      return back();
    }


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



