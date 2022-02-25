@extends('layouts.settings')
@section('subSettingsPages')
	
	<div style="position:absolute; top:250px; left:345px;">
		<form action='/pages/settingsPages/personalSettings' method="POST">
			@csrf
			<label for="name">Name</label><br>
			<input size="50" type="text" id="name" name="name" value="{{ DB::table('users')->where('id', Auth::user()->id)->value('name') }}"><br>
			<label for="phone">Phone Number</label><br>
			<input size="50" type="text" id="phone" name="phone" value="{{ DB::table('users')->where('id', Auth::user()->id)->value('phone') }}" ><br>
			<label for="email">Email Address</label><br>
			<input size="50" type="text" id="email" name="email" value="{{ DB::table('users')->where('id', Auth::user()->id)->value('email') }}" ><br>
			<label for="address">Address</label><br>
			<input size="50" type="text" id="address" name="address" value="{{ DB::table('users')->where('id', Auth::user()->id)->value('address') }}"><br>
			<input type="submit" value="Publish">
		</form>
	</div>

@endsection