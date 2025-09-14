@props(['product'])

<div>
	<a href="#" class='grid gap-2'>
		<figure>
			<img src="{{ $product->previewUrl }}">
			<figcaption>{{ $product->name }}</figcaption>
		</figure>
		<p class='font-bold'>{{ $product->price }}₽</p>
	</a>
</div>