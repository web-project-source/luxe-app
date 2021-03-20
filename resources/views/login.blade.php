<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Luxe Laundry </title>
<link href="{{ URL::asset('css/Template.css') }}" rel="stylesheet" type="text/css">
<style>
.container{background-color:none}
form {background-color: none;
	padding: 14px;
	width:40%
	}
input[type=text],[type=email],[type=password], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
span {float:right;
	padding: 11px;
	}
@media (max-width:500px){
	form {width: 100%;}
	}
h2 {padding: 12px;}
</style>
</head>
<body>
<!-- Main Container -->
<div class="container">
  <!-- Navigation -->
<header>
    <h2 class="logo"><a href= "{{ url('/') }}">Luxe Laundry</a></h2>
  <nav>
      <ul>
                <li><a href="{{ url('login') }}"> LOG IN</a></li>
		<li><a href="{{ url('registration') }}"> SIGN UP</a></li>
		<li><a href="{{ url('viewproducts') }}">SERVICES</a></li>
		<li><a href="{{ url('vieworders') }}">ORDERS</a></li>
                <li><a href="{{ url('newproduct') }}">ADD SERVICE</a></li>
                <li> <a href= "{{ url('contact') }}" >CONTACT</a></li>
		<li><a href="{{ url('feedback') }}"> FEEDBACK</a></li>
      </ul>
    </nav>
</header>
<br>
<br>
<br>
<br>
<h2>Login Luxe Laundry</h2><br />

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
    </div>
   </form>
    <br>
    <br>
	<div class="copyright">&copy;2021 - <strong>Luxe Laundry</strong></div>
</div>
<!-- Main Container Ends -->
</body>
</html>
