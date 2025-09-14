<header class='flex justify-end items-center gap-5'>
	<x-link href='#'>Корзина</x-link>
	@guest
		<x-button>Войти</x-button>
	@endguest
	@auth
		<x-link>Профиль</x-link>
	@endauth
</header>
