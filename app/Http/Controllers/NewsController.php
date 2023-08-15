<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Breakingnews;
use App\News;
use App\portcat;
use App\portfolio;
USE Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

      public function gallery()
    {
        
        return view ('frontend.gallary');

        
    }

    public function news()
    {
         $res = News::all();
        return view ('frontend.pages.news')->with('news', $res);

        
    }
    public function doctor()
    {
         $res = portfolio::all();
        return view ('frontend.doctor')->with('port', $res);

        
    }



    

    public function depts()
    {
         

        $data = DB::table('portcats')->get();
      
        return view ('frontend.departments',['depts'=>$data]);
    }

     public function deptviews($pcid)
    {

        $port = DB::table('portfolios')->get();
        

           $data = DB::table('portcats')->get();
        $maindata = DB::table('portcats')->where('pcid',$pcid)->first();
         return view ('frontend.deptdetails',['produts'=>$data,'p'=>$maindata,'data'=>$port]);
   
        
     
    }

     public function blooddeptviews($id)
    {

        $port = DB::table('bloodcenters')->get();
        

        $maindata = DB::table('bloodcenters')->where('id',$id)->first();
         return view ('User.pages.bloodcenterdetail',['p'=>$maindata,'data'=>$port]);
   
        
     
    }
     public function donerblooddeptviews($id)
    {

        $port = DB::table('bloodcenters')->get();
        

        $maindata = DB::table('bloodcenters')->where('id',$id)->first();
         return view ('Donor.pages.bloodcenterdetail',['p'=>$maindata,'data'=>$port]);
   
        
     
    }
     public function rblooddeptviews($id)
    {

        $port = DB::table('bloodcenters')->get();
        

        $maindata = DB::table('bloodcenters')->where('id',$id)->first();
         return view ('Requestor.pages.bloodcenterdetail',['p'=>$maindata,'data'=>$port]);
   
        
     
    }

    public function view($id)
    {
        
        $res =  News::find($id);
        $res1 = News::all();
       
        return view('frontend.newsdetails')
            ->with('p', $res)
            ->with('products', $res1);
            
     
    }

    public function index()
    {
    	$res = Breakingnews::all();
    
    	return view('Admin.News.Breakingnews.index')
            ->with('brnews', $res);
            
    }
    
    public function posted(Request $request)
    {
        $cat = new Breakingnews();
        $cat->description = $request->Name;
        $cat->save();
        return redirect()->route('admin.Breakingnews');
    }
      public function edit($id)
    {
        

        $cat = Breakingnews::find($id);
        
        return view('Admin.News.Breakingnews.edit')
            ->with('brnews', $cat);
    }
     public function update(Request $request, $id)
    {
      
        $catToUpdate = Breakingnews::find($request->id);
        $catToUpdate->description = $request->Name;
      
        $catToUpdate->save();
        
        return redirect()->route('admin.Breakingnews');
    }

    public function delete($id)
    {
       
        $cat = Breakingnews::find($id);

        return view('Admin.News.Breakingnews.delete')
            ->with('brnews', $cat);
    }

     public function destroy(Request $request)
    {   
        
        
        
        
        $catToDelete = Breakingnews::find($request->id);
        $catToDelete->delete();

        

        return redirect()->route('admin.Breakingnews');
    }
    public function indexs()
    {
    	$res = News::all();
    
    	return view('Admin.News.index')
            ->with('prdlist', $res);
            
    }
    public function create()
    {
        
        return view('Admin.News.create');
            
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
            
    
            $prd = new News();
            $prd->image_name = "1".$ext;
            $prd->name = $request->Name;
            $prd->description = $request->Description;
           
            $prd->save();
            
            

            $img[$i] = str_replace(' ', '+', $img[$i]);
            $data = base64_decode($img[$i]);
            
            $temp_string='/uploads/news/'.$prd->id;
            $temp_string2='uploads/news/'.$prd->id;
    
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
            
            
        return redirect()->route('admin.newss');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
        
    }


    public function editnews($id)
    {
    
        
          

        $prd =News::find($id);
        
        
        
        return view('Admin.News.edit')
            ->with('product', $prd)
            
            ->with('select_attribute', '');

            
    }

    public function updatenews(Request $request, $id)
    {
      
        
        
        $prdToUpdate = News::find($request->id);
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
        
        
        $temp_string2='uploads/news/'.$prdToUpdate->id;
        $file = $temp_string2.'/1'.$ext;
            
         if (file_put_contents($file, $data)) {
            echo "<p>Image $i was saved as $file.</p>";
         } else {
            echo '<p>Image $i could not be saved.</p>';
         } 
        
            
         

      }
            
            return redirect()->route('admin.newss');
            
            
            
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
            return redirect()->route('admin.newss');
        }
        
        
        
        
        
    }
    
    public function deletenews($id)
    {
       
        $prd = News::find($id);

        return view('Admin.News.delete')
            ->with('product', $prd);
    }

    public function destroynews(Request $request)
    {
        
       
        $prdToDelete = News::find($request->id);
        
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
        
        return redirect()->route('admin.newss');

        
       
        
    }
    
    
}
