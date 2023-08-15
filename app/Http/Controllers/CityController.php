<?php

namespace App\Http\Controllers;

use App\City;
use App\Contact;
use App\portfolio;
use App\Registration;
use App\RequestBlood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CityController extends Controller
{

    function status_updatess($id)
{
	//get product status with the help of product ID
	$product = DB::table('portfolios')
				->select('status')
				->where('pid','=',$id)
				->first();

	//Check user status
	if($product->status == 'ON'){
		$status = 'OFF';
	}else{
		$status = 'ON';
	}

	//update product status
	$values = array('status' => $status );
	DB::table('portfolios')->where('pid',$id)->update($values);

	session()->flash('msg','Product status has been updated successfully.');
   $maindata = DB::table('portfolios')->where('pid',$id)->get();
    return view('frontend.doctorlogin')->with('data',$maindata);
}

   function status_updatescenter($id)
{
	//get product status with the help of product ID
	$product = DB::table('bloodcenters')
				->select('status')
				->where('id','=',$id)
				->first();

	//Check user status
	if($product->status == 'ON'){
		$status = 'OFF';
	}else{
		$status = 'ON';
	}

	//update product status
	$values = array('status' => $status );
	DB::table('bloodcenters')->where('id',$id)->update($values);

	session()->flash('msg','Product status has been updated successfully.');
   $maindata = DB::table('bloodcenters')->where('id',$id)->get();
    return view('User.pages.centerlogin')->with('data',$maindata);
}



    function status_update($id)
{
	//get product status with the help of product ID
	$product = DB::table('portfolios')
				->select('status')
				->where('pid','=',$id)
				->first();

	//Check user status
	if($product->status == 'ON'){
		$status = 'OFF';
	}else{
		$status = 'ON';
	}

	//update product status
	$values = array('status' => $status );
	DB::table('portfolios')->where('pid',$id)->update($values);

	session()->flash('msg','Product status has been updated successfully.');
	return redirect('Admin/all-portfolio');
}

    public function changeMemberStatus(Request $request){
       $members= portfolio::find($request->member_id);
       $members->status=$request->status;
       $members->save();


    }
     
  public function city()
    {
         $res = City::all();
        return view ('Admin.City.index')->with('port', $res);

        
    }

    public function posted(Request $request)
    {
        $cat = new City();
          $cat->name = $request->Name;
            
        $cat->save();
        return redirect()->route('admin.city');
    }
      public function edit($id)
    {
        

        $cat = City::find($id);
        
        return view('Admin.city.edit')
            ->with('product', $cat);
    }
     public function update(Request $request, $id)
    {
      
        $catToUpdate = City::find($request->id);
        $catToUpdate->name = $request->Name;

        $catToUpdate->save();
        
        return redirect()->route('admin.city');
    }

    public function delete($id)
    {
       
        $cat = City::find($id);

        return view('Admin.city.delete')
            ->with('product', $cat);
    }

     public function destroy(Request $request)
    {   
        
        
        
        
        $catToDelete = City::find($request->id);
        $catToDelete->delete();

        

        return redirect()->route('admin.city');
    }
    
    public function create()
    {
        
        return view('Admin.city.create');
            
    }

}
