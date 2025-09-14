<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
	public function paginateByNewest($take = 9)
	{
		return Product::orderBy('created_at', 'desc')
			->paginate($take);
	}

	public function paginateByCategoryId(int $id, $take = 9)
	{
		return Product::where('category_id', $id)
			->orderBy('created_at', 'desc')
			->paginate($take);
	}
}
