@extends('layouts.layout')
@section('content')

<div class="home">
	<h1 class="home-housename">House Number: {{ Auth::user()->house_num }}</h1> <!-- This is now displaying the house -->
	<div class="home-alerts">
		<h1>Alerts:</h1>
		<ul style="margin-left:28%;">
		@for($i=1; $i<4; $i++) 
			<li><b>Chore:</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('item') }} <br>
			<b>Urgency:</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; {{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('urgency') }}<br> 
			<b>Assignee:</b> &nbsp; &nbsp; &nbsp; &nbsp; {{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('assignee') }}</li> <br>

			<!-- Go to the HouseController.php file and look at the homepage() method near the top
			I have written a line there that creates a $chores object that holds the value of all chores at once
			The command is written as follows: $chores = DB::table('chores')->where('house_num', Auth::user()->house_num)->get();
			In order, this looks in the chores table. Then narrows it down to where the chores house_num is equal to the user house_num.
			It then uses get() to retrieve all values that fit this criteria.
			Also please note I included this object in the return statement. This way you can access the $chores object from in the actual view (as I did above this comment).
			Now look at the code above. I use a foreach loop to loop through every value in the $chores object I made in the controller.
			I assign each value to a temporary object $chore using the loop.
			You can then use the curly brace schema to pull directly from the DB using the format: Object->Desired Value in Object
			This code should work with any number of database entries
			Also to display the current house number, use the Auth statement I wrote in the h1 at the top
			Don't forgot to close the foreach loop. -->


		
			@endfor
			</ul>
	</div>
</div>

@endsection