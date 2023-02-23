<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//----Admin-----
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AfeatureController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\MembershipController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\FeaturesController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ItWorkController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductRequestController;
use App\Http\Controllers\Admin\MarketController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\AboutOneController;
use App\Http\Controllers\Admin\AboutTwoController;
use App\Http\Controllers\Admin\RequestProductController as ReqProductController;

//----Front-----
use App\Http\Controllers\Front\FrontController;

//----Payment-----
use App\Http\Controllers\Payment\PaypalController;
use App\Http\Controllers\Payment\StripeController;
use App\Http\Controllers\Payment\CryptoController;

//----User-----
use App\Http\Controllers\User\RequestProductController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\WishListController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\RechargeController;


use App\Http\Controllers\Auth\GoogleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*------------------------------------------
--------------------------------------------
All Front Routes List
--------------------------------------------
--------------------------------------------*/

Route::get('product/search', [FrontController::class, 'search'])->name('product.search');
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/membership', [FrontController::class, 'membership'])->name('membership');
Route::get('/free-product', [FrontController::class, 'freeProduct'])->name('free.product');
Route::get('/latest-product', [FrontController::class, 'latestProduct'])->name('latest.product');
Route::get('/shop', [FrontController::class, 'shop'])->name('shop');
Route::get('get/{category}/product', [FrontController::class, 'categoryProduct']);
Route::get('get/{category}/{subcategory}/product', [FrontController::class, 'subCategoryProduct']);
Route::get('/price/range/product', [FrontController::class, 'priceRangeProduct'])->name('price.range.product');
Route::get('/{brand}/brand/product', [FrontController::class, 'brandProduct']);
Route::get('/customer-request', [FrontController::class, 'customerRequest'])->name('customer.request');
Route::get('/product/details/{product_slug}',[FrontController::class, 'productDetails'])->name('product.details');
Route::post('store/request/product',[RequestProductController::class, 'storeRequestProduct'])->name('store.request.product');

Route::get('/contact-us', [FrontController::class, 'ContatctUs']);
Route::post('/contact-store', [FrontController::class, 'ContatctStore']);
Route::post('/request-store', [FrontController::class, 'RequestStore']);
Route::get('/privacy-policy', [FrontController::class, 'PrivacyPolicy']);
Route::get('/term-service', [FrontController::class, 'TeamAndCondition']);
Route::get('/about-us', [FrontController::class, 'AboutUs']);
Route::get('/how-it-work', [FrontController::class, 'HowToWork']);
Route::post('/subscriber/store', [FrontController::class, 'subscriberStore']);


Route::get('/member/product/{id}', [FrontController::class, 'MenberProduct']);

//---Social Login Route---
Route::controller(GoogleController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});


//----User Verify Route-----
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/user/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


//----Cart Route----
    Route::get('cart/index',[CartController::class, 'index'])->name('index.cart');
    Route::post('add/cart',[CartController::class, 'store'])->name('add.cart');
    Route::get('cart/show',[CartController::class, 'show']);
    Route::get('user/cart/show',[CartController::class, 'show']);
    Route::get('product/details/cart/show',[CartController::class, 'show']);
    Route::get('get/{cat_slug}/cart/show',[CartController::class, 'show']);
    Route::get('get/{cat_slug}/{ sub_cat }/cart/show',[CartController::class, 'show']);
    Route::get('product/details/cart/count',[CartController::class, 'cartCount']);
    Route::get('user/cart/count',[CartController::class, 'cartCount']);
    Route::get('cart/count',[CartController::class, 'cartCount']);
    Route::post('cart/update',[CartController::class, 'update'])->name('update.cart');
    Route::any('delete/cart/{id}',[CartController::class, 'destroy'])->name('delete.cart');

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::prefix('user')->middleware(['auth', 'user-access:user','verified'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('user.home');


    //order view
    Route::get('order/view/{id}', [UserController::class, 'OrderView'])->name('user.order.view');
    Route::get('review/{id}', [UserController::class, 'Review'])->name('user.review');
    Route::post('review/store', [UserController::class, 'ReviewStore'])->name('user.review.store');

    //----User Profile Route----//
    Route::get('profile', [UserController::class, 'userProfile'])->name('user.profile');
    Route::post('profile/update', [UserController::class, 'userProfileUpdate'])->name('user.update.profile');
    Route::get('password/change', [UserController::class, 'changePassword'])->name('user.password.change');
    Route::post('password/update', [UserController::class, 'updatePassword'])->name('user.password.update');


    //----Wishlist Route----
    Route::get('wishlist',[WishListController::class, 'all'])->name('index.wishlist');
    Route::get('add/wish-list/{id}',[WishListController::class, 'store'])->name('add.wishlist');
    Route::get('count/wishlist',[WishListController::class, 'wishCount']);
    Route::get('show/wishlist',[WishListController::class, 'show']);
    Route::delete('delete/wishlist/{id}',[WishListController::class, 'destroy'])->name('delete.wishlist');
    Route::get('view/wishlist',[WishListController::class, 'view']);

    //----Apply coupon Route----//
    Route::post('apply/coupon',[CartController::class, 'applyCoupon'])->name('apply.coupon');

    //----Checkout Route----//
    Route::get('checkout',[CheckoutController::class, 'index'])->name('checkout.page');
    Route::post('checkout',[CheckoutController::class, 'store'])->name('checkout');


    //----Subscription Route----//
    Route::get('subscription',[CheckoutController::class, 'subscriptionIndex'])->name('subscription.page');
    Route::post('subscription',[CheckoutController::class, 'subscriptionStore'])->name('subscription');

    //----Paypal Payment Route----
    Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
    Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
    Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
    Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');

    //----Paypal Recharge Route-----
    Route::get('recharge',[RechargeController::class, 'index'])->name('recharge.page');
    Route::post('recharge',[RechargeController::class, 'store'])->name('recharge');

    //----Stripe Payment Route----
    Route::post('stripe',[StripeController::class, 'stripePayment'])->name('stripe.payment');


    //bitcoin




    Route::get('bitcoin/payment', [CryptoController::class, 'CoinGate'])->name('bitcoin.payment');
    Route::post('bitcoin/callback', [CryptoController::class, 'callback'])->name('bitcoin.callback');


    //coin base payment system

});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/

