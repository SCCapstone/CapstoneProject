<!DOCTYPE html>
<html>
    <head>
        <title>Housemates</title>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="/css/calendar.css" type="text/css" rel="stylesheet">
        <link href="/css/contact.css" type="text/css" rel="stylesheet">
        <link href="/css/header.css" type="text/css" rel="stylesheet">
        <link href="/css/home.css" type="text/css" rel="stylesheet">
        <link href="/css/settings.css" type="text/css" rel="stylesheet">
        <link href="/css/shopping.css" type="text/css" rel="stylesheet">
        
        <script src="{{ asset('resources/js/reminders.js')}}"></script>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <form action='logout' method="POST">
		@csrf
        <button>Logout</button>
	</form>
    <body>
        <h1 class="logo"><a href="/home">Housemates</a></h1>
        <nav class="primary-nav">
            <ul>
                <li>
                    <a href="/home">Home</a>
                </li>
                <li>
                    <a href="/calendar">Calendar</a>
                </li>
                <li>
                    <a href="/shopping">Shopping</a>
                </li>
                <li>
                    <a href="/chores">Chores</a>
                </li>
                <li>
                    <a href="/contact">Contact</a>
                </li>
                <li>
                    <a href="/settings/personal">Settings</a>
                </li>
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
