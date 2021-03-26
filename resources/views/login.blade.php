@extends('layout')
 
@section('content')
<h2 style="margin-left:20px;">Login Luxe Laundry</h2><br />

   @if(isset(Auth::user()->email))
    <script>window.location="successlogin";</script>
   @endif

   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif

   <form method="post" action="{{ url('checklogin') }}">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Enter Email</label>
     <input type="email" name="email" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Password</label>
     <input type="password" name="password" class="form-control" />
    </div>
    <div class="form-group">
     <input type="submit" name="login" class="btn btn-primary" value="Login" />
     <a href="{{ url('registration') }}"> or SIGN UP </a>
    </div>
   </form>
    <br>
    <br>
@endsection
