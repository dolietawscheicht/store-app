<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ShowProductController extends Controller
{
	public function __invoke(Category $category, Product $product)
	{
		return view('product-show', compact('category', 'product'));
	}
}
