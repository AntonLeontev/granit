<?php

namespace App\Http\Controllers;

use App\Models\MilitaryProduct;

class MilitaryProductController extends Controller
{
    public function index()
    {
        $products = MilitaryProduct::get(['id', 'title_ru', 'title_en', 'image']);

        return inertia('Catalog', [
            'products' => $products,
            'loc' => app()->getLocale(),
        ]);
    }

    public function show(MilitaryProduct $product)
    {
        $product->load(['videos'])
            ->loadCount(['videos']);

        return inertia('Product', [
            'product' => $product,
            'loc' => app()->getLocale(),
        ]);
    }
}
