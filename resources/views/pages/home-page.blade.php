@extends('layouts.layout')
@section('content')

<h1>Home Page</h1>

<body>

	<div id="box1"></div>
    	<div id="alert-rectangle"></div>
    	<!-- <div id="alert2-rectangle"></div> -->
    	<div style = "position:absolute; left:540px; top:255px; color:black; font-size:72px; text-decoration: underline; font-weight: bold; font-family: Roboto" value ="{{ DB::table('users')->where('id', Auth::user()->id)->value('house_num') }}">
		<h1 class="home-housename"> House Name: {{ Auth::user()->house_num }}</h1>
		<!-- House Name -->
		<!-- Example session call <h2>{{session('email')}}</h2> -->
      	<!-- Change name based on user input -->
		  <!-- TODO -->  
    	</div>



	<div style = "position:absolute; left:40px; top:525px; color:black; font-size:48px; font-weight: bold; font-family: Roboto">
		Alerts:
    </div>
	<div style = "position: absolute; left: 55px; top: 525px; color: black; font-size: 38px; font-family: Roboto" value ="{{ DB::table('chores-table')->where('house_num', Auth::user()->house_num)->value('chores') }}"></div>
		<!-- TODO -->
    	<!-- display alerts based on user input -->

	<!-- <div style = "position:absolute; left:40px; top:725px; color:black; font-size:24px; font-weight: bold; font-family: Roboto">
      	House Reminders:
    	</div> -->
    	<!-- add vertical line -->
</body>

@endsection
