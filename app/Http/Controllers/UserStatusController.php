<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\portfolio;

class UserStatusController extends Controller
{
	 /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('users',compact('users'));
    }
  
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
   public function changeStatus(Request $request)

    {

        $user = portfolio::find($request->user_id);

        $user->status = $request->status;

        $user->save();

  

        return response()->json(['success'=>'Status change successfully.']);

    }

}