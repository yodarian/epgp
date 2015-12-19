@extends('layouts.master')

@section('content')
    <h1>Create Event</h1>
    <hr>
    {!! Form::open(['url' => 'events']) !!}
    @include ('events.partials.form', ['submitButtonText' => 'Add Event', 'selectedMembers' => null])
    {!! Form::close() !!}

    @include ('errors.list')
@endsection