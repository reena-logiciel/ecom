@extends('default')
@section('title', ' Products')
@section('content')
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
                        {!! link_to_route('product.edit', 'Add to Cart', ['id' => $product->id], ['class' => 'btn btn-primary']) !!}
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="float:right;"> {!! $products->render(); !!} </div>
    </div>