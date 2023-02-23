<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\AboutOne;
use Image;

class AboutOneController extends Controller
{
    public function index()
    {


        $aboutone = AboutOne::all();
        return view('admin.website.aboutone.index', compact('aboutone'));
    }

    public function add()
    {
        return view('admin.website.aboutone.add');
    }

    public function store(Request $request)
    {
        $aboutone = new AboutOne;
        $aboutone->title = $request->title;
        $aboutone->details = $request->details;

        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $imageName = rand(111, 99999) . '' . $extension;
                $imagePath = 'backend/aboutone/' . $imageName;
                Image::make($image_tmp)->save($imagePath);
                $aboutone->image = $imageName;
            }
        }

        $aboutone->save();
        $notification = array(
            'messege' => 'AboutOne Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('index.aboutone')->with($notification);
    }

    public function edit($id)
    {
        $aboutone = AboutOne::find($id);
        return view('admin.website.aboutone.edit', compact('aboutone'));
    }

    public function update(Request $request, $id)
    {
        $aboutone = AboutOne::find($id);
        $aboutone->title = $request->title;
        $aboutone->details = $request->details;


        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $imageName = rand(111, 99999) . '' . $extension;
                $imagePath = 'backend/aboutone/' . $imageName;
                Image::make($image_tmp)->save($imagePath);
                $aboutone->image = $imageName;
            }
        }
        $aboutone->save();
        $notification = array(
            'messege' => 'AboutOne Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('index.aboutone')->with($notification);
    }

    public function delete($id)
    {
        AboutOne::find($id)->delete();
        $notification = array(
            'messege' => 'AboutOne Successfully Deleted !',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
