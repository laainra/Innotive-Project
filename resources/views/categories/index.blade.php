<x-app-layout>


    <h1 class="text-4xl text-center">Categories</h1>
    
    <ul class="divide-y divide-gray-200">
        
        @foreach ($categories as $category)
        <div class="flex items-center">
            <li class="px-8 py-2 m-5 rounded bg-purple-400 text-white w-full text-center hover:bg-purple-700" >

                <a class="px-8" href="{{ route('categories.show', $category) }}" >{{ $category->name }}</a>
            </li>
        </div>
        @endforeach
    </ul>
    

</x-app-layout>
