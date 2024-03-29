<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 08/04/2018
 * Time: 03:46
 */
namespace App\Http\Controllers\Storefront\Artist\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ArtistProductController extends Controller
{

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {

    }
    
    public function show($slug, $uuid){

        $product = Product::find($uuid);

        return view('storefront.artist.product.product')->with([
            'product' => $product,
            'artist' => $product->store->user->profile,
            'other_products' => $product->store->products()->where('id','!=',$uuid)->where('live', true)->limit(3)->get()->shuffle()
        ]);
    }
}
