@extends('layouts.layout')

@section('content')

<div id="shopping-background-rectangle"></div>

<table id="shopping-table">
    <thead>
        <tr>
            <th>Done?</th>
            <th>Item</th>
            <th>Urgency</th>
            <th>Assigned</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="checkbox-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="checkbox" name="checkbox1" class="checkbox-form" value="{{ DB::table('shopping')->where('id',1)->value('done') }}">
                </form>
            </td>
            <td class="item-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="item1" class="item-form" value="{{ DB::table('shopping')->where('id',1)->value('item') }}">
                </form>
            </td>
            <td class="urgency-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="urgency1" class="urgency-form" value="{{ DB::table('shopping')->where('id',1)->value('urgency') }}">
                </form>
            </td>
            <td class="assignee-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="assignee1" class="assignee-form" value="{{ DB::table('shopping')->where('id',1)->value('assignee') }}">
                </form>
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="checkbox" name="checkbox2" class="checkbox-form" value="{{ DB::table('shopping')->where('id',2)->value('done') }}">
                </form>
            </td>
            <td class="item-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="item2" class="item-form" value="{{ DB::table('shopping')->where('id',2)->value('item') }}">
                </form>
            </td>
            <td class="urgency-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="urgency2" class="urgency-form" value="{{ DB::table('shopping')->where('id',2)->value('urgency') }}">
                </form>
            </td>
            <td class="assignee-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="assignee2" class="assignee-form" value="{{ DB::table('shopping')->where('id',2)->value('assignee') }}">
                </form>
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="checkbox" name="checkbox3" class="checkbox-form" value="{{ DB::table('shopping')->where('id',3)->value('done') }}">
                </form>
            </td>            
            <td class="item-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="item3" class="item-form" value="{{ DB::table('shopping')->where('id',3)->value('item') }}">
                </form>
            </td>
            <td class="urgency-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="urgency3" class="urgency-form" value="{{ DB::table('shopping')->where('id',3)->value('urgency') }}">
                </form>
            </td>
            <td class="assignee-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="assignee3" class="assignee-form" value="{{ DB::table('shopping')->where('id',3)->value('assignee') }}">
                </form>
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="checkbox" name="checkbox4" class="checkbox-form" value="{{ DB::table('shopping')->where('id',4)->value('done') }}">
                </form>
            </td>
            <td class="item-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="item4" class="item-form" value="{{ DB::table('shopping')->where('id',4)->value('item') }}">
                </form>
            </td>
            <td class="urgency-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="urgency4" class="urgency-form" value="{{ DB::table('shopping')->where('id',4)->value('urgency') }}">
                </form>
            </td>
            <td class="assignee-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="assignee4" class="assignee-form" value="{{ DB::table('shopping')->where('id',4)->value('assignee') }}">
                </form>
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="checkbox" name="checkbox5" class="checkbox-form" value="{{ DB::table('shopping')->where('id',5)->value('done') }}">
                </form>
            </td>
            <td class="item-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="item5" class="item-form" value="{{ DB::table('shopping')->where('id',5)->value('item') }}">
                </form>
            </td>
            <td class="urgency-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="urgency5" class="urgency-form" value="{{ DB::table('shopping')->where('id',5)->value('urgency') }}">
                </form>
            </td>
            <td class="assignee-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="assignee5" class="assignee-form" value="{{ DB::table('shopping')->where('id',5)->value('assignee') }}">
                </form>
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="checkbox" name="checkbox6" class="checkbox-form" value="{{ DB::table('shopping')->where('id',6)->value('done') }}">
                </form>
            </td>
            <td class="item-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="item6" class="item-form" value="{{ DB::table('shopping')->where('id',6)->value('item') }}">
                </form>
            </td>
            <td class="urgency-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="urgency6" class="urgency-form" value="{{ DB::table('shopping')->where('id',6)->value('urgency') }}">
                </form>
            </td>
            <td class="assignee-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="assignee6" class="assignee-form" value="{{ DB::table('shopping')->where('id',6)->value('assignee') }}">
                </form>
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="checkbox" name="checkbox7" class="checkbox-form" value="{{ DB::table('shopping')->where('id',7)->value('done') }}">
                </form>
            </td>
            <td class="item-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="item7" class="item-form" value="{{ DB::table('shopping')->where('id',7)->value('item') }}">
                </form>
            </td>
            <td class="urgency-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="urgency7" class="urgency-form" value="{{ DB::table('shopping')->where('id',7)->value('urgency') }}">
                </form>
            </td>
            <td class="assignee-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="assignee7" class="assignee-form" value="{{ DB::table('shopping')->where('id',7)->value('assignee') }}">
                </form>
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="checkbox" name="checkbox8" class="checkbox-form" value="{{ DB::table('shopping')->where('id',8)->value('done') }}">
                </form>
            </td>
            <td class="item-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="item8" class="item-form" value="{{ DB::table('shopping')->where('id',8)->value('item') }}">
                </form>
            </td>
            <td class="urgency-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="urgency8" class="urgency-form" value="{{ DB::table('shopping')->where('id',8)->value('urgency') }}">
                </form>
            </td>
            <td class="assignee-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="assignee8" class="assignee-form" value="{{ DB::table('shopping')->where('id',8)->value('assignee') }}">
                </form>
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="checkbox" name="checkbox9" class="checkbox-form" value="{{ DB::table('shopping')->where('id',9)->value('done') }}">
                </form>
            </td>
            <td class="item-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="item9" class="item-form" value="{{ DB::table('shopping')->where('id',9)->value('item') }}">
                </form>
            </td>
            <td class="urgency-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="urgency9" class="urgency-form" value="{{ DB::table('shopping')->where('id',9)->value('urgency') }}">
                </form>
            </td>
            <td class="assignee-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="assignee9" class="assignee-form" value="{{ DB::table('shopping')->where('id',9)->value('assignee') }}">
                </form>
            </td>
        </tr>
        <tr>
            <td class="checkbox-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="checkbox" name="checkbox10" class="checkbox-form" value="{{ DB::table('shopping')->where('id',10)->value('done') }}">
                </form>
            </td>
            <td class="item-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="item10" class="item-form" value="{{ DB::table('shopping')->where('id',10)->value('item') }}">
                </form>
            </td>
            <td class="urgency-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="urgency10" class="urgency-form" value="{{ DB::table('shopping')->where('id',10)->value('urgency') }}">
                </form>
            </td>
            <td class="assignee-column">
                <form action="/pages/shopping" method="POST">
                    @csrf
                    <input type="text" name="assignee10" class="assignee-form" value="{{ DB::table('shopping')->where('id',10)->value('assignee') }}">
                </form>
            </td>
        </tr>
    </tbody>
</table>

@endsection