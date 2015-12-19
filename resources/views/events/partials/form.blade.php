<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('number_bosses', 'Number of Bosses killed:') !!}
    {!! Form::text('number_bosses', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('number_firstkills', 'Number of Firstkills:') !!}
    {!! Form::text('number_firstkills', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('time_spend', 'Time Spend:') !!}
    {!! Form::text('time_spend', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('bonus_ep', 'Bonus EP:') !!}
    {!! Form::text('bonus_ep', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('members', 'Members:') !!}
    {!! Form::select('members[]', App\Member::getMembersForMultiselect() , $selectedMembers, array('multiple' => 'multiple', 'class' => 'form-control multiselect', 'name' => 'members[]')) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>