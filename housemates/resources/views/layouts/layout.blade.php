<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="/css/header.css" type="text/css" rel="stylesheet">

        <title>HouseMates</title>
        <!-- <h>HouseMates</h> -->  

    </head>
    <body class="">
        <h1>HouseMates</h1>
        <div id="nav-rectangle"></div>
    
    <nav>
    <ul>
        <li>
        <!-- link one -->
        <!-- <a href="#Home"> Home </a> -->
        <a href="/pages/home-page">Home</a>
        <!-- TODO: HOMEPAGE NOT LINKING -->
        </li>
        <li>
        <!-- link two -->
        <!-- <a href="#Calendar"> Calendar </a> -->
        <a href="/pages/calendar">Calendar</a>
        </li>
        <li>
        <!-- link three -->
        <!-- <a href="#Grocery"> Grocery </a> -->
        <a href="/pages/shopping">Grocery</a>
        </li>
        <li>
        <!-- link four -->
        <!-- <a href="#Chat"> Chat </a> -->
        <a href="/pages/chat">Chat</a>
        </li>
        <li>
        <!-- link five -->
        <!-- <a href="#Contacts"> Contacts </a> -->
        <a href="/pages/contact">Contacts</a>
        </li>
        <li>
        <!-- link six -->
        <!-- <a href="#Settings"> Settings </a> -->
        <a href="/pages/settings">Settings</a>
        </li>
    </ul>
    </nav>
    <!-- put in navigation to other pages -->
    
        @yield('content')
    </body>
</html>
