<div class="flex mt-10 items-center ">

  <form action="/tweets/{{$tweet->id}}/like" method="post">
    @csrf
    <div class="flex items-center mr-5">
      <button type="submit" class="text-xs text-purple-800 flex items-center">
        <span class="material-symbols-outlined loaded {{$tweet->isLikedBy(auth()->user()) ? 'bg-purple-300' : 'bg-purple-200'}} p-1 rounded">
          thumb_up
          </span>
          <span class="like-count">{{$tweet->likes ?: 0}}</span>
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
 
          <span class="dislike-count">{{$tweet->dislikes ?: 0}}</span>
      </button>

    </div>
  </form>

  <div class="flex items-center mr-5">
    <a href="{{route('tweets.show', ['tweet' => $tweet->id])}}" class="text-xs text-purple-800 flex items-center">
      <span class="material-symbols-outlined p-1 rounded">
          comment </span>
          <span class="comment-count">{{ $tweet->comments->count() ?: 0 }}</span>
      </a>
  </div>

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

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        $('.like-button').click(function () {
            var tweetId = $(this).data('tweet-id');
            var button = $(this);

            $.ajax({
                url: '/tweets/' + tweetId + '/like',
                method: 'POST',
                data: {_token: '{{ csrf_token() }}'},
                success: function (response) {
                    var likeCount = response.likes;
                    button.toggleClass('liked');
                    button.find('.like-count').text(likeCount);
                }
            });
        });

        $('.dislike-button').click(function () {
            var tweetId = $(this).data('tweet-id');
            var button = $(this);

            $.ajax({
                url: '/tweets/' + tweetId + '/like',
                method: 'DELETE',
                data: {_token: '{{ csrf_token() }}'},
                success: function (response) {
                    var dislikeCount = response.dislikes;
                    button.toggleClass('disliked');
                    button.find('.dislike-count').text(dislikeCount);
                }
            });
        });
    });
</script>