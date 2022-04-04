@extends('layouts.layout')
@section('content')

<div class="calendar">
  <iframe id="google-calendar" src={{ DB::table('users')->where('house_num', Auth::user()->house_num)->value('calendar') }} frameborder="0" scrolling="no"></iframe>
  <!-- The link below is for the js file without using class
  <script src="reminders.js"></script>
  <script src="{{asset('resources/js/reminders.js')}}"></script> -->
</div>

<div class="instructions">
  <h3>If your calendar is displaying a 404 error, follow these steps:</h3>
  <ol>
    <li>Go to this page: <a href="https://calendar.google.com/calendar/u/0/r/settings" target="_blank">https://calendar.google.com/calendar/u/0/r/settings</a></li>
    <li>Click on the name of the calendar you wish to integrate under "Settings for my calendars" on the left menu.</li>
    <li>Scroll down to the “Integrate Calendar” section.</li>
    <li>Copy the "Public URL to this calendar" link. If you want to change the theme of your calendar or what is visible, you can use the customize button below.</li>
    <li>Go to the Personal Settings Page at <a href="http://127.0.0.1:8000/pages/settingsPages/personalSettings">housemates.fun/settingsPages/personalSettings.</a></li>
    <li>Paste the link in the Personal Profile page under Calendar.</li>
  </ol>
</div>
@endsection