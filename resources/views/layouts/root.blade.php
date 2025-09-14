<!DOCTYPE html>
<html lang='ru'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        @yield('head')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class='p-2 max-w-6xl mx-auto bg-stone-100 text-neutral-900'>
		<main>
			@yield('main')
		</main>
    </body>
</html>
 