@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Customer License') }}
 </div>
 <div class="card-body">
 ID : {{ $Customer->id }}
 <br>
 Customer : {{ $Customer->Full_name }}
 <br>
 Sex : {{ $Customer->Sex }}
 <br>
 Age : {{ $Customer->age }}
 <br>
 Nationality : {{ $Customer->nationality }}
 <br>
 kebele_ID : {{ $Customer->kebele_ID }}
 <br>
 Region : {{ $Customer->region }}
 <br>
 Zone : {{ $Customer->zone }}
 <br>
 Woreda : {{ $Customer->woreda }}
 <br>
 Kebele : {{ $Customer->kebele }}
 <br>
 trade_type : {{ $Customer->trade_type }}
 <br>
 trade_name : {{ $Customer->trade_name }}
 <br>
 trade_code : {{ $Customer->trade_code }}
 <br>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('Customer/get_license') }}" role="button"> {{ __('Back') }}</a>
 </div>
</div>
@endsection