@extends('layouts.master')

@section('content')
    <h1>Create Member</h1>
    <hr>
    {!! Form::open(['url' => 'members']) !!}
        @include ('members.partials.form', ['submitButtonText' => 'Add Member'])
    {!! Form::close() !!}

    @include ('errors.list')
@endsection