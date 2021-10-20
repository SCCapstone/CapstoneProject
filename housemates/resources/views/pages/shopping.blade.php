@extends('layouts.layout')
@section('content')

<table>
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
            <td><input type="checkbox" name="row1"/>&nbsp;</td>
            <td>
                <div contenteditable></div>
            </td>
            <td>
                <div contenteditable></div>
            </td>
            <td>
                <div contenteditable></div>
            </td>
        </tr>
        <tr>
            <td><input type="checkbox" name="row2"/>&nbsp;</td>
            <td>
                <div contenteditable></div>
            </td>
            <td>
                <div contenteditable></div>
            </td>
            <td>
                <div contenteditable></div>
            </td>
        </tr>
        <tr>
            <td><input type="checkbox" name="row3"/>&nbsp;</td>
            <td>
                <div contenteditable></div>
            </td>
            <td>
                <div contenteditable></div>
            </td>
            <td>
                <div contenteditable></div>
            </td>
        </tr>
        <tr>
            <td><input type="checkbox" name="row4"/>&nbsp;</td>
            <td>
                <div contenteditable></div>
            </td>
            <td>
                <div contenteditable></div>
            </td>
            <td>
                <div contenteditable></div>
            </td>
        </tr>
        <tr>
            <td><input type="checkbox" name="row5"/>&nbsp;</td>
            <td>
                <div contenteditable></div>
            </td>
            <td>
                <div contenteditable></div>
            </td>
            <td>
                <div contenteditable></div>
            </td>
        </tr>
    </tbody>
</table>

@endsection