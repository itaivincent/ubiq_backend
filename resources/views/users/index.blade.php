@extends('layouts.main')

@section('content')
<div class="pcoded-main-container">
<div class="pcoded-wrapper">
 
<div class="pcoded-content">

<div class="card">
<div class="card-header">
<h5>All Users</h5>
<span>Lets say you want to sort the fourth column (3) descending and the first column (0) ascending: your order: would look like this: order: [[ 3, 'desc' ], [ 0, 'asc' ]]</span>
</div>
<div class="card-block">
<div class="dt-responsive table-responsive">
<table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
<thead>
 <tr>
<th>Name</th>
<th>Username</th>
<th>Email</th>
<th>Phone Number</th>
<th>Address</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach ($users as $user)
<tr>
<td>{{ $user->name }}</td>
<td>{{ $user->username }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->phone_number }}</td>
<td>{{ $user->address }}</td>
<td><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a></td>
</tr>
@endforeach
</tbody>
<tfoot>
<tr>
<th>Name</th>
<th>Username</th>
<th>Email</th>
<th>Phone Number</th>
<th>Address</th>
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
