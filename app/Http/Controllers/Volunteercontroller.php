<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Volunteercontroller extends Controller
{
    
    public function volunteer ()
    {
        return view('voluteer.vouteer');
    }
    public function contact(){
        return view('contact.contact');
    }
}
