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

<h2 style="margin-left:25px;"><strong> Services: </strong></h2>
   
<table border = "1">
<tr>
<td>Id</td>
<td>Name</td>
<td>Price</td>
<td>Reject Fee</td>
<td>Order</td>
</tr>
@foreach ($products as $product)
<tr>
<td>{{ $product->id }}</td>
<td>{{ $product->name }}</td>
<td>{{ $product->price }}</td>
<td>{{ $product->rejectFee }}</td>
<td><a href = 'editproduct/{{ $product->id }}'>Order</a></td>
</tr>
@endforeach
</table>
<br>
<br>
<br>
@endsection
