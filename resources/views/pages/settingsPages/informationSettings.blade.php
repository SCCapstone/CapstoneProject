@extends('layouts.settings')
@section('settingsContent')

<div class="housing">
	<h1>Housing Information</h1>
	<form action='/pages/settingsPages/informationSettings' method="POST">
		@csrf
		<label for="housing">Type of Housing</label><br>
		<input size="50" type="text" id="housing" name="housing" value="{{ DB::table('landlord')->where('landlordnum', Auth::user()->house_num)->value('housingType') }}"><br>
		<label for="rent">Rental Company</label><br>
		<input size="50" type="text" id="rent" name="rent" value="{{ DB::table('landlord')->where('landlordnum', Auth::user()->house_num)->value('rentalCompany') }}"><br>
		<label for="hours">Office Hours</label><br>
		<input size="50" type="text" id="hours" name="hours" value="{{ DB::table('landlord')->where('landlordnum', Auth::user()->house_num)->value('officeHours') }}"><br>
		<label for="phone">Phone Number</label><br>
		<input size="50" type="text" id="phone" name="phone" value="{{ DB::table('landlord')->where('landlordnum', Auth::user()->house_num)->value('phone') }}"><br>
		<label for="email">Email Address</label><br>
		<input size="50" type="text" id="email" name="email" value="{{ DB::table('landlord')->where('landlordnum', Auth::user()->house_num)->value('email') }}"><br>
		<label for="address">Office Address</label><br>
		<input size="50" type="text" id="address" name="address" value="{{ DB::table('landlord')->where('landlordnum', Auth::user()->house_num)->value('officeAddress') }}"><br>
		<label for="due">Rent Due By Date</label><br>
		<input size="50" type="text" id="due" name="due" value="{{ DB::table('landlord')->where('landlordnum', Auth::user()->house_num)->value('rentDueBy') }}"><br>
		<input type="submit" value="Publish">
	</form>
</div>

@endsection