<x-app-layout>
  @section('title', 'Profile')
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
        <div class="flex justify-between my-3"> 
          <h1 class="mr-3"> <b>{{$userTweetsCount}}</b> Posts</h1>
          <h1 style="cursor: pointer;" id="followers" class="mr-3"><b>{{$userFollowersCount}}</b> Followers</h1>
          <h1 style="cursor: pointer;" id="following"> <b>{{$userFollowingCount}}</b> Following</h1>
          

        </div>
        <div>
          <h1> <b>{{$totalDonation}}</b> Donation Recieved</h1>
        </div>
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
    <div class="border border-purple-300 rounded-lg">
    <p class="text-sm pl-5 pt-5 text-gray-600">Description:</p>
    <p class=" p-5">
      @if (auth()->user()->is($user))
        {{$user->description ? $user->description : 'Add description. Go to edit profile.'}}
      @endif
    </p>
  </div>

  </header>
  @include('_timeline', [
    'tweets' => $tweets
  ])
  {{-- @include('users.following-modal')
  @include('users.followers-modal') --}}
  <!-- AddToAny BEGIN -->

<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->

<!-- Social Media Sharing Modal -->
<div class="following-modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
  <div class="modal-content bg-white p-8">
    <div class="flex justify-between mb-4">
      <h2 class="text-xl font-bold">Followers</h2>
      <button class="text-gray-600 ml-3" onclick="closeFollowingModal()"><i class="fas fa-times"></i></button>
    </div>
    <!-- Social Media Sharing Buttons -->
    <div class=" justify-center">
      <!-- Add your social media sharing buttons here -->
      @foreach($following as $follow)

        <div class="flex">
          <h4 class="mr-2">{{ $follow->name }}</h4>
          <h4 class="font-bold">{{'@'.$follow->username}}</h4>
        </div>

  @endforeach
      <!-- Add more buttons for other social media platforms as needed -->
    </div>
    <div class="flex justify-center mt-4">
      <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded" onclick="closeFollowingModal()">Close</button>
    </div>
  </div>
</div>
<div class="followers-modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
  <div class="modal-content bg-white p-8">
    <div class="flex justify-between mb-4">
      <h2 class="text-xl font-bold">Followers</h2>
      <button class="text-gray-600 ml-3" onclick="closeFollowersModal()"><i class="fas fa-times"></i></button>
    </div>
    <!-- Social Media Sharing Buttons -->
    <div class="justify-center">
      <!-- Add your social media sharing buttons here -->
      @foreach($followers as $follower)


          <div class="flex">
            <h4 class="mr-2">{{ $follower->name }} </h4>
            <h4 class="font-bold">{{'@'.$follower->username}}</h4>
          </div>


  @endforeach
      <!-- Add more buttons for other social media platforms as needed -->
    </div>
    <div class="flex justify-center mt-4">
      <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded" onclick="closeFollowersModal()">Close</button>
    </div>
  </div>
</div>

<script>
  function closeFollowingModal() {
    const socialMediaModal = document.querySelector('.following-modal');
    socialMediaModal.classList.add('hidden');
  }
  function closeFollowersModal() {
    const socialMediaModal = document.querySelector('.followers-modal');
    socialMediaModal.classList.add('hidden');
  }

  function showFollowingModal() {
    const followingModal = document.querySelector('.following-modal');
    followingModal.classList.remove('hidden');
  }
  function showFollowersModal() {
    const followingModal = document.querySelector('.followers-modal');
    followingModal.classList.remove('hidden');
  }

  document.addEventListener('DOMContentLoaded', function () {
    const following = document.getElementById('following');
    following.addEventListener('click', showFollowingModal);
  });
  document.addEventListener('DOMContentLoaded', function () {
    const followers = document.getElementById('followers');
    followers.addEventListener('click', showFollowersModal);
  });
</script>

</x-app-layout>