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
<form id="neworder" action = "/edit/<?php echo $orders[0]->id; ?>" method="post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<h2><strong> Update Order </strong></h2>
   
    <label>Order Id:</label>
    <?php echo $orders[0]->id; ?> </br>
    
    </br>
    <label>Total Quantity:</label>
    <?php echo $orders[0]->totalQty; ?> </br>
    </br>
    <label for="rejectQty">Reject Quantity:</label>
    <input type="text" id="rejectQty" name="rejectQty" value = '<?php echo $orders[0]->rejectQty; ?>'/>
    
    <label for="status"> Select Status: </label>
    <div class="col-sm-9">
     <select name="status" id="status" class="form-control">

        @foreach($status as $stat) 
        <option value="{{ $stat->id }}" @if($orders[0]->statusId==$stat->id) selected="selected" @endif> {{ $stat->name }}</option>
        @endforeach
    </select>
     
    <label for="dateCollection">Collection Date:</label>
    <input type="date" id="dateCollection" name="dateCollection" value = '<?php echo $orders[0]->dateCollection; ?>'/>
     <br>
     <br>
    <label for="dateReturn">Return Date:</label>
    <input type="date" id="dateReturn" name="dateReturn" value = '<?php echo $orders[0]->dateReturn; ?>'/>
    <br>
    <br>
    <input type="submit" value="Update">
	<br>
	<br>
	<br>
  </form>
@endsection
