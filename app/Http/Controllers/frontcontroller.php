<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Breakingnews;

class frontcontroller extends Controller
{

    public function __construct()
    {
        
    }
      public function index(){
    
        $res = Breakingnews::all();
        return view ('frontend.pages.index')->with('breakingnews', $res);


    }
         public function doctor()
    {
       
        $clients = DB::table('clients')->where('status','ON')->get();           
        $portfolio = DB::table('portfolios')->where('status','ON')->get();
        foreach($portfolio as $port){
            $port->class = DB::table('portcats')->where('title',$port->category)->value('slug');
        }
        $portcats = DB::table('portcats')->where('status','ON')->get();
        return view ('frontend.doctor11',['clients'=>$clients,
        'portfolio'=>$portfolio,'portcats'=>$portcats]);
    }
     public function bloodcenters()
    {
       
        return view ('User.pages.centerloginform');
    }
}
