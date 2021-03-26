@extends('layout')

@section('content')

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
<br>
  </div>
@endsection
