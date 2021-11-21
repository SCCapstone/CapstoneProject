@extends('layouts.settings')
@section('subSettingsPages')


	<div style="position:absolute; top:250px; left:350px;">
		<form action='' method="POST">
			<label for="emname">Emergency Contact Name</label><br>
			<input contenteditable size="50" type="text" id="emname" name="emname" placeholder="Enter Text"><br>
			<label for="emnum">Emergency Contact Number</label><br>
			<input size="50" type="text" id="emnum" name="emnum" placeholder="Enter Text"><br>
			<label for="emrel">Emergency Contact Relation</label><br>
			<input size="50" type="text" id="emrel" name="emrel" placeholder="Enter Text"><br>
			<input type="submit" value="Publish">
		</form>
	</div>

<!--</div>
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
		h6 {
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
			top: 820px;
		}
		.editAndPublish h2 {
			color: #ffffff;
			text-align: center;
		}
	-->

@endsection