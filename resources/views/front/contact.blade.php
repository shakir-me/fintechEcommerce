@extends('layouts.front')
@section('front_content')

@push('css')
@endpush

<div class="bredcrumb">
    <h2 class="bredcrumb__title">contact us</h2>
    <ul class="bredcrumb__items">
        <li>Home <i class="bi bi-chevron-right"></i></li>
        <li>contact us</li>
    </ul>
</div>

<!-- contact form  -->
<div class="contact__form">
    <div class="container">
        <div class="contact__form-wrapper">
            <span class="contact__form-title">contact us</span>
            <p class="contact__form-dis">Please enter your details below to complete your purchase</p>
            <div class="contact__form-inner">
                <div class="contact__form-left">
                    <form action="{{ url('contact-store') }}" method="post">
                        @csrf
                        <div class="contact__form-field">
                            <label>your name (required)</label>
                            <input type="text" name="name" required>
                        </div>
                        <div class="contact__form-field">
                            <label>your email (required)</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="contact__form-field">
                            <label>Subject</label>
                            <input type="text" name="subject" required>
                        </div>
                        <div class="contact__form-field">
                            <label>address</label>
                            <input type="text" name="address" required>
                        </div>
                        <div class="contact__form-field">
                            <label>your message</label>
                            <textarea name="description" required></textarea>
                        </div>
                        <div class="contact__form-field">
                            <button class="contact__form-submit" type="submit">send</button>
                        </div>
                    </form>
                </div>
                <div class="contact__form-right">
                    <span class="contact__form-title2">FREQUENTLY ASKED QUESTIONS</span>
                    <p class="contact__form-dis2">Lorem ipsum dolor sit amet consectetur. Hendrerit convallis fringilla massa augue. Elit netus nulla consectetur potenti tincidunt lobortis nulla urna eu. Dictum tempor et purus molestie integer viverra. Dictum imperdiet enim quam ut morbi vel libero.</p>
                    <p class="contact__form-dis2">Lorem ipsum dolor sit amet consectetur. Sit nunc id mauris nibh bibendum tellus nec sit. Orci proin dolor ipsum mi et sit condimentum pulvinar. </p>
                    <span class="contact__form-title2">CONTACT US ALTERNATIVELY</span>
                    <div class="contact__form-bottom">
                        <div class="contact__form-item">
                            <img src="img/c1.png" alt="">
                            <span>Email:</span>
                            <a href="mailTo:Support@info.com">Support@info.com</a>
                        </div>
                        <div class="contact__form-item">
                            <img src="img/c2.png" alt="">
                            <span>Support forum for 
                                over 24h</span>
                        </div>
                        <div class="contact__form-item">
                            <img src="img/c3.png" alt="">
                            <span>please note:</span>
                            <p>All products are available to download on your account once purchased.</p>
                        </div>
                        <div class="contact__form-item">
                            <img src="img/c4.png" alt="">
                            <span>socials:</span>
                            <p>Find and reply to us via social media platforms</p>
                        </div>
                    </div>
            
                </div>
            </div>
            <p class="contact__form-btitle">Do you have questions about how we can help your company? <br>
                <span>Send us an email and we’ll get in touch shortly.</span></p>
        </div>
    </div>
</div>


@endsection