Route::get('admin/login', [LoginController::class, 'adminLogin'])->name('admin.login');


Route::prefix('admin')->middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('home', [HomeController::class, 'adminHome'])->name('admin.home');

    //----Admin Profile Route----//
    Route::get('profile', [AdminController::class, 'adminProfile'])->name('admin.profile');
    Route::post('profile/update', [AdminController::class, 'adminProfileUpdate'])->name('update.profile');
    Route::get('password/change', [AdminController::class, 'changePassword'])->name('password.change');
    Route::post('password/update', [AdminController::class, 'updatePassword'])->name('password.update');

    Route::get('website/setting', [SettingController::class, 'WebSite'])->name('website.setting');
    Route::post('update/setting/{id}',[SettingController::class,'SettingUpdate'])->name('update.setting');

    Route::get('about/us', [AboutController::class, 'AboutUs'])->name('about.us');
    Route::post('update/about/{id}',[AboutController::class,'AboutUpdate'])->name('update.about');

    Route::group(['prefix' => 'order'], function () {
        Route::get('/',[OrderController::class, 'ALlOrder'])->name('admin.order');
        Route::get('view/{id}',[OrderController::class, 'OrderView'])->name('view.view');

    });



    //----Category Route----//
    Route::group(['prefix' => 'category'], function () {
        Route::get('/',[CategoryController::class, 'index'])->name('index.category');
        Route::post('store',[CategoryController::class, 'store'])->name('store.category');
        Route::get('edit/{id}',[CategoryController::class, 'edit'])->name('edit.category');
        Route::post('update/{id}',[CategoryController::class, 'update'])->name('update.category');
        Route::delete('delete/{id}',[CategoryController::class, 'destroy'])->name('delete.category');
    });

    //----Category Route----//
    Route::group(['prefix' => 'sub-category'], function () {
        Route::get('/',[SubCategoryController::class, 'index'])->name('index.sub_category');
        Route::post('store',[SubCategoryController::class, 'store'])->name('store.sub_category');
        Route::get('edit/{id}',[SubCategoryController::class, 'edit'])->name('edit.sub_category');
        Route::post('update/{id}',[SubCategoryController::class, 'update'])->name('update.sub_category');
        Route::delete('delete/{id}',[SubCategoryController::class, 'destroy'])->name('delete.sub_category');
    });

    //----Brand Route----//
    Route::group(['prefix' => 'brand'], function () {
        Route::get('/',[BrandController::class, 'index'])->name('index.brand');
        Route::post('store',[BrandController::class, 'store'])->name('store.brand');
        Route::get('edit/{id}',[BrandController::class, 'edit'])->name('edit.brand');
        Route::post('update/{id}',[BrandController::class, 'update'])->name('update.brand');
        Route::delete('delete/{id}',[BrandController::class, 'destroy'])->name('delete.brand');
    });


    //----Product Route----//
    Route::group(['prefix' => 'product'], function () {
        Route::get('create',[ProductController::class, 'create'])->name('create.product');
        Route::get('/',[ProductController::class, 'index'])->name('index.product');
        Route::post('store',[ProductController::class, 'store'])->name('store.product');
        Route::get('view/{id}',[ProductController::class, 'show']);
        Route::get('edit/{id}',[ProductController::class, 'edit'])->name('edit.product');
        Route::post('update/{id}',[ProductController::class, 'update'])->name('update.product');
        Route::delete('delete/{id}',[ProductController::class, 'destroy'])->name('delete.product');

        //---Json data----//
        Route::get('/get/subcategory/{cat_id}',[ProductController::class, 'getSubcategory']);
    });


    //----Membership Route----//
    Route::group(['prefix' => 'membership'], function () {
        Route::get('create',[MembershipController::class, 'create'])->name('create.membership');
        Route::get('/',[MembershipController::class, 'index'])->name('index.membership');
        Route::post('store',[MembershipController::class, 'store'])->name('store.membership');
        Route::get('edit/{id}',[MembershipController::class, 'edit'])->name('edit.membership');
        Route::post('update/{id}',[MembershipController::class, 'update'])->name('update.membership');
        Route::delete('delete/{id}',[MembershipController::class, 'destroy'])->name('delete.membership');
    });


    //----Coupon Route----//
    Route::group(['prefix' => 'coupon'], function () {
        Route::get('/',[CouponController::class, 'index'])->name('index.coupon');
        Route::post('store',[CouponController::class, 'store'])->name('store.coupon');
        Route::get('edit/{id}',[CouponController::class, 'edit'])->name('edit.coupon');
        Route::post('update/{id}',[CouponController::class, 'update'])->name('update.coupon');
        Route::delete('delete/{id}',[CouponController::class, 'destroy'])->name('delete.coupon');
    });


    //----Testiminial Route----//
    Route::group(['prefix' => 'testimonial'], function () {
        Route::get('create',[TestimonialController::class, 'create'])->name('create.testimonial');
        Route::get('/',[TestimonialController::class, 'index'])->name('index.testimonial');
        Route::post('store',[TestimonialController::class, 'store'])->name('store.testimonial');
        Route::get('edit/{id}',[TestimonialController::class, 'edit'])->name('edit.testimonial');
        Route::post('update/{id}',[TestimonialController::class, 'update'])->name('update.testimonial');
        Route::delete('delete/{id}',[TestimonialController::class, 'destroy'])->name('delete.testimonial');
    });

    //---- Feature Route ----//
    Route::group(['prefix' => 'features'], function () {
        Route::get('create',[FeaturesController::class, 'create'])->name('create.features');
        Route::get('/',[FeaturesController::class, 'index'])->name('index.features');
        Route::post('store',[FeaturesController::class, 'store'])->name('store.features');
        Route::get('edit/{id}',[FeaturesController::class, 'edit'])->name('edit.features');
        Route::post('update/{id}',[FeaturesController::class, 'update'])->name('update.features');
        Route::delete('delete/{id}',[FeaturesController::class, 'destroy'])->name('delete.features');
    });

    //---- About Feature Route ----//
    Route::group(['prefix' => 'afeatures'], function () {
        Route::get('/',[AfeatureController::class, 'index'])->name('index.afeature');
        Route::post('store',[AfeatureController::class, 'store'])->name('store.afeature');
        Route::get('edit/{id}',[AfeatureController::class, 'edit'])->name('edit.afeature');
        Route::post('update/{id}',[AfeatureController::class, 'update'])->name('update.afeature');
        Route::delete('delete/{id}',[AfeatureController::class, 'destroy'])->name('delete.afeature');
    });

    Route::group(['prefix' => 'itwork'], function () {
        Route::get('/',[ItWorkController::class, 'index'])->name('index.itwork');
        Route::post('store',[ItWorkController::class, 'store'])->name('store.itwork');
        Route::get('edit/{id}',[ItWorkController::class, 'edit'])->name('edit.itwork');
        Route::post('update/{id}',[ItWorkController::class, 'update'])->name('update.itwork');
        Route::delete('delete/{id}',[ItWorkController::class, 'destroy'])->name('delete.itwork');
    });

    //---- Page Feature Route ----//
    Route::group(['prefix' => 'page'], function () {
        Route::get('/',[PageController::class, 'index'])->name('index.page');
        Route::post('store',[PageController::class, 'store'])->name('store.page');
        Route::get('/view/{id}',[PageController::class, 'show']);
        Route::get('edit/{id}',[PageController::class, 'edit'])->name('edit.page');
        Route::post('update/{id}',[PageController::class, 'update'])->name('update.page');
        Route::delete('delete/{id}',[PageController::class, 'destroy'])->name('delete.page');
    });

    //---- Social Route ----//
    Route::group(['prefix' => 'social'], function () {
        Route::get('/',[SocialController::class, 'index'])->name('index.social');
        Route::post('store',[SocialController::class, 'store'])->name('store.social');
        Route::get('edit/{id}',[SocialController::class, 'edit']);
        Route::post('update/{id}',[SocialController::class, 'update'])->name('update.social');
        Route::delete('delete/{id}',[SocialController::class, 'destroy'])->name('delete.social');
    });


    Route::group(['prefix' => 'productrequest'], function () {
        Route::get('/',[ProductRequestController::class, 'index'])->name('index.productrequest');
        Route::get('add',[ProductRequestController::class, 'add'])->name('add.productrequest');
        Route::post('store',[ProductRequestController::class, 'store'])->name('store.productrequest');
        Route::get('edit/{id}',[ProductRequestController::class, 'edit'])->name('edit.productrequest');
        Route::post('update/{id}',[ProductRequestController::class, 'update'])->name('update.productrequest');
        Route::delete('delete/{id}',[ProductRequestController::class, 'destroy'])->name('delete.productrequest');
    });

      //----market Route----//
      Route::group(['prefix' => 'market'], function () {
        Route::get('/',[MarketController::class, 'index'])->name('index.market');
        Route::get('add',[MarketController::class, 'add'])->name('add.market');
        Route::post('store',[MarketController::class, 'store'])->name('store.market');
        Route::get('edit/{id}',[MarketController::class, 'edit'])->name('edit.market');
        Route::post('update/{id}',[MarketController::class, 'update'])->name('update.market');
        Route::get('delete/{id}',[MarketController::class, 'delete'])->name('delete.market');
    });






    Route::group(['prefix' => 'aboutone'], function () {
        Route::get('/',[AboutOneController::class, 'index'])->name('index.aboutone');
        Route::get('add',[AboutOneController::class, 'add'])->name('add.aboutone');
        Route::post('store',[AboutOneController::class, 'store'])->name('store.aboutone');
        Route::get('edit/{id}',[AboutOneController::class, 'edit'])->name('edit.aboutone');
        Route::post('update/{id}',[AboutOneController::class, 'update'])->name('update.aboutone');
        Route::get('delete/{id}',[AboutOneController::class, 'delete'])->name('delete.aboutone');
    });

    Route::group(['prefix' => 'abouttwo'], function () {
        Route::get('/',[AboutTwoController::class, 'index'])->name('index.abouttwo');
        Route::get('add',[AboutTwoController::class, 'add'])->name('add.abouttwo');
        Route::post('store',[AboutTwoController::class, 'store'])->name('store.abouttwo');
        Route::get('edit/{id}',[AboutTwoController::class, 'edit'])->name('edit.abouttwo');
        Route::post('update/{id}',[AboutTwoController::class, 'update'])->name('update.abouttwo');
        Route::get('delete/{id}',[AboutTwoController::class, 'delete'])->name('delete.abouttwo');
    });



    //router homepage

    Route::group(['prefix' => 'homepage'], function () {
        Route::get('/',[HomePageController::class, 'index'])->name('index.homepage');
        Route::get('add',[HomePageController::class, 'add'])->name('add.homepage');
        Route::post('store',[HomePageController::class, 'store'])->name('store.homepage');
        Route::get('edit/{id}',[HomePageController::class, 'edit'])->name('edit.homepage');
        Route::post('update/{id}',[HomePageController::class, 'update'])->name('update.homepage');
        Route::get('delete/{id}',[HomePageController::class, 'delete'])->name('delete.homepage');
    });




    //---- Subscriber Route ----//
    Route::group(['prefix' => 'subscriber'], function () {
        Route::get('/',[SubscriberController::class, 'index'])->name('index.subscriber');
        Route::post('promotion/email/send',[SubscriberController::class, 'sendPromotionEmail'])->name('send.promotion.email');

        Route::delete('delete/subscriber/{id}',[SubscriberController::class, 'destroy'])->name('delete.subscriber');
    });


    //---- Request Product Route ----//
    Route::group(['prefix' => 'request-product'], function () {
        Route::get('/index',[ReqProductController::class, 'index'])->name('index.request.product');
        Route::get('/old',[ReqProductController::class, 'indexOld'])->name('old.request.product');
        Route::get('/view/{id}',[ReqProductController::class, 'show']);

        Route::get('detail/{id}',[ReqProductController::class, 'edit']);
        Route::delete('delete/request/product/{id}',[ReqProductController::class, 'destroy'])->name('delete.request.product');
    });

});

