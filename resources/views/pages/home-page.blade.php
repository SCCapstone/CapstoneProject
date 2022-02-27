@extends('layouts.layout')
@section('content')

<h1>Home Page</h1>

<body>

	<div id="box1"></div>
    	<div id="alert-rectangle"></div>
    	<!-- <div id="alert2-rectangle"></div> -->
    	<div style = "position:absolute; left:540px; top:255px; color:black; font-size:72px; text-decoration: underline; font-weight: bold; font-family: Roboto">
		House Name
		<!-- Example session call <h2>{{session('email')}}</h2> -->
      	<!-- Change name based on user input -->
		  <!-- TODO -->  
    	</div>

	<div style = "position:absolute; left:40px; top:525px; color:black; font-size:48px; font-weight: bold; font-family: Roboto">
		<form action='/pages/home-page' method="POST">
			@csrf
			<label for="alert">Alert</label><br>
			<input size="50" type="text" id="alert" name="alert" value="{{ DB::table('users')->where('id', Auth::user()->id)->value('name') }}"><br>
			<!-- Alerts: -->
		</form>
    </div>
		<!-- TODO -->
    	<!-- display alerts based on user input -->

	<!-- <div style = "position:absolute; left:40px; top:725px; color:black; font-size:24px; font-weight: bold; font-family: Roboto">
      	House Reminders:
    	</div> -->
    	<!-- add vertical line -->
</body>

@endsection
