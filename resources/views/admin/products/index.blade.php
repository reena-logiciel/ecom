@extends('admin\default')
@section('title', 'Admin - Products')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Products
                <span class="pull-right">
                    {!! link_to_route('product.add', 'Add Product', [], ['class' => 'btn btn-primary']) !!}
                </span>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Products Listing
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                     <th>Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $key => $product)
                                <tr class="odd gradeX">
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category_id }}</td>
                                    <td class="center">
                                        {!! link_to_route('product.edit', 'Update', ['id' => $product->id], ['class' => 'btn btn-primary']) !!}
                                        {!! Form::open(['route' => ['product.delete', $product->id], 'method' => 'delete']) !!}
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="float:right;"> {!! $products->render(); !!} </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection