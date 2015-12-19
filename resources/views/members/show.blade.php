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
                <th>Item Level</th>
                <th>Slot</th>
                <th>Gear Points</th>
            </tr>
            @foreach ($member->loot as $loot)
                <tr>
                    <td>{{ $loot->item_lvl }}</td>
                    <td>{{ $loot->slot }}</td>
                    <td>{{ $loot->gear_points }}</td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection