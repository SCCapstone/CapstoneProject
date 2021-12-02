@extends('layouts.settings')
@section('settingsContent')

    <!-- TO DO:  Enclose following form within Blade if-else statement that checks for 
    current number of roommates i.e. entries in 'users' table -->

    <form action="" method="post" class="invite-form">
        <label for="email" id="label">Invitee email address: </label>
        <br />
        <input type="email" name="email" id="email" required>
        <input type="submit" value="Send Invite">
    </form>

@endsection