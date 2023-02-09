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
                    <h4 class="about__features-title">Increased Revenue Stream</h4>
                    <p class="about__features-dis">We’ll reimburse the cost of any lost MonkProtected orders.</p>
                </div>
            </div>
            <div class="about__features-item">
                <div class="about__features-thumb">
                    <img src="{{ asset('frontend/img/ab2.png')}}" alt="ab1">
                </div>
                <div class="about__features-content">
                    <h4 class="about__features-title">Increased Revenue Stream</h4>
                    <p class="about__features-dis">We’ll reimburse the cost of any lost MonkProtected orders.</p>
                </div>
            </div>
            <div class="about__features-item">
                <div class="about__features-thumb">
                    <img src="{{ asset('frontend/img/ab3.png')}}" alt="ab1">
                </div>
                <div class="about__features-content">
                    <h4 class="about__features-title">Higher Customer Retention</h4>
                    <p class="about__features-dis">We’ll reimburse the cost of any lost MonkProtected orders.</p>
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
            <h2 class="about__store-title">Everything you need to automate
                your trading</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="about__have-item">
                    <span class="about__have-title">Become a perfect trader</span>
                    <p class="about__have-dis">Lorem ipsum dolor sit amet consectetur. Sit nunc id mauris nibh bibendum tellus nec sit. Orci proin dolor ipsum mi et sit condimentum pulvinar. Purus facilisis eget sed dictum donec commodo. Enim pellentesque ac eget tristique. Aliquet mattis aliquam id aliquet. Iaculis nunc nisi mus egestas euismod at.</p>
                    <a href="#" class="about__have-btn">FIND THE RIGHT PRODUCT FOR YOU <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__have-item">
                    <span class="about__have-title">Get legitimate softwares</span>
                    <p class="about__have-dis">Lorem ipsum dolor sit amet consectetur. Sit nunc id mauris nibh bibendum tellus nec sit. Orci proin dolor ipsum mi et sit condimentum pulvinar. Purus facilisis eget sed dictum donec commodo. Enim pellentesque ac eget tristique. Aliquet mattis aliquam id aliquet. Iaculis nunc nisi mus egestas euismod at.</p>
                    <a href="#" class="about__have-btn">GET STARTED <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- about conpactibility  -->
<div class="about__have">
    <div class="container">
        <div class="about__have-section">
            <span class="about__store-subtitle">SOFTWARE'S COMPACTIBILITY</span>
            <h2 class="about__store-title">Our Software's Work on</h2>
            <p>Lorem ipsum dolor sit amet consectetur. Sem turpis rhoncus non sagittis. Suscipit.</p>
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
                                        <button class="btn btn-cart">Add to cart</button>
                                        <button class="btn btn-wishlist">
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
        <span class="about__newsletter-title">Join With Us!</span>
        <p class="about__newsletter-dis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet, lacus, sit sollicitudin nullam vitae. Tortor, in enim</p>
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