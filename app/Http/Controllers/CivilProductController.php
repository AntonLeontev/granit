<?php

namespace App\Http\Controllers;

use App\Models\CivilProduct;

class CivilProductController extends Controller
{
    public function index()
    {
        $products = CivilProduct::orderBy('position')
            ->get(['id', 'short_title_ru', 'short_title_en', 'image']);

        return inertia('Catalog', [
            'products' => $products,
        ]);
    }

    public function show(CivilProduct $product)
    {
        $product->load(['videos'])
            ->loadCount(['videos']);

        return inertia('Product', [
            'product' => $product,
        ]);
    }
}
