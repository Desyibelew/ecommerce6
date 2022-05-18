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
      $Customer -> applicant_full_name = $request->applicant_full_name;
      $Customer->Sex = $request->Sex;
      $Customer->age =$request->age;
      $Customer->nationality =$request->nationality;
      $Customer->kebele_ID =$request->kebele_ID;
      $Customer->region =$request->region;
      $Customer->zone =$request->zone;
      $Customer->woreda =$request->woreda;
      $Customer->kebele =$request->kebele;
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
public function edit($id)
 {
 $Customer = Customer::find($id);
 return view('Customer.edit', compact('Customer'));
 }


 public function update_customer_license(Request $request)
 {
 //Validate
 $request->validate(['applicant_full_name' => 'required' ]);
  $Customer = Customer::find($request->id);
  $Customer->applicant_full_name =$request->applicant_full_name;
  $Customer->sex =$request->sex;
  $Customer->age =$request->age;
  $Customer->nationality =$request->nationality;
  $Customer->kebele_ID =$request->kebele_ID;
  $Customer->region =$request->region;
  $Customer->zone =$request->zone;
  $Customer->woreda =$request->woreda;
  $Customer->kebele =$request->kebele;
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
