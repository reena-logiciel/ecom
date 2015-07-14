<div class="form-group">
    <label>Name</label>
    {!! Form::text('name', null, ['class' => 'form-control', 'files' => 'true']) !!}
    @if($errors->has('name'))
    	<label for="">{{ $errors->first('name') }}</label>
	@endif
</div>


<div class="form-group">
    <label>Status</label>
    {!! Form::radio('status', true, ['class' => 'form-control'] ) !!}
    {!! Form::radio('status','', ['class' => 'form-control'] ) !!}
</div>

<div class="form-group">
    {!! Form::label('Product Image') !!}
    {!! Form::file('image', null) !!}
    @if($errors->has('image'))
        <label for="">{{ $errors->first('image') }}</label>
    @endif
</div>

<div class="form-group">
	<button class="btn btn-primary">Save</button>
	<a href="<?php echo route('categories.index') ?>" class="btn btn-default">Cancel</a>
</div>