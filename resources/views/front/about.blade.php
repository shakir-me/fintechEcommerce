@extends('layouts.front')

@section('front_content')



<!-- breadcrumb  -->
<div class="bredcrumb">
    <h2 class="bredcrumb__title">About Us</h2>
    <ul class="bredcrumb__items">
        <li>Home <i class="bi bi-chevron-right"></i></li>
        <li>About us</li>
    </ul>
</div>

<!-- store about  -->

<div class="about__store">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about__store-left">
                    <span class="about__store-subtitle">{{ $about->about_us }}</span>
                    <h3 class="about__store-title">{{ $about->about_title }}</h3>
                    <p>{!! $about->description !!}.</p>
                   
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about__store-thumb">
                    <img src="{{asset('backend/about/'.$about->image) }}"  alt="store">
          
                </div>
            </div>
        </div>
    </div>
</div>

<!-- about features  -->

<div class="about__features">
    <div class="container">
        <div class="about__features-wrapper">
            <div class="about__features-item">
                <div class="about__features-thumb">
                    <img src="{{ asset('frontend/img/ab1.png')}}" alt="ab1">
                </div>
                <div class="about__features-content">
                    @if(isset($homepages[6]['title']))
                    <h4 class="about__features-title">{{ $homepages[6]['title'] }}</h4>
                    <p class="about__features-dis">	{!! $homepages[6]['details'] !!}.</p>
                    @endif
                </div>
            </div>

            <div class="about__features-item">
                <div class="about__features-thumb">
                    <img src="{{ asset('frontend/img/ab2.png')}}" alt="ab1">
                </div>
                <div class="about__features-content">
                    @if(isset($homepages[7]['title']))
                    <h4 class="about__features-title">{{ $homepages[7]['title'] }}</h4>
                    <p class="about__features-dis">{!! $homepages[7]['details'] !!}.</p>
                    @endif
                </div>
            </div>

            <div class="about__features-item">
                <div class="about__features-thumb">
                    <img src="{{ asset('frontend/img/ab3.png')}}" alt="ab1">
                </div>
                <div class="about__features-content">
                    @if(isset($homepages[8]['title']))
                    <h4 class="about__features-title">{{ $homepages[8]['title'] }}</h4>
                    <p class="about__features-dis">{!! $homepages[8]['details'] !!}.</p>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>

<!-- about have  -->
<div class="about__have">
    <div class="container">
        <div class="about__have-section">
            <span class="about__store-subtitle">WE HAVE GOT</span>
            @if(isset($homepages[9]['title']))
            <h2 class="about__store-title">{{ $homepages[9]['title'] }}</h2>
                @endif
        </div>
        <div class="row">
            <div class="col-lg-6">
                @if(isset($homepages[10]['title']))
                <div class="about__have-item">
                    <span class="about__have-title">{{ $homepages[10]['title'] }}</span>
                    <p class="about__have-dis">{!! $homepages[10]['details'] !!}.</p>
                    {{-- <a href="#" class="about__have-btn">FIND THE RIGHT PRODUCT FOR YOU <i class="bi bi-arrow-right"></i></a> --}}
                </div>
                @endif
            </div>
            <div class="col-lg-6">
                <div class="about__have-item">
                    @if(isset($homepages[11]['title']))
                    <span class="about__have-title">{{ $homepages[11]['title'] }}</span>
                    <p class="about__have-dis">{!! $homepages[11]['details'] !!}.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- about conpactibility  -->
<div class="about__have">
    <div class="container">
        <div class="about__have-section">
            @if(isset($homepages[12]['title']))
            <span class="about__store-subtitle">{{ $homepages[12]['title'] }}</span>
            <h2 class="about__store-title">{!! $homepages[12]['details'] !!}</h2>
            @endif
           
        </div>
        <div class="row">
            <section class="section items-section free-items">
                <div class="container">
                    <div class="items row g-5 mb-4">
                        @foreach ( $Products as $product)
                            
                       
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="items__item">
                                <img src="{{ asset($product->thumbnail) }}" alt="" class="items__img" />
                                <h5 class="heading name">{{ $product->product_name }}</h5>
                                <h5 class="heading title">{{ $product->product_title }}</h5>
                                <div class="price-list d-flex justify-content-center align-items-center gap-2 mb-1">

                                    @if($product->discount_rate == 0.00)
										<p class="price">${{ $product->product_price }}</p>
										@else
										<p class="price">${{ $product->discount_price }}</p>
										@endif

										@if($product->discount_rate == 0.00)
										@else
										<span class="discount">- @if($product->discount_type == "Flat") $@endif{{ intval($product->discount_rate) }} @if($product->discount_type == "Percent") % @endif</span>
										@endif

										@if($product->discount_rate == 0.00)
										@else
										<span class="old-price">${{ $product->product_price }}</span>
										@endif

                                    {{-- <p class="price">$35.00</p>
                                    <span class="price newprice">$30.00</span> --}}


                                </div>

                                <div class="items__bottom">
                                    <p class="text mb-2 text-center">
                                        {{ Str::limit($product->product_short_desc, 100, '') }} 
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <form action="{{ route('add.cart') }}" method="post" class="d-flex w-full justify-content-center align-items-center mx-auto addCard">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="product_qty" value="1">
                                            @if($product->discount_rate == 0.00 )
                                            <input type="hidden" name="product_price" value="{{ $product->product_price }}">
                                            @else
                                            <input type="hidden" name="product_price" value="{{ $product->discount_price }}">
                                            @endif
                                            <button class="btn btn-cart" type="submit">Add to cart</button>
                                        </form>
                                        
							<button class="btn btn-wishlist addWishlist" data-id="{{ $product->id }}">
								<i class="bi bi-heart"></i>
							</button>
                                    </div>
                                </div>
                            </div>
                          </div>

                          @endforeach
                     
                      
                     
                    </div>
                    <div class="items__btn">
                        <!-- <a href="#" class="btn btn-more">view more</a> -->
                        <a href="{{ url('shop') }}" class="btn-one">view more</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- about newsletter  -->

<div class="about__newsletter">
    <div class="about__newsletter-wrapper">
        @if(isset($homepages[13]['title']))
        <span class="about__newsletter-title">{{ $homepages[13]['title'] }}!</span>
        <p class="about__newsletter-dis">{!! $homepages[13]['details'] !!}</p>
       @endif
       <br>
        <form action="{{url('subscriber/store')}}" method="post">
            @csrf
            <input type="email" placeholder="Email address" name="email" required>
            <button class="about__newsletter-btn" type="submit">Subscribe Now</button>
        </form>
    </div>
</div>

@push('js')

@endpush

@endsection