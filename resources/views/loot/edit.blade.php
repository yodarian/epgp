@extends('layouts.master')

@section('content')
    <h1>Edit Loot: {{ $loot->name }}</h1>
    <hr>
    {!! Form::model($loot, ['method' => 'PATCH', 'url' => 'loot/' . $loot->id]) !!}
        @include ('loot.partials.form', ['submitButtonText' => 'Update Loot'])
    {!! Form::close() !!}

    @include ('errors.list')
@endsection