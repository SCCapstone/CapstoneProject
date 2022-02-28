@extends('layouts.layout')
@section('content')

<div class="home">
	<h1 class="home-housename">House Name: {{ Auth::user()->house_num }}</h1> <!-- This is now displaying the house -->
	<div class="home-alerts">
		<h1>Alerts:</h1>
		@foreach($chores as $chore) 
		<p>
			Chore: {{ $chore->chore }}<br>
			Urgency: {{ $chore->urgency }}<br>
			Assignee: {{ $chore->assignee }}

<body>

	<div id="box1"></div>
    	<div id="alert-rectangle"></div>
		<!-- Getting rid of house reminders -->
    	<!-- <div id="alert2-rectangle"></div> -->
    	<div style = "position:absolute; left:540px; top:255px; color:black; font-size:72px; text-decoration: underline; font-weight: bold; font-family: Roboto">
	House Name
	<!-- Example session call <h2>{{session('email')}}</h2> -->
      	<!-- Change name based on user input -->
    	</div>

	<div style = "position:absolute; left:40px; top:525px; color:black; font-size:48px; font-weight: bold; font-family: Roboto">
		<form action='/pages/settingsPages/personalSettings' method="POST">
			@csrf
			<label for="alert">Alert</label><br>
			<input size="50" type="text" id="alert" name="alert" value="{{ DB::table('users')->where('id', Auth::user()->id)->value('name') }}"><br>
			<!-- Alerts: -->
		</form>
    </div>
    	<!-- display alerts based on user input -->

		<!-- getting rid of house reminders -->
	<!-- <div style = "position:absolute; left:40px; top:725px; color:black; font-size:24px; font-weight: bold; font-family: Roboto">
      	House Reminders:
    	</div> -->
    	<!-- add vertical line -->
</body>

@endsection
