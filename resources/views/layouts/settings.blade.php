@extends('layouts.layout')
@section('content')

<link href="/css/settingsNav.css" type="text/css" rel="stylesheet">

<div class="leftnav">
    <h1 style="color:#000000; text-align: center">Settings</h1>
    <hr/>
    <h3>Profile</h3>
    <h4><a href="{{ route('settings.personal') }}">Personal</a></h4>
    <h4><a href="{{ route('settings.socials') }}">Socials</a></h4>
    <h4><a href="{{ route('settings.emergency') }}">Emergency</a></h4>
    <h3>House</h3>
    <h4><a href="{{ route('settings.information') }}">Information</a></h4>
</div>

@yield('subSettingsPages')
@endsection