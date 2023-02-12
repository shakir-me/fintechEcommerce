<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RequestBooking;

class RequestProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RequestBooking::where('status',1)->latest()->get();
        $status ="new";
        return view('admin.request_product.index',compact('data','status'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexOld()
    {
        $data = RequestBooking::where('status',2)->latest()->get();
        $status ="old";
        return view('admin.request_product.index',compact('data','status'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = RequestBooking::where('id',$id)->first();
        RequestBooking::where('id',$id)->update(['status' => 2]);
        return view('admin.request_product.view',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = RequestBooking::where('id',$id)->first();

        //return response()->json($data);
        return view('admin.request_product.detail',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RequestBooking::find($id)->delete();

        $notification=array(
            'messege'=>'Successfully Deleted !',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
       
    }


   
}
