@extends('layouts.settings')
@section('subSettingsPages')
	
	<div style="position:absolute; top:250px; left:350px;">
		<form action='/pages/settingsPages/socialsSettings' method="POST">
			@csrf
			<label for="insta">Instagram</label><br>
			<input size="50" type="text" id="insta" name="insta" placeholder="Enter Text"><br>
			<label for="snap">Snapchat</label><br>
			<input size="50" type="text" id="snap" name="snap" placeholder="Enter Text"><br>
			<label for="venmo">Venmo</label><br>
			<input size="50" type="text" id="venmo" name="venmo" placeholder="Enter Text"><br>
			<label for="tt">TikTok</label><br>
			<input size="50" type="text" id="tt" name="tt" placeholder="Enter Text"><br>
			<input type="submit" value="Publish">
		</form>
	</div>

<!--
	<div class="editAndPublish" style="top:820px; left:1000px">
		<h2>Edit</h2>
	</div>

	<div class="editAndPublish" style="top:820px; left:1150px">
		<h2>Publish</h2>
	</div>
-->

<!--
	.editAndPublish {
		background-color: #000000;
		border-radius: 10%;
		position: absolute;
		width: 100px;
	}
	.editAndPublish h2 {
		color: #ffffff;
		text-align: center;
	}
	h2 {
		color: #000000;
	}
	p {
		background-color: #ffffff;
		border: #ffffff;
		padding: 10px;
	}	
	.inputField {
		background-color: #ffffff;
		width: 400px;
		position: relative;
		top: -15px;
	}
	.inputField p {
		color: #d3d3d3;
	}
	h4 {
		color: #000000;
	}
-->

@endsection