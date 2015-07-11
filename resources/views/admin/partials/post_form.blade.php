<div class="form-group">
    <label>Name</label>
    {!! Form::text('name', null, ['class' => 'form-control'])!!}
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
	<button class="btn btn-primary">Save</button>
	<a href="<?php echo route('categories.index') ?>" class="btn btn-default">Cancel</a>
</div>