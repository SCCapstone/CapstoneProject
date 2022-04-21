@extends('layouts.layout')
@section('content')

<div id="shopping-background-rectangle">

        <form action="/pages/chores" method="POST">
                <table id="shopping-table">
                        <thead>
                                <tr>
                                <th>Status</th>
                                <th>Chore</th>
                                <th>Urgency</th>
                                <th>Assigned</th>
                                </tr>
                        </thead>
                        @php 
                                $boxLimit = DB::table('chores')->where('house_num', Auth::user()->house_num)->value('list_size');
                                $choreBox = 1;
                                $checkbox = "checkbox";
                                $item = "item";
                                $urgency = "urgency";
                                $assignee = "assignee";
02                        @endphp

                        <tbody>
                                @for ($i = 1; $i < $boxLimit; $i++)
                                <tr>
                                        @csrf
                                        <td class="checkbox-column">
                                                <select name="{{$checkbox.strval($i)}}" class="checbox-form">
                                                        <option value="0">To Be Done</option>
                                                        <option value="1">Done</option>
                                                </select>
                                        </td>
                                        <td class="item-column">
                                                <input type="text" name="{{$item.strval($i)}}" class="item-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('item') }}">
                                        </td>
                                        <td class="urgency-column">
                                                <input type="text" name="{{$urgency.strval($i)}}" class="urgency-form" value="{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('urgency') }}">
                                        </td>
                                        <td class="assignee-column">
                                                <select name="{{$assignee.strval($i)}}" id="assignOptions">
                                                        <option value="">{{ DB::table('chores')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('assignee') }}</option>
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
                <h3>Select to add/delete rows or submit the content</h3>
        <select name="extendChores">
                <option value="0"></option>
                <option value="1">Add Rows</option>
                <option value="2">Delete Rows</option>
        </select>
        @csrf
        <input type="submit" value="Submit" id="submit">
        </form>
</div>

@endsection