@extends('layouts.root')

@section('head')
	<title>{{ $categoryName }}</title>
@endsection

@section('main')
	@include('widgets.header')

	<section class='grid gap-5'>
		<x-categories :categories='$categories' />
		<section class='grid gap-5'>
			<h1 class="page-h">{{ $categoryName }}</h1>
			<section class='grid grid-rows-[1fr_auto] gap-10'>
				<x-product-grid :products='$products'/>
   				 {{ $products->onEachSide(2)->links('components.pagination') }}
			</section>
		</section>
	</section>
@endsection