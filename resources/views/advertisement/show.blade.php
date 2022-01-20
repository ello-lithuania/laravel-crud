@extends('layouts.front-end')

@section('title')
{{$advertisement->title}}
@endsection

@section('content')
    <!-- Start Item Details -->
    <section class="item-details section">
        <div class="container">
            <div class="top-area">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-images">
                            <main id="gallery">
                                <div class="main-img">
                                    @php $images = explode('|', $advertisement->photos); @endphp

                                    @if(empty($images[0]))
                                          <img src="{{asset('assets/images/empty_product.jpg')}}"  id="current" alt="#">
                                       @else
                                          <img src="{{asset('uploads/' . $advertisement->slug . '-' . $advertisement->id . '/' . $images[0])}}"  id="current" alt="#">
                                       @endif
                                
                                
                                </div>
                                @if(!empty($images[0]))
                                <div class="images">
                                    @foreach($images as $image)
                                        <img src="{{asset('uploads/' . $advertisement->slug . '-' . $advertisement->id . '/' . $image)}}" class="img" alt="#">
                                    @endforeach
                                </div>
                                @else 
                                    <div class="images">
                                        <img src="{{asset('assets/images/empty_product.jpg')}}" class="img" alt="#">
                                    </div>     
                                @endif
                            </main>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-info">
                            <h2 class="title">{{$advertisement->title}}</h2>
                            
                            @if($advertisement->category)
                            <p class="category"><i class="lni lni-tag"></i> Kategorijos:
{{$advertisement->categories}}
                                @php $category_explode = explode(',',$advertisement->category); @endphp  
                                @if(count($category_explode) > 0 )
                                    <a href="{{ url("/kategorijos") }}/{{ $categories[$advertisement->category]->slug }}">{{$categories[$advertisement->category]->title}}</a>
                                @else
                                    @foreach($category_explode as $category)  
                                        <a href="{{ url("/kategorijos") }}/{{ $categories[$category]->slug }}">{{$categories[$category]->title}}</a>
                                    @endforeach
                                @endif
                            </p>
                            @endif

                            <h3 class="price">{{$advertisement->city}}</h3>
                            <p class="info-text">{{$advertisement->description}}</p>
                            <div class="row hidden">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group color-option">
                                        <label class="title-label" for="size">Choose color</label>
                                        <div class="single-checkbox checkbox-style-1">
                                            <input type="checkbox" id="checkbox-1" checked>
                                            <label for="checkbox-1"><span></span></label>
                                        </div>
                                        <div class="single-checkbox checkbox-style-2">
                                            <input type="checkbox" id="checkbox-2">
                                            <label for="checkbox-2"><span></span></label>
                                        </div>
                                        <div class="single-checkbox checkbox-style-3">
                                            <input type="checkbox" id="checkbox-3">
                                            <label for="checkbox-3"><span></span></label>
                                        </div>
                                        <div class="single-checkbox checkbox-style-4">
                                            <input type="checkbox" id="checkbox-4">
                                            <label for="checkbox-4"><span></span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="color">Battery capacity</label>
                                        <select class="form-control" id="color">
                                            <option>5100 mAh</option>
                                            <option>6200 mAh</option>
                                            <option>8000 mAh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group quantity">
                                        <label for="color">Quantity</label>
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <div class="row align-items-end">
                                    <div class="col-lg-8 col-md-4 col-12">
                                        <div class="button cart-button">
                                            <a href="#product-info" class="btn btn-primary" style="width: 100%;">Susisiekti</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="wish-button">
                                            @php $method1 = request()->ip(); @endphp
                                            @if(\App\Models\WishList::where('advertisement_id',$advertisement->id)->where('user_id',$method1)->first())
                                            <a class="btn removeFromWishList bg-danger text-white active-wishlist" href="{{url('pamirsti-skelbima/' . $advertisement->id)}}"><i class="lni lni-heart-filled"></i> Pamiršti skelbimą</a>
                                            <button class="btn addToWishList"><i class="lni lni-heart"></i> Įsiminti skelbimą</button>
                                            @else 
                                            <a class="btn removeFromWishList bg-danger text-white" href="{{url('pamirsti-skelbima/' . $advertisement->id)}}"><i class="lni lni-heart-filled"></i> Pamiršti skelbimą</a>
                                            <button class="btn addToWishList active-wishlist"><i class="lni lni-heart"></i> Įsiminti skelbimą</button>
                                            @endif

       
                                        </div>
                                    </div>
                                    <div class="product_data hidden">
                                            <p class="prod_id">
                                            {{$advertisement->id }}
