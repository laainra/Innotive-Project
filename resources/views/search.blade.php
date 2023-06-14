<x-app-layout>
    @section('title', 'Explore')

    <form action="{{ route('explore.search') }}" method="GET" class="mb-4">
        <input type="text" name="search" placeholder="Search users..." class="border border-gray-300 rounded-lg p-2">
        <button type="submit" class="bg-purple-500 text-white rounded-lg px-4 py-2">Search</button>
    </form>
    
    <div>
        @foreach ($users as $user)
            <a href="{{ route('users.show', $user) }}" class="flex items-center mb-5">
                <img src="{{ $user->avatar }}" alt="{{ $user->username }}'s avatar" width="60" height="60" class="mr-4 rounded">
                <div>
                    <h4 class="">{{$user->name }}</h4>
                    <h4 class="font-bold">{{ '@' . $user->username }}</h4>
                </div>
            </a>
        @endforeach

        {{ $users->links() }}
    </div>
</x-app-layout>
