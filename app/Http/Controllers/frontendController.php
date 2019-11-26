<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    function index()
    {
    	return view('frontendpages/frontend/fronthome');
    }

    function search()
    {
    	return view('frontendpages/frontend/search');
    }

    function seat()
    {
    	return view('frontendpages/frontend/seat');
    }

    function sign()
    {
    	return view('frontendpages/frontend/login/signpage');
    }
    
    


}
