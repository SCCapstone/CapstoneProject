@extends('layouts.settings')
@section('settingsContent')
	
<div class="social">
	<h1>Social Media</h1>
	<form action='/pages/settingsPages/socialsSettings' method="POST">
		@csrf
		<label for="insta">Instagram</label><br>
		<input size="50" type="text" id="insta" name="insta" value="{{ DB::table('contactinfo')->where('id',1)->value('instagram') }}"><br>
		<label for="snap">Snapchat</label><br>
		<input size="50" type="text" id="snap" name="snap" value="{{ DB::table('contactinfo')->where('id',1)->value('snapchat') }}"><br>
		<label for="venmo">Venmo</label><br>
		<input size="50" type="text" id="venmo" name="venmo" value="{{ DB::table('contactinfo')->where('id',1)->value('venmo') }}"><br>
		<label for="tt">TikTok</label><br>
		<input size="50" type="text" id="tt" name="tt" value="{{ DB::table('contactinfo')->where('id',1)->value('tiktok') }}"><br>
		<input type="submit" value="Publish">
	</form>
</div>

@endsection