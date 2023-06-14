
<ul >
  <li> 
    <div class="flex-shrink-0 flex items-center mb-10">
        <a href="{{ route('tweets.index') }}">
            <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
        </a>
    </div>
  </li>
  <li> 
      <a class="font-bold text-2xl mb-4 block hover:text-purple-500 {{ Request::is('tweets*') ? 'text-purple-500' : '' }}" href="/tweets">
          Home
      </a>
  </li>
  <li> 
      <a class="font-bold text-2xl mb-4 block hover:text-purple-500 {{ Request::is('explore*') ? 'text-purple-500' : '' }}" href="/explore">
          Explore
      </a>
  </li>
  <li> 
      <a class="font-bold text-2xl mb-4 block hover:text-purple-500 {{ Request::is('categories*') ? 'text-purple-500' : '' }}" href="/categories">
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
  <li> 
      <a class="font-bold text-2xl mb-4 block hover:text-purple-500 {{ Request::is('users/' . auth()->user()->username) ? 'text-purple-500' : '' }}" href="{{ route('users.show', auth()->user()->username) }}">
          Profile
      </a>
  </li>
  <li> 
      <a class="font-bold text-2xl mb-4 block hover:text-purple-500 {{ Request::is('wallet*') ? 'text-purple-500' : '' }}" href="/wallet">
          Wallet
      </a>
  </li>
  <li> 
      <form action="/logout" method="post">
          @csrf
          <button class="font-bold text-2xl mb-4 block hover:text-purple-500">Logout</button>
      </form>
  </li>
  <li> 
    <a class="flex items-center font-bold text-2xl mb-4  hover:text-purple-500 {{ Request::is('users/' . auth()->user()->username) ? 'text-purple-500' : '' }}" href="{{ route('users.show', auth()->user()->username) }}">
        <img src="{{ Auth::user()->avatar }}" alt="" class="rounded-full mr-5" height="50" width="50">
        <span>{{ Auth::user()->name }}</span>
    </a>
    
  </li>
</ul>
