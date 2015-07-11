@extends('admin\default')
@section('title', 'Edit Product')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Products</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Product
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                       		{!! Form::model($product, ['route' => 'product.update', 'method' => 'post', 'files' => true]) !!}
                                {!! Form::hidden('id', Input::old('id'))!!}
                        		@include('admin.partials.product_form')
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