<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\Brand;
use App\Models\Admin\Testimonial;
use App\Models\Admin\SubCategory;
use App\Models\Admin\Membership;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $testimonial = Testimonial::all();
        $freeProducts = Product::where('is_free',1)->take(4)->latest()->get();
        $latestProducts = Product::take(8)->latest()->get();
        $memberships = Membership::latest()->get();
        return view('front.home',compact('testimonial','freeProducts','latestProducts','memberships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function membership()
    {
        $memberships = Membership::latest()->get();
        return view('front.membership',compact('memberships'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function freeProduct()
    {   
        $freeProducts = Product::where('is_free', 1)->get();
        $product_type = "free";
        return view('front.free_product',compact('freeProducts','product_type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function latestProduct()
    {   
        $freeProducts = Product::latest()->get();
        $product_type = 'latest';
        return view('front.free_product',compact('freeProducts','product_type'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function shop()
    {   
        $category_id = '';
        $start_price = '';
        $end_price = '';
        $subcategory_id ='';
        $brand_id ='';
        $category = Category::with('product')->get();
        $products = Product::all();
        $brands = Brand::all();
        return view('front.shop',compact('category','start_price','end_price','products','brands','category_id','subcategory_id','brand_id'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function categoryProduct($category)
    {   
        $start_price = '';
        $end_price = '';
        $subcategory_id ='';
        $category_id = Category::where('category_slug',$category)->first();
        $category    = Category::with('product')->get();
        $products    = Product::where('category_id',$category_id->id)->get();
        $brands = Brand::all();
        return view('front.shop',compact('category','products','category_id','start_price','end_price','brands','subcategory_id'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function subCategoryProduct($category , $subcategory)
    {   
        $start_price = '';
        $end_price = '';
        $category_id = Category::where('category_slug',$category)->first();
        $subcategory_id = SubCategory::where('subcategory_slug',$subcategory)->first();
        $category    = Category::with('product')->get();
        $products    = Product::where('subcategory_id',$subcategory_id->id)->get();
        $brands = Brand::all();
        return view('front.shop',compact('category','products','category_id','start_price','end_price','brands','subcategory_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function priceRangeProduct(Request $request)
    {   
        $category_id = "";
        $subcategory_id ='';
        $brand_id ='';
        $start_price       = $request->start_price;
        $end_price       = $request->end_price;
        $category    = Category::with('product')->get();
        $brands = Brand::all();
        $products    = Product::whereBetween('product_price',[$start_price , $end_price])->get();
        return view('front.shop',compact('category','products','category_id','start_price','end_price','brands','subcategory_id','brand_id'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function brandProduct($brand)
    {   
        $start_price = '';
        $end_price = '';
        $category_id = "";
        $subcategory_id = "";
        $brand_id = Brand::where('brand_slug',$brand)->first();
        $category    = Category::with('product')->get();
        $products    = Product::where('brand_id',$brand_id->id)->get();
        $brands = Brand::all();
        return view('front.shop',compact('category','products','category_id','start_price','end_price','brands','brand_id','subcategory_id'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function productDetails($product_slug)
    {   

        $product    = Product::where('product_slug',$product_slug)->first();
        $related_product = Product::where('category_id',$product->category_id)->latest()->get();
        return view('front.product_details',compact('product','related_product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function customerRequest()
    {
        return view('front.customer_request');
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
        //
    }

    public function ContatctUs()
    {
       return view('front.contact');
    }


    public function PrivacyPolicy()
    {
        return view('front.privacy_policy'); 
    }

    public function AboutUs()
    {
        return view('front.about'); 
    }

    public function HowToWork()
    {
        return view('front.how_to_work'); 
    }
}
