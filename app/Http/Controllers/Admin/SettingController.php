<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebSite;
use DB;
use Image;
class SettingController extends Controller
{
    public function WebSite()
    {
        $setting=DB::table('web_sites')->first();
        return view('admin.website.setting',compact('setting'));
    }

    public function SettingUpdate(Request $request,$id)
    {
        $setting =WebSite::find($id);
        $setting->title=$request->title;
        $setting->details =$request->details;
        $setting->market_title =$request->market_title;
        $setting->market_details =$request->market_details;
        $setting->latest_product_title =$request->latest_product_title;
        $setting->latest_product_des =$request->latest_product_des;
        $setting->free_product_title =$request->free_product_title;
        $setting->free_product_des =$request->free_product_des;
        $setting->member_title =$request->member_title;
        $setting->member_des =$request->member_des;
        $setting->software_title =$request->software_title;
        $setting->software_des =$request->software_des;
        $setting->tesmonial =$request->tesmonial;
        $setting->contact_title =$request->contact_title;
        $setting->contact_desc =$request->contact_desc;
        $setting->available_title =$request->available_title;
        $setting->available_desc =$request->available_desc;


        if($request->hasFile('image')){
            $image_tmp=$request->file('image');
           if($image_tmp->isValid()){
              $extension=$image_tmp->getClientOriginalExtension();
              $imageName=rand(111,99999).''.$extension;
              $imagePath='backend/setting/'.$imageName;
              Image::make($image_tmp)->save($imagePath);
              $setting->image=$imageName;
          }
      }
        $setting->save();
        $notification=array(
            'messege'=>'Setting Updated Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);

    }
}
