<?php

namespace App\Http\Controllers;

use App\Models\CivilProduct;

class CivilProductController extends Controller
{
    public function index()
    {
        $products = CivilProduct::orderBy('position')
            ->get(['id', 'short_title_ru', 'short_title_en', 'image', 'thumbnail']);

        return inertia('Catalog', [
            'products' => $products,
        ]);
    }

    public function show(CivilProduct $product)
    {
        $product->load(['video'])
            ->loadCount(['video']);

        return inertia('Product', [
            'product' => $product,
        ]);
    }
}
