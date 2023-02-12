<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       
        //  $products=Product::pluck("membership_id");
        //  return response()->json($products);
        $products = Product::whereIn('membership_id', [1,2,3,4,5,6])
        ->get();
      

        //return response()->json($products);
        return view('user.home',compact('products'));
    }

    public function RequestBook(Request $request)
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin.adminHome');
    }
}
