@props(['product'])

<div>
    <a href="{{ route('catalog.products.show', ['category' => $product->category_id, 'product' => $product->id]) }}" class='grid gap-2'>
        <figure>
            <img src="{{ $product->previewUrl }}" class='rounded-xl'>
            <figcaption>{{ $product->name }}</figcaption>
        </figure>
        <p class='font-bold'>{{ $product->price }}₽</p>
    </a>
</div>