<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
		<link href="/css/auth.css" type="text/css" rel="stylesheet">
		<!-- <meta name="google-signin-client_id" content="224820970107-7dsle63ops8sblvn9aheitj99o0bmq9d.apps.googleusercontent.com.apps.googleusercontent.com"> -->
	</head>

	<body class="">
		<h1>Welcome Housemates!</h1>
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
	<button name="button" onClick = "document.location.href='../home'">Go!</button>

    <!-- <div class="g-signin2" data-onsuccess="onSignIn"></div>
	<script>
		function onSuccess(googleUser) {
      			console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
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
	<script src="https://apis.google.com/js/platform.js" async defer></script> -->

	<!-- <script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content=".apps.googleusercontent.com">
	<div class="g-signin2" data-onsuccess="onSignIn" style = "top: 400px; left: 550px; position: absolute; height: 75px; width: 350px; box-shadow: 6px 2px 8px #698384;"></div>
	<div class="g-signin2" data-onsuccess="onSignIn"></div>
	<script>
		function onSuccess(googleUser) {
      			console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
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
	</script> -->

	<div id ="bottom">The home all-in-one-app! Share calendars, organize chores, decide on grocery lists, assign tasks, or discuss topics! We strive to help your household become a more transparent one.</bottom>
	</body>

</html>