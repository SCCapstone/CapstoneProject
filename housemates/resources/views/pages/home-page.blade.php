@extends('layouts.layout')
@section('content')

<h1>Home Page</h1>
<style>

      #box1 {
        width: 500px;
        height: 200px;
        background: #FFFFFF;
        position:absolute;
        top: 200px;
        left: 500px;
        border-radius: 25px
      }
      #alert-rectangle {
        width: 100%;
        height: 200px;
        background: #FFFFFF;
        position: absolute;
        top: 450px;
      }
      #alert2-rectangle {
        width: 100%;
        height: 150px;
        background: #FFFFFF;
        position: absolute;
        top: 655px;
      }

</style>

<body>

	<div id="box1"></div>
    	<div id="alert-rectangle"></div>
    	<div id="alert2-rectangle"></div>
    	<div style = "position:absolute; left:560px; top:255px; color:black; font-size:72px; text-decoration: underline; font-weight: bold; font-family: Roboto">
	House Name
      	<!-- Change name based on user input -->
    	</div>

	<div style = "position:absolute; left:40px; top:525px; color:black; font-size:48px; font-weight: bold; font-family: Roboto">
      	Alerts:
    	</div>
    	<!-- display alerts based on user input -->

	<div style = "position:absolute; left:40px; top:725px; color:black; font-size:24px; font-weight: bold; font-family: Roboto">
      	House Reminders:
    	</div>
    	<!-- add vertical line -->
</body>

@endsection
