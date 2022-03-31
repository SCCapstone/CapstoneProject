@extends('layouts.layout')
@section('content')

<div id="shopping-background-rectangle">
        <form action='/pages/shopping' method="POST">
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
                                                <input type="checkbox" name="{{$checkbox.strval($i)}}" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('done') }}">
                                        </td>
                                        <td class="item-column">
                                                <input type="text" name="{{$item.strval($i)}}" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('item') }}">
                                        </td>
                                        <td class="urgency-column">
                                                <input type="text" name="{{$urgency.strval($i)}}" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('urgency') }}">
                                        </td>
                                        <td class="assignee-column">
                                                <input type="text" name="{{$assignee.strval($i)}}" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $i)->value('assignee') }}">
                                        </td>
                                        @php
                                                $choreBox += 1;
                                        @endphp
                                </tr>
                                @endfor
                        </tbody>
                </table>
                <input type="submit" value="Submit" id="shopping-submit">
        </form>
</div>

@endsection