<x-app-layout>


    <h1 class="text-4xl text-center">Categories</h1>

    <ul>
        @foreach ($categories as $category)
            <li><a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a>
</li>
        @endforeach
    </ul>

</x-app-layout>
