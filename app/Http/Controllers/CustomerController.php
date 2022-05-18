<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    
    public function registor_for_license()
  {
  return view('Customer.registor_for_license');
  }

    function store(Request $request)
    
    {
      $Customer =new Customer();
      $Customer -> Full_name = $request->Full_name;
      $Customer->Sex = $request->Sex;
      $Customer->age =$request->age;
      $Customer->nationality =$request->nationality;
      $Customer->kebele_ID =$request->kebele_ID;
      $Customer->region =$request->region;
      $Customer->zone =$request->zone;
      $Customer->woreda =$request->woreda;
      $Customer->kebele =$request->kebele;
      $Customer->trade_type =$request->trade_type;
      $Customer->trade_name =$request->trade_name;
      $Customer->trade_code =$request->trade_code;
     $is_saved = $Customer->save();
    if($is_saved){
    echo " DESYIBELEW YOUR DATA IS SAVED SUCCESSFULLY.";
               }
    else{
     echo "Sorry, try again something went wrong.";
       }   
    }

    public function get_license()
{
 $Customer = Customer::all();
 return view('Customer.get_license', compact('Customer'));
}
public function update_license($id)
 {
 $Customer = Customer::find($id);
 return view('Customer.update_license', compact('Customer'));
 }

 public function update_customer_license(Request $request)
 {
 //Validate
 $request->validate(['Full_name' => 'required' ]);
  $Customer = Customer::find($request->id);
  $Customer->Full_name =$request->Full_name;
  $Customer->sex =$request->sex;
  $Customer->age =$request->age;
  $Customer->nationality =$request->nationality;
  $Customer->kebele_ID =$request->kebele_ID;
  $Customer->region =$request->region;
  $Customer->zone =$request->zone;
  $Customer->woreda =$request->woreda;
  $Customer->kebele =$request->kebele;
  $Customer->trade_type =$request->trade_type;
  $Customer->trade_name =$request->trade_name;
  $Customer->trade_code =$request->trade_code;
  $Customer->save();
  return redirect('Customer/get_license');
  }

  public function cancel_customer_license($id)

 {
 Customer::where('id', $id)->delete();
 return redirect('Customer/get_license');
 }

 public function get_by_id($id)
 {
  $Customer = Customer::where('id', $id)->first();
  return view('Customer.get_by_id', compact('Customer'));
  }
}
