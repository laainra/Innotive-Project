<div class="border border-purple-400 rounded-lg py-4 px-4 mb-6">
  <form action="/tweets" method="POST" enctype="multipart/form-data">
    @csrf
      <textarea 
      name="body" 
      id="" 
      class="w-full border-none rounded-lg"
      placeholder="Show Your Innovation"
      required
      autofocus
      ></textarea>
      <hr class="my-2"/>
      <footer class="flex justify-between items-center">
          <img 
          src="{{auth()->user()->avatar}}"
          class="rounded-full mr-2" 
          alt="avatar"
          width="50"
          height="50"
          >
          <div class="flex items-center">
            <label for="tweetImage" class="mr-2 cursor-pointer" title="Add Image">
              <input type="file" name="tweetImage" id="tweetImage" style="display: none">
              <span><i class="far fa-image fa-2x"></i></span>
            </label>
            <button 
            type="submit"
            class="bg-purple-500 rounded-lg shadow py-1 px-3 ml-2 text-white h-10 hover:bg-purple-900"
            >Post</button>
          </div>
      </footer>
  </form>
  @error('body')
    <p class="mt-2 text-red-500 text-sm">{{$message}}</p>
  @enderror
</div>