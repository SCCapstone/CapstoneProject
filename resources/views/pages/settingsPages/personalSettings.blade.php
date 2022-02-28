@extends('layouts.settings')
@section('settingsContent')
	
<div class="personal">
	<h1>Personal Profile</h1>
	<form action='/pages/settingsPages/personalSettings' method="POST">
		@csrf
		<label for="name">Name</label><br>
		<input size="50" type="text" id="name" name="name" value="{{ DB::table('users')->where('id', Auth::user()->id)->value('name') }}"><br>
		<label for="phone">Phone Number</label><br>
		<input size="50" type="text" id="phone" name="phone" value="{{ DB::table('users')->where('id', Auth::user()->id)->value('phone') }}"><br>
		<label for="email">Email Address</label><br>
		<input size="50" type="text" id="email" name="email" value="{{ DB::table('users')->where('id', Auth::user()->id)->value('email') }}"><br>
		<label for="address">Address</label><br>
		<input size="50" type="text" id="address" name="address" value="{{ DB::table('users')->where('id', Auth::user()->id)->value('address') }}"><br>
		<label for="calendar">Calendar</label><br>
		<input size="50" type="text" id="calendar" name="calendar" value="{{ DB::table('users')->where('id', Auth::user()->id)->value('calendar') }}"><br>
		<input type="submit" value="Publish">
		</form>
</div>

@endsection