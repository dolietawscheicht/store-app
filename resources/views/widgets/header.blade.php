<header class='flex justify-end items-center gap-5'>
	@guest
		<x-link href="{{ route('auth.signup-form') }}">Регистрация</x-link>
		<x-link href="{{ route('auth.login-form') }}">Войти</x-link>
	@endguest
	@auth
		<x-link href="#">Корзина</x-link>
		<x-link href="{{ route('auth.logout') }}">Выйти</x-link>
	@endauth
</header>
