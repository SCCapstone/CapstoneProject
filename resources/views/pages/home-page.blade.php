@extends('layouts.layout')
@section('content')

<h1>Home Page</h1>

<body>

	<div id="box1"></div>
    	<div id="alert-rectangle"></div>
    	<div id="alert2-rectangle"></div>
    	<div style = "position:absolute; left:540px; top:255px; color:black; font-size:72px; text-decoration: underline; font-weight: bold; font-family: Roboto">
	House Name
      	<!-- Change name based on user input -->
    	</div>

	<div style = "position:absolute; left:40px; top:525px; color:black; font-size:48px; font-weight: bold; font-family: Roboto">
		Alerts: <!-- TODO: PULL FROM DB -->
		<!-- @foreach($chores as $chore)
			<p>Alerts: {{ $chorse->phone }}</p>
			<p>Address: {{ $landlord->officeAddress }}</p>
		@endforeach -->
	</div>
    	<!-- display alerts based on user input -->

	<div style = "position:absolute; left:40px; top:725px; color:black; font-size:24px; font-weight: bold; font-family: Roboto">
      	House Reminders:
    	</div>
    	<!-- add vertical line -->
</body>

@endsection
