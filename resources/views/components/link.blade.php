@props(['href'])

<a href="{{ $href }}" class='hover:text-sky-800'>
	{{ $slot }}
</a>