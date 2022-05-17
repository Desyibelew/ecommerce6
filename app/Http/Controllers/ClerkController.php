<?php

namespace App\Http\Controllers;
use App\Models\Clerk;
use Illuminate\Http\Request;

class ClerkController extends Controller
{
    //
    public function register()
    {
    return view('Clerk.register');
    }
      function store(Request $request)
      
      {
        $Clerk =new Clerk();
        $Clerk->name = $request->name;
        $Clerk->user_name =$request->user_name;
        $Clerk->password =$request->pasword;

       $is_saved = $Clerk->save();
      if($is_saved){
      echo " DESYIBELEW KELKAY YOUR DATA IS SAVED SUCCESFULLLY.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
  
         
      }
      public function give_llicense_to_customer()
{
 $Clerk = Clerk::all();
 return view('Clerk.get_all', compact('Clerk'));
}
public function get_by_id($id)
 {
  $Clerk = Clerk::where('id', $id)->first();
  return view('Clerk.get_by_id', compact('Clerk'));
  }
  public function cancel_license($id)
  {
  Clerk::where('id', $id)->cancel_license();
  return redirect('Clerk/list');
  }
  

    }
