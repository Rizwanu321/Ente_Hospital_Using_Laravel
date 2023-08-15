<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Bloodcenter;
use App\City;
use Illuminate\Http\Request;
use App\Contact;
use App\Facility;
use App\portfolio;
use App\Registration;
use App\RequestBlood;
use Session;
class UserController extends Controller
{

    public function bloodcenter()
    {
         $res = Bloodcenter::all();
        $cats = DB::table('bloodcenters')->where('status','ON')->get();
 return view ('User.pages.bloodcenter',['depts'=>$cats]);
        
    }

     public function changeUserStatus(Request $request)
    {
        $user = portfolio::find($request->pid);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'User status change successfully.']);
    }
    public function home()

    {
    	 $active=1;
          $request=RequestBlood::all();
          $city=City::all();
          $donor=Registration::where('role','=','Donor')
                       ->where('active','=',$active)
                     ->get();
                     $count = Registration::where('role','=','Donor')->count();
                      $count1 = RequestBlood::count();
                       $count2 = Registration::where('active','=',$active)
                                        -> where('role','=','Donor')
                       ->count(); 

                     
       return view('User.pages.index',[
        'request'=>$request,
        'city'=>$city,
        'donor'=>$donor,
        'count'=>$count,
        'count1'=>$count1,
        'count2'=>$count2,

      ]);
       
    }
    public function about()
    {
    	return view('User.pages.about');
    }

    public function request()
    {
    
       $city=City::all();
    	return view('User.pages.request',['city'=>$city]);
    }
    public function tips()
    {
       $active=1;
          $request=RequestBlood::all();
          $donor=Registration::where('role','=','Donor')
                       ->where('active','=',$active)
                     ->get();
       return view('User.pages.tips',['request'=>$request],['donor'=>$donor]);
    	//return view('User.pages.tips');
    }
     public function contact()
    {
         $city=City::all();
        return view('User.pages.contact',['city'=>$city]);
    }

    public function register()
    {
        $active=1;
        
          $city=City::all();
          $request=RequestBlood::all();
          $donor=Registration::where('role','=','Donor')
                       ->where('active','=',$active)
                     ->get();
                       return view('User.pages.register')
            ->with('request', $request)
            ->with('donor', $donor)
             ->with('city', $city);
  
 
    }
     public function doner()
    {
        $active=1;
        
          $city=City::all();
          $request=RequestBlood::all();
          $donor=Registration::where('role','=','Donor')
                       ->where('active','=',$active)
                     ->get();
                       return view('User.pages.doner')
            ->with('request', $request)
            ->with('donor', $donor)
             ->with('city', $city);
  
 
    }
    public function privacy()
    {
        return view('User.pages.privacy');
    }

    public function search_blood(Request $request)
    {

          $blood = $request->blood;
    	  $city = $request->city_name;
          $active=1;
          $data = Registration::where('blood','=',$blood)
		    		   ->where('city','=', $city)
		    		   ->where('role','=','Donor')
                       ->where('active','=',$active)
		    		   ->get();
		    		 //  dd($data);
         return view('User.pages.search_blood',['donors'=>$data]);

    }
    public function search()
    {
    	return view('User.pages.search_blood');
    }
    
}
