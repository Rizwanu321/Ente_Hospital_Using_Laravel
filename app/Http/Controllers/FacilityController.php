<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facility;

class FacilityController extends Controller
{


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
    public function index()
    {
    	$res = Facility::all();
    
    	return view('Admin.Facility.index')
            ->with('prdlist', $res);
            
    }
    
    public function posted(Request $request)
    {
        $cat = new Facility();
        $cat->description = $request->Name;
        $cat->save();
        return redirect()->route('admin.facility');
    }
      public function edit($id)
    {
        

        $cat = Facility::find($id);
        
        return view('Admin.Facility.edit')
            ->with('brnews', $cat);
    }
     public function update(Request $request, $id)
    {
      
        $catToUpdate = Facility::find($request->id);
        $catToUpdate->description = $request->Name;
      
        $catToUpdate->save();
        
        return redirect()->route('admin.facility');
    }

    public function delete($id)
    {
       
        $cat = Facility::find($id);

        return view('Admin.Facility.delete')
            ->with('brnews', $cat);
    }

     public function destroy(Request $request)
    {   
        
        
        
        
        $catToDelete = Facility::find($request->id);
        $catToDelete->delete();

        

        return redirect()->route('admin.Breakingnews');
    }
    public function indexs()
    {
    	$res = Facility::all();
    
    	return view('Admin.News.index')
            ->with('prdlist', $res);
            
    }
    public function create()
    {
        
        return view('Admin.Facility.create');
            
    }

        
    public function store(Request $request)
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
            
    
            $prd = new Facility();
            $prd->image_name = "1".$ext;
            $prd->name = $request->Name;
            $prd->description = $request->Description;
           
            $prd->save();
            
            

            $img[$i] = str_replace(' ', '+', $img[$i]);
            $data = base64_decode($img[$i]);
            
            $temp_string='/uploads/facility/'.$prd->id;
            $temp_string2='uploads/facility/'.$prd->id;
    
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
            
            
        return redirect()->route('admin.facility');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
        
    }


    public function editfacility($id)
    {
    
        
          

        $prd =Facility::find($id);
        
        
        
        return view('Admin.Facility.edit')
            ->with('product', $prd)
            
            ->with('select_attribute', '');

            
    }

    public function updatefacility(Request $request, $id)
    {
      
        
        
        $prdToUpdate = Facility::find($request->id);
        $prdToUpdate->name = $request->Name;
        $prdToUpdate->description = $request->Description;
 
        
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
        
        
        $temp_string2='uploads/facility/'.$prdToUpdate->id;
        $file = $temp_string2.'/1'.$ext;
            
         if (file_put_contents($file, $data)) {
            echo "<p>Image $i was saved as $file.</p>";
         } else {
            echo '<p>Image $i could not be saved.</p>';
         } 
        
            
         

      }
            
            return redirect()->route('admin.facility');
            
            
            
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
            return redirect()->route('admin.facility');
        }
        
        
        
        
        
    }
    
    public function deletefacility($id)
    {
       
        $prd = Facility::find($id);

        return view('Admin.Facility.delete')
            ->with('product', $prd);
    }

    public function destroyfacility(Request $request)
    {
        
       
        $prdToDelete = Facility::find($request->id);
        
        //deleting image folder
        try{
            $src='uploads/news/'.$prdToDelete->id.'/';
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
        
        return redirect()->route('admin.facility');

        
       
        
    }
    
}
