<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Mail;

class MailController extends Controller
{
    function mail()
	{
	   $name = 'Krunal';
	   Mail::to('krunal@appdividend.com')->send(new SendMailable($name));
	   
	   return 'Email was sent';
	}
}
