@extends('admin\default')
@section('title', 'Edit Category')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Categories</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Category
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                       		{!! Form::model($category, ['route' => 'category.update', 'method' => 'post', 'files' => true]) !!}
                                {!! Form::hidden('id', Input::old('id'))!!}
                        		@include('admin.partials.post_form')
	                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection