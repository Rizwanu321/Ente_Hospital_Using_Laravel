<?php

namespace App\Http\Controllers;

use App\portfolio;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class LiveSearch extends Controller
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





    function index()
    {
     return view('live_search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('portfolio')
         ->where('pid', 'like', '%'.$query.'%')
         ->orWhere('title', 'like', '%'.$query.'%')
         ->orWhere('category', 'like', '%'.$query.'%')
         ->orWhere('qualification', 'like', '%'.$query.'%')
         ->orWhere('position', 'like', '%'.$query.'%')
         ->orderBy('category', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('portfolio')
         ->orderBy('category', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->pid.'</td>
         <td>'.$row->image.'</td>
         <td>'.$row->category.'</td>
         <td>'.$row->qualification.'</td>
         <td>'.$row->position.'</td>
          <td>'.$row->qualification.'</td>
         <td>'.$row->status.'</td>
         <td>
           
         </td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}

