<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin\Order;
use App\Models\Admin\OrderDetails;
use App\Models\Review;
use Auth;
use Helper;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userProfile()
    {   
        return view('user.user_settings.profile');
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
    public function userProfileUpdate(Request $request)
    {
        $data = User::find(Auth::id());
        $data->name   = $request->name;
        $data->email  = $request->email;
        $data->phone  = $request->phone;
        $data->mobile = $request->mobile;
        $data->address= $request->address;
        
        if($request->image){
            $data->image = Helper::upload_image($request->image , 100, 100);
        }
        $data->save();
        
        $notification = array(
            'messege'=> "Successfully Updated !",
            'alert-type'=>'success'
        );
        return redirect()->route('user.home')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changePassword()
    {
        return view('user.user_setings.password');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request)
    {
          $password=Auth::user()->password;
          $oldpass = $request->old_password;
          $newpass = $request->new_password;
          $confirm = $request->confirm_password;
          if (Hash::check($oldpass,$password)) {
                if ($newpass === $confirm) {
                  $user=User::find(Auth::id());
                  $user->password=Hash::make($newpass);
                  $user->save();
                  Auth::logout();
                  $notification = array(
                      'messege'=> "Password Changed Successfully ! Now Login with Your New Password.",
                      'alert-type'=>'success'
                  );

                   return Redirect()->route('login')->with($notification); 
                }else{
                   $notification = array(
                        'messege'=> "New password and Confirm Password not matched!",
                        'alert-type'=>'error'
                    );
                   return Redirect()->back()->with($notification);
                }     
          }else{
            $notification = array(
                 'messege'=> "Old Password not matched!",
                 'alert-type'=>'error'
             );
            return Redirect()->back()->with($notification);
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function OrderView($id)
    {
        $order=Order::find($id);
     
        return view('user.orderview',compact('order'));
    }

    public function Review($id)
    {
        $review=OrderDetails::find($id);
        //return response()->json($review);
        return view('user.review',compact('review'));
    }

    public function ReviewStore(Request $request)
    {
        $review = new Review;
        $review->rating = $request->rating;
        $review->comment = $request->comment;
        $review->order_detail_id = $request->order_detail_id;
        // return response()->json($review);
        $review->save();
        $notification = array(
            'messege'=> "Review Added Successfully.",
            'alert-type'=>'success'
        );

         return Redirect()->route('user.home')->with($notification); 
        // return response()->json($page);
     
    }
}
