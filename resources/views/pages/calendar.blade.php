@extends('layouts.layout')
@section('content')

<div class="calendar">
  <iframe id="google-calendar" src={{ DB::table('users')->where('house_num', Auth::user()->house_num)->value('calendar') }} frameborder="0" scrolling="no"></iframe>
  <!-- The link below is for the js file without using class
  <script src="reminders.js"></script>
  <script src="{{asset('resources/js/reminders.js')}}"></script> -->
</div>

@endsection