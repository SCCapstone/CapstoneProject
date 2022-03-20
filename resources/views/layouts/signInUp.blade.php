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
	<body>
		<h1 id='welcome'>Welcome Housemates!</h1>
		
		<form action='user' method="POST">
			@csrf
			<label for="email">Email</label><br>
			<input type="text" id="email" name="email" placeholder="Email"><br>
			<label for="password">Password</label><br>
			<input type="password" id="password" name="password" placeholder="Password"><br>
			<input type="submit" value="Go">
		</form>

		<div id="welcomebox"></div>

		<div class="flex items-center justify-end mt-4 google-signin">
			<a href="{{ url('auth/google') }}">
				<img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png">
			</a>
		</div>

		<div id="divider"></div>

		@yield('content')
	</body>

</html>