<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Midtrans\CallbackService;

class PaymentCallbackController extends Controller
{
    public function donateCallback(Request $request)
    {
        // Validasi signature key dari Midtrans
        $callbackService = new CallbackService();
        if (!$callbackService->isSignatureKeyVerified()) {
            return response()->json(['status' => 'error', 'message' => 'Invalid signature key'], 400);
        }

        // Handle notifikasi donasi
        $callbackService->handleDonateNotification();

        // Respon sukses ke Midtrans
        return response()->json(['status' => 'success']);
    }

    public function topUpCallback(Request $request)
    {
        // Validasi signature key dari Midtrans
        $callbackService = new CallbackService();
        if (!$callbackService->isSignatureKeyVerified()) {
            return response()->json(['status' => 'error', 'message' => 'Invalid signature key'], 400);
        }

        // Handle notifikasi top-up
        $callbackService->handleTopUpNotification();

        // Respon sukses ke Midtrans
        return response()->json(['status' => 'success']);
    }
}
