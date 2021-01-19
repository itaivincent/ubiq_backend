@extends('layouts.main')
@section('content')

<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<div class="pcoded-content">

<div class="card">
<div class="card-header">
<h5>Create User</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
<form  method="post" action="{{ route('users.store')}}" >
{{ csrf_field() }}
<div class="form-group row">

<label class="col-sm-2 col-form-label">Name</label>
 <div class="col-sm-4">
<input type="text" name="name" class="form-control form-control-normal" placeholder="full name">
</div>


<label class="col-sm-2 col-form-label">Username</label>
 <div class="col-sm-4">
<input type="text"  name="username" class="form-control form-control-normal" placeholder="username">
</div>

</div>

<div class="form-group row">

<label class="col-sm-2 col-form-label">Email</label>
 <div class="col-sm-4">
<input type="email"  name="email" class="form-control form-control-normal" placeholder="email">
</div>


<label class="col-sm-2 col-form-label">Phone #</label>
 <div class="col-sm-4">
<input type="text" name="phone_number"  class="form-control form-control-normal" placeholder="phone number">
</div>

</div>

<div class="form-group row">

<label class="col-sm-2 col-form-label">Password</label>
 <div class="col-sm-4">
<input type="password" name="password"  class="form-control form-control-normal" placeholder="password">
</div>


<label class="col-sm-2 col-form-label">Confirm Password</label>
 <div class="col-sm-4">
<input type="password" name="confirm_password"  class="form-control form-control-normal" placeholder="confirm password">
</div>

</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Address</label>
<div class="col-sm-10">
<textarea rows="5" cols="5" class="form-control" name="address" placeholder="Address"></textarea>
</div>

</div>

<button type="submit" class="btn waves-effect waves-light btn-primary btn-outline-primary"><i class="icofont icofont-user-alt-3"></i>Create User</button>
<button class="btn waves-effect waves-light btn-inverse btn-outline-inverse"><i class="icofont icofont-exchange"></i>Reset</button>
</div>
</form>
</div>
</div>

</div>

</div>
</div>

@endsection
