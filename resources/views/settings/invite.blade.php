@extends('layouts.settings')
@section('settingsContent')
	
<div class="invite">
	<h1>Invite a Housemate</h1>
	<form action='/settings/invite' method="POST">
		@csrf
		<label for="r1">Roommate 1</label><br>
		<input size="50" type="text" id="r1" name="r1" value="{{ DB::table('contactinfo')->where('id',1)->value('roommate1') }}"><br>
		<label for="r2">Roommate 2</label><br>
		<input size="50" type="text" id="r2" name="r2" value="{{ DB::table('contactinfo')->where('id',1)->value('roommate2') }}"><br>
		<label for="r3">Roommate 3</label><br>
		<input size="50" type="text" id="r3" name="r3" value="{{ DB::table('contactinfo')->where('id',1)->value('roommate3') }}"><br>
		<label for="r4">Roommate 4</label><br>
		<input size="50" type="text" id="r4" name="r4" value="{{ DB::table('contactinfo')->where('id',1)->value('roommate4') }}"><br>
		<label for="invite">Invite Roommate</label><br>
		<input size="50" type="text" id="invite" name="invite" value="{{ DB::table('contactinfo')->where('id',1)->value('inviteRoommate') }}"><br>
		<input type="submit" value="Publish">
	</form>
</div>

@endsection