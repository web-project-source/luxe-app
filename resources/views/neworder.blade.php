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
<form id="neworder" action = "/createorder" method="post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<h2><strong> New Order </strong></h2>
   
    <label>Service Id:</label>
    <?php echo $products[0]->id; ?> </br>
    </br>
    <input style="display:none;" name="productId" value = '<?php echo $products[0]->id; ?>'/>
    <label>Name:</label>
    <?php echo $products[0]->name; ?> </br>
    </br>

    <label for="totalQty">Quantity:</label>
    <input type="text" id="totalQty" name="totalQty" placeholder="Quantity...">

    <input type="submit" value="Order">
	<br>
	<br>
	<br>
  </form>
@endsection
