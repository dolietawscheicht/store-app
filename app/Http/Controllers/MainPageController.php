<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use App\Services\ProductService;

class MainPageController extends Controller
{
	public function __construct(
		private CategoryService $categoryService,
		private ProductService $productService,
	) {}

	public function __invoke(?Category $category = null)
	{
		$categories = $this->categoryService->getAll();

		$categoryName = $category ? $category->name : 'Недавно добавленное';
		$products = $category
			? $this->productService->paginateByCategoryId($category->id)
			: $this->productService->paginateByNewest();

		return view('catalog', compact('categories', 'categoryName', 'products'));
	}
}
