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
	<div id="divider"></div>

    @yield('content')

	<!--<div id="userandpass" style = "top: 330px; left: 525px; position: absolute;">Username:</div> -->
	<!-- <div id="entry" style = "top: 425px; left: 525px;"></div> -->
	<!-- <div id="userandpass" style = "top: 450px; left: 525px; position: absolute;">Password:</div> -->
	<!-- <div id="entry" style = "top: 550px; left: 525px;"></div> -->

	<!-- button goes here -->
	<!-- <input type="button" value="Go!" class="signbutton" id="btnHome" onClick="document.location.href='pages/home-page'" style = "top: 600px;" /> -->

	<!-- <button name="button" onClick="document.location.href='pages/home-page'">Go!</button> -->
	
	<form action='/' method="POST">
		@csrf
		<label for="email">Email</label><br>
		<input type="text" id="email" name="email" placeholder="Email"><br>
		<label for="password">Password</label><br>
		<input type="password" id="password" name="password" placeholder="Password"><br>
		<input type="submit" value="Go">
	</form>


	<div class="flex items-center justify-end mt-4">
        	<a href="{{ url('auth/google') }}">
            	<img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="position: absolute; top: 45px; left: 45px;">
        	</a>
    	</div>

	<!-- 	
	<div class="g-signin2" data-onsuccess="onSignIn"></div>
	<a href="{{ url('auth/google') }}">
	<script>
		function onSignIn(googleUser) {
			console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
  			var profile = googleUser.getBasicProfile();
  			console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  			console.log('Name: ' + profile.getName());
  			console.log('Image URL: ' + profile.getImageUrl());
  			console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
		}
		function onFailure(error) {
      		console.log(error);
    	}
    	function renderButton() {
      		gapi.signin2.render('my-signin2', {
        		'scope': 'profile email',
    			'width': 240,
    			'height': 50,
	   			'longtitle': true,
    			'theme': 'dark',
    			'onsuccess': onSuccess,
    			'onfailure': onFailure
  			});
		}
	</script>
	</a>
	-->


	<div id ="bottom">The home all-in-one-app! Share calendars, organize chores, decide on grocery lists, assign tasks, or discuss topics! We strive to help your household become a more transparent one.</bottom>
	</body>

</html>