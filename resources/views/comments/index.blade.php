<div class="border border-purple-300 rounded-lg">
    @foreach ($comments as $comment)
    <div class="flex p-4 border-b {{$loop->last ? '' : 'border-b-purple-300'}}">
      <div class="mr-2 flex-shrink-0">
          <a href="{{route('users.show', $comment->user)}}">
            <img 
            src="{{$comment->user->avatar}}"
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
                <a href="{{route('users.show', $comment->user)}}">
                  {{ $comment->user->name }}
                </a>
                <p class="text-xs">posted {{$comment->created_at->diffForHumans()}}</p>
              </h5>
              
            </div>
            
            <div>
              @if (auth()->user()->is($comment->user))
                <form action="{{route('comment.destroy', ['tweet' => $tweet->id, 'comment' => $comment->id])}}" method="POST">
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
              {{ $comment->body }}
            </p>
          </div>
          
      </div>
    </div>
    @endforeach
    
  </div>