@extends('layouts.root')

@section('head')
	<title>Корзина</title>
@endsection

@section('main')
	@include('widgets.header')

	<section class='grid gap-5'>
		<x-link href="{{ route('catalog') }}">Назад</x-link>
		<h1 class='page-h'>Корзина</h1>
		<section id='cart'>

		</section>
	</section>
@endsection