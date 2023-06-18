<?php

namespace App\Services\Midtrans;

use App\Models\Transaction;
use Midtrans\Config;
use Midtrans\Notification;

class CallbackService
{
    public function handleDonateNotification()
    {
        // Set Midtrans configuration
        Config::$isProduction = config('midtrans.is_production');
        Config::$serverKey = config('midtrans.server_key');

        // Get notification data from Midtrans
        $notification = new Notification();

        // Retrieve transaction details
        $orderId = $notification->order_id;
        $transactionStatus = $notification->transaction_status;
        $transaction = Transaction::where('reference_id', $orderId)->first();

        // Handle transaction status based on the donation result
        if ($transactionStatus === 'capture') {
            // Donation successful
            $transaction->status = 2; // Payment completed
        } elseif ($transactionStatus === 'expire') {
            // Donation expired
            $transaction->status = 3; // Expired
        } elseif ($transactionStatus === 'cancel') {
            // Donation canceled
            $transaction->status = 4; // Canceled
        }

        // Save the updated transaction status
        $transaction->save();
    }

    public function handleTopUpNotification()
    {
        // Set Midtrans configuration
        Config::$isProduction = config('midtrans.is_production');
        Config::$serverKey = config('midtrans.server_key');

        // Get notification data from Midtrans
        $notification = new Notification();

        // Retrieve transaction details
        $orderId = $notification->order_id;
        $transactionStatus = $notification->transaction_status;
        $transaction = Transaction::where('reference_id', $orderId)->first();

        // Handle transaction status based on the top-up result
        if ($transactionStatus === 'capture') {
            // Top-up successful
            $transaction->status = 2; // Payment completed
        } elseif ($transactionStatus === 'expire') {
            // Top-up expired
            $transaction->status = 3; // Expired
        } elseif ($transactionStatus === 'cancel') {
            // Top-up canceled
            $transaction->status = 4; // Canceled
        }

        // Save the updated transaction status
        $transaction->save();
    }
}
