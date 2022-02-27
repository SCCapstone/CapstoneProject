@extends('layouts.layout')
@section('content')

<h1>Chores</h1>
<div id="chores-background-rectangle"></div>

<form action="/pages/chores" method="POST">
<table id="chores-table">
    <thead>
        <tr>
            <th>Done?</th>
            <th>Chore</th>
            <th>Urgency</th>
            <th>Assigned</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox1" class="checkbox-form" value="{{ DB::table('chores')->where('id',1)->value('done') }}">
            </td>
            <td class="chore-column">
                    @csrf 
                    <input type="text" name="chores1" class="chores-form" value="{{ DB::table('chores')->where('id',1)->value('chores') }}">
                    <!--
                    <label for="cars">Choose a car:</label>

                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                    </select>
                    
                -->
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency1" class="urgency-form" value="{{ DB::table('chores')->where('id',1)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee1" class="assignee-form" value="{{ DB::table('chores')->where('id',1)->value('assignee') }}">
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox2" class="checkbox-form" value="{{ DB::table('chores')->where('id',2)->value('done') }}">
            </td>
            <td class="chores-column">
                    @csrf
                    <input type="text" name="chores2" class="chores-form" value="{{ DB::table('chores')->where('id',2)->value('chores') }}">
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency2" class="urgency-form" value="{{ DB::table('chores')->where('id',2)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee2" class="assignee-form" value="{{ DB::table('chores')->where('id',2)->value('assignee') }}">
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox3" class="checkbox-form" value="{{ DB::table('chores')->where('id',3)->value('done') }}">
            </td>            
            <td class="chores-column">
                    @csrf
                    <input type="text" name="chores3" class="chores-form" value="{{ DB::table('chores')->where('id',3)->value('chores') }}">
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency3" class="urgency-form" value="{{ DB::table('chores')->where('id',3)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee3" class="assignee-form" value="{{ DB::table('chores')->where('id',3)->value('assignee') }}">
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox4" class="checkbox-form" value="{{ DB::table('chores')->where('id',4)->value('done') }}">
            </td>
            <td class="chores-column">
                    @csrf
                    <input type="text" name="chores4" class="chores-form" value="{{ DB::table('chores')->where('id',4)->value('chores') }}">
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency4" class="urgency-form" value="{{ DB::table('chores')->where('id',4)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee4" class="assignee-form" value="{{ DB::table('chores')->where('id',4)->value('assignee') }}">
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox5" class="checkbox-form" value="{{ DB::table('chores')->where('id',5)->value('done') }}">
            </td>
            <td class="chores-column">
                    @csrf
                    <input type="text" name="chores5" class="chores-form" value="{{ DB::table('chores')->where('id',5)->value('chores') }}">
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency5" class="urgency-form" value="{{ DB::table('chores')->where('id',5)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee5" class="assignee-form" value="{{ DB::table('chores')->where('id',5)->value('assignee') }}">
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox6" class="checkbox-form" value="{{ DB::table('chores')->where('id',6)->value('done') }}">
            </td>
            <td class="chores-column">
                    @csrf
                    <input type="text" name="chores6" class="chores-form" value="{{ DB::table('chores')->where('id',6)->value('chores') }}">
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency6" class="urgency-form" value="{{ DB::table('chores')->where('id',6)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee6" class="assignee-form" value="{{ DB::table('chores')->where('id',6)->value('assignee') }}">
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox7" class="checkbox-form" value="{{ DB::table('chores')->where('id',7)->value('done') }}">
            </td>
            <td class="chores-column">
                    @csrf
                    <input type="text" name="chores7" class="chores-form" value="{{ DB::table('chores')->where('id',7)->value('chores') }}">
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency7" class="urgency-form" value="{{ DB::table('chores')->where('id',7)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee7" class="assignee-form" value="{{ DB::table('chores')->where('id',7)->value('assignee') }}">
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox8" class="checkbox-form" value="{{ DB::table('chores')->where('id',8)->value('done') }}">
            </td>
            <td class="chores-column">
                    @csrf
                    <input type="text" name="chores8" class="chores-form" value="{{ DB::table('chores')->where('id',8)->value('chores') }}">
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency8" class="urgency-form" value="{{ DB::table('chores')->where('id',8)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee8" class="assignee-form" value="{{ DB::table('chores')->where('id',8)->value('assignee') }}">
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox9" class="checkbox-form" value="{{ DB::table('chores')->where('id',9)->value('done') }}">
            </td>
            <td class="chores-column">
                    @csrf
                    <input type="text" name="chores9" class="chores-form" value="{{ DB::table('chores')->where('id',9)->value('chores') }}">
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency9" class="urgency-form" value="{{ DB::table('chores')->where('id',9)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee9" class="assignee-form" value="{{ DB::table('chores')->where('id',9)->value('assignee') }}">
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox10" class="checkbox-form" value="{{ DB::table('chores')->where('id',10)->value('done') }}">
            </td>
            <td class="chores-column">
                    @csrf
                    <input type="text" name="chores10" class="chores-form" value="{{ DB::table('chores')->where('id',10)->value('chores') }}">
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency10" class="urgency-form" value="{{ DB::table('chores')->where('id',10)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee10" class="assignee-form" value="{{ DB::table('chores')->where('id',10)->value('assignee') }}">
            </td>
        </tr>
    </tbody>
</table>
<input type="submit" value="Submit" id="submit">
</form>

@endsection