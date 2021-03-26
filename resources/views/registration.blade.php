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
<form id="registration" action = "/create" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<h2><strong> Registration </strong></h2>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" placeholder="Your e-mail..">

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Password..">

        <br>
	<br>
	<br>

    <input type="submit" value="Submit">
	<br>
	<br>
	<br>
  </form>
@endsection
