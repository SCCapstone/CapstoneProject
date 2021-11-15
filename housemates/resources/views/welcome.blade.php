@extends('layouts.signInUp')
@section('content')

<title>Sign In</title>
<div id="sign">Sign In</div>

<body>

    <form>
         	Username:<br> <input type="text" name="username" placeholder="Enter here">
         	<br>
		    <br>
         	Password:<br> <input type="text" name="password" placeholder="Enter here">
         	<br>
    </form>

    <a href="sign-up.blade.php">Don't have an account? Sign up here!</a>
<!-- <a href="/pages/calendar">Calendar</a>
<a href="/pages/chat">Chat</a>
<a href="/pages/index">Index</a>
<a href="/pages/settings">Settings</a>
<a href="/pages/shopping">Shopping</a>
<a href="/pages/sign-in">Sign-in</a>
<a href="/pages/sign-up">Sign-up</a>
<a href="/pages/contact">Contact</a> -->

</body>

@endsection