@extends('layouts.layout')
@section('content')

<div id="shopping-background-rectangle">
        <form action='/pages/shopping' method="POST">
                <table id="shopping-table">
                        <thead>
                                <tr>
                                        <th>Done?</th>
                                        <th>Item</th>
                                        <th>Urgency</th>
                                        <th>Assigned</th>
                                </tr>
                        </thead>
                        @php
                                $boxLimit = DB::table('shopping')->where('house_num', Auth::user()->house_num)->value('list_size');;
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
                                                        <select name="{{$checkbox.strval($i)}}" class="checbox-form">
                                                                <option value="0">To Be Done</option>
                                                                <option value="1">Done</option>
                                                        </select>
                                                </td>
                                                <td class="item-column">
                                                        <input type="text" name="{{$item.strval($i)}}" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('item') }}">
                                                </td>
                                                <td class="urgency-column">
                                                        <input type="text" name="{{$urgency.strval($i)}}" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('urgency') }}">
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
                <select name="extendChores">
                        <option value="0"></option>
                        <option value="1">Add Rows</option>
                        <option value="2">Delete Rows</option>
                </select>
                <input type="submit" value="Submit" id="shopping-submit">
        </form>
</div>

@endsection