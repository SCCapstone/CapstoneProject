@extends('layouts.layout')
@section('content')

<div class="calendar">
  <iframe id="google-calendar" src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FNew_York&src=Y3RyOTIyQGdtYWlsLmNvbQ&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=dGhldG9waGVyaW5hdG9yQGdtYWlsLmNvbQ&color=%237986CB&color=%23F6BF26&color=%23EF6C00" frameborder="0" scrolling="no"></iframe> 
  <!-- The link below is for the js file without using class
  <script src="reminders.js"></script>
  <script src="{{asset('resources/js/reminders.js')}}"></script> -->
</div>

<html>
  <body>
    <h1>If your calendar is displaying a 404 error, follow these steps:</h1>
    <ol>
      <li>Go to https://calendar.google.com/calendar/u/0/r/settings/calendar/Y3RyOTIyQGdtYWlsLmNvbQ?tab=rc</li>
      <li>Scroll down to “Integrate Calendar” section</li>
      <li>Copy the Embed code link</li>
      <li>Go to the settings page (on Housemates.fun)</li>
      <li>Paste the link in the Personal Profile page under Calendar</li>
    </ol>
  </body>
</html>

@endsection
