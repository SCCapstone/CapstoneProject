@extends('layouts.layout')
@section('content')
<?php
$randomNum = mt_rand(1000, 9999);
?>
<h1>Room Number Assignment</h1>
<div id="roomNum">
	<h2>Room Number</h2>
	<h3>Input your 4 digit room number below. If you do not have a room number yet click submit and the generated number will be assigned to you.</h3>
	<form action='roomNum' method="POST">
		@csrf
		<label for="roomnum">Room Number</label><br>
		<input type="text" id="roomnum" name="roomnum" value="{{ $randomNum }}"><br>
		<input type="submit" value="Go">
	</form>

</div>

@endsection()