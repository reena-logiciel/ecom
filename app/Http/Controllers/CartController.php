<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function add(Request $request) { 
        
        // $request->session()->forget('cart'); die;
        $id     =   $request->get('id');
        $product_to_add    =   array('id'=>$id, 'quantity' => 1);
        if ($request->session()->has('cart')) {
            $already    =   false;

            $products = $request->session()->get('cart');
            foreach($products as $key => &$product) {
                if ( $product['id'] === $id) { // alredy in card, update quantlity
                    $product['quantity']    =   $product['quantity']+1;       
                    $already = true;
                    break;
                } 
            }
            if($already == false)
                $products[] = $producct_to_add;

            $request->session()->put('cart', $products);
             //$request->session()->forget('cart');
            /* foreach(\Session::get('cart') as $item) {
                if ($item['id'] == $id) { // say we  want to double the quantity for itemId 2
                    $item['quantity'] = $item['quantity'] * 1;
                    break;
                }
            } */

           
        } else { 
            $request->session()->put('cart', array($product_to_add));
        }
        
        $value = $request->session()->get('cart');
        echo "<pre>"; print_r($value); 
        
    }   
}    
