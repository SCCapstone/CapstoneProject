@extends('layouts.layout')

@section('content')

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
            <td class="checkbox-column"><input type="checkbox" name="row1"/>&nbsp;</td>
            <td class="item-column">
                <div contenteditable></div>
            </td>
            <td class="urgency-column">
                <div contenteditable></div>
            </td>
            <td class="assignee-column">
                <div contenteditable></div>
            </td>
        </tr>
        <tr>
            <td class="checkbox-column"><input type="checkbox" name="row2"/>&nbsp;</td>
            <td class="item-column">
                <div contenteditable></div>
            </td>
            <td class="urgency-column">
                <div contenteditable></div>
            </td>
            <td class="assignee-column">
                <div contenteditable></div>
            </td>
        </tr>
        <tr>
            <td class="checkbox-column"><input type="checkbox" name="row3"/>&nbsp;</td>
            <td class="item-column">
                <div contenteditable></div>
            </td>
            <td class="urgency-column">
                <div contenteditable></div>
            </td>
            <td class="assignee-column">
                <div contenteditable></div>
            </td>
        </tr>
        <tr>
            <td class="checkbox-column"><input type="checkbox" name="row4"/>&nbsp;</td>
            <td class="item-column">
                <div contenteditable></div>
            </td>
            <td class="urgency-column">
                <div contenteditable></div>
            </td>
            <td class="assignee-column">
                <div contenteditable></div>
            </td>
        </tr>
        <tr>
            <td class="checkbox-column"><input type="checkbox" name="row5"/>&nbsp;</td>
            <td class="item-column">
                <div contenteditable></div>
            </td>
            <td class="urgency-column">
                <div contenteditable></div>
            </td>
            <td class="assignee-column">
                <div contenteditable></div>
            </td>
        </tr>
        <tr>
            <td class="checkbox-column"><input type="checkbox" name="row6"/>&nbsp;</td>
            <td class="item-column">
                <div contenteditable></div>
            </td>
            <td class="urgency-column">
                <div contenteditable></div>
            </td>
            <td class="assignee-column">
                <div contenteditable></div>
            </td>
        </tr>
        <tr>
            <td class="checkbox-column"><input type="checkbox" name="row7"/>&nbsp;</td>
            <td class="item-column">
                <div contenteditable></div>
            </td>
            <td class="urgency-column">
                <div contenteditable></div>
            </td>
            <td class="assignee-column">
                <div contenteditable></div>
            </td>
        </tr>
        <tr>
            <td class="checkbox-column"><input type="checkbox" name="row8"/>&nbsp;</td>
            <td class="item-column">
                <div contenteditable></div>
            </td>
            <td class="urgency-column">
                <div contenteditable></div>
            </td>
            <td class="assignee-column">
                <div contenteditable></div>
            </td>
        </tr>
        <tr>
            <td class="checkbox-column"><input type="checkbox" name="row9"/>&nbsp;</td>
            <td class="item-column">
                <div contenteditable></div>
            </td>
            <td class="urgency-column">
                <div contenteditable></div>
            </td>
            <td class="assignee-column">
                <div contenteditable></div>
            </td>
        </tr>
        <tr>
            <td class="checkbox-column"><input type="checkbox" name="row10"/>&nbsp;</td>
            <td class="item-column">
                <div contenteditable></div>
            </td>
            <td class="urgency-column">
                <div contenteditable></div>
            </td>
            <td class="assignee-column">
                <div contenteditable></div>
            </td>
        </tr>
    </tbody>
</table>

@endsection