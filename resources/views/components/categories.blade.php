@props(['categories'])

<details class="group grid gap-2">
    <summary class="list-none cursor-pointer w-min hover:text-sky-800 before:content-['Категории'] group-open:before:content-['Закрыть']"></summary>
    <nav class="grid gap-2 p-3 bg-white border border-neutral-200 absolute justify-items-start select-none">
        @foreach ($categories as $category)
            <x-link href="{{ route('pages.catalog', $category->id) }}">
                {{ $category->name }}
            </x-link>
        @endforeach
    </nav>
</details>