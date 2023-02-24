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

use Victorybiz\LaravelCryptoPaymentGateway\LaravelCryptoPaymentGateway;


use Helper;

class CryptoController extends Controller
{

    public function index($data, $type){
       
        $payment_url = LaravelCryptoPaymentGateway::startPaymentSession([
            'amountUSD' => intval($data->price), // OR 'amount' when sending BTC value
            'orderID' => $data->order_no,
            'userID' => auth()->id(),
            'redirect' => url()->full(),
        ]);

     
        // redirect to the payment page
       return redirect()->to($payment_url);
    }

    public function CoinGate()
     {
         echo"Paypal er Moto Korte hobe";
    }



    public function callback(Request $request)
    {
        return LaravelCryptoPaymentGateway::callback();


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

    public static function ipn($cryptoPaymentModel, $payment_details, $box_status)
    {
        if ($cryptoPaymentModel) {
            /*
            // ADD YOUR CODE HERE
            // ------------------
            // For example, you have a model `UserOrder`, you can create new Bitcoin payment record to this model
            $userOrder = UserOrder::where('payment_id', $cryptoPaymentModel->paymentID)->first();
            if (!$userOrder) 
            {
                UserOrder::create([
                    'payment_id' => $cryptoPaymentModel->paymentID,
                    'user_id'    => $payment_details["user"],
                    'order_id'   => $payment_details["order"],
                    'amount'     => floatval($payment_details["amount"]),
                    'amountusd'  => floatval($payment_details["amountusd"]),
                    'coinlabel'  => $payment_details["coinlabel"],
                    'txconfirmed'  => $payment_details["confirmed"],
                    'status'     => $payment_details["status"],
                ]);
            }
            // ------------------

            // Received second IPN notification (optional) - Bitcoin payment confirmed (6+ transaction confirmations)
            if ($userOrder && $box_status == "cryptobox_updated")
            {
                $userOrder->txconfirmed = $payment_details["confirmed"];
                $userOrder->save();
            }
            // ------------------
            */

            // Onetime action when payment confirmed (6+ transaction confirmations)
            if (!$cryptoPaymentModel->processed && $payment_details["confirmed"]) {
                // Add your custom logic here to give value to the user.

                // ------------------
                // set the status of the payment to processed
                // $cryptoPaymentModel->setStatusAsProcessed();

                // ------------------
                // Add logic to send notification of confirmed/processed payment to the user if any
            }
        }
        return true;
    }
}
