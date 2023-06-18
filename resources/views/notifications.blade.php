<x-app-layout>
    @section('title', 'Notifications')
    <div class="p-4">
        <ul>
            @forelse ($notifications['donations'] as $donation)
                <li class="border-b border-gray-300 py-2 text-xl">
                    <span class="material-symbols-outlined mr-5 mb-6 block">
                            account_balance_wallet
                      </span>
                    <a href="/wallet">
                        
                        <b>{{ 'Rp ' . number_format($donation->amount, 0, ',', '.') }}
                        
                        </b> donated by <b>{{  optional($donation->debitedWallet)->user->name }}</b> 
                <a></li>
            @empty
                @if (count($notifications['likes']) === 0 && count($notifications['comments']) === 0)
                    <li class="border-b border-gray-300 py-2 text-xl">Nothing appears.</li>
                @endif
            @endforelse
        
            @forelse ($notifications['likes'] as $like)
                <li class="border-b border-gray-300 py-2 text-xl">
                    <a href="/tweets/{{$like->tweet->id}}">
                    <span class="material-symbols-outlined mr-5 mb-6">
                        favorite
                      </span>
                    <h2 class="block "><b>{{ $like->user->name }}</b> liked your post</h2>
                 <p class="text-sm"> {{ $like->tweet->body }} </p> </a>
                </li>
                
            @empty
                @if (count($notifications['donations']) === 0 && count($notifications['comments']) === 0)
                    <li class="border-b border-gray-300 py-2 text-xl">Nothing appears.</li>
                @endif
            @endforelse
        
            @forelse ($notifications['comments'] as $comment)
                <li class="border-b border-gray-300 py-2 text-xl">
                    <a href="/tweets/{{$comment->tweet->id}}">
                        <span class="material-symbols-outlined mr-5 mb-6">
                            comment
                          </span>
                          <h2 class="block"><b>{{ $comment->user->name }}</b> commented on your post </h2>
                            <p class="text-sm">"{{ $comment->tweet->body }}"</p>
                </li>
            @empty
                @if (count($notifications['donations']) === 0 && count($notifications['likes']) === 0)
                    <li class="border-b border-gray-300 py-2 text-xl">Nothing appears.</li>
                @endif
            @endforelse
        </ul>
    </div>
</x-app-layout>
