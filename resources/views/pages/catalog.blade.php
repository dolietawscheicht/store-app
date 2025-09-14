@extends('layouts.root')

@section('head')
	<title>Магазин</title>
@endsection

@section('main')
	@include('widgets.header')

	<section class='grid gap-5'>
		<x-categories :categories='$categories' />
		<h1 class="mb-5 font-bold text-3xl">{{ $categoryName }}</h1>
		<x-product-grid :products='$products'/>
	</section>
@endsection