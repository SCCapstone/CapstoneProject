@extends('layouts.layout')
@section('content')

<div id="shopping-background-rectangle">
        <form action='/pages/shopping' method="POST">
                <table id="shopping-table">
                        <thead>
                                <tr>
                                        <th>Status</th>
                                        <th>Item</th>
                                        <th>Urgency</th>
                                        <th>Assigned</th>
                                </tr>
                        </thead>
                        @php
                                $boxLimit = DB::table('shopping')->where('house_num', Auth::user()->house_num)->value('list_size');;
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
                                                        <select name="{{$urgency.strval($i)}}" class="urgency-form">
                                                                <option value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('urgency') }}">{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('urgency') }}</option>
                                                                <option value="HIGH">HIGH</option>
                                                                <option value="MEDIUM">MEDIUM</option>
                                                                <option value="LOW">LOW</option>
                                                        </select>
                                                        <!--<input type="text" name="{{$urgency.strval($i)}}" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('urgency') }}">-->
                                                </td>
                                                <td class="assignee-column">
                                                        <select name="{{$assignee.strval($i)}}" id="assignOptions">
                                                                <option value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('assignee') }}">{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('assignee') }}</option>
                                                                @foreach($users as $person)
                                                                        <option value="{{$person->name}}"> {{ $person->name }}</option>
                                                                @endforeach
                                                        </select>
                                                </td>
                                        </tr>
                                @endfor
                        </tbody>
                </table>
                <h3>Select to add/delete row or submit changes:</h3>
                <select name="extendShopping">
                        <option value="0"></option>
                        <option value="1">Add Row</option>
                        <option value="2">Delete Row</option>
                </select>
                @csrf
                <input type="submit" value="Submit" id="shopping-submit">
        </form>
</div>

@endsection