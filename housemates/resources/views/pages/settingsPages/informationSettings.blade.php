@extends('layouts.settings')
@section('subSettingsPages')
	
<div style="position:absolute; top:250px; left:350px;">
	<form action='/pages/settingsPages/informationSettings' method="POST">
		@csrf
		<label for="housing">Type of Housing</label><br>
		<input size="50" type="text" id="housing" name="housing" placeholder="Enter Text"><br>
		<label for="rent">Rental Company</label><br>
		<input size="50" type="text" id="rent" name="rent" placeholder="Enter Text"><br>
		<label for="hours">Office Hours</label><br>
		<input size="50" type="text" id="hours" name="hours" placeholder="Enter Text"><br>
		<label for="phone">Phone Number</label><br>
		<input size="50" type="text" id="phone" name="phone" placeholder="Enter Text"><br>
		<label for="email">Email Address</label><br>
		<input size="50" type="text" id="email" name="email" placeholder="Enter Text"><br>
		<label for="address">Office Address</label><br>
		<input size="50" type="text" id="address" name="address" placeholder="Enter Text"><br>
		<label for="due">Rent Due By Date</label><br>
		<input size="50" type="text" id="due" name="due" placeholder="Enter Text"><br>
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
		h2 {
			color: #000000;
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