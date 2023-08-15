<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Contactes;
use Illuminate\Http\Request;

class HomeController extends Controller
{



    
      public function contact()
    {
         $res = Contactes::all();
        return view ('frontend.contact')->with('p', $res);

        
    }
    public function index()
    {
         $res = Contactes::all();
        return view ('Admin.Contact.index')->with('port', $res);

        
    }
    public function view($id)
    {
        
        $res =  Facility::find($id);
        $res1 = Facility::all();
       
        return view('frontend.facilitydetails')
            ->with('p', $res)
            ->with('products', $res1);
            
     
    }

     public function facility()
    {
         $res = Facility::all();
        return view ('frontend.facility')->with('facility', $res);

        
    }
    public function indexf()
    {
    	$res = Facility::all();
    
    	return view('Admin.Facility.index')
            ->with('prdlist', $res);
            
    }
    
    public function posted(Request $request)
    {
        $cat = new Contactes();
          $cat->name = $request->Name;
             $cat->phoneno = $request->Phonenumber;
        $cat->save();
        return redirect()->route('admin.contact.ph');
    }
      public function edit($id)
    {
        

        $cat = Contactes::find($id);
        
        return view('Admin.Contact.edit')
            ->with('product', $cat);
    }
     public function update(Request $request, $id)
    {
      
        $catToUpdate = Contactes::find($request->id);
        $catToUpdate->name = $request->Name;
      $catToUpdate->phoneno = $request->Phonenumber;
        $catToUpdate->save();
        
        return redirect()->route('admin.contact.ph');
    }

    public function delete($id)
    {
       
        $cat = Contactes::find($id);

        return view('Admin.Contact.delete')
            ->with('product', $cat);
    }

     public function destroy(Request $request)
    {   
        
        
        
        
        $catToDelete = Contactes::find($request->id);
        $catToDelete->delete();

        

        return redirect()->route('admin.contact.ph');
    }
    
    public function create()
    {
        
        return view('Admin.Contact.create');
            
    }

        
   
}
