@extends('layouts.layout')
@section('content')

<div class="office">
    <h2>Office Info</h2>
    <p>Phone: {{ $landlords->phone }}</p>
    <p>Address: {{ $landlords->officeAddress }}</p>
</div>

<div class="roommates">
    <div class="rm">
        <h3>{{Auth::user()->name}}</h3>
        <p><b>Phone:</b></p>
        <p>{{ Auth::user()->phone }}</p><br>
        <p><b>Email:</b></p>
        <p>{{ Auth::user()->email }}</p><br>
        <p><b>Emergency Contact:</b></p>
        <p>{{ Auth::user()->emergencyName }}</p><br>
        <p><b>Emergency Contact Relation:</b></p>
        <p>{{ Auth::user()->emergencyRelation }}</p><br>
        <p><b>Emergency Phone:</b></p>
        <p>{{ Auth::user()->emergencyPhone }}</p><br>
        <p><b>Instagram:</b></p>
        <p>{{ Auth::user()->instagram }}</p><br>
        <p><b>Snapchat:</b></p>
        <p>{{ Auth::user()->snapchat }}</p><br>
        <p><b>Venmo:</b></p>
        <p>{{ Auth::user()->venmo }}</p><br>
        <p><b>TikTok:</b></p>
        <p>{{ Auth::user()->tiktok }}</p><br>
    </div>
    @foreach($users as $person)
    <div class="rm">
        <h3>{{ $person->name }}</h3>
        <p><b>Phone:</b></p>
        <p>{{ $person->phone }}</p><br>
        <p><b>Email:</b></p>
        <p>{{ $person->email }}</p><br>
        <p><b>Emergency Contact:</b></p>
        <p>{{ $person->emergencyName }}</p><br>
        <p><b>Emergency Contact Relation:</b></p>
        <p>{{ $person->emergencyRelation }}</p><br>
        <p><b>Emergency Phone:</b></p>
        <p>{{ $person->emergencyPhone }}</p><br>
        <p><b>Instagram:</b></p>
        <p>{{ $person->instagram }}</p><br>
        <p><b>Snapchat:</b></p>
        <p>{{ $person->snapchat }}</p><br>
        <p><b>Venmo:</b></p>
        <p>{{ $person->venmo }}</p><br>
        <p><b>TikTok:</b></p>
        <p>{{ $person->tiktok }}</p><br>
    </div>
    @endforeach
</div>
@endsection