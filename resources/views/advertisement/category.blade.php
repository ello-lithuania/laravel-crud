@extends('layouts.front-end')

@section('title')
{{$category_details->title}}
@endsection

@section('content')
<section class="product-grids section">
   <div class="container">
      <div class="row">

         <div class="col-lg-3 col-12 hidden">
            <div class="product-sidebar">
               <div class="single-widget search hidden">
                  <h3>Search Product</h3>
                  <form action="#">
                     <input type="text" placeholder="Search Here...">
                     <button type="submit"><i class="lni lni-search-alt"></i></button>
                  </form>
               </div>
               <div class="single-widget">
                  <h3>Visos kategorijos</h3>
                  <ul class="list">

                  @php $categories=App\Models\Categories::all(); @endphp
                  @foreach ($categories as $category)

                     <li>
                           <a href="{{ url("/kategorijos") }}/{{ $category->slug }}">{{$category->title}}</a>
                     </li>

                  @endforeach

                  </ul>
               </div>
               <div class="single-widget range hidden">
                  <h3>Price Range</h3>
                  <input type="range" class="form-range" name="range" step="1" min="100" max="10000" value="10" onchange="rangePrimary.value=value">
                  <div class="range-inner">
                     <label>$</label>
                     <input type="text" id="rangePrimary" placeholder="100" />
                  </div>
               </div>
               <div class="single-widget condition hidden">
                  <h3>Filter by Price</h3>
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                     <label class="form-check-label" for="flexCheckDefault1">
                     $50 - $100L (208)
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                     <label class="form-check-label" for="flexCheckDefault2">
                     $100L - $500 (311)
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                     <label class="form-check-label" for="flexCheckDefault3">
                     $500 - $1,000 (485)
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                     <label class="form-check-label" for="flexCheckDefault4">
                     $1,000 - $5,000 (213)
                     </label>
                  </div>
               </div>
               <div class="single-widget condition hidden">
                  <h3>Filter by Brand</h3>
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
                     <label class="form-check-label" for="flexCheckDefault11">
                     Apple (254)
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault22">
                     <label class="form-check-label" for="flexCheckDefault22">
                     Bosh (39)
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault33">
                     <label class="form-check-label" for="flexCheckDefault33">
                     Canon Inc. (128)
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault44">
                     <label class="form-check-label" for="flexCheckDefault44">
                     Dell (310)
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault55">
                     <label class="form-check-label" for="flexCheckDefault55">
                     Hewlett-Packard (42)
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault66">
                     <label class="form-check-label" for="flexCheckDefault66">
                     Hitachi (217)
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault77">
                     <label class="form-check-label" for="flexCheckDefault77">
                     LG Electronics (310)
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault88">
                     <label class="form-check-label" for="flexCheckDefault88">
                     Panasonic (74)
                     </label>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12 col-12">
            <div class="product-grids-head">
               <div class="product-grid-topbar">
                  <div class="row align-items-center">
                     <div class="col-lg-7 col-md-8 col-12">
                        <div class="product-sorting">
                        <h1>{{$category_details->title}}</h1>
                        </div>
                     </div>
                     <div class="col-lg-5 col-md-4 col-12">
                        <nav>
                           <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true"><i class="lni lni-grid-alt"></i></button>
                              <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i class="lni lni-list"></i></button>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
               <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                     <div class="row">
                         @if(!empty($advertisements) && count($advertisements) > 0)
                           @foreach($advertisements as $advertisement)
                           <div class="col-lg-4 col-md-6 col-12">
                              <div class="single-product">
                              <div class="price">
                                       <span class="bg-primary text-uppercase text-white py-1 px-2">{{$advertisement->city}}</span>
                                    </div>
                                 <div class="product-image">
                                 <span class="sale-tag hidden">-25%</span>
                                    @php $image = explode('|', $advertisement->photos); @endphp
                                    @if(empty($image[0]))
                                       <img src="{{asset('assets/images/empty_product.jpg')}}" alt="#">
                                    @else
                                       <img src="{{asset('uploads/' . $advertisement->slug . '-' . $advertisement->id . '/' . $image[0])}}" alt="#">
                                    @endif
                                    <div class="button">
                                       <a href="{{url('skelbimas/' . $advertisement->id . '/' . $advertisement->slug . '/')}}" class="btn text-uppercase">Peržiūrėti</a>
                                    </div>
                                 </div>
                                 <div class="product-info">
                                    <h4 class="title">
                                       <a href="{{url('skelbimas/' . $advertisement->id . '/' . $advertisement->slug . '/')}}" class="text-capitalize">{{$advertisement->title}}</a>
                                    </h4>
                                    <ul class="review hidden">
                                       <li><i class="lni lni-star-filled"></i></li>
                                       <li><i class="lni lni-star-filled"></i></li>
                                       <li><i class="lni lni-star-filled"></i></li>
                                       <li><i class="lni lni-star-filled"></i></li>
                                       <li><i class="lni lni-star"></i></li>
                                       <li><span>4.0 Review(s)</span></li>
                                    </ul>
                                    <span class="category text-2line-wrap">{{$advertisement->description}}</span>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                         @else 
                         <div class="row">
        <div class="col-12">
            <div class="text-center py-5">
            <h1 class="mb-5">Sukurkite naują skelbimą dabar!</h1>
            <div class="button">
                                    <a href="{{route('advertisement-form')}}" class="btn">Naujas skelbimas</a>
                                </div>
        </div>
        </div>
    </div>
                        @endif
                     </div>
                     <div class="row hidden">
                        <div class="col-12">
                           <div class="pagination left">
                              <ul class="pagination-list">
                                 <li><a href="javascript:void(0)">1</a></li>
                                 <li class="active"><a href="javascript:void(0)">2</a></li>
                                 <li><a href="javascript:void(0)">3</a></li>
                                 <li><a href="javascript:void(0)">4</a></li>
                                 <li><a href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                     <div class="row">

                     @if(!empty($advertisements) && count($advertisements) > 0)
                           @foreach($advertisements as $advertisement)

                        <div class="col-lg-12 col-md-12 col-12">
                           <div class="single-product">
                              <div class="row align-items-center">
                                       <div class="price">
                                          <span class="bg-primary text-uppercase text-white py-1 px-2">{{$advertisement->city}}</span>
                                       </div>
                                 <div class="col-lg-4 col-md-4 col-12">
                                    <div class="product-image">
                                       <span class="sale-tag hidden">-25%</span>
                                       @php $image = explode('|', $advertisement->photos); @endphp
                                       @if(empty($image[0]))
                                          <img src="{{asset('assets/images/empty_product.jpg')}}" alt="#">
                                       @else
                                          <img src="{{asset('uploads/' . $advertisement->slug . '-' . $advertisement->id . '/' . $image[0])}}" alt="#">
                                       @endif
                                       <div class="button">
                                          <a href="{{url('skelbimas/' . $advertisement->id . '/' . $advertisement->slug . '/')}}" class="btn">Peržiūrėti</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-8 col-md-8 col-12">
                                    <div class="product-info">
                                       <h4 class="title">
                                          <a class="text-capitalize" href="{{url('skelbimas/' . $advertisement->id . '/' . $advertisement->slug . '/')}}l">{{$advertisement->title}}</a>
                                       </h4>
                                       <ul class="review hidden">
                                          <li><i class="lni lni-star-filled"></i></li>
                                          <li><i class="lni lni-star-filled"></i></li>
                                          <li><i class="lni lni-star-filled"></i></li>
                                          <li><i class="lni lni-star-filled"></i></li>
                                          <li><i class="lni lni-star"></i></li>
                                          <li><span>4.0 Review(s)</span></li>
                                       </ul>
                                       <span class="category text-2line-wrap">{{$advertisement->description}}</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                           @endforeach
                         @else 
                         <div class="row">
        <div class="col-12">
            <div class="text-center py-5">
            <h1 class="mb-5">Sukurkite naują skelbimą dabar!</h1>
            <div class="button">
                                    <a href="{{route('advertisement-form')}}" class="btn">Naujas skelbimas</a>
                                </div>
        </div>
        </div>
    </div>
                        @endif

                     </div>
                     <div class="row hidden">
                        <div class="col-12">
                           <div class="pagination left">
                              <ul class="pagination-list">
                                 <li><a href="javascript:void(0)">1</a></li>
                                 <li class="active"><a href="javascript:void(0)">2</a></li>
                                 <li><a href="javascript:void(0)">3</a></li>
                                 <li><a href="javascript:void(0)">4</a></li>
                                 <li><a href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection