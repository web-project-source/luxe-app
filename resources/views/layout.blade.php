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

@yield('content')

<div class="copyright">&copy;2021 - <strong>Luxe Laundry</strong></div>
</div>
<!-- Main Container Ends -->
</body>
</html>
