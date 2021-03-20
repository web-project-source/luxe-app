<!doctype html>
<html lang="en-US">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Luxe Laundry </title>
<link href="{{ URL::asset('css/Template.css') }}" rel="stylesheet" type="text/css">

<script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today .getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  today.getDate()+'/'+(today.getMonth()+1)+'/'+today.getFullYear()+" "+ h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
</head>
<body onload="startTime()">
<!-- Main Container -->
<div class="container">
  <!-- Navigation -->
<header>
	<h2 class="logo">Luxe Laundry</h2>
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
	<div style="padding-left: 20px; font-weight: bolder;" class="col1">
	  <div align="left"  id="txt"></div>

<h1> Welcome to Luxe Laundry! These are our services:</h1>
	</div>
	<div class="col2">
   @if(isset(Auth::user()->email))
    <div class="alert alert-danger success-block" align="right" >
     <strong>Welcome {{ Auth::user()->email }}</strong>
     <br />
     <a href="{{ url('logout') }}">Logout</a>
    </div>
   @endif
	</div>
	<div class="gallery">
<table border = "1">
<tr>
<td>Id</td>
<td>Name</td>
<td>Price</td>
<td>Reject Fee</td>
</tr>
@foreach ($products as $product)
<tr>
<td>{{ $product->id }}</td>
<td>{{ $product->name }}</td>
<td>{{ $product->price }}</td>
<td>{{ $product->rejectFee }}</td>
</tr>
@endforeach
</table>
  </div>
<div class="copyright">&copy;2021 - <strong>Luxe Laundry</strong></div>
</div>
<!-- Main Container Ends -->
</body>
</html>
