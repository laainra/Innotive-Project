
<x-app-layout>
    @section('title', 'Wallet')
    <div class="container text-center">
        {{-- <h1>Your Wallet Balance: {{ $wallet->balance }}</h1> --}}
        <h1 class="text-3xl mb-7 mt-10"><b>{{$user->name}}</b>'s Wallet Balance: </h1>
        <h1 class="text-2xl mb-7" id='balance'>{{ 'Rp ' . number_format($wallet->balance, 0, ',', '.') }}</h1>

        {{-- <h1 id='balance' class="text-lg text-bold border-solid border-purple-500 p-5 <h1>Your Wallet Balance: @if ($user->wallet) {{ $user->wallet->balance }} @else N/A @endif</h1> --}}

        <a href="{{ route('topup') }}" class="bg-purple-500 rounded-lg shadow py-1 px-3 ml-2 text-white h-24 w-30 hover:bg-purple-900">Top-up</a>
    </div>

<div class="container mt-5 justify-center text-center">
        <h1 class="text-2xl mb-5">Transaction History</h1>


<table id="transaksi" class=" transaksi order-column table justify-center align-middle text-center">
    <thead>
        <tr>
            <th>Reference ID</th>
            <th>Sender</th>
            <th>Receipient</th>
            <th>Description</th>
            <th>Amount</th>
            <th>Type</th>
            <th>Date & time</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transactions as $transaction)
            @if ($transaction->debited_wallet == auth()->user()->wallet->id || $transaction->credited_wallet == auth()->user()->wallet->id)
                <tr>
                    <td>{{ $transaction->reference_id }}</td>
                    <td>{{ optional(optional($transaction->debitedWallet)->user)->name }}</td>
                    <td>{{ optional(optional($transaction->creditedWallet)->user)->name }}</td>
                    <td>{{ $transaction->description }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>{{ $transaction->type }}</td>
                    <td>{{ $transaction->created_at }}</td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>



</div>
</x-app-layout>
<script>
    $(document).ready(function() {
        $('.transaksi').DataTable();
    });
    </script>
    