<div class="form-group">
    <label>Name</label>
    {!! Form::text('name', null, ['class' => 'form-control'])!!}
    @if($errors->has('name'))
    	<label for="">{{ $errors->first('name') }}</label>
	@endif
</div>


<div class="form-group">
    <label>Category</label>
    {!! Form::select('category_id',  [null=>'Please Select'] + $data, Input::old('category_id'), ['class' => 'form-control'])  !!}    
     @if($errors->has('category_id'))
        <label for="">{{ $errors->first('category_id') }}</label>
    @endif
</div>
<div class="form-group">
	<button class="btn btn-primary">Save</button>
	<a href="<?php echo route('categories.index') ?>" class="btn btn-default">Cancel</a>
</div>