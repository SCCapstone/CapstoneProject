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
                        <tbody>
                                <tr>
                                        <td class="checkbox-column">
                                                @csrf
                                                <input type="checkbox" name="checkbox1" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 1)->value('done') }}">
                                        </td>
                                        <td class="item-column">
                                                @csrf
                                                <input type="text" name="item1" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 1)->value('item') }}">
                                        </td>
                                        <td class="urgency-column">
                                                @csrf
                                                <input type="text" name="urgency1" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 1)->value('urgency') }}">
                                        </td>
                                        <td class="assignee-column">
                                                @csrf
                                                <input type="text" name="assignee1" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 1)->value('assignee') }}">
                                        </td>
                                </tr>
                                <tr>
                                        <td class="checkbox-column">
                                                @csrf
                                                <input type="checkbox" name="checkbox2" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 2)->value('done') }}">
                                        </td>
                                        <td class="item-column">
                                                @csrf
                                                <input type="text" name="item2" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 2)->value('item') }}">
                                        </td>
                                        <td class="urgency-column">
                                                @csrf
                                                <input type="text" name="urgency2" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 2)->value('urgency') }}">
                                        </td>
                                        <td class="assignee-column">
                                                @csrf
                                                <input type="text" name="assignee2" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 2)->value('assignee') }}">
                                        </td>
                                </tr>
                                <tr>
                                        <td class="checkbox-column">
                                                @csrf
                                                <input type="checkbox" name="checkbox3" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 3)->value('done') }}">
                                        </td>
                                        <td class="item-column">
                                                @csrf
                                                <input type="text" name="item3" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 3)->value('item') }}">
                                        </td>
                                        <td class="urgency-column">
                                                @csrf
                                                <input type="text" name="urgency3" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 3)->value('urgency') }}">
                                        </td>
                                        <td class="assignee-column">
                                                @csrf
                                                <input type="text" name="assignee3" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 3)->value('assignee') }}">
                                        </td>
                                </tr>
                                <tr>
                                        <td class="checkbox-column">
                                                @csrf
                                                <input type="checkbox" name="checkbox4" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 4)->value('done') }}">
                                        </td>
                                        <td class="item-column">
                                                @csrf
                                                <input type="text" name="item4" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 4)->value('item') }}">
                                        </td>
                                        <td class="urgency-column">
                                                @csrf
                                                <input type="text" name="urgency4" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 4)->value('urgency') }}">
                                        </td>
                                        <td class="assignee-column">
                                                @csrf
                                                <input type="text" name="assignee4" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 4)->value('assignee') }}">
                                        </td>
                                </tr>
                                <tr>
                                        <td class="checkbox-column">
                                                @csrf
                                                <input type="checkbox" name="checkbox5" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 5)->value('done') }}">
                                        </td>
                                        <td class="item-column">
                                                @csrf
                                                <input type="text" name="item5" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 5)->value('item') }}">
                                        </td>
                                        <td class="urgency-column">
                                                @csrf
                                                <input type="text" name="urgency5" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 5)->value('urgency') }}">
                                        </td>
                                        <td class="assignee-column">
                                                @csrf
                                                <input type="text" name="assignee5" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 5)->value('assignee') }}">
                                        </td>
                                </tr>
                                <tr>
                                        <td class="checkbox-column">
                                                @csrf
                                                <input type="checkbox" name="checkbox6" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 6)->value('done') }}">
                                        </td>
                                        <td class="item-column">
                                                @csrf
                                                <input type="text" name="item6" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 6)->value('item') }}">
                                        </td>
                                        <td class="urgency-column">
                                                @csrf
                                                <input type="text" name="urgency6" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 6)->value('urgency') }}">
                                        </td>
                                        <td class="assignee-column">
                                                @csrf
                                                <input type="text" name="assignee6" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 6)->value('assignee') }}">
                                        </td>
                                </tr>
                                <tr>
                                        <td class="checkbox-column">
                                                @csrf
                                                <input type="checkbox" name="checkbox7" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 7)->value('done') }}">
                                        </td>
                                        <td class="item-column">
                                                @csrf
                                                <input type="text" name="item7" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 7)->value('item') }}">
                                        </td>
                                        <td class="urgency-column">
                                                @csrf
                                                <input type="text" name="urgency7" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 7)->value('urgency') }}">
                                        </td>
                                        <td class="assignee-column">
                                                @csrf
                                                <input type="text" name="assignee7" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 7)->value('assignee') }}">
                                        </td>
                                </tr>
                                <tr>
                                        <td class="checkbox-column">
                                                @csrf
                                                <input type="checkbox" name="checkbox8" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 8)->value('done') }}">
                                        </td>
                                        <td class="item-column">
                                                @csrf
                                                <input type="text" name="item8" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 8)->value('item') }}">
                                        </td>
                                        <td class="urgency-column">
                                                @csrf
                                                <input type="text" name="urgency8" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 8)->value('urgency') }}">
                                        </td>
                                        <td class="assignee-column">
                                                @csrf
                                                <input type="text" name="assignee8" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 8)->value('assignee') }}">
                                        </td>
                                </tr>
                                <tr>
                                        <td class="checkbox-column">
                                                @csrf
                                                <input type="checkbox" name="checkbox9" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 9)->value('done') }}">
                                        </td>
                                        <td class="item-column">
                                                @csrf
                                                <input type="text" name="item9" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 9)->value('item') }}">
                                        </td>
                                        <td class="urgency-column">
                                                @csrf
                                                <input type="text" name="urgency9" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 9)->value('urgency') }}">
                                        </td>
                                        <td class="assignee-column">
                                                @csrf
                                                <input type="text" name="assignee9" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 9)->value('assignee') }}">
                                        </td>
                                </tr>
                                <tr>
                                        <td class="checkbox-column">
                                                @csrf
                                                <input type="checkbox" name="checkbox10" class="checkbox-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 10)->value('done') }}">
                                        </td>
                                        <td class="item-column">
                                                @csrf
                                                <input type="text" name="item10" class="item-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 10)->value('item') }}">
                                        </td>
                                        <td class="urgency-column">
                                                @csrf
                                                <input type="text" name="urgency10" class="urgency-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 10)->value('urgency') }}">
                                        </td>
                                        <td class="assignee-column">
                                                @csrf
                                                <input type="text" name="assignee10" class="assignee-form" value="{{ DB::table('shopping')->where('house_num', Auth::user()->house_num)->where('local_id', 10)->value('assignee') }}">
                                        </td>
                                </tr>
                        </tbody>
                </table>
                <input type="submit" value="Submit" id="shopping-submit">
        </form>
</div>

@endsection