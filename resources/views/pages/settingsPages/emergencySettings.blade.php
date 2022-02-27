@extends('layouts.settings')
@section('settingsContent')

<div class="emergency">
	<h1>Emergency Contact</h1>
	<form action='/pages/settingsPages/emergencySettings' method="POST">
		@csrf
		<label for="emname">Emergency Contact Name</label><br>
		<input size="50" type="text" id="emname" name="emname" value="{{ DB::table('users')->where('id', Auth::user()->id)->value('emergencyName') }}"><br>
		<label for="emnum">Emergency Contact Number</label><br>
		<input size="50" type="text" id="emnum" name="emnum" value="{{ DB::table('users')->where('id', Auth::user()->id)->value('emergencyPhone') }}"><br>
		<label for="emrel">Emergency Contact Relation</label><br>
		<input size="50" type="text" id="emrel" name="emrel" value="{{ DB::table('users')->where('id', Auth::user()->id)->value('emergencyRelation') }}"><br>
		<input type="submit" value="Publish">
	</form>
</div>

@endsection