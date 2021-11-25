@extends('layouts.settings')
@section('subSettingsPages')

	<!--<div class="circleBase circle"></div>
	<div class="circleBase subcircle"></div>
	<div style="position:absolute; left:462px; top:364px">
		<h1 style="font-size:300%"><strong>+</strong></h1>
	</div>-->

	
	<div style="position:absolute; top:250px; left:570px;">
		<form action='/pages/settingsPages/personalSettings' method="POST">
			@csrf
			<div class="circleBase circle"></div>
			<div class="circleBase subcircle"></div>
			<div class="circleBase clickable">
				<h1 style="font-size:300%"><strong>+</strong></h1>
			</div>
			<label for="fname">First Name</label><br>
			<input size="50" type="text" id="fname" name="fname" placeholder="Enter Text"><br>
			<label for="lname">Last Name</label><br>
			<input size="50" type="text" id="lname" name="lname" placeholder="Enter Text"><br>
			<label for="phone" style="position:relative; top:125px; left:-250px;">Phone Number</label><br>
			<input size="50" type="text" id="phone" name="phone" placeholder="Enter Text" style="position:relative; top:125px; left:-250px"><br>
			<label for="email" style="position:relative; top:125px; left:-250px;">Email Address</label><br>
			<input size="50" type="text" id="email" name="email" placeholder="Enter Text" style="position:relative; top:125px; left:-250px"><br>
			<label for="address" style="position:relative; top:125px; left:-250px;">Address</label><br>
			<input size="50" type="text" id="address" name="address" placeholder="Enter Text" style="position:relative; top:125px; left:-250px"><br>
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
		h2 {
			color: #000000;
		}
		p {
			background-color: #ffffff;
			border: #ffffff;
			padding: 10px;
		}	
	-->

@endsection