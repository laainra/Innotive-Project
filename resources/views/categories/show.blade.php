<x-app-layout>

    {{-- <h1>Category: {{$category->name }}</h1> --}}

    <div class="border border-purple-300 rounded-lg">
        @forelse ($tweets as $tweet)
          @include('_tweet')
        @empty
          <p class="p-4">Nothing yet, post something.</p>
        @endforelse
        {{ $tweets->links()}}
      </div>
</x-app-layout>