@extends('layouts.settings')
@section('subSettingsPages')
	
	<div style="position:absolute; top:250px; left:570px;">
		<form action='/pages/settingsPages/personalSettings' method="POST">
			@csrf
			<label for="fname">Name</label><br>
			<input size="50" type="text" id="fname" name="fname" value="{{ DB::table('users')->where(Auth::user()->name)->value('name') }}"><br>
			<label for="phone" style="position:relative; top:125px; left:-250px;">Phone Number</label><br>
			<input size="50" type="text" id="phone" name="phone" value="{{ DB::table('users')->where(Auth::user()->phone)->value('phone') }}" style="position:relative; top:125px; left:-250px"><br>
			<label for="email" style="position:relative; top:125px; left:-250px;">Email Address</label><br>
			<input size="50" type="text" id="email" name="email" value="{{ DB::table('users')->where(Auth::user()->email)->value('email') }}" style="position:relative; top:125px; left:-250px"><br>
			<label for="address" style="position:relative; top:125px; left:-250px;">Address</label><br>
			<input size="50" type="text" id="address" name="address" value="{{ DB::table('users')->where(Auth::user()->address)->value('address') }}" style="position:relative; top:125px; left:-250px"><br>
			<input type="submit" value="Publish">
		</form>
	</div>

@endsection