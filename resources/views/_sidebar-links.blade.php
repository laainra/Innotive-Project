<ul>
  <li> 
    <a class="font-bold text-lg mb-4 block hover:text-purple-500
    {{ Request::is('/tweets')? "active":"" }}" 
    href="/tweets">
    Home</a>
  </li>
  <li> 
    <a class="font-bold text-lg mb-4 block hover:text-purple-500" 
    href="/explore">
    Explore</a>
  </li>
  </li>
  <a class="font-bold text-lg mb-4 block hover:text-purple-500
  {{ Request::is('/users/{user:username}')? "active":"" }}" 
  href="{{route('users.show', auth()->user())}}">
  Profile</a>
  </li>
  <li> 
    <a class="font-bold text-lg mb-4 block hover:text-purple-500" 
    href="/wallet">
    Wallet</a>
  <li> 
    <form action="/logout" method="post">
      @csrf
      <button class="font-bold text-lg mb-4 block hover:text-purple-500">Logout</button>
    </form>
  </li>
</ul>