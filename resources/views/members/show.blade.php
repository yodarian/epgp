@extends('layouts.master')

@section('content')
    <h1>{{ $member->name }}</h1>
    <table>
        <tr>
            <th>EP</th>
            <th>GP</th>
            <th>Priority</th>
        </tr>
        <tr>
            <td>{{ $member->getEp() }}</td>
            <td>{{ $member->getGearPoints() }}</td>
            <td>{{ $member->getPriorityAttribute() }}</td>
        </tr>
    </table>
    @if ($member->loot())
        <h1>Loot</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Item Level</th>
                <th>Slot</th>
                <th>Gear Points</th>
                <th>Awarded At</th>
            </tr>
            @foreach ($member->loot as $loot)
                <tr>
                    <td>{{ $loot->name }}</td>
                    <td>{{ $loot->item_lvl }}</td>
                    <td>{{ $loot->slot }}</td>
                    <td>{{ $loot->gear_points }}</td>
                    <td>{{ $loot->pivot->awarded_at }}</td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection