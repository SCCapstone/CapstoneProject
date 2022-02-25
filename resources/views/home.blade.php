@extends('layouts.layout')
@section('content')

<div class="home">
	<h1 class="home-housename">House Name</h1> <!-- Change name based on user input in settings -->
	<div class="home-alerts">
		<h1>Alerts:</h1>
		<p>
			<!-- Chores/rent payments/etc. with nearing due dates should show up here -->
		</p>
	</div>
</div>

@endsection