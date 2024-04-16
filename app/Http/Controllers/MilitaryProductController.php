<?php

namespace App\Http\Controllers;

use App\Models\MilitaryProduct;

class MilitaryProductController extends Controller
{
    public function index()
    {
        $products = MilitaryProduct::orderBy('position')
            ->get(['id', 'short_title_ru', 'short_title_en', 'image', 'thumbnail']);

        return inertia('Catalog', [
            'products' => $products,
        ]);
    }

    public function show(MilitaryProduct $product)
    {
        $product->load(['video'])
            ->loadCount(['video']);

        return inertia('Product', [
            'product' => $product,
        ]);
    }
}
