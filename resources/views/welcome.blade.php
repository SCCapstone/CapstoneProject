@extends('layouts.signInUp')
@section('content')

<title>Sign In</title>
<div id="sign">Sign In</div>

<body>
<form action='logout' method="POST">
		@csrf
        <button>Logout</button>
	</form>
    
</body>

@endsection