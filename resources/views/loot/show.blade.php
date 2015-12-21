@extends('layouts.master')

@section('content')
    <h1>{{ $loot->name }}</h1>
    <table>
        <tr>
            <th>Item Level</th>
            <th>Slot</th>
            <th>Gear Points</th>
        </tr>
        <tr>
            <td>{{ $loot->item_lvl }}</td>
            <td>{{ $loot->slot }}</td>
            <td>{{ $loot->gear_points }}</td>
        </tr>
    </table>
    @if ($loot->members())
        <h1>Member</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Awarded At</th>
            </tr>
            @foreach ($loot->members as $member)
                <tr>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->pivot->awarded_at }}</td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection