<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;
use App\Models\Admin\Brand;
use App\Models\Admin\Product;
use App\Models\Admin\Membership;
use Str;
use Helper;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::latest()->get();
        return view('admin.product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::all();
        $brands    = Brand::all();
        $packages  = Membership::all();
        return view('admin.product.create',compact('categories','brands','packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
                'product_name' => 'required|unique:products|max:255',
                'product_code' => 'required|unique:products|max:255',
                'category_id'  => 'required',
                'product_price'=> 'required',
                'thumbnail'    => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);

        $data = new Product();
        $data->product_name       = $request->product_name;
        $data->product_slug       = Str::slug($request->product_name);
        $data->product_code       = $request->product_code;
        $data->product_title      = $request->product_title;
        $data->product_short_desc = $request->product_short_desc;
        $data->product_price      = $request->product_price;
        $data->category_id        = $request->category_id;
        $data->subcategory_id     = $request->subcategory_id;
        $data->brand_id           = $request->brand_id;
        $data->specification      = json_encode($request->specification);
        $data->specification_ans  = json_encode($request->specification_ans);
        $data->description        = $request->description;
        $data->tag                = $request->tag;
        $data->buying_price       = $request->buying_price;
        // $data->membership_id      = $request->membership_id;
        $data->membership_id  = json_encode($request->membership_id);
        $data->visibility         = $request->visibility;
        $data->is_free            = $request->is_free;

        $thumbnail = $request->thumbnail;
        if($thumbnail){
            $data->thumbnail = Helper::upload_image($thumbnail,  310 , 272);
        }

        $images = array();
        if($request->images){
            foreach ($request->images as $key => $image) {

                array_push($images, Helper::upload_image($image,  310 , 272));
            }
            $data->images = json_encode($images);
        }

        $data->save();

        $notification=array(
            'messege'=>'Successfully Created !',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data         = Product::find($id);
        $more_image   = json_decode($data->images,true);
        $specification= json_decode($data->specification,true);
        $tag          = explode(',',$data->tag);
        return view('admin.product.view',compact('data','more_image','specification','tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data          = Product::find($id);
        $more_image    = json_decode($data->images,true);
        $categories    = Category::all();
        $sub_categories= SubCategory::all();
        $brands        = Brand::all();
        $packages      = Membership::all();
        return view('admin.product.edit',compact('data','categories','brands','sub_categories','more_image','packages'));
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
        $validated = $request->validate([
            'product_name' => 'required|unique:products,product_name,'.$id,
            'product_code' => 'required|unique:products,product_code,'.$id,
            'category_id'  => 'required',
            'product_price'=> 'required',
            'thumbnail'    => 'required,thumbnail|image|mimes:jpg,png,jpeg,gif,svg|max:2048,'.$id,
        ]);

        $data = Product::find($id);
        $data->product_name       = $request->product_name;
        $data->product_slug       = Str::slug($request->product_name);
        $data->product_code       = $request->product_code;
        $data->product_title      = $request->product_title;
        $data->product_short_desc = $request->product_short_desc;
        $data->product_price      = $request->product_price;
        $data->category_id        = $request->category_id;
        $data->subcategory_id     = $request->subcategory_id;
        $data->brand_id           = $request->brand_id;
        $data->specification      = json_encode($request->specification);
        $data->specification_ans  = json_encode($request->specification_ans);
        $data->description        = $request->description;
        $data->tag                = $request->tag;

        //----Discount-----
        $p_price = $data->product_price;
        $d_rate  = $request->discount_rate;
        $d_type  = $request->discount_type;
        $data->discount_type    = $request->discount_type;
        $data->discount_rate    = $request->discount_rate;
        $data->discount_price   = Helper::discount($p_price , $d_rate , $d_type);
        //-----/Discount------

        $data->membership_id    = $request->membership_id;
        $data->visibility       = $request->visibility;
        $data->is_free          = $request->is_free;

        $thumbnail = $request->thumbnail;
        if($thumbnail){
            $data->thumbnail = Helper::upload_image($thumbnail,  310 , 272);
        }

        $old_images = $request->has('old_images');
        if($old_images){
         $images = $request->old_images;
         $data->images = json_encode($images);
        }else{
            $images = array();
            $data->images = json_encode($images);
        }

        if($request->hasFile('images')){
            foreach ($request->file('images') as $key => $image) {

                array_push($images, Helper::upload_image($request->hasFile('images'),  300 , 200));
            }
            $data->images = json_encode($images);
        }

        $data->save();
        $notification=array(
            'messege'=>'Successfully Update !',
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
        $data = Product::find($id);

        if(File::exists($data->thumbnail)){

            File::delete($data->thumbnail);
        }

        $images = json_decode($data->images, true);

        if($images > 0){
          foreach($images as $key=> $ims){
            File::delete($ims);
          }
        }
        $data->delete();
        $notification=array(
            'messege'=>'Successfully Deleted !',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);

    }



    /**
     * Get Categorywise Subcategory
     *
     * @param int $cat_id
     *
     */

    public function getSubcategory($cat_id)
    {
        $data = SubCategory::where('category_id',$cat_id)->get();
        return response()->json($data);

    }
}
