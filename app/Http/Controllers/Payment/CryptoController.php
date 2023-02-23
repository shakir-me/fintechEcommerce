<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use CoinGate\CoinGate;
use Cart;
use Session;
use Mail;
use App\Mail\ProductEmail;
use Auth;
use App\Models\Admin\Order;
use App\Models\User;
use App\Models\Admin\OrderDetails;
use App\Models\User\Recharge;
use App\Models\User\Subscription;



use Helper;

class CryptoController extends Controller
{

    public function CoinGate()
     {
         echo"Paypal er Moto Korte hobe";
    }



    public function callback(Request $request)
    {

        $order = Order::find($request->input('order_id'));

        if ($request->input('token') == $order->token) {

            $status = NULL;

            if ($request->input('status') == 'paid') {

                if ($request->input('price') >= $order->total_price) {

                    $status = 'paid';
                }
            } else {

                $status = $request->input('status');
            }

            if (!is_null($status)) {

                $order->update(['status' => $status]);
            }
        }
    }
}
