<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Category;
use App\Product;
use Redirect;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products =  Product::paginate(5);
        return view(Controller::$adminPrefix.'.products.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    public function add()
    {
        $data = Category::lists('name', 'id')->toArray();
        return view(Controller::$adminPrefix.'.products.add', [
            'product' => [],
            'data'  => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
   public function store(CreateProductRequest $request)
    {
        $product = new Product;
        $product->name = $request->get('name');
        $product->category_id = $request->get('category_id', 0);
        if($product->save()) {
            return Redirect::route('products.index');
        }
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $data = Category::lists('name', 'id')->toArray();
        return view(Controller::$adminPrefix.'.products.edit', [
            'product' => $product,
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(CreateProductRequest $request)
    {
        $product = Product::findOrFail($request->get('id'));
        $product->name = $request->get('name');
        $product->category_id = $request->get('category_id',0);
        if($product->save()) {
            return Redirect::route('products.index');
        }
        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
