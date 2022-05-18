@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('Please registor_for_license YOUR Customer') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('Customer/registor_for_license') }}"
>
 @csrf
 <div class="form-group row">
 <label for="applicant_full_name" class="col-md-4 col-formlabel text-md-right">{{ __('Applicant_full_name') }}</label>
 <div class="col-md-6">
 <input id="applicant_full_name" type="text" class="formcontrol @error('applicant_full_name') isinvalid @enderror" name="applicant_full_name" value="{{ old('applicant_full_name') }}" required autocomplete="
applicant_full_name" autofocus>
 @error('applicant_full_name')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="Sex" class="col-md-4 col-formlabel text-md-right">{{ __('Sex') }}</label>
 <div class="col-md-6">
 <input id="Sex" type="text" class="formcontrol @error('Sex') isinvalid @enderror" name="Sex" value="{{ old('Sex') }}" required autocomplete
="Sex">
 @error('Sex')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="age" class="col-md-4 col-formlabel text-md-right">{{ __('Age') }}</label>
 <div class="col-md-6">
 <input id="age" type="text" class="formcontrol @error('age') isinvalid @enderror" name="age" value="{{ old('age') }}" required autocomplete
="age">
 @error('age')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="nationality" class="col-md-4 col-formlabel text-md-right">{{ __('nationality') }}</label>
 <div class="col-md-6">
 <input id="nationality" type="text" class="formcontrol @error('nationality') isinvalid @enderror" name="nationality" value="{{ old('nationality') }}" required autocomplete
="nationality">
 @error('nationality')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="kebele_ID" class="col-md-4 col-formlabel text-md-right">{{ __('kebele_ID') }}</label>
 <div class="col-md-6">
 <input id="kebele_ID" type="text" class="formcontrol @error('kebele_ID') isinvalid @enderror" name="kebele_ID" value="{{ old('kebele_ID') }}" required autocomplete
="kebele_ID">
 @error('kebele_ID')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="region" class="col-md-4 col-formlabel text-md-right">{{ __('region') }}</label>
 <div class="col-md-6">
 <input id="region" type="text" class="formcontrol @error('region') isinvalid @enderror" name="region" value="{{ old('region') }}" required autocomplete
="region">
 @error('region')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="zone" class="col-md-4 col-formlabel text-md-right">{{ __('zone') }}</label>
 <div class="col-md-6">
 <input id="zone" type="text" class="formcontrol @error('zone') isinvalid @enderror" name="zone" value="{{ old('zone') }}" required autocomplete
="zone">
 @error('zone')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="woreda" class="col-md-4 col-formlabel text-md-right">{{ __('woreda') }}</label>
 <div class="col-md-6">
 <input id="woreda" type="text" class="formcontrol @error('woreda') isinvalid @enderror" name="woreda" value="{{ old('woreda') }}" required autocomplete
="woreda">
 @error('woreda')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="kebele" class="col-md-4 col-formlabel text-md-right">{{ __('kebele') }}</label>
 <div class="col-md-6">
 <input id="kebele" type="text" class="formcontrol @error('kebele') isinvalid @enderror" name="kebele" value="{{ old('kebele') }}" required autocomplete
="kebele">
 @error('kebele')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
 <button type="submit" class="btn btn-primary">
 {{ __('registor_for_license') }}
 </button>
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection