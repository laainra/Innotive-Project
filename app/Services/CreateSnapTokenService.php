<?php

namespace App\Services\Midtrans;

use Midtrans\Snap;

class CreateSnapTokenService extends Midtrans
{
    protected $transaction;

    public function __construct($transaction)
    {
        parent::__construct();

        $this->transaction = $transaction;
    }

    public function getSnapToken()
    {
        $params = [
            'transaction_details' => [
                'order_id' => $this->transaction->reference_id,
                'gross_amount' => $this->transaction->amount,
            ],
            'item_details' => [
                [
                    'id' => $this->transaction->id,
                    'price' => $this->transaction->amount,
                    'quantity' => 1,
                    'name' => $this->transaction->description,
                ],
            ],
        ];

        $snapToken = Snap::getSnapToken($params);

        return $snapToken;
    }
}
