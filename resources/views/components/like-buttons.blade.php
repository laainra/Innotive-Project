<div class="flex mt-10 items-center ">

  <form action="/tweets/{{$tweet->id}}/like" method="post">
    @csrf
    <div class="flex items-center mr-5">
      <button type="submit" class="text-xs text-purple-800 flex items-center">
        <span class="material-symbols-outlined loaded {{$tweet->isLikedBy(auth()->user()) ? 'bg-purple-300' : 'bg-purple-200'}} p-1 rounded">
          thumb_up
          </span>
        {{$tweet->likes ?: 0 }}
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
 
        {{$tweet->dislikes?: 0 }}
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
        <a>Donate</a>
    </button>
  </div>
  <div>

  </div>
</div>