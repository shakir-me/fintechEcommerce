@extends('layouts.front')

@section('front_content')
<div class="container m-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body text-center">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <br>
                    <br>
                    <br>
                    <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-success align-baseline">Click here to request another</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
