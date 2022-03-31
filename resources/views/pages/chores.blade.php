@extends('layouts.layout')
@section('content')

<div id="shopping-background-rectangle">

        <form action="/pages/chores" method="POST">
                <table id="shopping-table">
                        <thead>
                                <tr>
                                <th>Done?</th>
                                <th>Chore</th>
                                <th>Urgency</th>
                                <th>Assigned</th>
                                </tr>
                        </thead>
                        @php 
                                $boxLimit = 11;
                                $choreBox = 1;
                                $checkbox = "checkbox";
                                $item = "item";
                                $urgency = "urgency";
                                $assignee = "assignee";
                        @endphp

                        <tbody>
                                @for ($i = 1; $i < $boxLimit; $i++)
                                <tr>
                                        @csrf
                                        <td class="checkbox-column">
                                                <input type="checkbox" name="{{$checkbox.strval($i)}}" class="checkbox-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('done') }}">
                                        </td>
                                        <td class="item-column">
                                                <input type="text" name="{{$item.strval($i)}}" class="item-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('item') }}">
                                        </td>
                                        <td class="urgency-column">
                                                <input type="text" name="{{$urgency.strval($i)}}" class="urgency-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('urgency') }}">
                                        </td>
                                        <td class="assignee-column">
                                                <select name="{{$assignee.strval($i)}}" id="assignOptions">
                                                        <option value="">Select</option>
                                                        @foreach($users as $person)
                                                                <option value="{{$person->name}}"> {{ $person->name }}</option>
                                                        @endforeach
                                                </select>
                                        </td>
                                        @php
                                                $choreBox += 1;
                                        @endphp
                                </tr>
                                @endfor
                        </tbody>
                </table>
        <input type="submit" value="Submit" id="submit">
        <input type="submit" value="Add Rows" id="addRows">
        <input type="submit" value="Remove Rows" id="removeRows">
        </form>
</div>

@endsection