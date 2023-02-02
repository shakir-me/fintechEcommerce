<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ProductEmail;
use App\Models\User;
use App\Models\User\Subscription;
use App\Models\Admin\Order;
use App\Models\Admin\OrderDetails;
use Auth;
use Cart;
use Session;
use Mail;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $data = $request->all();
        return view('user.checkout',compact('data'));
        // dd($request->all());
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
       if($request->payment_method){
        if($request->payment_method == 1){
            
           $balance = Auth::user()->balance;
           $user_id = Auth::id();
           if($balance >= $request->price){

            $order = new Order();
            $order->user_id = Auth::id();
            $order->order_no = $request->order_no;
            $order->total_qty = Cart::count();
            $order->total_price = $request->price;
            $order->coupon_amount = Session::has('coupon') ? Session::get('coupon')['discount'] : 0;
            $order->payment_method = 'My Wallet';
            $order->coupon = Session::has('coupon') ? Session::get('coupon')['code'] : "";
            $order->save();

            $order_id = $order->id;

            $urls = $request->product_url;
            foreach($urls as $key=>$url){
                $orderDetails = New OrderDetails;
                $orderDetails->order_id = $order_id;
                $orderDetails->product_name = $request->product_name[$key];
                $orderDetails->product_qty = $request->product_qty[$key];
                $orderDetails->unit_price = $request->unit_price[$key];
                $orderDetails->product_price = $request->unit_price[$key] * $request->product_qty[$key];
                $orderDetails->save();

            }
             $emailContent = [
                     "email_subject" => 'Product link',
                     "product_url" => $request->product_url,
                 ];
             Mail::to(Auth::user()->email)->send(new ProductEmail($emailContent));
             Cart::destroy();
             $request->session()->forget(['qty', 'price','url']);
             User::where('id',$user_id)->decrement('balance',$request->price);

             $notification = array(
                 'messege'=>'Product Purchase & Transaction complete. Please check your email for product link.',
                 'alert-type'=>'success'
             );
             return redirect()->route('user.home')->with($notification);

           }else{
            $notification = array(
                'messege'=>'Insufficient balance please recharge !',
                'alert-type'=>'error'
            );
            return redirect()->route('user.home')->with($notification);
           }


        }elseif($request->payment_method == 2){
            $data = $request->all();
            $type = 'payment';
            return view('payment.paypal',compact('data','type'));
        }elseif($request->payment_method == 3){
            $data = $request->all();
            $type = 'payment';
            return view('payment.stripe',compact('data','type'));
        }elseif($request->payment_method == 4){
            echo "Bitcoin";
        }
       }else{
        $notification = array(
            'messege'=>'Please Select One Payment Method!',
            'alert-type'=>'warning'
        );
        return redirect()->back()->with($notification);
       }
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscriptionIndex(Request $request)
    {   
        $data = $request->all();
        return view('user.subscription',compact('data'));

        // dd($data);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscriptionStore(Request $request)
    {   
       if($request->payment_method){
        if($request->payment_method == 1){
            
           $balance = Auth::user()->balance;
           $user_id = Auth::id();

           $today = date("Y-m-d"); //Today
           $m_ch_date = date('Y-m-d', strtotime('+1 month', strtotime($today))); //Monthly Chrage date
           if($request->expired == 1){
                $expire_date = "lifetime";
           }elseif($request->expired == 2){
                $expire_date = date('Y-m-d', strtotime('+6 month', strtotime($today)));
           }elseif($request->expired == 3){
                $expire_date = date('Y-m-d', strtotime('+1 year', strtotime($today)));
           }elseif($request->expired == 4){
                $expire_date = date('Y-m-d', strtotime('+2 year', strtotime($today)));
           }

           if($balance >= $request->total_subscription_fee){

              if(Auth::user()->subscrbe_id == 0){

                $subscribe = New Subscription;
                $subscribe->user_id             = Auth::id();
                $subscribe->subscribe_id        = $request->subscribe_id;
                $subscribe->start_date          = $today;
                $subscribe->monthly_charge_date = $request->is_lifetime == 1 ? '' : ($request->monthly_charge > 0.00 ? $m_ch_date : '');
                $subscribe->expire_date         = $request->is_lifetime == 1 ? "lifetime" : $expire_date;
                $subscribe->total_fee           = $request->total_subscription_fee;
                $subscribe->subscribe_fee       = $request->is_lifetime == 1 ? 0.00 : $request->subscribe_fee;
                $subscribe->monthly_charge      = $request->is_lifetime == 1 ? 0.00 : $request->monthly_charge;
                $subscribe->payment_method      = 'My Wallet';
                $subscribe->save();
                User::where('id',$user_id)->update(['subscrbe_id' => $request->subscribe_id]);
                User::where('id',$user_id)->decrement('balance',$request->total_subscription_fee);
                $notification = array(
                    'messege'=>'Membership upgrade successfull !' ,
                    'alert-type'=>'success'
                );
                return redirect()->route('user.home')->with($notification);
              }else{

                $subs_id = Subscription::where('user_id',Auth::id())->first();

                $subscribe = Subscription::find($subs_id->id);
                $subscribe->subscribe_id        = $request->subscribe_id;
                $subscribe->start_date          = $today;
                $subscribe->monthly_charge_date = $request->is_lifetime == 1 ? '' : ($request->monthly_charge > 0.00 ? $m_ch_date : '');
                $subscribe->expire_date         = $request->is_lifetime == 1 ? "lifetime" : $expire_date;
                $subscribe->total_fee           = $request->total_subscription_fee;
                $subscribe->subscribe_fee       = $request->is_lifetime == 1 ? 0.00 : $request->subscribe_fee;
                $subscribe->monthly_charge      = $request->is_lifetime == 1 ? 0.00 : $request->monthly_charge;
                $subscribe->payment_method      = 'My Wallet';
                $subscribe->save();
                User::where('id',$user_id)->update(['subscrbe_id' => $request->subscribe_id]);
                User::where('id',$user_id)->decrement('balance',$request->total_subscription_fee);
                $notification = array(
                    'messege'=>'Membership upgrade successfull !' ,
                    'alert-type'=>'success'
                );
                return redirect()->route('user.home')->with($notification);

              }



           }else{
            $notification = array(
                'messege'=>'Insufficient balance please recharge !',
                'alert-type'=>'error'
            );
            return redirect()->route('user.home')->with($notification);
           }


        }elseif($request->payment_method == 2){
            $data = $request->all();
            $type = 'subscribe';
            return view('payment.paypal',compact('data','type'));
        }elseif($request->payment_method == 3){
            $data = $request->all();
            $type = 'subscribe';
            return view('payment.stripe',compact('data','type'));
        }elseif($request->payment_method == 4){
            echo "Bitcoin";
        }
       }else{
        $notification = array(
            'messege'=>'Please Select One Payment Method!',
            'alert-type'=>'warning'
        );
        return redirect()->back()->with($notification);
       }
    }
}
