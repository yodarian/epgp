@extends('layouts.master')

@section('content')
    <h2>Loot</h2>

    <div class="btn btn-link">
        <a href="{{ route('loot.create') }}">Add Loot</a>
    </div>
    @if ( !$loot->count() )
        You have no loot
    @else
        <table>
            <tr>
                <th>Item Level</th>
                <th>Slot</th>
                <th>Name</th>
                <th>Gear Points</th>
                <th>Member</th>
                <th></th>
                <th></th>
            </tr>
            @foreach( $loot as $item )
                <tr>
                    <td><a href="{{ route('loot.show', $item->id) }}">{{ $item->item_lvl }}</a></td>
                    <td>{{ $item->slot }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->gear_points }}</td>
                    <td>{{ $item->getMembersAsString() }}</td>
                    <td><a href="{{ route('loot.edit', $item->id) }}">Edit</a></td>
                    <td>
                        {!! Form::open(array('url' => 'loot/' . $item->id, 'class' => 'pull-right')) !!}
                            {!! Form::hidden('_method', 'DELETE') !!}
                            {!! Form::submit('Delete', array('class' => 'btn btn-warning')) !!}
                        {!!  Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection