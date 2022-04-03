@extends('layouts.layout')
@section('content')

<div class="calendar">
  <iframe id="google-calendar" src={{ DB::table('users')->where('house-num', Auth::user()->house_num)->value('calendar') }} frameborder="0" scrolling="no"></iframe> 
  <!-- The link below is for the js file without using class
  <script src="reminders.js"></script>
  <script src="{{asset('resources/js/reminders.js')}}"></script> -->
</div>

<div class="instructions">
  <h3>If your calendar is displaying a 404 error, follow these steps:</h3>
  <ol>
    <li>Go to <a href="https://calendar.google.com/calendar/u/0/r/settings/calendar/Y3RyOTIyQGdtYWlsLmNvbQ?tab=rc" target="_blank">this page:</a></li>
    <li>Scroll down to the “Integrate Calendar” section</li>
    <li>Copy the Embed code link</li>
    <li>Go to the Settings Page (on Housemates.fun)</li>
    <li>Paste the link in the Personal Profile page under Calendar</li>
  </ol>
</div>
@endsection
