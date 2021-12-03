@extends('layouts.settings')
@section('subSettingsPages')

	<div style="position:absolute; top:250px; left:350px;">
		<form action='/pages/settingsPages/emergencySettings' method="POST">
			@csrf
			<label for="emname">Emergency Contact Name</label><br>
			<input size="50" type="text" id="emname" name="emname" value="{{ DB::table('contactinfo')->where('id',1)->value('emergencyName') }}"><br>
			<label for="emnum">Emergency Contact Number</label><br>
			<input size="50" type="text" id="emnum" name="emnum" value="{{ DB::table('contactinfo')->where('id',1)->value('emergencyPhone') }}"><br>
			<label for="emrel">Emergency Contact Relation</label><br>
			<input size="50" type="text" id="emrel" name="emrel" value="{{ DB::table('contactinfo')->where('id',1)->value('emergencyRelation') }}"><br>
			<input type="submit" value="Publish">
		</form>
	</div>

@endsection