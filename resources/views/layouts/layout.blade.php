<!DOCTYPE html>
<html>
    <head>
        <title>HouseMates</title>
        <meta charset="utf-8">
        <link href="/css/contact.css" type="text/css" rel="stylesheet">
        <link href="/css/header.css" type="text/css" rel="stylesheet">
        <link href="/css/home.css" type="text/css" rel="stylesheet">
        <link href="/css/shopping.css" type="text/css" rel="stylesheet">
        <link href="/css/calendar.css" type="text/css" rel="stylesheet">

        <script src="{{ asset('resources/js/reminders.js')}}"></script>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1><a href="/pages/home-page">Housemates</a></h1>
        <nav>
            <ul>
                <li>
                    <a href="/pages/home-page">Home</a>
                </li>
                <li>
                    <a href="/pages/calendar">Calendar</a>
                </li>
                <li>
                    <a href="/pages/shopping">Shopping</a>
                </li>
                <li>
                    <a href="/pages/chores">Chores</a>
                </li>
                <li>
                    <a href="/pages/contact">Contact</a>
                </li>
                <li>
                    <a href="/pages/settingsPages/personalSettings">Settings</a>
                </li>
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
