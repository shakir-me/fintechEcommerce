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
use App\Models\Contact;
use App\Models\Admin\Features;
use App\Models\Admin\Afeature;
use App\Models\Admin\Page;
use App\Models\Admin\Subscriber;
use App\Models\User\RequestProduct;
use App\Models\RequestBooking;
use App\Models\MarketPlace;
use App\Models\HomePage;
use App\Models\Admin\AboutTwo;
use App\Models\Admin\AboutOne;
use Auth;
use DB;
use Image;
class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    //    return response()->json($users);
        $testimonial = Testimonial::all();
        $freeProducts = Product::where('is_free',1)->take(4)->latest()->get();
        $latestProducts = Product::take(8)->latest()->get();
        $memberships = Membership::get();
        $requestProducts = RequestProduct::get();
        $categories = Category::get();
        $marketPlaces = MarketPlace::get();

       //return response()->json($homepages);

        return view('front.home',compact('testimonial','freeProducts','latestProducts','memberships','requestProducts','categories','marketPlaces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function membership()
    {
        // $memberships = Membership::latest()->get();
        $memberships = Membership::get();
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
        $freeProducts = Product::where('is_free', 1);


        if (isset($_GET['sort']) && ! empty($_GET['sort'])) {
            if ($_GET['sort']=="product_popular") {
                $freeProducts->orderBy('products.id','Desc');
            }else if ($_GET['sort']=="product_ratting") {
                $freeProducts->orderby('products.product_name','Asc');
            }
            else if ($_GET['sort']=="price_low_to_high") {
                $freeProducts->orderby('products.product_price','Asc');
            }

            else if ($_GET['sort']=="price_high_to_low") {
                $freeProducts->orderby('products.product_price','Desc');
            }

            else if ($_GET['sort']=="price_high_to_low") {
                $freeProducts->orderby('products.product_name','Desc');
            }
        }



      $freeProducts=$freeProducts->paginate(12);



        $product_type = "free";
        $brands = Brand::all();
        $category    = Category::with('product')->get();
        $start_price = '';
        $end_price = '';
        return view('front.free_product',compact('start_price','end_price','brands','category','freeProducts','product_type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function latestProduct()
    {
        $freeProducts = Product::latest();


        if (isset($_GET['sort']) && ! empty($_GET['sort'])) {
            if ($_GET['sort']=="product_popular") {
                $freeProducts->orderBy('products.id','Desc');
            }else if ($_GET['sort']=="product_ratting") {
                $freeProducts->orderby('products.product_name','Asc');
            }
            else if ($_GET['sort']=="price_low_to_high") {
                $freeProducts->orderby('products.product_price','Asc');
            }

            else if ($_GET['sort']=="price_high_to_low") {
                $freeProducts->orderby('products.product_price','Desc');
            }

            else if ($_GET['sort']=="price_high_to_low") {
                $freeProducts->orderby('products.product_name','Desc');
            }
        }



      $freeProducts=$freeProducts->paginate(12);


        $category_id = '';
        $start_price = '';
        $end_price = '';
        $subcategory_id ='';
        $brand_id ='';
        $brands = Brand::all();
        $product_type = 'latest';
        $category = Category::with('product')->get();
        return view('front.latest_product',compact('freeProducts','product_type','category_id','start_price','end_price','subcategory_id','brand_id','brands','category'));
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

        $products = Product::where('status',1);
        if (isset($_GET['sort']) && ! empty($_GET['sort'])) {
            if ($_GET['sort']=="product_popular") {
                $products->orderBy('products.id','Desc');
            }else if ($_GET['sort']=="product_ratting") {
                $products->orderby('products.product_name','Asc');
            }
            else if ($_GET['sort']=="price_low_to_high") {
                $products->orderby('products.product_price','Asc');
            }

            else if ($_GET['sort']=="price_high_to_low") {
                $products->orderby('products.product_price','Desc');
            }

            else if ($_GET['sort']=="price_high_to_low") {
                $products->orderby('products.product_name','Desc');
            }
          }



        $products=$products->paginate(12);



        $brands = Brand::all();
        $members = Membership::all();
        return view('front.shop',compact('category','start_price','end_price','products','brands','category_id','subcategory_id','brand_id','members'));
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
        $products    = Product::where('category_id',$category_id->id);
//sort by

            if (isset($_GET['sort']) && ! empty($_GET['sort'])) {
                if ($_GET['sort']=="product_popular") {
                    $products->orderBy('products.id','Desc');
                }else if ($_GET['sort']=="product_ratting") {
                    $products->orderby('products.product_name','Asc');
                }
                else if ($_GET['sort']=="price_low_to_high") {
                    $products->orderby('products.product_price','Asc');
                }

                else if ($_GET['sort']=="price_high_to_low") {
                    $products->orderby('products.product_price','Desc');
                }

                else if ($_GET['sort']=="price_high_to_low") {
                    $products->orderby('products.product_name','Desc');
                }
            }



$products=$products->paginate(12);







        $brands = Brand::all();
        $members = Membership::all();
        return view('front.category_product',compact('category','products','category_id','start_price','end_price','brands','subcategory_id','members'));
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
        $products    = Product::where('subcategory_id',$subcategory_id->id);
        //sort by
        if (isset($_GET['sort']) && ! empty($_GET['sort'])) {
            if ($_GET['sort']=="product_popular") {
                $products->orderBy('products.id','Desc');
            }else if ($_GET['sort']=="product_ratting") {
                $products->orderby('products.product_name','Asc');
            }
            else if ($_GET['sort']=="price_low_to_high") {
                $products->orderby('products.product_price','Asc');
            }

            else if ($_GET['sort']=="price_high_to_low") {
                $products->orderby('products.product_price','Desc');
            }

            else if ($_GET['sort']=="price_high_to_low") {
                $products->orderby('products.product_name','Desc');
            }
        }



      $products=$products->paginate(12);
        $brands = Brand::all();
        $members = Membership::all();
        return view('front.subcategory_product',compact('category','products','category_id','start_price','end_price','brands','subcategory_id','members'));
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
        $products    = Product::whereBetween('product_price',[$start_price , $end_price]);

        if (isset($_GET['sort']) && ! empty($_GET['sort'])) {
            if ($_GET['sort']=="product_popular") {
                $products->orderBy('products.id','Desc');
            }else if ($_GET['sort']=="product_ratting") {
                $products->orderby('products.product_name','Asc');
            }
            else if ($_GET['sort']=="price_low_to_high") {
                $products->orderby('products.product_price','Asc');
            }

            else if ($_GET['sort']=="price_high_to_low") {
                $products->orderby('products.product_price','Desc');
            }

            else if ($_GET['sort']=="price_high_to_low") {
                $products->orderby('products.product_name','Desc');
            }
        }



      $products=$products->paginate(12);




        $members = Membership::all();
        return view('front.price_filter',compact('category','products','category_id','start_price','end_price','brands','subcategory_id','brand_id','members'));
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
        $products    = Product::where('brand_id',$brand_id->id)->paginate(12);
        $brands = Brand::all();
        return view('front.brand_product',compact('category','products','category_id','start_price','end_price','brands','brand_id','subcategory_id'));
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

        $shareComponent = \Share::page(route('product.details', $product->product_slug))
        ->facebook()
        ->twitter()
        ->linkedin()
        ->whatsapp();


        return view('front.product_details',compact('product','related_product','shareComponent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function customerRequest()
    {
        $requestProducts = RequestProduct::get();
        $homepages = HomePage::get();
        return view('front.customer_request',compact('requestProducts','homepages'));
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

    public function ContatctStore(Request $request)
    {
       $contact=new Contact();
       $contact->name=$request->name;
       $contact->email=$request->email;
       $contact->subject=$request->subject;
       $contact->address=$request->address;
       $contact->description=$request->description;
       $contact->save();

       $notification=array(
        'messege'=>'Successfully Conatct Sent Please Wait !',
        'alert-type'=>'success'
         );
       return Redirect()->back()->with($notification);

    }


    public function PrivacyPolicy()
    {
        $privacy_policy=Features::all();
        return view('front.privacy_policy',compact('privacy_policy'));
    }

    public function TeamAndCondition()
    {



        $privacy_policy=Afeature::all();
        return view('front.team_and_condition',compact('privacy_policy'));
    }

    public function AboutUs()
    {

        $about=DB::table('abouts')->first();
        $aboutones=AboutOne::all();
        $abouttwos=AboutTwo::all();
        $Products = Product::take(8)->latest()->get();

        $homepages = HomePage::get()->toArray();
        return view('front.about',compact('about','Products','homepages','aboutones','abouttwos'));
    }

    public function HowToWork()
    {
        $pages=Page::all();
        return view('front.how_to_work',compact('pages'));
    }

    public function subscriberStore(Request $request)
    {
        $subscriber=new Subscriber();

        $subscriber->email=$request->email;
        $subscriber->save();

        $notification=array(
         'messege'=>'Subscriber Conatct Sent Please Wait !',
         'alert-type'=>'success'
          );
        return Redirect()->back()->with($notification);
    }

    public function MenberProduct($id)
    {


        $start_price = '';
        $end_price = '';
        $category_id = "";
        $subcategory_id = "";
        $category    = Category::with('product')->get();
        $products    = Product::where('membership_id',$id);

        if (isset($_GET['sort']) && ! empty($_GET['sort'])) {
            if ($_GET['sort']=="product_popular") {
                $products->orderBy('products.id','Desc');
            }else if ($_GET['sort']=="product_ratting") {
                $products->orderby('products.product_name','Asc');
            }
            else if ($_GET['sort']=="price_low_to_high") {
                $products->orderby('products.product_price','Asc');
            }

            else if ($_GET['sort']=="price_high_to_low") {
                $products->orderby('products.product_price','Desc');
            }

            else if ($_GET['sort']=="price_high_to_low") {
                $products->orderby('products.product_name','Desc');
            }
        }



      $products=$products->paginate(12);


        $members = Membership::all();

        //return response()->json($products);
        return view('front.member_product',compact('members','products','start_price','end_price','category_id','subcategory_id','category'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $category_id = $request->category_id;

        $start_price = '';
        $end_price = '';
        $category_id = "";
        $subcategory_id = "";

        $category    = Category::with('product')->get();

        $products = Product::orWhere('product_name', 'like', '%'.$search.'%')
        ->orWhere('category_id', 'like', '%'.$search.'%')
        ->orWhere('product_price', 'like', '%'.$search.'%')
        ->orderBy('id', 'desc')
        ->paginate(12);


        $members = Membership::all();


        return view('front.search_product',compact('products','search','category_id','start_price','end_price','subcategory_id','category','members'));


    }

    public function RequestStore (Request $request)
    {
          if(Auth::check()){

            $data = new RequestBooking();
            $data->user_id          = Auth::id();
            $data->name             = $request->name;
            $data->email            = $request->email;
            $data->software_name    = $request->software_name;
            $data->details          = $request->details;
            $data->author_name          = $request->author_name;
            $data->baker_name          = $request->baker_name;
            $data->trading_security          = $request->trading_security;
            $data->trading_account          = $request->trading_account;
            $data->trading_server          = $request->trading_server;
            $data->deposite_amount          = $request->deposite_amount;
            // $data->value          = $request->value;
            $data->value      = json_encode($request->value);
            $data->status          =1;

            if ($request->hasFile('imageone')) {
                $image_tmp = $request->file('imageone');
                if ($image_tmp->isValid()) {
                    // Get image extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    $imageName = rand(111,999).'.'.$extension;
                    $imagePath = 'backend/images/bookproduct/'.$imageName;
                    // Upload the imaage
                    Image::make($image_tmp)->save($imagePath);
                    $data->imageone = $imageName;
                }
                else{
                   $data->imageone = "";
                }
            }

            if ($request->hasFile('imagetwo')) {
                $image_tmp = $request->file('imagetwo');
                if ($image_tmp->isValid()) {
                    // Get image extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    $imageName = rand(111,999).'.'.$extension;
                    $imagePath = 'backend/images/bookproduct/'.$imageName;
                    // Upload the imaage
                    Image::make($image_tmp)->save($imagePath);
                    $data->imagetwo = $imageName;
                }
                else{
                   $data->imagetwo = "";
                }
            }


          //return response()->json($data);
            $data->save();

            $data->save();
        $notification=array(
            'messege'=>'Product Request Successfully  Please Wait ',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);


        }else{
            return redirect()->route('login')->with('error','Please Login First For Requesting Product !');
        }
    }


}
