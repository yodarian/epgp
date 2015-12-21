@extends('layouts.master')

@section('content')
    <h1>Create Loot</h1>
    <hr>
    {!! Form::open(['url' => 'loot']) !!}
        @include ('loot.partials.form', ['submitButtonText' => 'Add Loot'])
    {!! Form::close() !!}

    @include ('errors.list')
@endsection