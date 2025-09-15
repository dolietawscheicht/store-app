@extends('layouts.root')

@section('head')
	<title>{{ $product->name }}</title>
@endsection

@section('main')
	@include('widgets.header')

	<section class='grid gap-5'>
		<x-link href="{{ route('catalog.category', $category->id) }}">Назад</x-link>
		<img src="{{ $product->previewUrl }}" class='rounded-xl'>
		<hgroup>
 			<h1 class="page-h">{{ $product->name }}</h1>
			<p class='text-neutral-600'>{{ $category->name }}</p>
		</hgroup>
		<p>{{ $product->description }}</p>
    	<ul>
			<li>Страна: {{ $product->country }}</li>
			<li>Год: {{ $product->releaseYear }}</li>
		</ul>
		<form id='add-to-cart-form' class='grid gap-2 justify-start'>
			<input type="hidden" name="productId" value="{{ $product->id }}">
			<div id="cart-message" class="hidden">Товар добавлен в корзину!</div>
			<x-button>В корзину</x-button>
		</form>
	</section>
@endsection