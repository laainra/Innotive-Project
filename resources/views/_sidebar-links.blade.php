<ul>
  <li> 
      <a class="font-bold text-lg mb-4 block hover:text-purple-500 {{ Request::is('tweets*') ? 'text-purple-500' : '' }}" href="/tweets">
          Home
      </a>
  </li>
  <li> 
      <a class="font-bold text-lg mb-4 block hover:text-purple-500 {{ Request::is('explore*') ? 'text-purple-500' : '' }}" href="/explore">
          Explore
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
      <a class="font-bold text-lg mb-4 block hover:text-purple-500 {{ Request::is('users/' . auth()->user()->username) ? 'text-purple-500' : '' }}" href="{{ route('users.show', auth()->user()->username) }}">
          Profile
      </a>
  </li>
  <li> 
      <a class="font-bold text-lg mb-4 block hover:text-purple-500 {{ Request::is('wallet*') ? 'text-purple-500' : '' }}" href="/wallet">
          Wallet
      </a>
  </li>
  <li> 
      <form action="/logout" method="post">
          @csrf
          <button class="font-bold text-lg mb-4 block hover:text-purple-500">Logout</button>
      </form>
  </li>
</ul>
