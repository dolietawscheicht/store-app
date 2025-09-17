@extends('layouts.auth')

@section('head')
	<title>Вход</title>
@endsection

@section('auth-form')
	<form action="{{ route('auth.login') }}" method='post' class='grid gap-10'>
		@csrf
		<h1 class='page-h'>Вход</h1>

		<fieldset class='grid gap-1'>
			<x-input name='email' placeholder='E-mail' value="{{ old('email') }}"/>
			@error('email')
				<small class='text-orange-500'>{{ $message }}</small>
			@enderror
			<x-input name='password' placeholder='******' />
			@error('password')
				<small class='text-orange-500'>{{ $message }}</small>
			@enderror
		</fieldset>

		<x-button>Подтвердить</x-button>
	</form>
@endsection
