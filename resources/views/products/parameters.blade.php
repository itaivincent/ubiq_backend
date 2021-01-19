@extends('layouts.main')

@section('content')


<div class="pcoded-main-container">
<div class="pcoded-wrapper">
 
<div class="pcoded-content">


<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-layers bg-c-blue"></i>
<div class="d-inline">
<h5>Products Parameters</h5>

</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item">
<a href="index.html"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="#!">Products</a> </li>
<li class="breadcrumb-item"><a href="#!">Parameters</a> </li>
</ul>
</div>
</div>
</div>
</div>


<div class="row">

<div class="col-xl-4 col-md-12">
<div class="card proj-t-card">
<div class="card-body">
<div class="row align-items-center m-b-30">
<div class="col-auto">
<i class="far fa-calendar-check text-c-red f-30"></i>
</div>
<div class="col p-l-0">
<h6 class="m-b-5">Total Categories</h6>
<h6 class="m-b-0 text-c-red">Products</h6>
</div>
</div>
<div class="row align-items-center text-center">
<div class="col">
<a data-modal="modal-8"  data-toggle="modal" href="#modal-8"> <h6 class="fas fa-exchange-alt text-c-red f-18"></h6></a></div>
<div class="col"><i class="fas fa-exchange-alt text-c-red f-18"></i></div>
<div class="col">
<a href="#"> <h6 class="fas fa-exchange-alt text-c-red f-18"></h6></a></div>
</div>
<h6 class="pt-badge bg-c-red">5</h6>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="card proj-t-card">
<div class="card-body">
<div class="row align-items-center m-b-30">
<div class="col-auto">
<i class="fas fa-paper-plane text-c-green f-30"></i>
</div>
<div class="col p-l-0">
<h6 class="m-b-5">Project Launched</h6>
<h6 class="m-b-0 text-c-green">Live Update</h6>
</div>
</div>
<div class="row align-items-center text-center">
<div class="col">
<h6 class="m-b-0">3 Year</h6></div>
<div class="col"><i class="fas fa-exchange-alt text-c-green f-18"></i></div>
<div class="col">
<h6 class="m-b-0">623</h6></div>
</div>
<h6 class="pt-badge bg-c-green">76%</h6>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="card proj-t-card">
<div class="card-body">
<div class="row align-items-center m-b-30">
<div class="col-auto">
<i class="fas fa-lightbulb text-c-yellow f-30"></i>
</div>
<div class="col p-l-0">
<h6 class="m-b-5">Unique Innovation</h6>
<h6 class="m-b-0 text-c-yellow">Live Update</h6>
</div>
</div>
<div class="row align-items-center text-center">
<div class="col">
<h6 class="m-b-0">1 Month</h6></div>
<div class="col"><i class="fas fa-exchange-alt text-c-yellow f-18"></i></div>
<div class="col">
<h6 class="m-b-0">248</h6></div>
</div>
<h6 class="pt-badge bg-c-yellow">73%</h6>
</div>
</div>
</div>



</div>

<!-- Modals -->
<div class="modal fade" id="modal-8" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Create Category</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form method="Post" action="{{ route('parameters.store') }}" enctype="multipart/form-data">
{{ csrf_field() }}
 <div class="form-group row">
<div class="col-sm-12">
<input type="text" name="category" class="form-control" placeholder="Category">
</div>
</div>
<div class="form-group row">
<div class="col-sm-12">
<select name="store_id" class="form-control form-control-inverse">
<option value="opt1">Select Store</option>
@foreach ($stores as $store)
<option value="{{$store->id}}">{{ $store->store_name}}</option>
@endforeach
</select>
</div>
</div>
<div class="form-group row">
<div class="col-sm-12">
<input type="file"  name="images" class="form-control">
</div>
</div>

<div class="modal-footer">
<button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
<button type="submit"  class="btn btn-primary waves-effect waves-light ">Save changes</button>
</form>
</div>
</div>
</div>
</div>
<!--  -->

</div>

</div>
</div>




@endsection