</p>
                                        </div>
                                    <p class="mt-2 py-1 px-2 d-inline"><i class="lni lni-eye"></i> Peržiūrėtas: {{$advertisement->watches + 1 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="product-info" style="padding-top: 140px;">
            <div class="product-details-info" >
                <div class="single-block m-0">
                    <div class="row">
                                <div class="col-8">
                                    <h3 class="title collapsed" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Kontaktinė informacija </h3>
                                    <hr/>
                                </div>
                                <div class="col-4">
                                    <div class="button">
                                        <button class="btn w-100">@if($advertisement->bussiness_id == NULL)Privatus asmuo @else Įmonė@endif</button>
                                    </div>
                                </div>
                        @if($advertisement->bussiness_id !== NULL)
                        <div class="col-lg-6 col-12">
                            <div class="info-body custom-responsive-margin">
                                <h4>Įmonės kodas</h4>
                                <ul class="features">
                                    <li>{{$advertisement->bussiness_id}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="info-body custom-responsive-margin">
                                <h4>PVM kodas</h4>
                                <ul class="features">
                                    <li><li>{{$advertisement->bussiness_vat}}</li>
                                </ul>
                            </div>
                        </div>
                        @endif
                        
                        @if($advertisement->name_surname)
                        <div class="col-lg-6 col-12">
                            <div class="info-body custom-responsive-margin">
                                <h4>@if($advertisement->bussiness_id !== NULL)Vardas, Pavardė @else Įmonės pavadinimas @endif</h4>
                                <ul class="features">
                                    <li>{{$advertisement->name_surname}}</li>
                                </ul>
                            </div>
                        </div>
                        @endif
                        @if($advertisement->phonenumber)
                        <div class="col-lg-6 col-12">
                            <div class="info-body custom-responsive-margin">
                                <h4>Telefono numeris</h4>
                                <ul class="features">
                                    <li><li>{{$advertisement->phonenumber}}</li>
                                </ul>
                            </div>
                        </div>
                        @endif
                        @if($advertisement->email)
                        <div class="col-lg-6 col-12">
                            <div class="info-body custom-responsive-margin">
                                <h4>El. paštas</h4>
                                <ul class="features">
                                    <li><li>{{$advertisement->email}}</li>
                                </ul>
                            </div>
                        </div>
                        @endif
                        @if($advertisement->address)
                        <div class="col-lg-6 col-12">
                            <div class="info-body custom-responsive-margin">
                                <h4>Adresas</h4>
                                <ul class="features">
                                    <li><li>{{$advertisement->address}}</li>
                                </ul>
                            </div>
                        </div>
                        @endif
                        @if($advertisement->city)
                        <div class="col-lg-6 col-12">
                            <div class="info-body custom-responsive-margin">
                                <h4>Miestas</h4>
                                <button class="btn btn-primary">{{$advertisement->city}}</button>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- End Item Details -->

    <!-- Review Modal -->
    <div class="modal fade review-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Leave a Review</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review-name">Your Name</label>
                                <input class="form-control" type="text" id="review-name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review-email">Your Email</label>
                                <input class="form-control" type="email" id="review-email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review-subject">Subject</label>
                                <input class="form-control" type="text" id="review-subject" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="review-rating">Rating</label>
                                <select class="form-control" id="review-rating">
                                    <option>5 Stars</option>
                                    <option>4 Stars</option>
                                    <option>3 Stars</option>
                                    <option>2 Stars</option>
                                    <option>1 Star</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="review-message">Review</label>
                        <textarea class="form-control" id="review-message" rows="8" required></textarea>
                    </div>
                </div>
                <div class="modal-footer button">
                    <button type="button" class="btn">Submit Review</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Review Modal -->
    <script type="text/javascript">
        const current = document.getElementById("current");
        const opacity = 0.6;
        const imgs = document.querySelectorAll(".img");
        imgs.forEach(img => {
            img.addEventListener("click", (e) => {
                //reset opacity
                imgs.forEach(img => {
                    img.style.opacity = 1;
                });
                current.src = e.target.src;
                //adding class 
                //current.classList.add("fade-in");
                //opacity
                e.target.style.opacity = opacity;
            });
        });
    </script>

@endsection