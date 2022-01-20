<!DOCTYPE html>
<html class="no-js" lang="lt">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <title>@yield('title')</title>
      <meta name="description" content="" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.svg')}}" />
      <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
      <link rel="stylesheet" href="{{asset('assets/css/LineIcons.3.0.css')}}" />
      <link rel="stylesheet" href="{{asset('assets/css/tiny-slider.css')}}" />
      <link rel="stylesheet" href="{{asset('assets/css/glightbox.min.css')}}" />
      <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
      <link rel="stylesheet" href="{{asset('css/app.css')}}" />
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">
         You are using an <strong>outdated</strong> browser. Please
         <a href="https://browsehappy.com/">upgrade your browser</a> to improve
         your experience and security.
      </p>
      <![endif]-->
      <div class="preloader">
         <div class="preloader-inner">
            <div class="preloader-icon">
               <span></span>
               <span></span>
            </div>
         </div>
      </div>

         @if ($message = Session::get('success'))
         <div class="modal-display">
            <div class="modal" tabindex="-1">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                     <h5 class="modal-title">Operacija atlikta</h5>
                     <button type="button" class="btn-close hidden" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                     <p>{{ $message }}</p>
                     </div>
                     <div class="modal-footer">
                     <button type="button" class="btn btn-secondary hidden" data-bs-dismiss="modal">Supratau</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        @endif


        @if ($message2 = Session::get('error'))
        <div class="modal-display">
         <div class="modal" tabindex="-1">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                     <h5 class="modal-title">Nepavyko atlikti operacijos</h5>
                     <button type="button" class="btn-close hidden" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                     <p>{{ $message2 }}</p>
                     </div>
                     <div class="modal-footer">
                     <button type="button" class="btn btn-secondary hidden" data-bs-dismiss="modal">Supratau</button>
                     </div>
                  </div>
               </div>
            </div>
        </div>
        @endif

      <header class="header navbar-area sticky-top" style="border: none;">
         <div class="topbar hidden">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-4 col-md-4 col-12">
                     <div class="top-left">
                        <ul class="menu-top-link">
                           <li>
                              <div class="select-position">
                                 <select id="select4">
                                    <option value="0" selected>$ USD</option>
                                    <option value="1">€ EURO</option>
                                    <option value="2">$ CAD</option>
                                    <option value="3">₹ INR</option>
                                    <option value="4">¥ CNY</option>
                                    <option value="5">৳ BDT</option>
                                 </select>
                              </div>
                           </li>
                           <li>
                              <div class="select-position">
                                 <select id="select5">
                                    <option value="0" selected>English</option>
                                    <option value="1">Español</option>
                                    <option value="2">Filipino</option>
                                    <option value="3">Français</option>
                                    <option value="4">العربية</option>
                                    <option value="5">हिन्दी</option>
                                    <option value="6">বাংলা</option>
                                 </select>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                     <div class="top-middle">
                        <ul class="useful-links">
                           <li><a href="index.html">Home</a></li>
                           <li><a href="about-us.html">About Us</a></li>
                           <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12">
                     <div class="top-end">
                        <div class="user">
                           <i class="lni lni-user"></i>
                           Hello
                        </div>
                        <ul class="user-login">
                           <li>
                              <a href="login.html">Sign In</a>
                           </li>
                           <li>
                              <a href="register.html">Register</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="header-middle px-2">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-3 col-md-3 col-4">
                     <a class="navbar-brand text-white text-uppercase" href="{{route('homepage')}}">
                        <img src="{{asset('assets/images/logo.png')}}" />
                     </a>
                  </div>
                  <div class="col-lg-5 col-md-7 d-xs-none hidden">
                     <div class="main-menu-search">
                        <div class="navbar-search search-style-5">
                           <div class="search-select">
                              <div class="select-position">
                                 <select id="select1">
                                    <option selected>Visos kategorijos</option>
                                    <option value="1">option 01</option>
                                    <option value="2">option 02</option>
                                    <option value="3">option 03</option>
                                    <option value="4">option 04</option>
                                    <option value="5">option 05</option>
                                 </select>
                              </div>
                           </div>
                           <div class="search-input">
                              <input type="text" placeholder="Ieškoti skelbimo">
                           </div>
                           <div class="search-btn">
                              <button><i class="lni lni-search-alt"></i></button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-9 col-md-9 col-8 text-right">
                     <div class="middle-right-area">
                        <div class="navbar-cart">
                           <div class="wishlisst">
                            <div class="button">
                              <a href="{{route('wishlist')}}"  class="btn text-uppercase">
                              <i class="lni lni-heart"></i>
                              @php
                              $method1 = request()->ip();
                              $wishlist = \App\Models\WishList::where('user_id','=',$method1)->get();
                              @endphp
                              <span class="d-lg-inline d-md-inline d-sm-none d-xs-none">įsiminti skelbimai</span><span class="total-items">(<span class="item-wishlist_count">{{count($wishlist)}}</span>)</span>
                              </a>
                            </div>
                           </div>
                        </div>
                        <div class="navbar-cart mx-2">
                           <div class="wishlisst">
                            <div class="button">
                              <a href="{{route('login')}}"  class="btn text-uppercase">
                              <i class="lni lni-user"></i>
                              <span class="d-lg-inline d-md-inline d-sm-none d-xs-none">@auth Valdymas @else Prisijungti @endauth</span>
                              </a>
                            </div>
                           </div>
                        </div>
                        <div class="nav-hotline">
                            <div class="button">
                                <a href="{{route('advertisement-form')}}" class="btn">Naujas skelbimas</a>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="hidden-categories" id="category-list">
            <div class="container py-4">
               <div class="row">
                  @php $categories=App\Models\Categories::all(); @endphp
                  @foreach ($categories as $category)
                     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6 py-1">
                           <a href="{{ url("/kategorijos") }}/{{ $category->slug }}">@if(!$category->thumbnail) <i class="lni lni-angle-double-right"></i> @else {!! $category->thumbnail !!} @endif {{ $category->title }}</a>
                     </div>
                  @endforeach
                  <div class="button text-center mt-4 mb-1">
                        <button class="btn-close-category-list btn"><i class="lni lni-close"></i> Išjungti kategorijų sarąšą</button>
                  </div>
               </div>
            </div>
         </div>

         <div class="container" style="margin-top: -1.25rem;">
            <div class="row align-items-center">
               <div class="button text-center">
                  <span class="btn cat-button py-2 text-white btn-invert"><i class="lni lni-menu"></i>Visos kategorijos</span>
               </div>
            </div>
         </div>

         <div class="container hidden" style="margin-top: -1.25rem;">
            <div class="row align-items-center">
               <div class="col-lg-12 col-md-6 col-12">
                  <div class="nav-inner justify-content-center">
                     <div class="mega-category-menu">
                        <div class="button">
                           <span class="btn cat-button py-2 text-white"><i class="lni lni-menu"></i>Visos kategorijos</span>
                        </div>
                        <ul class="sub-category hidden">
                           <li>
                              <a href="product-grids.html">Electronics <i class="lni lni-chevron-right"></i></a>
                              <ul class="inner-sub-category">
                                 <li><a href="product-grids.html">Digital Cameras</a></li>
                                 <li><a href="product-grids.html">Camcorders</a></li>
                                 <li><a href="product-grids.html">Camera Drones</a></li>
                                 <li><a href="product-grids.html">Smart Watches</a></li>
                                 <li><a href="product-grids.html">Headphones</a></li>
                                 <li><a href="product-grids.html">MP3 Players</a></li>
                                 <li><a href="product-grids.html">Microphones</a></li>
                                 <li><a href="product-grids.html">Chargers</a></li>
                                 <li><a href="product-grids.html">Batteries</a></li>
                                 <li><a href="product-grids.html">Cables & Adapters</a></li>
                              </ul>
                           </li>
                           <li><a href="product-grids.html">accessories</a></li>
                           <li><a href="product-grids.html">Televisions</a></li>
                           <li><a href="product-grids.html">best selling</a></li>
                           <li><a href="product-grids.html">top 100 offer</a></li>
                           <li><a href="product-grids.html">sunglass</a></li>
                           <li><a href="product-grids.html">watch</a></li>
                           <li><a href="product-grids.html">man’s product</a></li>
                           <li><a href="product-grids.html">Home Audio & Theater</a></li>
                           <li><a href="product-grids.html">Computers & Tablets </a></li>
                           <li><a href="product-grids.html">Video Games </a></li>
                           <li><a href="product-grids.html">Home Appliances </a></li>
                        </ul>
                     </div>
                     <nav class="navbar navbar-expand-lg hidden">
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                           <ul id="nav" class="navbar-nav ms-auto">
                              <li class="nav-item">
                                 <a href="index.html" class="active" aria-label="Toggle navigation">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Pages</a>
                                 <ul class="sub-menu collapse" id="submenu-1-2">
                                    <li class="nav-item"><a href="about-us.html">About Us</a></li>
                                    <li class="nav-item"><a href="faq.html">Faq</a></li>
                                    <li class="nav-item"><a href="login.html">Login</a></li>
                                    <li class="nav-item"><a href="register.html">Register</a></li>
                                    <li class="nav-item"><a href="mail-success.html">Mail Success</a></li>
                                    <li class="nav-item"><a href="404.html">404 Error</a></li>
                                 </ul>
                              </li>
                              <li class="nav-item">
                                 <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Shop</a>
                                 <ul class="sub-menu collapse" id="submenu-1-3">
                                    <li class="nav-item"><a href="product-grids.html">Shop Grid</a></li>
                                    <li class="nav-item"><a href="product-list.html">Shop List</a></li>
                                    <li class="nav-item"><a href="product-details.html">shop Single</a></li>
                                    <li class="nav-item"><a href="cart.html">Cart</a></li>
                                    <li class="nav-item"><a href="checkout.html">Checkout</a></li>
                                 </ul>
                              </li>
                              <li class="nav-item">
                                 <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Blog</a>
                                 <ul class="sub-menu collapse" id="submenu-1-4">
                                    <li class="nav-item"><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
                                    <li class="nav-item"><a href="blog-single.html">Blog Single</a></li>
                                    <li class="nav-item"><a href="blog-single-sidebar.html">Blog Single
                                       Sibebar</a>
                                    </li>
                                 </ul>
                              </li>
                              <li class="nav-item">
                                 <a href="contact.html" aria-label="Toggle navigation">Contact Us</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12 hidden">
                  <div class="nav-social">
                     <h5 class="title">Follow Us:</h5>
                     <ul>
                        <li>
                           <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                        </li>
                        <li>
                           <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                        </li>
                        <li>
                           <a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
                        </li>
                        <li>
                           <a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      @yield('content')
      <footer class="footer">
         <div class="footer-top">
            <div class="container">
               <div class="inner-content">
                  <div class="row">
                     <div class="col-lg-12 col-md-8 col-12">
                        <div class="footer-newsletter">
                           <h4 class="title">
                              Užsiregistruokite naujienlaiškiui
                              <span>Gaukite naujausius skelbimus į elektroninį paštą.</span>
                           </h4>
                           <div class="newsletter-form-head">
                              <form action="{{route('newsletter-save')}}" method="post" class="newsletter-form">
                                 @csrf
                                 <input name="email" placeholder="Elektroninio pašto adresas" type="email" required>
                                 <div class="button">
                                    <button class="btn">Užsiprenumeruoti<span class="dir-part"></span></button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-middle">
            <div class="container">
               <div class="bottom-inner">
                  <div class="row">
                     <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-footer f-contact">
                           <a href="{{route('homepage')}}">
                              <img src="{{asset('assets/images/logo.png')}}" />
                           </a>
                           <div class="single-footer f-link">
                              <ul>
                                 <li><a href="{{route('homepage')}}">Pagrindinis</a></li>
                                 <li><a href="{{route('advertisement-form')}}">Naujas skelbimas</a></li>
                                 <li><a href="{{route('wishlist')}}">Įsiminti skelbimai</a></li>
                                 <li><a href="{{route('home')}}">Skelbimų valdymas</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-8 col-md-12 col-12">
                        <div class="single-footer f-link">
                           <h3>Kategorijos</h3>
                           <div class="row">
               
                              @foreach ($categories as $category)
                              <div class="col-6 text-left">
                                    <a href="{{ url("/kategorijos") }}/{{ $category->slug }}">@if(!$category->thumbnail) <i class="lni lni-angle-double-right"></i> @else {!! $category->thumbnail !!} @endif {{ $category->title }}</a>
                              </div>
                              @endforeach
    
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom">
            <div class="container">
               <div class="inner-content">
                  <div class="row align-items-center">
                     <div class="col-lg-4 col-12">
                        <div class="payment-gateway">
                           <span>Apmokėjimai</span>
                           <img src="{{asset('assets/images/footer/credit-cards-footer.png')}}" alt="#">
                        </div>
                     </div>
                     <div class="col-lg-4 col-12 hidden">
                        <div class="copyright">
                           <p>Designed and Developed by<a href="" rel="nofollow" target="_blank">GrayGrids</a></p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-12 hidden">
                        <ul class="socila">
                           <li>
                              <span>Follow Us On:</span>
                           </li>
                           <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                           <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                           <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                           <li><a href="javascript:void(0)"><i class="lni lni-google"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <a href="#" class="scroll-top">
      <i class="lni lni-chevron-up"></i>
      </a>
      <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('assets/js/tiny-slider.js')}}"></script>
      <script src="{{asset('assets/js/glightbox.min.js')}}"></script>
      <script src="{{asset('assets/js/main.js')}}"></script>
      <script type="text/javascript">
         //========= Hero Slider 
         tns({
             container: '.hero-slider',
             slideBy: 'page',
             autoplay: true,
             autoplayButtonOutput: false,
             mouseDrag: true,
             gutter: 0,
             items: 1,
             nav: false,
             controls: true,
             controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
         });
         
         //======== Brand Slider
         tns({
             container: '.brands-logo-carousel',
             autoplay: true,
             autoplayButtonOutput: false,
             mouseDrag: true,
             gutter: 15,
             nav: false,
             controls: false,
             responsive: {
                 0: {
                     items: 1,
                 },
                 540: {
                     items: 3,
                 },
                 768: {
                     items: 5,
                 },
                 992: {
                     items: 6,
                 }
             }
         });
         
      </script>
      <script>
         const finaleDate = new Date("February 15, 2023 00:00:00").getTime();
         
         const timer = () => {
             const now = new Date().getTime();
             let diff = finaleDate - now;
             if (diff < 0) {
                 document.querySelector('.alert').style.display = 'block';
                 document.querySelector('.container').style.display = 'none';
             }
         
             let days = Math.floor(diff / (1000 * 60 * 60 * 24));
             let hours = Math.floor(diff % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
             let minutes = Math.floor(diff % (1000 * 60 * 60) / (1000 * 60));
             let seconds = Math.floor(diff % (1000 * 60) / 1000);
         
             days <= 99 ? days = `0${days}` : days;
             days <= 9 ? days = `00${days}` : days;
             hours <= 9 ? hours = `0${hours}` : hours;
             minutes <= 9 ? minutes = `0${minutes}` : minutes;
             seconds <= 9 ? seconds = `0${seconds}` : seconds;
         
             document.querySelector('#days').textContent = days;
             document.querySelector('#hours').textContent = hours;
             document.querySelector('#minutes').textContent = minutes;
             document.querySelector('#seconds').textContent = seconds;
         
         }
         timer();
         setInterval(timer, 1000);
      </script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script>
        $( document ).ready(function() {
            $(".modal").delay(5000).fadeOut("slow");
            $('.cat-button').click(function() {
                $('#category-list').removeClass('hidden-categories');
                $(this).addClass('hidden');
            });
            $('.btn-close-category-list').click(function() {
               $('#category-list').addClass('hidden-categories');
               $('.cat-button').removeClass('hidden');
            });  
            $('.create-new_checkboxes label').click(function() {
               if ($(this).hasClass("checkbox-label_on")) {
                  $(this).removeClass("checkbox-label_on")
               } else {
                  $(this).addClass('checkbox-label_on');
               }
               /////
               const id = $(this).attr( "data-id" );
               //$('#'+id).removeClass('hidden');
               if($('#'+id).prop('checked',false)) {
                  $(this).prop('checked', true);
               } else {
                  $(this).prop('checked', false);
               }
            });   
            /////

            ////
            $('#bussiness-btn').click(function(event) {
               event.preventDefault();
               if($('#bussiness-btn').hasClass('btn-uncheck')) {

                  $('#bussiness-inputs').removeClass('hidden');
                  $('#private-btn').addClass('btn-uncheck');
                  $(this).removeClass('btn-uncheck');

               } else {
                  $('.btn-uncheck').removeClass('btn-uncheck');
                  $(this).removeClass('btn-uncheck');
                  $('#private-btn').addClass('btn-uncheck')
               }
            });  
            $('#private-btn').click(function(event) {
               event.preventDefault();
               if($('#private-btn').hasClass('btn-uncheck')) {

                  $(this).removeClass('btn-uncheck');
                  $('#bussiness-inputs').addClass('hidden')
                  $('#bussiness-btn').addClass('btn-uncheck')

               } else {
                  $('#bussiness-inputs').addClass('hidden');
                  $('#private-btn').addClass('btn-uncheck');
                  $(this).removeClass('btn-uncheck');
               }
            });  
            $('.price-table-btn button').click(function(event) {
               var input = $('#ad-title input').val();
               if(!input) {
                  $('#empty_fields--error').removeClass('hidden');
               }
            });    
            $('.addToWishList').click(function(event) {
               event.preventDefault();
               var product_id = $('.prod_id').html();

               $.ajax({
                  method: 'POST',
                  url: '/statybu_skelbimai/public/isiminti-skelbima',
                  data: {
                     "_token": "{{ csrf_token() }}",
                     'advertisement_id': product_id
                  },
                  success: function(response) {
                     alert(response.status);
                  }
               });

               $('.active-wishlist').removeClass('active-wishlist');
               $('.removeFromWishList').addClass('active-wishlist');
               var number = parseInt($('.item-wishlist_count').text());
               number = number + 1;
               $('.item-wishlist_count').text(number);
            });  

            ////
            $('#ad_color').on('change', function() {
               var price = 0.00;
               if(this.value == 1){
                  price = 7.99;
               }
               if(this.value == 2){
                  price = 15.99;
               }
               if(this.value == 3){
                  price = 19.99;
               }
               $('.ad_color_price h4 span').text(price);
               //// 
               countTotal();
            });
            $('#ad_up').on('change', function() {
               var price = 0.00;
               if(this.value !== 0.00 ){
                  price = this.value * 0.20
                  price = parseFloat(price).toFixed(2);
               } else {
                  price = 0.00;
               }
               $('.ad_up_price h4 span').text(price);
               /////
               countTotal();
            });
            function countTotal() {
               var ad_color_price = $('.ad_color_price h4 span').text();
               if(ad_color_price === 0.00) {
                  ad_color_price = 0.00;
               }
               var ad_up_price = $('.ad_up_price h4 span').text();
               if(ad_up_price === 0.00) {
                  ad_up_price = 0.00;
               }
               var total = parseFloat(ad_color_price) + parseFloat(ad_up_price);
               total = parseFloat(total).toFixed(2);
               $('#total-price').removeClass('hidden');
               $('#total-price h4 span').text(total);
            }
        });
      </script>
   </body>
</html>