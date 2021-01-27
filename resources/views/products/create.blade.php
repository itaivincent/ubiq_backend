@extends('layouts.main')

@section('content')

<div class="pcoded-main-container">
<div class="pcoded-wrapper">
 
<div class="pcoded-content">


<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">

<div class="page-body">
<div class="row">
<div class="col-sm-12">


<div class="card">
<div class="card-header">
<h5>Create Product</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
</div>
<div class="card-block">
<div class="row">
<div class="col-md-12">
<div id="wizardb">
<section>
<form class="wizard-form" id="verticle-wizard" method="Post" action="{{route('product.store')}}" enctype="multipart/form-data">
{{ csrf_field() }}  
<h3>Product Information</h3>
<fieldset>
<div class="form-group row">
<div class="col-sm-12">
<label for="userName-2" class="block">Product name</label>
</div>
<div class="col-sm-12">
<input id="userName-2b" name="product_name" type="text" class=" form-control">
</div>
</div>
<div class="form-group row">
<div class="col-sm-12">
<label for="email-2" class="block">Description</label>
</div>
<div class="col-sm-12">
<input id="email-2b" name="description" type="text" class=" form-control">
</div>
 </div>
<div class="form-group row">
<div class="col-sm-12">
<label for="password-2" class="block">Color</label>
</div>
<div class="col-sm-12">
<input id="password-2b" name="color" type="text" class="form-control ">
</div>
</div>
<div class="form-group row">
<div class="col-sm-12">
<label for="confirm-2" class="block">Size</label>
</div>
<div class="col-sm-12">
<input id="confirm-2b" name="size" type="text" class="form-control ">
</div>
</div>
</fieldset>
<h3> General information </h3>
<fieldset>
<div class="form-group row">
<div class="col-sm-12">Store</div>
<div class="col-sm-12">
<select name="store_id" class="form-control required">
<option>Select Store</option>
@foreach($stores as $store)
<option value="{{$store->id}}">{{$store->store_name}}</option>
@endforeach
</select>
</div>
</div>

</br>

<div class="form-group row">
<div class="col-sm-12">Catergory</div>
<div class="col-sm-12">
<select name="category_id" class="form-control required">
<option>Select Category</option>
@foreach($categories as $category)
<option value="{{$category->id}}">{{$category->category}}</option>
@endforeach
</select>
</div>
</div>

</br>

<div class="form-group row">
<div class="col-sm-12">Sub Category</div>
<div class="col-sm-12">
<select name="sub_category_id" class="form-control required">
<option>Select Sub-Category</option>
@foreach($subcategories as $category)
<option value="{{$category->id}}">{{$category->sub_category}}</option>
@endforeach
</select>
</div>
</div>

</fieldset>
<h3>Pricing</h3>
<fieldset>
<div class="form-group row">
<div class="col-sm-12">
<label for="University-2" class="block">ZWL Price</label>
</div>
<div class="col-sm-12">
<input id="University-2b" name="zwl_price" type="text" class="form-control required">
</div>
</div>
<div class="form-group row">
<div class="col-sm-12">
<label for="Country-2" class="block">USD Price</label>
</div>
<div class="col-sm-12">
<input id="Country-2b" name="usd_price" type="text" class="form-control required">
</div>
</div>
<div class="form-group row">
<div class="col-sm-12">
<label for="Degreelevel-2" class="block">Quantity Instock</label>
</div>
<div class="col-sm-12">
<input id="Degreelevel-2b" name="quantity_instock" type="text" class="form-control required phone">
</div>
</div>
<div class="form-group row">
<div class="col-sm-12">
<label for="datejoin" class="block">Images</label></br>
<small>*Please note a maximum of 7 images is allowed*</small>
</br>
</div>
<div class="col-sm-12">
<input type="file"  name="images[]"  accept="image/*" multiple="multiple" class="form-control">
</div>
</div>
</fieldset>

</section></br>
<div style="margin-left:700px;">
<button type="submit" class="btn waves-effect waves-light btn-primary btn-outline-primary"><i class="icofont icofont-user-alt-3"></i>Create Product</button>
<button class="btn waves-effect waves-light btn-inverse btn-outline-inverse"><i class="icofont icofont-exchange"></i>Reset</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>


</div>
</div>
</div>





</div>

</div>
</div>


@endsection