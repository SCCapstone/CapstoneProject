@extends('layouts.settings')
@section('subSettingsPages')
	
	<div style="position:absolute; top:250px; left:570px;">
		<form action='/pages/settingsPages/personalSettings' method="POST">
			@csrf
			<label for="name">Name</label><br>
			<input size="50" type="text" id="name" name="name" value="{{ DB::table('users')->where('id', Auth::user()->id)->value('name') }}"><br>
			<label for="phone" style="position:relative; top:125px; left:-250px;">Phone Number</label><br>
			<input size="50" type="text" id="phone" name="phone" value="{{ DB::table('users')->where('id', Auth::user()->id)->value('phone') }}" style="position:relative; top:125px; left:-250px"><br>
			<label for="email" style="position:relative; top:125px; left:-250px;">Email Address</label><br>
			<input size="50" type="text" id="email" name="email" value="{{ DB::table('users')->where('id', Auth::user()->id)->value('email') }}" style="position:relative; top:125px; left:-250px"><br>
			<label for="address" style="position:relative; top:125px; left:-250px;">Address</label><br>
			<input size="50" type="text" id="address" name="address" value="{{ DB::table('users')->where('id', Auth::user()->id)->value('address') }}" style="position:relative; top:125px; left:-250px"><br>
			<input type="submit" value="Publish">
		</form>
	</div>

@endsection