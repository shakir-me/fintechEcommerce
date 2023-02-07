@extends('layouts.front')

@section('front_content')
<div class="bredcrumb">
    <h2 class="bredcrumb__title">How It Work</h2>
    <ul class="bredcrumb__items">
        <li>Home <i class="bi bi-chevron-right"></i></li>
        <li>How It Work</li>
    </ul>
</div>

<!-- privicey content  -->

<div class="privicey__content">
    <div class="container">

        @foreach ($pages as $row)
        <div class="privicey__content-item">
            <span class="privicey__content-title">{{ $loop->index+1 }}. {{ $row->page_title }}</span>
            <p class="privicey__content-dis">
                {!! $row->page_description !!}
             </p>
           
        </div>
        @endforeach
  
      
      
    
       
    </div>
</div>

@push('js')

@endpush

@endsection
