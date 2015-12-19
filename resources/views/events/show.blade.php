@extends('layouts.master')

@section('content')
    <h1>{{ $event->name }}</h1>
    <table>
        <tr>
            <th>EP</th>
            <th># Bosses</th>
            <th># Firstkills</th>
            <th>Time Spent</th>
            <th>Bonus EP</th>
            <th>Member</th>
        </tr>
        <tr>
            <td>{{ $event->ep }}</td>
            <td>{{ $event->number_bosses }}</td>
            <td>{{ $event->number_firstkills }}</td>
            <td>{{ $event->time_spend }}</td>
            <td>{{ $event->bonus_ep }}</td>
            <td>{{ $event->getMembersAsString() }}</td>
        </tr>
    </table>
@endsection