@extends('layouts.master')

@section('content')
    <h1>Edit Member</h1>
    <hr>
    {!! Form::model($member, ['method' => 'PATCH', 'url' => 'members/' . $member->id]) !!}
        @include ('members.partials.form', ['submitButtonText' => 'Update Member'])
    {!! Form::close() !!}

    @include ('errors.list')
@endsection