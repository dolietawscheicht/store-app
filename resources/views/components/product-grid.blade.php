@props(['products'])

<section class='grid grid-rows-[1fr_auto] gap-10'>
    <section class='grid grid-cols-3 gap-10'>
        @foreach ($products as $product)
            <x-product-grid-item :product='$product' />
        @endforeach
    </section>
    {{ $products->onEachSide(1)->links('components.pagination') }}
</section>