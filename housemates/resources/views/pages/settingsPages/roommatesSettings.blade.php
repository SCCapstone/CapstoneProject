@extends('layouts.settings')
@section('subSettingsPages')
	
	<div style="position:absolute; top:250px; left:350px;">
		<form action='' method="POST">
			<label for="r1">Roommate 1</label><br>
			<input size="50" type="text" id="r1" name="r1" placeholder="Enter Text"><br>
			<label for="r2">Roommate 2</label><br>
			<input size="50" type="text" id="r2" name="r2" placeholder="Enter Text"><br>
			<label for="r3">Roommate 3</label><br>
			<input size="50" type="text" id="r3" name="r3" placeholder="Enter Text"><br>
			<label for="r4">Roommate 4</label><br>
			<input size="50" type="text" id="r4" name="r4" placeholder="Enter Text"><br>
			<label for="invite">Invite Roommate</label><br>
			<input size="50" type="text" id="invite" name="invite" placeholder="Enter Text"><br>
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
	-->

@endsection