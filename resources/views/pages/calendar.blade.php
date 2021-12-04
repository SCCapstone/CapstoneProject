@extends('layouts.layout')
@section('content')


<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="calendar.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

</head>
  <body>

  <div id="calendar">
    <h1>Calendar</h1>
      <div style="position:absolute; top:75px; background:white;">
        <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FNew_York&src=Y3RyOTIyQGdtYWlsLmNvbQ&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=dGhldG9waGVyaW5hdG9yQGdtYWlsLmNvbQ&color=%237986CB&color=%23F6BF26&color=%23EF6C00" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
      </div>

     <div id="reminders">
      <div style="position:absolute; width:800px; top:700px; height:600px; background:white;">
        <h1>Reminders</h1>
      <input type="text" id="myInput" placeholder="Add Reminders..." />
        <span class="addBtn" id="add_button">Add</span>

      <ul id="myUL">

      </ul>
      <!-- The link below is for the js file without using class  -->
      <!-- <script src="calScript.js"></script> -->
    <script src="reminders.js"></script>
      </div>
  </body>

@endsection
