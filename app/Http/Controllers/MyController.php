<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
use App\Contact;
use App\Registration;
use Illuminate\Support\Facades\Session;

class MyController extends Controller
{
    
     
    public function logout1()
    {
         Session::flush();
       return redirect()->to('/');
    }
     public function logout5()
    {
         Session::flush();
       return redirect()->to('/doctor');
    }
    public function logout2()
    {
         Session::flush();
       return redirect()->to('/User/index');
    }
    public function requestor_index()
    {
 
        return view('Requestor.pages.index');
    }
     public function requestor_about()
    {
        return view('Requestor.pages.about');
    }

     
}
