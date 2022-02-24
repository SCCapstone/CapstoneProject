@extends('layouts.layout')
@section('content')

<div class="settings">
    <nav class="settings-nav">
        <h1>Settings</h1>
        <h3>Personal</h3>
        <h4><a href="{{ route('settings.personal') }}">Profile</a></h4>
        <h4><a href="{{ route('settings.social') }}">Social</a></h4>
        <h4><a href="{{ route('settings.emergency') }}">Emergency Contact</a></h4>
        <h3>Household</h3>
        <h4><a href="{{ route('settings.housing') }}">Housing</a></h4>
        <h4><a href="{{ route('settings.invite') }}">Invite</a></h4>
    </nav>
    @yield('settingsContent')
</div>


@endsection