@extends('layouts.signInUp')
@section('content')

<title>Sign In</title>
<form action='logout' method="POST" id='logout'>
    @csrf
    <button id='logout-button'>Log Out</button>
</form>

@endsection