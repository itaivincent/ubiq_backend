@extends('layouts.main')
@section('content')

<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<div class="pcoded-content">

<div class="card">
<div class="card-header">
<h5>Create Store</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
<form  method="post" action="{{ route('stores.store')}}" >
{{ csrf_field() }}
<div class="form-group row">

<label class="col-sm-2 col-form-label">Store Name</label>
 <div class="col-sm-4">
<input type="text" name="store_name" class="form-control form-control-normal" placeholder="store name">
</div>


<label class="col-sm-2 col-form-label">Store Owner</label>
 <div class="col-sm-4">
 <select name="store_owner" class="form-control form-control-inverse">
<option value="opt1">Select Owner</option>
@foreach ($sellers as $seller)
<option value="{{$seller->id}}">{{ $seller->name}}</option>
@endforeach
</select>
</div>

</div>

<div class="form-group row">

<label class="col-sm-2 col-form-label">Promo</label>
 <div class="col-sm-4">
<input type="text"  name="promo" class="form-control form-control-normal" placeholder="Promo description">
</div>


<label class="col-sm-2 col-form-label">Store Phone #</label>
 <div class="col-sm-4">
<input type="text" name="phone_number"  class="form-control form-control-normal" placeholder="phone number">
</div>

</div>


<div class="form-group row">

<label class="col-sm-2 col-form-label">Store Email</label>
 <div class="col-sm-4">
<input type="text"  name="email" class="form-control form-control-normal" placeholder="store email">
</div>

<label class="col-sm-2 col-form-label">Store Address</label>
<div class="col-sm-4">
<textarea rows="5" cols="5" class="form-control" name="address" placeholder="Address"></textarea>
</div>

</div>

<button type="submit" class="btn waves-effect waves-light btn-primary btn-outline-primary"><i class="icofont icofont-user-alt-3"></i>Create Store</button>
<button class="btn waves-effect waves-light btn-inverse btn-outline-inverse"><i class="icofont icofont-exchange"></i>Reset</button>
</div>
</form>
</div>
</div>

</div>

</div>
</div>

@endsection
