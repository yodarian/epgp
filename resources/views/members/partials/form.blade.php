    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <hr>
    <div>
        <div class="form-group">
            {!! Form::label('loot', 'Loot:') !!}
            {!! Form::select('loot', App\Loot::getLootListForSelect() , null, array('class' => 'form-control')) !!}
            {!! Form::label('awarded_at', 'Awarded At:') !!}
            <br>
            {!! Form::input('date', 'awarded_at') !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>

