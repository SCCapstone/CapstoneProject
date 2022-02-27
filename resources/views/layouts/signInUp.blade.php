<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
		<link href="/css/sign.css" type="text/css" rel="stylesheet">
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta name="google-signin-client_id" content="224820970107-3ighd8fvmam6kh7qv8rf1jouj3uju4cm.apps.googleusercontent.com">
	</head>

	<body class="">
		<h1>Welcome HouseMates!</h1>
	<div id="welcomebox"></div>
	<div id = "gsign">
        	<a href="{{ url('auth/google') }}">
            	<img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png">
        	</a>
    </div>
	<div id="divider"></div>

    @yield('content')

	<!--<div id="userandpass" style = "top: 330px; left: 525px; position: absolute;">Username:</div> -->
	<!-- <div id="entry" style = "top: 425px; left: 525px;"></div> -->
	<!-- <div id="userandpass" style = "top: 450px; left: 525px; position: absolute;">Password:</div> -->
	<!-- <div id="entry" style = "top: 550px; left: 525px;"></div> -->

	<!-- button goes here -->
	<!-- <input type="button" value="Go!" class="signbutton" id="btnHome" onClick="document.location.href='pages/home-page'" style = "top: 600px;" /> -->

	<!-- <button name="button" onClick="document.location.href='pages/home-page'">Go!</button> -->
	
	<!-- <form action='user' method="POST">
		@csrf
		<label for="email">Email</label><br>
		<input type="text" id="email" name="email" placeholder="Email"><br>
		<label for="password">Password</label><br>
		<input type="password" id="password" name="password" placeholder="Password"><br>
		<input type="submit" value="Go">
	</form> -->


	<div id ="bottom">The home all-in-one-app! Share calendars, organize chores, decide on grocery lists, assign tasks, or discuss topics! We strive to help your household become a more transparent one.</bottom>
	</body>

</html>