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
<form id="neworder" action = "/createproduct" method="post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<h2><strong> New Service </strong></h2>
   
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Name...">

    <label for="description">Description</label>
    <input type="text" id="description" name="description" placeholder="Description...">

    <label for="price">Price</label>
    <input type="text" id="price" name="price" placeholder="Price...">

    <label for="rejectFee">Reject Fee</label>
    <input type="text" id="rejectFee" name="rejectFee" placeholder="Reject Fee...">

    <input type="submit" value="Submit">
	<br>
	<br>
	<br>
  </form>
@endsection
