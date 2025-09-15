@extends('layouts.root')

@section('head')
	@yield('head')
@endsection

@section('main')
	<section class='grid gap-5 h-lvh justify-center items-center'>
		<div class='w-96'>
			@yield('auth-form')
		</div>
	</section>
@endsection