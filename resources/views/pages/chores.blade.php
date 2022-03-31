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
            <!--
                    Add room location to the chores list?
                    <th>Location</th>
                -->
            <th>Urgency</th>
            <th>Assigned</th>
        </tr>
    </thead>
    @php 
        $choreBoxOne = 1;
        $choreBoxTwo = 2;
        $choreBoxThree = 3;
        $choreBoxFour = 4;
        $choreBoxFive = 5;
        $choreBoxSix = 6;
        $choreBoxSeven = 7;
        $choreBoxEight = 8;
        $choreBoxNine = 9;
        $choreBoxTen = 10;

        $choreBox = 1;
        $checkBox = "checkbox";
        $item = "item";
        $urgency = "urgency";
        $assignee = "assignee";
    @endphp

    <tbody>
        @for ($i = 1; $i < 11; $i++)
        <tr>
                @csrf
                <td class="checkbox-column">
                        <input type="checkbox" name="{{$checkbox+$i}}" class="checkbox-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('done') }}">
                </td>
                <td class="item-column">
                        <input type="text" name="{{$item+$i}}" class="item-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('item') }}">
                </td>
                <td class="urgency-column">
                        <input type="text" name="{{$urgency+$i}}" class="urgency-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('urgency') }}">
                </td>
                <td class="assignee-column">
                        <input type="text" name="{{$assignee+$i}}" class="assignee-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('assignee') }}">
                </td>
                @php
                        $choreBox += 1;
                @endphp
        </tr>
        @endfor
    </tbody>

    <!--
    <tbody>
        <tr>
                <td class="checkbox-column">
                        @csrf
                        <input type="checkbox" name="checkbox1" class="checkbox-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxOne)->value('done') }}">
                </td>
                <td class="item-column">
                        @csrf
                        <input type="text" name="item1" class="item-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxOne)->value('item') }}">
                </td>
                <td class="urgency-column">
                        @csrf
                        <input type="text" name="urgency1" class="urgency-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxOne)->value('urgency') }}">
                </td>
                <td class="assignee-column">
                        @csrf
                        <input type="text" name="assignee1" class="assignee-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxOne)->value('assignee') }}">
                </td>
        </tr>
        <tr>
                <td class="checkbox-column">
                        @csrf
                        <input type="checkbox" name="checkbox2" class="checkbox-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxTwo)->value('done') }}">
                </td>
                <td class="item-column">
                        @csrf
                        <input type="text" name="item2" class="item-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxTwo)->value('item') }}">
                </td>
                <td class="urgency-column">
                        @csrf
                        <input type="text" name="urgency2" class="urgency-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxTwo)->value('urgency') }}">
                </td>
                <td class="assignee-column">
                        @csrf
                        <input type="text" name="assignee2" class="assignee-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxTwo)->value('assignee') }}">
                </td>
        </tr>
        <tr>
                <td class="checkbox-column">
                        @csrf
                        <input type="checkbox" name="checkbox3" class="checkbox-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxThree)->value('done') }}">
                </td>
                <td class="item-column">
                        @csrf
                        <input type="text" name="item3" class="item-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxThree)->value('item') }}">
                </td>
                <td class="urgency-column">
                        @csrf
                        <input type="text" name="urgency3" class="urgency-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxThree)->value('urgency') }}">
                </td>
                <td class="assignee-column">
                        @csrf
                        <input type="text" name="assignee3" class="assignee-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxThree)->value('assignee') }}">
                </td>
        </tr>
        <tr>
                <td class="checkbox-column">
                        @csrf
                        <input type="checkbox" name="checkbox4" class="checkbox-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxFour)->value('done') }}">
                </td>
                <td class="item-column">
                        @csrf
                        <input type="text" name="item4" class="item-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxFour)->value('item') }}">
                </td>
                <td class="urgency-column">
                        @csrf
                        <input type="text" name="urgency4" class="urgency-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxFour)->value('urgency') }}">
                </td>
                <td class="assignee-column">
                        @csrf
                        <input type="text" name="assignee4" class="assignee-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxFour)->value('assignee') }}">
                </td>
        </tr>
        <tr>
                <td class="checkbox-column">
                        @csrf
                        <input type="checkbox" name="checkbox5" class="checkbox-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxFive)->value('done') }}">
                </td>
                <td class="item-column">
                        @csrf
                        <input type="text" name="item5" class="item-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxFive)->value('item') }}">
                </td>
                <td class="urgency-column">
                        @csrf
                        <input type="text" name="urgency5" class="urgency-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxFive)->value('urgency') }}">
                </td>
                <td class="assignee-column">
                        @csrf
                        <input type="text" name="assignee5" class="assignee-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxFive)->value('assignee') }}">
                </td>
        </tr>
        <tr>
                <td class="checkbox-column">
                        @csrf
                        <input type="checkbox" name="checkbox6" class="checkbox-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxSix)->value('done') }}">
                </td>
                <td class="item-column">
                        @csrf
                        <input type="text" name="item6" class="item-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxSix)->value('item') }}">
                </td>
                <td class="urgency-column">
                        @csrf
                        <input type="text" name="urgency6" class="urgency-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxSix)->value('urgency') }}">
                </td>
                <td class="assignee-column">
                        @csrf
                        <input type="text" name="assignee6" class="assignee-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxSix)->value('assignee') }}">
                </td>
        </tr>
        <tr>
                <td class="checkbox-column">
                        @csrf
                        <input type="checkbox" name="checkbox7" class="checkbox-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxSeven)->value('done') }}">
                </td>
                <td class="item-column">
                        @csrf
                        <input type="text" name="item7" class="item-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxSeven)->value('item') }}">
                </td>
                <td class="urgency-column">
                        @csrf
                        <input type="text" name="urgency7" class="urgency-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxSeven)->value('urgency') }}">
                </td>
                <td class="assignee-column">
                        @csrf
                        <input type="text" name="assignee7" class="assignee-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxSeven)->value('assignee') }}">
                </td>
        </tr>
        <tr>
                <td class="checkbox-column">
                        @csrf
                        <input type="checkbox" name="checkbox8" class="checkbox-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxEight)->value('done') }}">
                </td>
                <td class="item-column">
                        @csrf
                        <input type="text" name="item8" class="item-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxEight)->value('item') }}">
                </td>
                <td class="urgency-column">
                        @csrf
                        <input type="text" name="urgency8" class="urgency-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxEight)->value('urgency') }}">
                </td>
                <td class="assignee-column">
                        @csrf
                        <input type="text" name="assignee8" class="assignee-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxEight)->value('assignee') }}">
                </td>
        </tr>
        <tr>
                <td class="checkbox-column">
                        @csrf
                        <input type="checkbox" name="checkbox9" class="checkbox-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxNine)->value('done') }}">
                </td>
                <td class="item-column">
                        @csrf
                        <input type="text" name="item9" class="item-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxNine)->value('item') }}">
                </td>
                <td class="urgency-column">
                        @csrf
                        <input type="text" name="urgency9" class="urgency-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxNine)->value('urgency') }}">
                </td>
                <td class="assignee-column">
                        @csrf
                        <input type="text" name="assignee9" class="assignee-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxNine)->value('assignee') }}">
                </td>
        </tr>
        <tr>
                <td class="checkbox-column">
                        @csrf
                        <input type="checkbox" name="checkbox10" class="checkbox-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxTen)->value('done') }}">
                </td>
                <td class="item-column">
                        @csrf
                        <input type="text" name="item10" class="item-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxTen)->value('item') }}">
                </td>
                <td class="urgency-column">
                        @csrf
                        <input type="text" name="urgency10" class="urgency-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxTen)->value('urgency') }}">
                </td>
                <td class="assignee-column">
                        @csrf
                        <input type="text" name="assignee10" class="assignee-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $choreBoxTen)->value('assignee') }}">
                </td>
        </tr>
    </tbody>
-->
</table>
<input type="submit" value="Submit" id="submit">
</form>

@endsection