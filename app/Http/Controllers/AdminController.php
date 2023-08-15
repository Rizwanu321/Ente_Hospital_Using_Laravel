<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use Session;
use App\RequestBlood;
use App\Contact;
use App\Donation;
use App\portcat;
use App\portfolio;
USE Illuminate\Support\Facades\DB;

class AdminController extends Controller
{


    public $searchTerm;

  
    public function render(){
        $searchTerm = '%'.$this->searchTerm .'%';
        $search = portfolio::where('category','Like',$searchTerm)
        
                                   ->orWhere('title','Like',$searchTerm)
                                   ->orWhere('qualification','Like',$searchTerm)
                                   
                                   ->orderBy('category','DESC')->get();
          return view('Admin.insert.all-portfolio',['client'=>$search]);
    }
  
     public function portcats()
    {
        $data = portcat::all();
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
public function doctorlogins($id){
        $data = DB::table('portfolios')->get();
        $maindata = DB::table('portfolios')->where('pid',$id)->get();
         $cats = DB::table('portcats')->where('status','ON')->get();
        return view ('frontend.doctorlogin',['data'=>$maindata,'cats'=>$cats]);
    }
    public function centerlogins($id){
     
        $maindata = DB::table('bloodcenters')->where('id',$id)->get();
      
        return view ('User.pages.centerlogin',['data'=>$maindata]);
    }
 public function editdoctor($id){
        $data = DB::table('portfolios')->get();
        $maindata = DB::table('portfolios')->where('pid',$id)->first();
         $cats = DB::table('portcats')->where('status','ON')->get();
        return view ('frontend.editdoctor',['data'=>$data,'maindata'=>$maindata,'cats'=>$cats]);
    }

     public function editcenters($id){
        $data = DB::table('bloodcenters')->get();
        $maindata = DB::table('bloodcenters')->where('id',$id)->first();
         $cats = DB::table('bloodcenters')->where('status','ON')->get();
        return view ('User.pages.editcenter',['data'=>$data,'maindata'=>$maindata,'cats'=>$cats]);
    }
    public function deletePortfolio($id){
        $data = DB::table('portfolios')->where('pid',$id)->delete();
        
        return redirect()->back()->with('message','Data Deleted Successfully');
    }

    public function search(Request $request){

      $search=$request->get('search');
      if($search != '')
      {
     
  
               $posts = DB::table('portfolios')
         ->where('pid', 'like', '%'.$search.'%')
         ->orWhere('title', 'like', '%'.$search.'%')
         ->orWhere('category', 'like', '%'.$search.'%')
         ->orWhere('qualification', 'like', '%'.$search.'%')
         ->orWhere('position', 'like', '%'.$search.'%')
         ->orderBy('category', 'ASC')
         ->get();
     
       return view ('Admin.insert.all-portfolio',['data'=>$posts]);
      }
      else
      {
     
    
           $posts = DB::table('portfolios')
         ->orderBy('category', 'ASC')
         ->get();

         return view ('Admin.insert.all-portfolio',['data'=>$posts]);
      }
 
    }

     public function searchs(Request $request){

      $search=$request->get('search');
      if($search != '')
      {
     
  
               $posts = DB::table('portfolios')
         ->where('pid', 'like', '%'.$search.'%')
         ->orWhere('title', 'like', '%'.$search.'%')
         ->orWhere('category', 'like', '%'.$search.'%')
         ->orWhere('qualification', 'like', '%'.$search.'%')
         ->orWhere('position', 'like', '%'.$search.'%')
         ->orderBy('category', 'ASC')
         ->get();
     
       return view ('frontend.doctor',['port'=>$posts]);
      }
      else
      {
     
    
           $posts = DB::table('portfolios')
         ->orderBy('category', 'ASC')
         ->get();

         return view ('frontend.doctor',['port'=>$posts]);
      }
 
    }

    public function allportfolio()
    {

           $data = DB::table('portfolios')
         ->orderBy('category', 'ASC')
         ->get();
    
        $cats = DB::table('portcats')->where('status','ON')->get();
        return view ('Admin.insert.all-portfolio',['cats'=>$cats,'data'=>$data]);
    }
     public function alldonor()
     {
      $active=1;
      $active1=0;
     	 $data=Registration::where('active','=',$active)
                            ->orWhere('active','=',$active1)
                            ->paginate(4);
      // dd($data);
       return view('Admin.pages.allldonorlist',['donors'=>$data]);
     }
     public function admin_index()
    {
    	$active=1;
         
                     $count = Registration::count();
                      $count1 = RequestBlood::count();
                       $count2 = Registration::where('active','=',$active)
                                         ->where('role','=','Donor')
                                           ->count(); 
                        $count3 = Donation::count();

                     
       return view('Admin.pages.index',[
        
        'count'=>$count,
        'count1'=>$count1,
        'count2'=>$count2,
          'count3'=>$count3
      ]);
       
    }
    public function admin()
    {
        return view ('Admin.index');
    }
     public function message()
     {
      
       $data=Contact::all();
                            
      // dd($data);
       return view('Admin.pages.message',['message'=>$data]);
     }
     public function deletess($id)
    {
      $data = DB::table('registrations')->where('id',$id)->delete();
        return redirect()->back()->with('message','Data Deleted Successfully');


    
      }
           public function delete1(Request $request)
    {   
        
        
        
        
        $catToDelete = Registration::find($request->id);
        $catToDelete->delete();

        

        return redirect()->route('admin.Breakingnews');
    }
    }

