@extends('layouts.master')

@section('content')
    <h2>Members</h2>

    <div class="btn btn-link">
        <a href="{{ route('members.create') }}">Add Member</a>
    </div>
    @if ( !$members->count() )
        You have no members
    @else
        <table>
            <tr>
                <th>Name</th>
                <th>EP</th>
                <th>GP</th>
                <th>Priority</th>
                <th></th>
                <th></th>
            </tr>
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
        </table>
    @endif
@endsection