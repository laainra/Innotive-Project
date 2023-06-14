<x-app-layout>
    @section('title', 'Categories')

    {{-- <h1 class="text-4xl text-center">Categories</h1> --}}
    
    <ul class="divide-y divide-gray-200 grid lg:grid-cols-2 sm:grid-cols-1">
        @foreach ($categories as $category)
        <div class="flex items-center flex-col">
            <a class="  w-80" href="{{ route('categories.show', $category) }}">
                <li class=" pb-2 pt-4 m-3 rounded bg-purple-400 text-white text-lg text-center hover:bg-purple-700 h-16 flex justify-center">
                    {{ $category->name }}
                </li>
            </a>
        </div>
        @endforeach
    </ul>
    
    

</x-app-layout>
