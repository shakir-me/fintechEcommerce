<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Coupon;
use App\Models\Admin\Order;
use App\Models\User\Subscription;
use Cart;
use Session;
use Auth;
use DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  Cart::content();
        return view('front.cart.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $product = Product::find($request->product_id);     
         Cart::add([
             'id' => $product->id, 
             'name' => $product->product_name, 
             'qty' => $request->product_qty, 
             'price' => $request->product_price,
             'weight' => 1,
             'options' => ['title' => $product->product_title,'image'=>$product->thumbnail,'url'=>$product->product_url,]
             
         ]);
         session()->forget('coupon');

        return response()->json("<h3>Product Added On Card!</h3>");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data =  Cart::content();
        return view('front.cart.cart_list',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cartCount()
    {
        $count = Cart::count();
        return response()->json($count);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->rowId;
        $qty  = $request->qty;
        $newdata = array_combine($data,$qty);
        foreach($newdata as $index=>$row){
            Cart::update($index,$row);
        }
        session()->forget('coupon');
        $notification = array(
            'messege'=>'Card successfully Update!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        session()->forget('coupon');
        $notification = array(
            'messege'=>'Product Remove From Cart!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }


    /**
     * Coupon Apply the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function applyCoupon(Request $request)
    {   
        $userId = Auth::id();
        $coupon = $request->coupon;
        $coupon_count = Order::where('coupon',$coupon)->where('user_id',$userId)->count();
        $check = Coupon::where('coupon_name',$coupon)->first();


        $subscribe_coupon = Subscription::where('user_id',$userId)->first();

        if($check && $check->membership_id == 0){
            if($check){
                $amount = $check->use_amount <= Cart::Subtotal();
                $coupon_use = $check->coupon_use > $coupon_count;
            }
            if($check && $amount && $coupon_use ){
                if ($check->coupon_type == 1) {
                     Session::put('coupon', [
                       'code' => $check->coupon_name,
                       'discount' => $check->coupon_rate,
                       'balance' => Cart::Subtotal() - $check->coupon_rate,
                       'coupon_type' => 1,
                       'coupon_rate' => $check->coupon_rate,
                     ]);
                }else{
                    //calculate % coupon rate
                    $coupon = $check->coupon_rate;
                    $discount = Cart::Subtotal() * $coupon /100 ;
                     Session::put('coupon', [
                    'code' => $check->coupon_name,
                    'discount' => $discount,
                    'balance' => Cart::Subtotal() - $discount,
                    'coupon_type' => 0,
                    'coupon_rate' => $check->coupon_rate,
                     ]);
                }
                $notification = array(
                    'messege'=>'Suucessfully Coupon Applied !',
                    'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);
            }else{
                $notification = array(
                    'messege'=>'Your Coupon Code is Invalid !',
                    'alert-type'=>'error'
                );
                return Redirect()->back()->with($notification);
            }
        }elseif( $check && $check->membership_id == Auth::user()->subscrbe_id && date('Y-m-d') <= $subscribe_coupon->monthly_charge_date && date('Y-m-d') <= $subscribe_coupon->expire_date){

            if ($check->coupon_type == 1) {
                 Session::put('coupon', [
                   'code' => $check->coupon_name,
                   'discount' => $check->coupon_rate,
                   'balance' => Cart::Subtotal() - $check->coupon_rate,
                   'coupon_type' => 1,
                   'coupon_rate' => $check->coupon_rate,
                 ]);
            }else{
                //calculate % coupon rate
                $coupon = $check->coupon_rate;
                $discount = Cart::Subtotal() * $coupon /100 ;
                 Session::put('coupon', [
                'code' => $check->coupon_name,
                'discount' => $discount,
                'balance' => Cart::Subtotal() - $discount,
                'coupon_type' => 0,
                'coupon_rate' => $check->coupon_rate,
                 ]);
            }
            $notification = array(
                'messege'=>'Suucessfully Coupon Applied !',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);

        }elseif($check && $check->membership_id == Auth::user()->subscrbe_id &&  $subscribe_coupon->monthly_charge_date == "" && $subscribe_coupon->expire_date == "lifetime"){

            if ($check->coupon_type == 1) {
                 Session::put('coupon', [
                   'code' => $check->coupon_name,
                   'discount' => $check->coupon_rate,
                   'balance' => Cart::Subtotal() - $check->coupon_rate,
                   'coupon_type' => 1,
                   'coupon_rate' => $check->coupon_rate,
                 ]);
            }else{
                //calculate % coupon rate
                $coupon = $check->coupon_rate;
                $discount = Cart::Subtotal() * $coupon /100 ;
                 Session::put('coupon', [
                'code' => $check->coupon_name,
                'discount' => $discount,
                'balance' => Cart::Subtotal() - $discount,
                'coupon_type' => 0,
                'coupon_rate' => $check->coupon_rate,
                 ]);
            }
            $notification = array(
                'messege'=>'Suucessfully Coupon Applied !',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
            
        }else{
           $notification = array(
               'messege'=>'Your Coupon Code is Invalid !',
               'alert-type'=>'error'
           );
           return Redirect()->back()->with($notification); 
        } 
        
    }
}
