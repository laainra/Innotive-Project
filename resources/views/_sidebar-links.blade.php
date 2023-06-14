
<ul >
  <li> 
    <div class="flex-shrink-0 flex items-center mb-10">
        
        <a href="{{ route('tweets.index') }}">
            <x-application-logo class="block h-50 w-auto fill-current text-gray-600" />
        </a>
    </div>
  </li>
  <li class="flex items-center">
    <span class="material-symbols-outlined mr-5 mb-6">
      home
    </span>
      <a class="font-bold text-2xl mb-6 block hover:text-purple-500 {{ Request::is('tweets*') ? 'text-purple-500' : '' }}" href="/tweets">
          Home
      </a>
  </li>
  <li class="flex items-center">
    <span class="material-symbols-outlined mr-5 mb-6">
      search
    </span>
      <a class="font-bold text-2xl mb-6 block hover:text-purple-500 {{ Request::is('explore*') ? 'text-purple-500' : '' }}" href="/explore">
          Explore
      </a>
  </li>
  <li class="flex items-center">
    <span class="material-symbols-outlined mr-5 mb-6">
      list
    </span>
      <a class="font-bold text-2xl mb-6 block hover:text-purple-500 {{ Request::is('categories*') ? 'text-purple-500' : '' }}" href="/categories">
          Categories
      </a>
  </li>
  {{-- <li> 
    
    @if (auth()->user()->is($user))
    <a class="font-bold text-lg mb-4 block hover:text-purple-500 {{ Request::is(route('users.edit', $user)) ? 'text-purple-500' : '' }}" href="{{route('users.edit', $user)}}">
      Setting
  </a>
    @endif
</li> --}}
<li class="flex items-center">
    <span class="material-symbols-outlined mr-5 mb-6">
      person
    </span>
      <a class="font-bold text-2xl mb-6 block hover:text-purple-500 {{ Request::is('users/' . auth()->user()->username) ? 'text-purple-500' : '' }}" href="{{ route('users.show', auth()->user()->username) }}">
          Profile
      </a>
  </li>
  <li class="flex items-center">
    <span class="material-symbols-outlined mr-5 mb-6">
      wallet
    </span>
      <a class="font-bold text-2xl mb-6 block hover:text-purple-500 {{ Request::is('wallet*') ? 'text-purple-500' : '' }}" href="/wallet">
          Wallet
      </a>
  </li>
  <li class="flex items-center">
    <span class="material-symbols-outlined mr-5 mb-6">
      logout
    </span>
      <form action="/logout" method="post">
          @csrf
          <button class="font-bold text-2xl mb-6  block hover:text-purple-500">Logout</button>
      </form>
  </li>
  <li class="flex items-center "> 
    <a class="flex items-center font-bold text-2xl mb-6 bottom-0  hover:text-purple-500 {{ Request::is('users/' . auth()->user()->username) ? 'text-purple-500' : '' }}" href="{{ route('users.show', auth()->user()->username) }}">
        <img src="{{ Auth::user()->avatar }}" alt="" class="rounded-full mr-2" height="30" width="30">
        <span>{{ Auth::user()->name }}</span>
    </a>
    
  </li>
</ul>
