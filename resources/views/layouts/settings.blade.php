@extends('layouts.layout')
@section('content')

<div class="settings-nav">
    <h1>Settings</h1>
    <h4><a href="/settings/profile">Personal Profile</a></h4>
    <h4><a href="/settings/social">Social Media</a></h4>
    <h4><a href="/settings/emergency">Emergency Contact</a></h4>
    <h4><a href="/settings/housing">Housing</a></h4>
    <h4><a href="/settings/invite">Invite</a></h4>
</div>

@yield('settingsContent')

@endsection