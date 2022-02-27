@extends('layouts.layout')

@section('content')

<div id="shopping-background-rectangle"></div>

<form action="/pages/shopping" method="POST">
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
        $firBox = 1;
        $secBox = 2;
        $thiBox = 3;
        $fouBox = 4;
        $fivBox = 5;
        $sixBox = 6;
        $sevBox = 7;
        $eigBox = 8;
        $ninBox = 9;
        $tenBox = 10;
    @endphp
    <tbody>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox1" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $firBox)->value('done') }}">
            </td>
            <td class="item-column">
                    @csrf
                    <input type="text" name="item1" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $firBox)->value('item') }}">
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency1" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $firBox)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee1" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $firBox)->value('assignee') }}">
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox2" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $secBox)->value('done') }}">
            </td>
            <td class="item-column">
                    @csrf
                    <input type="text" name="item2" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $secBox)->value('item') }}">
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency2" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $secBox)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee2" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $secBox)->value('assignee') }}">
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox3" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $thiBox)->value('done') }}">
            </td>            
            <td class="item-column">
                    @csrf
                    <input type="text" name="item3" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $thiBox)->value('item') }}">
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency3" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $thiBox)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee3" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $thiBox)->value('assignee') }}">
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox4" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $fouBox)->value('done') }}">
            </td>
            <td class="item-column">
                    @csrf
                    <input type="text" name="item4" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $fouBox)->value('item') }}">
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency4" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $fouBox)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee4" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $fouBox)->value('assignee') }}">
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox5" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $fivBox)->value('done') }}">
            </td>
            <td class="item-column">
                    @csrf
                    <input type="text" name="item5" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $fivBox)->value('item') }}">
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency5" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $fivBox)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee5" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $fivBox)->value('assignee') }}">
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox6" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $sixBox)->value('done') }}">
            </td>
            <td class="item-column">
                    @csrf
                    <input type="text" name="item6" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $sixBox)->value('item') }}">
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency6" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $sixBox)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee6" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $sixBox)->value('assignee') }}">
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox7" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $sevBox)->value('done') }}">
            </td>
            <td class="item-column">
                    @csrf
                    <input type="text" name="item7" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $sevBox)->value('item') }}">
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency7" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $sevBox)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee7" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $sevBox)->value('assignee') }}">
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox8" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $eigBox)->value('done') }}">
            </td>
            <td class="item-column">
                    @csrf
                    <input type="text" name="item8" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $eigBox)->value('item') }}">
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency8" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $eigBox)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee8" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $eigBox)->value('assignee') }}">
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox9" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $ninBox)->value('done') }}">
            </td>
            <td class="item-column">
                    @csrf
                    <input type="text" name="item9" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $ninBox)->value('item') }}">
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency9" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $ninBox)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee9" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $ninBox)->value('assignee') }}">
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                    @csrf
                    <input type="checkbox" name="checkbox10" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $tenBox)->value('done') }}">
            </td>
            <td class="item-column">
                    @csrf
                    <input type="text" name="item10" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $tenBox)->value('item') }}">
            </td>
            <td class="urgency-column">
                    @csrf
                    <input type="text" name="urgency10" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $tenBox)->value('urgency') }}">
            </td>
            <td class="assignee-column">
                    @csrf
                    <input type="text" name="assignee10" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', $tenBox)->value('assignee') }}">
            </td>
        </tr>
    </tbody>
</table>
<input type="submit" value="Submit" id="submit">
</form>

@endsection