<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Tweet;
use App\Services\Midtrans\CreateSnapTokenService;
use Midtrans\Config;
use Midtrans\Transaction as MidtransTransaction;
use app\Services\CallbackService;

class TransactionController extends Controller
{


    public function donate(Request $request, Tweet $tweet)
    {
        $amount = $request->amount;
        $method = $request->method;
    
        // Perform validation on $request inputs
    
        // Perform the donation process using the Midtrans GoPay integration
        $transaction = Transaction::create([
            'reference_id' => 'DONATE_' . uniqid(),
            'description' => 'Donation',
            'debited_wallet' => auth()->user()->wallet->id,
            'credited_wallet' => $tweet->user->wallet->id,
            'amount' => $amount,
            'type' => 'donate',
            'method' => $method,
            'status' => 1, // Initial status: wait for payment
        ]);
    
        // Check if the selected method is "wallet"
        if ($method == 'wallet') {
            $debitedWallet = auth()->user()->wallet;
    
            // Check if the debited wallet balance is sufficient
            if ($debitedWallet->balance >= $amount) {
                $debitedWallet->balance -= $amount;
                $debitedWallet->save();
            } else {
                return back()->with('error', 'Insufficient balance in your wallet.');
            }
        }

        $creditedWallet = $tweet->user->wallet;
        $creditedWallet->balance += $amount;
        $creditedWallet->save();
    
        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Donation successful!');
    }
    

        // // Generate Snap Token for GoPay payment
        // $createSnapTokenService = new CreateSnapTokenService($transaction);
        // $snapToken = $createSnapTokenService->getSnapToken();

        // // Update the transaction with the Snap Token
        // $transaction->snap_token = $snapToken;
        // $transaction->save();

        // // Redirect to the GoPay payment page
        // return redirect()->away($snapToken);
    

    public function topUp(Request $request)
    {

        $amount = $request->amount;
        $method = $request->method;

    // Membuat transaksi top-up di database
        $transaction = Transaction::create([
            'reference_id' => 'TOPUP_' . uniqid(),
            'description' => 'Top-up Wallet',
            'debited_wallet' => null,
            'credited_wallet' => auth()->user()->wallet->id,
            'amount' => $amount,
            'type' => 'topup',
            'method' => $method,
            'status' => 1, // Menunggu pembayaran
        ]);

        $creditedWallet = auth()->user()->wallet;
        $creditedWallet->balance += $amount;
        $creditedWallet->save();

        return redirect()->back()->with('success', 'TopUp successful!');

        // // Generate Snap Token for GoPay payment
        // $createSnapTokenService = new CreateSnapTokenService($transaction);
        // $snapToken = $createSnapTokenService->getSnapToken();

        // // Update the transaction with the Snap Token
        // $transaction->snap_token = $snapToken;
        // $transaction->save();

        // // Redirect to the GoPay payment page
        // return redirect()->away('https://app.midtrans.com/snap/v2/vtweb/' . $snapToken);
    }

    // public function withdrawal(Request $request)
    // {
    //     // Perform validation on $request inputs

    //     // Perform the withdrawal process using the Midtrans GoPay integration
    //     $transaction = Transaction::create([
    //         'reference_id' => $request->reference_id,
    //         'description' => $request->description,
    //         'debited_wallet' => $request->wallet_id,
    //         'credited_wallet' => null,
    //         'amount' => $request->amount,
    //         'type' => 'withdrawal',
    //         'method' => 'gopay',
    //         'status' => '1', // Initial status: wait for payment
    //     ]);

    //     // Generate Snap Token for GoPay payment
    //     $createSnapTokenService = new CreateSnapTokenService($transaction);
    //     $snapToken = $createSnapTokenService->getSnapToken();

    //     // Update the transaction with the Snap Token
    //     $transaction->snap_token = $snapToken;
    //     $transaction->save();

    //     // Redirect to the GoPay payment page
    //     return redirect()->away('https://app.midtrans.com/snap/v2/vtweb/' . $snapToken);
    // }

    // public function callback(Request $request)
    // {
    //     // Handle the callback notification from Midtrans
    //     $callbackService = new CallbackService();
    //     $callbackService->handleDonateNotification();
    //     $callbackService->handleTopUpNotification();

    //     // Update the transaction status based on the result
    //     $transaction = Transaction::where('reference_id', $request->order_id)->first();
    //     $transaction->status = $callbackService->isSuccess() ? '2' : '3'; // Payment completed or expired
    //     $transaction->save();

    //     // Return response to Midtrans
    //     return response()->json(['status' => 'OK']);
    // }

    // public function show(Transaction $transaction)
    // {
    //     $snapToken = $transaction->snap_token;

    //     if (empty($snapToken)) {
    //         // If snap token is still empty, create a new snap token and save it to the database
    //         $createSnapTokenService = new CreateSnapTokenService($transaction);
    //         $snapToken = $createSnapTokenService->getSnapToken();

    //         // Update the transaction record with the generated snap token
    //         $transaction->snap_token = $snapToken;
    //         $transaction->save();
    //     }

    //     return view('transaction.show', compact('transaction', 'snapToken'));
    // }
}
