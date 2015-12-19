@extends('layouts.master')

@section('content')
    <h1>Edit Event</h1>
    <hr>
    {!! Form::model($event, ['method' => 'PATCH', 'url' => 'events/' . $event->id]) !!}
    @include ('events.partials.form', ['submitButtonText' => 'Update Event', 'selectedMembers' => $event->getMemberIdsAsArray()])
    {!! Form::close() !!}

    @include ('errors.list')
@endsection