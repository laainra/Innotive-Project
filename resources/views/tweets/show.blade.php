<x-app-layout>
<div class="flex p-4 border-b">
    <div class="mr-2 flex-shrink-0 justify-between">
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
            <h5 class="font-bold mb-4">
              <a href="{{route('users.show', $tweet->user)}}">
                {{ $tweet->user->name }}
              </a>
              <p class="text-xs">posted {{$tweet->created_at->diffForHumans()}} in <a href="/categories/{{$tweet->category->slug}}"> {{ optional($tweet->category)->name }} </a></p>
            </h5>
            
          </div>
          
          <div>
            @if (auth()->user()->is($tweet->user))
              <form action="{{route('tweets.destroy', $tweet)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">
                  <i class="ml-8 fas fa-trash text-red-500"></i>
                </button>
              </form>
            @endif
          </div>
        </div>
        <div class="flex justify-between">

          <p class="text-sm">
            {{ $tweet->body }}
          </p>

        </div>
        @if ($tweet->tweetImage != 'http://localhost:8000/')
          <img src="{{$tweet->tweetImage}}" width="50%" class="mx-auto">
        @endif
        <div class="flex mt-10 items-center ">

          <form action="/tweets/{{$tweet->id}}/like" method="post">
            @csrf
            <div class="flex items-center mr-5">
              <button type="submit" class="text-xs text-purple-800 flex items-center">
                <span class="material-symbols-outlined loaded {{$tweet->isLikedBy(auth()->user()) ? 'bg-purple-300' : 'bg-purple-200'}} p-1 rounded">
                  thumb_up
                  </span>
                  <span class="like-count">{{$tweet->likes()->count() ?: 0 }}</span>
              </button>
            </div>
          </form>
        
          <form action="/tweets/{{$tweet->id}}/like" method="post">
            @csrf
            @method('DELETE')
            <div class="flex items-center mr-5">
              <button type="submit" class="text-xs text-purple-800 flex items-center">
                <span class="material-symbols-outlined loaded {{$tweet->isDislikedBy(auth()->user()) ? 'bg-purple-300' : 'bg-purple-200'}} p-1 rounded">
                  thumb_down
                  </span>
         
                  <span class="dislike-count">{{$tweet->dislikes->count() ?: 0 }}</span>
              </button>
        
            </div>
          </form>
        
          <div class="flex items-center mr-5">
            <button type="submit" class="text-xs text-purple-800 flex items-center">
              <span class="material-symbols-outlined p-1 rounded">
                  ios_share
            </button>
          </div>
        
          <div class="flex items-right mr-5">
            <button type="submit" class="bg-purple-500 rounded-lg shadow py-1 px-3 ml-2 text-white h-10 hover:bg-purple-900">
              {{-- <form action="{{ route('donate', $tweet) }}" method="POST">
                @csrf --}}
                <a href="{{route('donate.index', $tweet)}}">Donate</a>
        
              {{-- </form> --}}
          </div>
          <div>
        
          </div>
        </div>
    </div>
    </div>
    @include('_publish-comment-panel')
    @include('comments.index', [
      'comments' => $tweet->comments,
      'tweet_id' => $tweet->id
    ])

</x-app-layout>