@props(['products'])

<section class='grid grid-cols-3 gap-10'>
    @foreach ($products as $product)
        <x-product-grid-item :product='$product' />
    @endforeach
</section>