@extends('layouts.front-end')

@section('title')
Statybų, apdailos skelbimai - STATYBOS.NET
@endsection

@section('content')
<div class="container mt-2 mb-5">
<div class="row">
    @if(!empty($advertisements)) 
    <h1>Mano sukurti skelbimai({{count($advertisements)}})</h1>
    @foreach($advertisements as $new_ad)
<div class="col-lg-6 col-md-6 col-12">

<div class="single-product">
<div class="row align-items-center">
<div class="col-lg-4 col-md-4 col-12">
<div class="product-image">
@php $image = explode('|', $new_ad->photos); @endphp
@if(empty($image[0]))
                                          <img src="{{asset('assets/images/empty_product.jpg')}}" alt="#">
                                       @else
                                          <img src="{{asset('uploads/' . $new_ad->slug . '-' . $new_ad->id . '/' . $image[0])}}" alt="#">
                                       @endif

<div class="button">
<a href="{{url('skelbimas/' . $new_ad->id . '/' . $new_ad->slug . '/')}}" class="btn"><i class="lni lni-cart hidden"></i> Peržiūrėti</a>
</div>
</div>
</div>
<div class="col-lg-8 col-md-8 col-12">
<div class="product-info">
<span class="category hidden">Watches</span>
<h4 class="title">
<a href="{{url('skelbimas/' . $new_ad->id . '/' . $new_ad->slug . '/')}}">{{$new_ad->title}}</a>
</h4>
<ul class="review hidden">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star"></i></li>
<li><span>4.0 Review(s)</span></li>
</ul>
<p style="line-height: 1.5em;
    height: 6em;
    overflow: hidden;">{{$new_ad->description}}</p>
<div class="button">
<a href="{{url('skelbimas/' . $new_ad->id . '/' . $new_ad->slug . '/')}}/redaguoti" class="btn"><i class="lni lni-cart hidden"></i>Redaguoti</a>
</div>
<div class="price hidden">
<span>$199.00</span>
</div>
</div>
</div>
</div>
</div>

</div>

@endforeach


        
@else 
    <div class="text-center py-5">
        <h1 class="mb-5">Neturite sukūrę skelbimų</h1>
        <div class="button">
                                <a href="{{route('advertisement-form')}}" class="btn">Naujas skelbimas</a>
                            </div>
    </div>
@endif



</div>

</div>

@endsection
