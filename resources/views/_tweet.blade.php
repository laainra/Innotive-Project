<div class="flex p-4  border-b-gray-300 {{$loop->last ? '' : 'border-b-gray-300'}}">
  <div class="mr-2 flex-shrink-0">
      <a href="{{route('users.show', $tweet->user)}}">
        <img 
        src="{{$tweet->user->avatar}}"
        class="rounded-full mr-2" 
        alt="avatar"
        width="50"
        height="50"
        >
      </a>
  </div>
  <div>
      <div class="flex justify-between"  style="width: 600px">
        <div>
          <h2 class="font-bold mb-4">
            <a href="{{route('users.show', $tweet->user)}}">
              {{ $tweet->user->name }}
            </a>
            <p class="text-xs">posted {{$tweet->created_at->diffForHumans()}} in <a href="/categories/{{$tweet->category->slug}}"> {{ optional($tweet->category)->name }} </a></p>
            
          </h2>
          
        </div>
        

      </div>
      <a href="{{route('tweets.show', ['tweet' => $tweet->id] )}}">
      <div class="flex justify-between">
        
        <p class="text-lg">
          {{ $tweet->body }}
        </p>

      </div>
      @if ($tweet->tweetImage != 'http://localhost:8000/')
        <img src="{{$tweet->tweetImage}}" width="50%" class="mx-auto">
      @endif
      </a>
      <x-like-buttons :tweet="$tweet" />
      @include('tweets.modal')
  </div>

</div>