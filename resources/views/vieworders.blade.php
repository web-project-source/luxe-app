@extends('layout')
 
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('status'))
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('status') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('failed') }}
</div>
@endif

<h2 style="margin-left:25px;"><strong> View Orders </strong></h2>
   
<table border = "1">
<tr>
<td>ID</td>
<td>Date</td>
<td>User</td>
<td>Service</td>
<td>Total Quantity</td>
<td>Reject Quantity</td>
<td>Status</td>
<td>Collection Date</td>
<td>Return Date</td>
<td>Edit</td>
</tr>
@foreach ($orders as $order)
<tr>
<td>{{ $order->id }}</td>
<td>{{ $order->created_at }}</td>
<td>{{ $order->userName }}</td>
<td>{{ $order->productName }}</td>
<td>{{ $order->totalQty }}</td>
<td>{{ $order->rejectQty }}</td>
<td>{{ $order->statusName }}</td>
<td>{{ $order->dateCollection }}</td>
<td>{{ $order->dateReturn }}</td>
<td><a href = 'edit/{{ $order->id }}'>Update</a></td>
</tr>
@endforeach
</table>
<br>
<br>
<br>
@endsection
