<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Contact;
use App\Bloodcenter;
use App\portfolio;
use App\Registration;

class StoreController extends Controller
{
    public function store(Request $request)
    {
       
       
         $obj=new Registration();
        $obj->fullname=$request->donor_name;
        $obj->email=$request->emailid;
        $obj->password=md5($request->password);
        $obj->birth_date=$request->dob;
        $obj->gender=$request->gender;
        $obj->blood=$request->blood;
          $obj->role=$request->role;
          $obj->weight=$request->weight;
          $obj->mobile=$request->mob_no;
          $obj->address=$request->address;
          $obj->city=$request->city_name;
          $obj->active=1;
        
        if($obj->save())
        {
            $notification = array(
         'message'=>'Successfully Inserted',
        'alert-type'=>'success'
            );
            return redirect('User/register')->with('signup', 'Thanks for Registration!');
             return back()->with($notification);
        }
    }


    public function contactstore(Request $request)
    {
        
         $obj=new Contact();
        $obj->name=$request->name;
        $obj->email=$request->email;
        $obj->message=$request->message;
        $obj->query=$request->query1;
      $obj->mobile=$request->mobile;
      $obj->city=$request->city_name;
      
        
        if($obj->save())
        {   
            return redirect('User/contact')->with('contact', 'Thanks for Contact US!');
            
        }
    }
    public function login(Request $request)
    {
    	//dd($request);
    	$email = $request->emailid;
    	$password = md5($request->password);
        
    	$obj = Registration::where('email','=',$email)
		    		   ->where('password','=', $password)
		    		   ->first();
    	if($obj){
    		// dd($obj);
    		$request->session()->put('userid', $obj->id);
    		$request->session()->put('username', $obj->fullname);
    		$request->session()->put('userrole', $obj->role);
        
            if($request->session()->get('userrole') =='Admin')
            {
             // dd('Admin');
               //return redirect()->to('Admin/home');
               return redirect('Admin/home')->with('loggedin', 'Successfully Loggedin');
            }
            else if($request->session()->get('userrole') =='Donor')
            {
              //dd('Donor');
               return redirect('Donor/home')->with('loggedin', 'Successfully Loggedin' );
            }
            else if($request->session()->get('userrole') =='Requestor')
            {
             // dd('Requestor');
              return redirect('Requestor/home')->with('loggedin', 'Successfully Loggedin');
             //  return redirect()->to('Requestor/home');
            }
    		
    	}
    	else {
    		return redirect()->back()->with('invalidlogin',"Invalid Email or Password");
    	}
    }

public function doctorloginform(){
  return view('frontend.doctorloginform');
}

 public function doctorlogin(Request $request)
    {
    	//dd($request);
    	$title = $request->emailid;
    	$category = $request->password;
        
    	$obj = portfolio::where('email','=',$title)
		    		   ->where('phonenumber','=', $category)
		    		   ->first();
    	if($obj){
    		// dd($obj);
    
    			$obj1 = portfolio::where('email','=',$title)
		    		   ->where('phonenumber','=', $category)
		    		   ->get();
       return view('frontend.doctorlogin')->with('data',$obj1);
          
            
    		
    	}
    	else {
         return redirect()->back()->with('invalidlogin',"Invalid Email or Password");
    	}
    }

     public function bloodcenterlogin(Request $request)
    {
    	//dd($request);
    	$title = $request->emailid;
    	$category = $request->password;
        
    	$obj = Bloodcenter::where('email','=',$title)
		    		   ->where('phoneno','=', $category)
		    		   ->first();
    	if($obj){
    		// dd($obj);
    
    			$obj1 = Bloodcenter::where('email','=',$title)
		    		   ->where('phoneno','=', $category)
		    		   ->get();
        return view('User.pages.centerlogin')->with('data',$obj1);
        
            
    		
    	}
    	else {
         return redirect()->back()->with('invalidlogin',"Invalid Email or Password");
         
    	}
    }
     public function Updatecenters(Request $request, $id)
    {
      
        
        
        $prdToUpdate = Bloodcenter::find($request->id);
        $prdToUpdate->name = $request->name;
        $prdToUpdate->description = $request->description;
           $prdToUpdate->phoneno = $request->phonenumber;
              $prdToUpdate->email = $request->email;
                 $prdToUpdate->status= $request->status;
                 $prdToUpdate->place= $request->place;
                        $prdToUpdate->A1 = $request->A1;
             $prdToUpdate->A2 = $request->A2;
             $prdToUpdate->B1 = $request->B1;
             $prdToUpdate->B2 = $request->B2;
            $prdToUpdate->AB1 = $request->AB1;
             $prdToUpdate->AB2 = $request->AB2;
             $prdToUpdate->O1 = $request->O1;
             $prdToUpdate->O2 = $request->O2;
        
        //NEW FILE UPLOADED
        if($request->img!="")
        {      
            
            $img = explode('|', $request->img);
 
        for ($i = 0; $i < count($img) - 1; $i++) {

         if (strpos($img[$i], 'data:image/jpeg;base64,') === 0) {
            $img[$i] = str_replace('data:image/jpeg;base64,', '', $img[$i]);  
            $ext = '.jpg';
         }
         if (strpos($img[$i], 'data:image/png;base64,') === 0) { 
            $img[$i] = str_replace('data:image/png;base64,', '', $img[$i]); 
            $ext = '.png';
         }
        
   
        
        $prdToUpdate->image_name = "1".$ext;
        $prdToUpdate->save();
        
        
        

         $img[$i] = str_replace(' ', '+', $img[$i]);
         $data = base64_decode($img[$i]);
        
        
        $temp_string2='uploads/bloodcenter/'.$prdToUpdate->id;
        $file = $temp_string2.'/1'.$ext;
            
         if (file_put_contents($file, $data)) {
            echo "<p>Image $i was saved as $file.</p>";
         } else {
            echo '<p>Image $i could not be saved.</p>';
         } 
        
            
         

      }
            	Session::flash('message','Data updated successfully!!!');
        return redirect()->back();
            
            
            
            /*$file = $request->file('myfile');
            $extension=$file->getClientOriginalExtension();
            if($extension=="jpg"|| $extension=="jpeg"|| $extension=="png"|| $extension=="JPG"|| $extension=="JPEG"|| $extension=="PNG" )
            {
            //$temp_for_same_file_name = Product::where('image_name',$file->getClientOriginalName())->first();

            //$file_pointer = "uploads/products/".$product_image_ToUpdate->id."/".  $product_image_ToUpdate->image_name;
            //unlink($file_pointer);
            $temp_string='/uploads/products/'.$prdToUpdate->id;
            $prdToUpdate->image_name = "1.".$file->getClientOriginalExtension();
            $file->move(public_path().$temp_string."/","1.".$file->getClientOriginalExtension());
                
            $prdToUpdate->save();
            }
        
            return redirect()->route('admin.products');*/
        }
        else
        {
            
            $prdToUpdate->save();
           	Session::flash('message','Data updated successfully!!!');
        return redirect()->back();
        }
        
        
        
        
        
    }
    
}

