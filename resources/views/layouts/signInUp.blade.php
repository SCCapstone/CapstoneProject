<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
		<link href="/css/sign.css" type="text/css" rel="stylesheet">
		<meta name="google-signin-client_id" content="224820970107-3ighd8fvmam6kh7qv8rf1jouj3uju4cm.apps.googleusercontent.com">
		<script src="https://apis.google.com/js/platform.js" async defer></script>
	</head>

	<body class="">
		<h1>Welcome HouseMates!</h1>
	<div id="welcomebox"></div>
	<div id="divider"></div>

    <form>
         	<!-- Username:<br>  --> <input type="text" name="username" placeholder="Enter here">
         	<br>
		    <br>
         	<!-- Password:<br>  --> <input type="password" name="password" placeholder="Enter here">
         	<br>
    </form>

    @yield('content')

	<div id="userandpass" style = "top: 330px; left: 525px; position: absolute;">Username:</div>
	<!-- <div id="entry" style = "top: 425px; left: 525px;"></div> -->
	<div id="userandpass" style = "top: 450px; left: 525px; position: absolute;">Password:</div>
	<!-- <div id="entry" style = "top: 550px; left: 525px;"></div> -->

	<!-- button goes here -->
	<!-- <input type="button" value="Go!" class="signbutton" id="btnHome" onClick="document.location.href='pages/home-page'" style = "top: 600px;" /> -->
	<!-- <button name="button" onClick = "document.location.href='pages/home-page'">Go!</button> -->

    <div class="g-signin2" data-onsuccess="onSignIn"></div>
	
	<script>
		function onSignIn(googleUser) {
			<button name="button" onClick = "document.location.href='pages/home-page'">Go!</button>
  			var profile = googleUser.getBasicProfile();
			console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
			console.log('Name: ' + profile.getName());
			console.log('Image URL: ' + profile.getImageUrl());
			console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
		}
	</script>

	<p><a href="/" onclick="signOut();" style=left: 100px;>Sign out</a></p>
	    <script>
	        function signOut() {
		        var auth2 = gapi.auth2.getAuthInstance();
		        auth2.signOut().then(function () {
		            console.log('User signed out.');
		        });
	        }
	    </script>

	<div id ="bottom">The home all-in-one-app! Share calendars, organize chores, decide on grocery lists, assign tasks, or discuss topics! We strive to help your household become a more transparent one.</bottom>
	</body>

</html>