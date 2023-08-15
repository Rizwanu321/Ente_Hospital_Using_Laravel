<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class adminController extends Controller
{
    public function __construct()
    {
        
    }
     public function admin()
    {

        return view ('Admin.index');
    }
     
    
     public function portcats()
    {
        $data = DB::table('portcats')->get();
        return view ('Admin.insert.portfolio-category',['data'=>$data]);
    }
    public function portfolio()
    {
        $data = DB::table('portfolios')->get();
        $cats = DB::table('portcats')->where('status','ON')->get();
        return view ('Admin.insert.portfolio',['cats'=>$cats,'data'=>$data]);
    }
      public function editPc($id){
        $data = DB::table('portcats')->get();
        $maindata = DB::table('portcats')->where('pcid',$id)->first();
        return view ('Admin.edit.editportcategory',['data'=>$data,'maindata'=>$maindata]);
    }
     public function deletePc($id){
        $data = DB::table('portcats')->where('pcid',$id)->delete();
        return redirect()->back()->with('message','Data Deleted Successfully');
    }
    public function editPortfolio($id){
        $data = DB::table('portfolios')->get();
        $maindata = DB::table('portfolios')->where('pid',$id)->first();
         $cats = DB::table('portcats')->where('status','ON')->get();
        return view ('Admin.edit.editportfolio',['data'=>$data,'maindata'=>$maindata,'cats'=>$cats]);
    }
    public function deletePortfolio($id){
        $data = DB::table('portfolios')->where('pid',$id)->delete();
        
        return redirect()->back()->with('message','Data Deleted Successfully');
    }
    public function allportfolio()
    {
        $data = DB::table('portfolios')->get();
        $cats = DB::table('portcats')->where('status','ON')->get();
        return view ('Admin.insert.all-portfolio',['cats'=>$cats,'data'=>$data]);
    }
       public function doctor()
    {
        return view ('frontend.doctor');
    }
}
