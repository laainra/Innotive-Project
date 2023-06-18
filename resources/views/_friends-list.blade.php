<form action="{{ route('explore.search') }}" method="GET" class="mb-4">
  <div class="flex">
  <input type="text" name="search" placeholder="Search users..." class="border border-gray-300 rounded-lg w-40 ">
  <div class="ml-3 mt-1">
  <button type="submit" class="bg-purple-500 text-white rounded-lg">      <span class="material-symbols-outlined p-1 rounded">
    search </span></button>
  </div>
  </div>
</form>

<h3 class="font-bold text-2xl mb-2">Following</h3>

<ul>
  <li>
    @forelse (auth()->user()->follows as $user)
      <a href="{{route('users.show', $user)}}">
        <div class="flex items-center mb-2 bg-blue-100 p-2 rounded-lg">
          <img 
          src="{{$user->avatar}}"
          class="rounded-full mr-2" 
          alt="avatar"
          width="40"
          height="40"
          >
          {{$user->name}}
        </div>
      </a>
      @empty
      <p class="p-2">No friends yet</p>
    @endforelse
  </li>
</ul>