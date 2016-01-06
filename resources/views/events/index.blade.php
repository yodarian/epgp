@extends('layouts.master')

@section('content')
    <h2>Events</h2>

    <div class="btn btn-link">
        <a href="{{ route('events.create') }}">Add Event</a>
    </div>
    <hr>
    @if ( !$events->count() )
        You have no events
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>EP</th>
                    <th># Bosses</th>
                    <th># Firstkills</th>
                    <th>Time Spend</th>
                    <th>Bonus EP</th>
                    <th>Member</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach( $events as $event )
                <tr>
                    <td><a href="{{ route('events.show', $event->id) }}">{{ $event->name }}</a></td>
                    <td>{{ $event->date }}</td>
                    <td>{{ $event->ep }}</td>
                    <td>{{ $event->number_bosses }}</td>
                    <td>{{ $event->number_firstkills }}</td>
                    <td>{{ $event->time_spend }}</td>
                    <td>{{ $event->bonus_ep }}</td>
                    <td>{{ $event->getMembersAsString() }}</td>
                    <td><a href="{{ route('events.edit', $event->id) }}">Edit</a></td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection