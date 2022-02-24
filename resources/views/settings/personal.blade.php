@extends('layouts.settings')
@section('settingsContent')
	
<div class="personal">
	<h1>Personal Profile</h1>
	<form action='/settings/personal' method="POST">
		@csrf
		<label for="fname">First Name</label><br>
		<input size="50" type="text" id="fname" name="fname" value="{{ DB::table('contactinfo')->where('id',1)->value('firstName') }}"><br>
		<label for="lname">Last Name</label><br>
		<input size="50" type="text" id="lname" name="lname" value="{{ DB::table('contactinfo')->where('id',1)->value('lastName') }}"><br>
		<label for="phone">Phone Number</label><br>
		<input size="50" type="text" id="phone" name="phone" value="{{ DB::table('contactinfo')->where('id',1)->value('phone') }}"><br>
		<label for="email">Email Address</label><br>
		<input size="50" type="text" id="email" name="email" value="{{ DB::table('contactinfo')->where('id',1)->value('email') }}"><br>
		<label for="address">Address</label><br>
		<input size="50" type="text" id="address" name="address" value="{{ DB::table('contactinfo')->where('id',1)->value('address') }}"><br>
		<input type="submit" value="Save">
	</form>
</div>

@endsection