<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Setting;
use DB;
use Image;
class SettingController extends Controller
{
    public function WebSite()
    {
        $setting=DB::table('settings')->first();
        return view('admin.website.setting',compact('setting'));
    }

    public function SettingUpdate(Request $request,$id)
    {
        $setting =Setting::find($id);
        $setting->email=$request->email;
        $setting->facebook =$request->facebook;
        $setting->instagram =$request->instagram;
        $setting->youtube =$request->youtube;
        $setting->twitter =$request->twitter;
        $setting->about =$request->about;
     
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
;
    }
}
