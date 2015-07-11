@extends('admin\default')
@section('title', 'Admin - Categories')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Categories
                <span class="pull-right">
                    {!! link_to_route('category.add', 'Add Category', [], ['class' => 'btn btn-primary']) !!}
                </span>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Categories List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $key => $category)
                                <tr class="odd gradeX">
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->status }}</td>
                                    <td class="center">
                                        {!! link_to_route('category.edit', 'Update', ['id' => $category->id], ['class' => 'btn btn-primary']) !!}
                                        {!! Form::open(['route' => ['category.delete', $category->id], 'method' => 'delete']) !!}
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection