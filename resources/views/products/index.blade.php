@extends('layouts.main')

@section('content')
<div class="pcoded-main-container">
<div class="pcoded-wrapper">
 
<div class="pcoded-content">



<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-tv bg-c-blue"></i>
<div class="d-inline">
<h5>Products</h5>
</div>
</div>
</div>
<div class="col-lg-4">
 <div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item">
<a href="index.html"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item">
<a href="#!">Home</a>
</li>
</ul>
</div>
</div>
</div>
</div>


<div class="card">
<div class="card-header">
<h5>All products</h5>
<span>Lets say you want to sort the fourth column (3) descending and the first column (0) ascending: your order: would look like this: order: [[ 3, 'desc' ], [ 0, 'asc' ]]</span>
</div>
<div class="card-block">
<div class="dt-responsive table-responsive">
<table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
<thead>
 <tr>
<th>Name</th>
<th>Description</th>
<th>Stock </th>
<th>Category</th>
<th>Price | ZWL</th>
<th>Price | USD</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach ($products as $product)
<tr>
<td>{{ $product->product_name }}</td>
<td>{{ $product->description }}</td>
<td>{{ $product->quantity_instock }}</td>
<td>{{ $product->category }}</td>
<td>{{ $product->zwl_price }}</td>
<td>{{ $product->usd_price }}</td>
<td><a href="#!"><i class="icon feather icon-eye f-w-600 f-16 m-r-15 text-c-blue"></i></a><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
</tr>
@endforeach
</tbody>
<tfoot>
<tr>
<th>Name</th>
<th>Description</th>
<th>Stock </th>
<th>Category</th>
<th>Price | ZWL</th>
<th>Price | USD</th>
<th>Action</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>



</div>

</div>
</div>
@endsection
