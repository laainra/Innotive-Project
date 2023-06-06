<x-app-layout>
    <div class="container text-center">
        {{-- <h1>Your Wallet Balance: {{ $wallet->balance }}</h1> --}}
        <h1>Your Wallet Balance: </h1>
        <h1 id='balance'>0.0 </h1>
        {{-- <h1 id='balance' class="text-lg text-bold border-solid border-purple-500 p-5 <h1>Your Wallet Balance: @if ($user->wallet) {{ $user->wallet->balance }} @else N/A @endif</h1> --}}

        <a href="{{ route('topup') }}" class="bg-purple-500 rounded-lg shadow py-1 px-3 ml-2 text-white h-10 hover:bg-purple-900">Top-up</a>
    </div>

    {{-- <div class="container mt-5 justify-center text-center">
        <h1>Transaction History</h1>


        <table id="transactionTable" class="table justify-center align-middle text-center">
            <thead>
                <tr>
                    <th>Reference ID</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($transactions as $transaction) --}}
                    {{-- <tr> --}}
                        {{-- <td>{{ $transaction->reference_id }}</td>
                        <td>{{ $transaction->description }}</td>
                        <td>{{ $transaction->amount }}</td>
                        <td>{{ $transaction->type }}</td> --}}
                        {{-- <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> --}}
                {{-- @endforeach --}}
            {{-- </tbody>
        </table> --}} 

        {{-- <script>
            $(document).ready(function() {
                $('#transactionTable').DataTable();
            });
        </script> --}}
    {{-- </div> --}}
</x-app-layout>
