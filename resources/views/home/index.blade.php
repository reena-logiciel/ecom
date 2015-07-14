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
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $key => $product)
                <tr class="odd gradeX">
                    <td>{{ $product->id }}</td>
                    <td> {{ $product->name }} </td>
                    <td>
                    @if ($product->category)
                        {{ $product->category->name }}
                    </td>
                     @endif
                    <td> {{ $product->price }} </td>
                    <td class="center">
                        {!! Form::open(['route' => ['cart.add', $product->id], 'method' => 'post']) !!}
                            {!! Form::hidden('id',$product->id) !!}
                            <button type="submit" class="btn btn-default">Add to Cart</button>
                            
                        {!! Form::close() !!}
                    </td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="float:right;"> {!! $products->render(); !!} </div>
    </div>
    @endsection