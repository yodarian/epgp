    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <hr>
    <div>
        <div class="form-group">
            {!! Form::label('loot', 'Loot:') !!}
            {!! Form::select('loot', App\Loot::getLootListForSelect() , null, array('class' => 'form-control')) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>

