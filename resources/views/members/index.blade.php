@extends('layouts.master')

@section('content')
    <h2>Members</h2>

    <div class="btn btn-link">
        <a href="{{ route('members.create') }}">Add Member</a>
    </div>
    @if ( !$members->count() )
        You have no members
    @else
        <h3>224 Priority</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Effort Points</th>
                    <th>Gear Points</th>
                    <th>Priority</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach( $members as $member )
                <tr>
                    <td><a href="{{ route('members.show', $member->id) }}">{{ $member->name }}</a></td>
                    <td>{{ $member->getEp() }}</td>
                    <td>{{ $member->getGearPoints() }}</td>
                    <td>{{ $member->priority }}</td>
                    <td><a href="{{ route('members.edit', $member->id) }}">Edit</a></td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <?php $members = $members->sortByDesc('lowerPriority'); ?>

        <h3>220 Priority</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Effort Points</th>
                <th>Gear Points</th>
                <th>Priority</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach( $members as $member )
                <tr>
                    <td><a href="{{ route('members.show', $member->id) }}">{{ $member->name }}</a></td>
                    <td>{{ $member->getEp() }}</td>
                    <td>{{ $member->getLowerGearPoints() }}</td>
                    <td>{{ $member->lowerPriority }}</td>
                    <td><a href="{{ route('members.edit', $member->id) }}">Edit</a></td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection