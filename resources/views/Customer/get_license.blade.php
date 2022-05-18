@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btn-success" href="{{ route('Customer/registor_for_license') }}" role="button"> {{ __('New Customer') }}
</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Dear Customer this is your license Paper') }}
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>
 ID
 </th>
<th>
Applicant_full_name
 </th>
<th>
Sex
 </th>
 <th>
     Age
 </th>
 <th>
   Nationality  
 </th>
 

 <th>
 kebele_ID
 </th>
 <th>
     Region
 </th>
 <th>
     Zone
 </th>
 <th>
     Woreda
 </th>
 <th>
     Kebele
 </th>
 </tr>
 </thead>
 <tbody>
 @foreach($Customer as $Customer)
 <tr>
 <td> {{ $Customer->id }}</td>
 <td> {{ $Customer->applicant_full_name }}</td>
 <td> {{ $Customer->Sex }}</td>
 <td> {{ $Customer->age }}</td>
 <td> {{ $Customer->nationality }}</td>
 <td> {{ $Customer->kebele_ID }}</td>
 <td> {{ $Customer->region }}</td>
 <td> {{ $Customer->zone }}</td>
 <td> {{ $Customer->woreda }}</td>
 <td> {{ $Customer->kebele }}</td>
 <td>
 <a class="btn btn-xs btn-info" title="Detail" href="/Customer/get_by_id/{{ $Customer->id }}">               Details</a>
 <a class="btn btn-xs btn-success" title="Edit" href="/Customer/update_license/{{$Customer->id }}"> Update</a>
 <a class="btn btn-xs btn-danger" title="Delete" href="/Customer/cancel_customer_license/{{ $Customer->id }}">Delete</a>
 </td>
 </tr>
@endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection

