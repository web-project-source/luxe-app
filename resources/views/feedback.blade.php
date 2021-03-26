@extends('layout')
 
@section('content')
<form id="feedback" onSubmit="window.location.reload()" action="mailto:bulat_n@yahoo.com" method="post" enctype="text/plain" target="_blank">
<h2><strong> Feedback </strong></h2>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="email">E-mail</label>
    <input type="text" id="email" name="email" placeholder="Your e-mail..">

	<label for="subject">Subject</label>
    <input type="text" id="subject" name="subject" placeholder="Subject..">

    <label for="textimp">Text</label>
    <textarea id="textimp" name="textimp" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
	<br>
	<br>
	<br>
  </form>

@endsection 
