@extends('layouts.settings')
@section('subSettingsPages')
	
	<div style="position:absolute; top:250px; left:570px;">
		<form action='/pages/settingsPages/personalSettings' method="POST">
			@csrf
			<div class="circleBase circle"></div>
			<div class="circleBase subcircle"></div>
			<div class="circleBase clickable">
				<h1 style="font-size:300%"><strong>+</strong></h1>
			</div>
			<label for="fname">First Name</label><br>
			<input size="50" type="text" id="fname" name="fname" value="{{ DB::table('contactinfo')->where('id',1)->value('firstName') }}"><br>
			<label for="lname">Last Name</label><br>
			<input size="50" type="text" id="lname" name="lname" value="{{ DB::table('contactinfo')->where('id',1)->value('lastName') }}"><br>
			<label for="phone" style="position:relative; top:125px; left:-250px;">Phone Number</label><br>
			<input size="50" type="text" id="phone" name="phone" value="{{ DB::table('contactinfo')->where('id',1)->value('phone') }}" style="position:relative; top:125px; left:-250px"><br>
			<label for="email" style="position:relative; top:125px; left:-250px;">Email Address</label><br>
			<input size="50" type="text" id="email" name="email" value="{{ DB::table('contactinfo')->where('id',1)->value('email') }}" style="position:relative; top:125px; left:-250px"><br>
			<label for="address" style="position:relative; top:125px; left:-250px;">Address</label><br>
			<input size="50" type="text" id="address" name="address" value="{{ DB::table('contactinfo')->where('id',1)->value('address') }}" style="position:relative; top:125px; left:-250px"><br>
			<input type="submit" value="Publish">
		</form>
	</div>

@endsection