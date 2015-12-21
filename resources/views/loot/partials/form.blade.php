    <div class="form-group">
        {!! Form::label('item_lvl', 'Item Level:') !!}
        {!! Form::text('item_lvl', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('slot', 'Slot:') !!}
        {!! Form::text('slot', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('gear_points', 'Gear Points:') !!}
        {!! Form::text('gear_points', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>

