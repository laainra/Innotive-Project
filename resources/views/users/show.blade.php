<x-app-layout>
  <header class="mb-6 relative">
    <div class="relative">  
      <img 
      src="{{$user->banner}}" 
      alt="banner" 
      class="rounded-lg full-width"
      />
      <img 
      src="{{$user->avatar}}" 
      alt=""
      class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
      style="left: 50%; border-radius: 50%;"
      height="150"
      width="150"
      />
    </div>

    <div class="flex justify-between items-center mb-8">
      <div style="max-width: 270px">
        <h2 class="font-blod text-2xl">{{$user->name}}</h2>
        <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
      </div>
      <div class="flex">
        @if (auth()->user()->is($user))
        <a href="{{route('users.edit', $user)}}" class="border bg-purple-500 text-white px-2 py-1 mr-4 rounded-lg">Edit Profile</a>
        @endif
        <x-follow-button :user="$user"></x-follow-button>
      </div>
    </div>
    @if(session()->has('message'))
        <div class="border-gray-500 bg-green-400 p-2 w-full mb-2 rounded-lg" onclick="this.style.display='none'">
            {{session()->get('message')}}
            <span class="text-sm text-gray-500">(click to dismiss)</span>
        </div>
    @elseif(session()->has('error'))
        <div class="alert alert-danger">
            {{session()->get('error')}}
        </div>
    @endif
    <p class="text-sm">
      @if (auth()->user()->is($user))
        {{$user->description ? $user->description : 'Add description. Go to edit profile.'}}
      @endif
    </p>

  </header>
  @include('_publish-tweet-panel')
  @include('_timeline', [
    'tweets' => $tweets
  ])
</x-app-layout>