<?php

namespace App\Http\Controllers;

use App\Bloodcenter;
use Illuminate\Http\Request;

class BloodController extends Controller
{
    
    
      public function contact()
    {
         $res = Bloodcenter::all();
        return view ('frontend.bloodcontact')->with('p', $res);

        
    }
    public function index()
    {
         $res = Bloodcenter::all();
        return view ('Admin.Bloodcenter.index')->with('port', $res);

        
    }
 public function posted(Request $request)
    { 
        try {
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
            
    
            $prd = new Bloodcenter();
            $prd->image = "1".$ext;
            $prd->name = $request->Name;
             $prd->email = $request->Email;
              $prd->place = $request->Place;
             $prd->phoneno = $request->Phonenumber;
            $prd->description = $request->Description;
             $prd->A1 = $request->A1;
             $prd->A2 = $request->A2;
             $prd->B1 = $request->B1;
             $prd->B2 = $request->B2;
             $prd->AB1 = $request->AB1;
             $prd->AB2 = $request->AB2;
             $prd->O1 = $request->O1;
             $prd->O2 = $request->O2;
            
             

            $prd->status = $request->Status;
           
            $prd->save();
            
            

            $img[$i] = str_replace(' ', '+', $img[$i]);
            $data = base64_decode($img[$i]);
            
            $temp_string='/uploads/bloodcenter/'.$prd->id;
            $temp_string2='uploads/bloodcenter/'.$prd->id;
    
            if (!file_exists(public_path().$temp_string)) {
                mkdir( public_path().$temp_string, 0777, true);
                
                $file = $temp_string2.'/1'.$ext;
                
            if (file_put_contents($file, $data)) {
                echo "<p>Image $i was saved as $file.</p>";
            } else {
                echo '<p>Image $i could not be saved.</p>';
            } 
            }
                
            

        }
            
        /* $file = $request->file('myfile');
            //$last_inc_id = DB::getPdo()->lastInsertId();
            $extension=$file->getClientOriginalExtension();
            
            
            
            
            
            
            $file->move(public_path().$temp_string."/","1.".$file->getClientOriginalExtension());
            
            
        
            */
            
            
        return redirect()->route('admin.bloodcontact.ph');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
        
    }


   

    

      public function edit($id)
    {
        

        $cat = Bloodcenter::find($id);
        
        return view('Admin.Bloodcenter.edit')
            ->with('product', $cat);
    }
     public function update(Request $request, $id)
    {
       
        $prdToUpdate = Bloodcenter::find($request->id);
        $prdToUpdate->name = $request->Name;
        $prdToUpdate->email = $request->Email;
        $prdToUpdate->place = $request->Place;
        $prdToUpdate->description = $request->Description;
         $prdToUpdate->phoneno = $request->Phonenumber;
      
         $prdToUpdate->status = $request->Status;
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
        
   
        
        $prdToUpdate->image = "1".$ext;
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
            
            return redirect()->route('admin.bloodcontact.ph');
            
            
            
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
            return redirect()->route('admin.bloodcontact.ph');
        }
        
        
        
        
      
    }

    public function delete($id)
    {
       
        $cat = Bloodcenter::find($id);

        return view('Admin.Bloodcenter.delete')
            ->with('product', $cat);
    }

     public function destroy(Request $request)
    {   
        
        
        
        
      
        $prdToDelete = Bloodcenter::find($request->id);
        
        //deleting image folder
        try{
            $src='uploads/bloodcenter/'.$prdToDelete->id.'/';
            $dir = opendir($src);
            while(false !== ( $file = readdir($dir)) ) {
            if (( $file != '.' ) && ( $file != '..' )) {
                $full = $src . '/' . $file;
                if ( is_dir($full) ) {
                    rrmdir($full);
                }
                else {
                    unlink($full);
                }
                }
            }
            closedir($dir);
            rmdir($src);
        }
        catch(\Exception $e){

        }
        //deleting image folder done
        
       
        
        $prdToDelete->delete();
          return redirect()->route('admin.bloodcontact.ph');
        
       
        
    }
      
  
    
    public function create()
    {
        
        return view('Admin.Bloodcenter.create');
            
    }

}
