@extends('layouts.front-end')

@section('title')
Redaguoti skelbimą
@endsection

@section('content')

<form class="new-ad" action="{{url('skelbimas/' . $advertisement->id . '/' . $advertisement->slug . '/')}}/atnaujinti" method="post" enctype="multipart/form-data">
@csrf

<section class="checkout-wrapper section">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-12">
         <div class="section-title">
            <h1>Redaguoti skelbimą</h1>
         </div>
         
         @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

   <div class="alert alert-danger hidden" id="empty_fields--error">
      <h4>Užpildykite visus laukelius</h4>
    </div> 

            <div class="checkout-steps-form-style-1">

               <ul class="p-0" id="accordionExample">
                 <li>
                     <h6 class="title collapsed" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Skelbimo informacija</h6>
                     <section class="checkout-steps-form-content collapse show" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="row">

                            <div class="col-md-6" id="ad-title">
                              <div class="single-form form-default">
                                 <label class="">Pavadinimas</label>

                                    <div class="form-input form">
                                       <input name="title" type="text" placeholder="Įveskite skelbimo pavadinimą" value="{{$advertisement->title}}" aria-required="true" required>
                                    </div>
                              </div>
                           </div>

                                <div class="col-md-6">
                                <div class="single-form form-default">
                                    <label class="">Vietovė</label>
                                    <div class="form-input form">

                                        <select name="location" class="form-select">
                                          <option value="Lietuva" @if($advertisement->location == "Lietuva") selected @endif>Lietuva</option>
                                        <optgroup label="Apskritis">
                                          <option value="Vilniaus apskritis" @if($advertisement->location == "Vilniaus apskritis") selected @endif>Vilniaus apskritis</option>
                                          <option value="Kauno apskritis" @if($advertisement->location == "Kauno apskritis") selected @endif>Kauno apskritis</option>
                                          <option value="Klaipėdos apskritis" @if($advertisement->location == "Klaipėdos apskritis") selected @endif>Klaipėdos apskritis</option>
                                          <option value="Panevėžio apskritis" @if($advertisement->location == "Panevėžio apskritis") selected @endif>Panevėžio apskritis</option>
                                          <option value="Šiaulių apskritis" @if($advertisement->location == "Šiaulių apskritis") selected @endif>Šiaulių apskritis</option>
                                          <option value="Alytaus apskritis" @if($advertisement->location == "Alytaus apskritis") selected @endif>Alytaus apskritis</option>
                                          <option value="Marijampolės apskritis" @if($advertisement->location == "Marijampolės apskritis") selected @endif>Marijampolės apskritis</option>
                                          <option value="Tauragės apskritis" @if($advertisement->location == "Tauragės apskritis") selected @endif>Tauragės apskritis</option>
                                          <option value="Telšių apskritis" @if($advertisement->location == "Telšių apskritis") selected @endif>Telšių apskritis</option>
                                          <option value="Utenos apskritis" @if($advertisement->location == "Utenos apskritis") selected @endif>Utenos apskritis</option>
                                       </optgroup>
                                       <optgroup label="Miestas">
                                            <option value="Alytus" @if($advertisement->location == "Alytus") selected @endif>Alytus</option>
                                            <option value="Biržai" @if($advertisement->location == "Biržai") selected @endif>Biržai</option>
                                            <option value="Druskininkai" @if($advertisement->location == "Druskininkai") selected @endif>Druskininkai</option>
                                            <option value="Elektrėnai" @if($advertisement->location == "Elektrėnai") selected @endif>Elektrėnai</option>
                                            <option value="Gargždai" @if($advertisement->location == "Gargždai") selected @endif>Gargždai</option>
                                            <option value="Garliava" @if($advertisement->location == "Garliava") selected @endif>Garliava</option>
                                            <option value="Jonava" @if($advertisement->location == "Jonava") selected @endif>Jonava</option>
                                            <option value="Kaunas" @if($advertisement->location == "Kaunas") selected @endif>Kaunas</option>
                                            <option value="Kėdainiai" @if($advertisement->location == "Kėdainiai") selected @endif>Kėdainiai</option>
                                            <option value="Klaipėda" @if($advertisement->location == "Klaipėda") selected @endif>Klaipėda</option>
                                            <option value="Kretinga" @if($advertisement->location == "Kretinga") selected @endif>Kretinga</option>
                                            <option value="Kuršėnai" @if($advertisement->location == "Kuršėnai") selected @endif>Kuršėnai</option>
                                            <option value="Marijampolė" @if($advertisement->location == "Marijampolė") selected @endif>Marijampolė</option>
                                            <option value="Mažeikiai" @if($advertisement->location == "Mažeikiai") selected @endif>Mažeikiai</option>
                                            <option value="Neringa" @if($advertisement->location == "Neringa") selected @endif>Neringa</option>
                                            <option value="Palanga" @if($advertisement->location == "Palanga") selected @endif>Palanga</option>
                                            <option value="Panevėžys" @if($advertisement->location == "Panevėžys") selected @endif>Panevėžys</option>
                                            <option value="Plungė" @if($advertisement->location == "Plungė") selected @endif>Plungė</option>
                                            <option value="Prienai" @if($advertisement->location == "Prienai") selected @endif>Prienai</option>
                                            <option value="Radviliškis" @if($advertisement->location == "Radviliškis") selected @endif>Radviliškis</option>
                                            <option value="Rokiškis" @if($advertisement->location == "Rokiškis") selected @endif>Rokiškis</option>
                                            <option value="Šiauliai" @if($advertisement->location == "Šiauliai") selected @endif>Šiauliai</option>
                                            <option value="Šilutė" @if($advertisement->location == "Šilutė") selected @endif>Šilutė</option>
                                            <option value="Tauragė" @if($advertisement->location == "Tauragė") selected @endif>Tauragė</option>
                                            <option value="Telšiai" @if($advertisement->location == "Telšiai") selected @endif>Telšiai</option>
                                            <option value="Trakai" @if($advertisement->location == "Trakai") selected @endif>Trakai</option>
                                            <option value="Ukmergė" @if($advertisement->location == "Ukmergė") selected @endif>Ukmergė</option>
                                            <option value="Utena" @if($advertisement->location == "Utena") selected @endif>Utena</option>
                                            <option value="Vilnius" @if($advertisement->location == "Vilnius") selected @endif>Vilnius</option>
                                            <option value="Visaginas" @if($advertisement->location == "Visaginas") selected @endif>Visaginas</option>
                                            <option value="Zarasai" @if($advertisement->location == "Zarasai") selected @endif>Zarasai</option>
                                            <option value="Kitas" @if($advertisement->location == "Kitas") selected @endif>Kitas</option>
                                       </optgroup>

                                        </select>

                                    </div>
                                </div>
                            </div>


                           <div class="col-md-12">
                              <div class="single-form form-default">
                                 <label class="hidden">Aprašymas</label>
                                 <div class="form-input form">
                                    <textarea style="height: auto;" name="description" type="text" rows="10" cols="60" placeholder="Įveskite aprašymą">{{$advertisement->description}}</textarea>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="single-form form-default">
                                 <label>Pasirinkite skelbimo kategoriją</label>
                                 <div class="form-input form">

                                     <div class="row">
                                     

                                        @php $categories=App\Models\Categories::all(); @endphp
                                        @foreach ($categories as $category)
                                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-6 create-new_checkboxes">
                                                <div class="create-new_checkboxes__inside">
                                                    <input class="hidden" type="checkbox" id="{{ $category->slug }}" name="category[]" value="{{ $category->id }}" @foreach($advertisement->categories as $cat)
                                        @if($cat->id == $category->id)
                                            checked
                                        @endif
                                     @endforeach>
                                                    <label for="{{ $category->slug }}" data-id="{{ $category->slug }}" class="@foreach($advertisement->categories as $cat)
                                        @if($cat->id == $category->id)
                                            checkbox-label_on
                                        @endif
                                     @endforeach">
                                                        <div class="row align-items-center">
                                                            <div class="col-3 text-center">
                                                            @if(!$category->thumbnail) <i class="lni lni-angle-double-right"></i> @else {!! $category->thumbnail !!} @endif
                                                            </div>
                                                            <div class="col-9">
                                                            {{ $category->title }}
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                     </div>

                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="single-form form-default create_new-fileInput">
                                 <label>Nuotraukos</label>
                                 <div class="form-input form">
                                    
                                    <div>
                                    <label for="myFile" class="btn-upload"><i class="lni lni-image d-inline-block"></i> Įkelti<br/>nuotraukas</label>

                                    <input type="file" style="visibility:hidden;"  id="myFile" name="photos_local[]" placeholder="Paspauskite norėdami pasirinkti nuotraukas" multiple>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </section>
                  </li>
                  <li>
                     <h6 class="title collapsed" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Kontaktinė informacija </h6>
                     <section class="checkout-steps-form-content collapse show" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="row">
                        
                                <div class="col-6">
                                    <div class="button">
                                        <button class="btn w-100 @if(!empty($advertisement->bussiness_id)) btn-uncheck @endif" id="private-btn">Privatus asmuo</button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="button">
                                        <button class="btn w-100 @if(empty($advertisement->bussiness_id)) btn-uncheck @endif" id="bussiness-btn">Įmonė</button>
                                    </div>
                                </div>

<div class="row @if(empty($advertisement->bussiness_id)) hidden @endif " id="bussiness-inputs">
    <div class="col-md-6 col-sm-12">
                             <div class="single-form form-default">
                                 <label class="hidden">Įmonės kodas</label>
                                 <div class="form-input form">
                                    <input name="bussiness_id" type="text" placeholder="Įmonės kodas" value="{{$advertisement->bussiness_id}}">
                                 </div>
                              </div>
    </div>
    <div class="col-md-6 col-sm-12">
                            <div class="single-form form-default">
                                 <label class="hidden">PVM kodas</label>
                                 <div class="form-input form">
                                    <input type="text" placeholder="PVM kodas" name="bussiness_vat" value="{{$advertisement->bussiness_vat}}">
                                 </div>
                              </div>
    </div>
</div>

                            <div class="col-md-12">
                              <div class="single-form form-default">
                                 <label class="hidden">Vardas, Pavardė arba įmonės pavadinimas</label>
                                 <div class="form-input form">
                                    <input name="name_surname" type="text" placeholder="Vardas,Pavardė arba Įmonės pavadinimas" value="{{$advertisement->name_surname}}">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single-form form-default">
                                 <label class="hidden">Telefono numeris</label>
                                 <div class="form-input form">
                                  <input name="phonenumber" type="text" placeholder="Telefono numeris" value="{{$advertisement->phonenumber}}">
</div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single-form form-default">
                                 <label class="hidden">El. paštas</label>
                                 <div class="form-input form">
                                    <input name="email" type="text" placeholder="El. paštas" value="{{$advertisement->email}}" required disabled>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single-form form-default">
                                 <label class="hidden">Miestas</label>
                                 <div class="form-input form">

                                 <select name="city" class="form-select">
                                          <option value="Lietuva" @if($advertisement->city == "Lietuva") selected @endif>Lietuva</option>
                                        <optgroup label="Apskritis">
                                          <option value="Vilniaus apskritis" @if($advertisement->city == "Vilniaus apskritis") selected @endif>Vilniaus apskritis</option>
                                          <option value="Kauno apskritis" @if($advertisement->city == "Kauno apskritis") selected @endif>Kauno apskritis</option>
                                          <option value="Klaipėdos apskritis" @if($advertisement->city == "Klaipėdos apskritis") selected @endif>Klaipėdos apskritis</option>
                                          <option value="Panevėžio apskritis" @if($advertisement->city == "Panevėžio apskritis") selected @endif>Panevėžio apskritis</option>
                                          <option value="Šiaulių apskritis" @if($advertisement->city == "Šiaulių apskritis") selected @endif>Šiaulių apskritis</option>
                                          <option value="Alytaus apskritis" @if($advertisement->city == "Alytaus apskritis") selected @endif>Alytaus apskritis</option>
                                          <option value="Marijampolės apskritis" @if($advertisement->city == "Marijampolės apskritis") selected @endif>Marijampolės apskritis</option>
                                          <option value="Tauragės apskritis" @if($advertisement->city == "Tauragės apskritis") selected @endif>Tauragės apskritis</option>
                                          <option value="Telšių apskritis" @if($advertisement->city == "Telšių apskritis") selected @endif>Telšių apskritis</option>
                                          <option value="Utenos apskritis" @if($advertisement->city == "Utenos apskritis") selected @endif>Utenos apskritis</option>
                                       </optgroup>
                                       <optgroup label="Miestas">
                                            <option value="Alytus" @if($advertisement->city == "Alytus") selected @endif>Alytus</option>
                                            <option value="Biržai" @if($advertisement->city == "Biržai") selected @endif>Biržai</option>
                                            <option value="Druskininkai" @if($advertisement->city == "Druskininkai") selected @endif>Druskininkai</option>
                                            <option value="Elektrėnai" @if($advertisement->city == "Elektrėnai") selected @endif>Elektrėnai</option>
                                            <option value="Gargždai" @if($advertisement->city == "Gargždai") selected @endif>Gargždai</option>
                                            <option value="Garliava" @if($advertisement->city == "Garliava") selected @endif>Garliava</option>
                                            <option value="Jonava" @if($advertisement->city == "Jonava") selected @endif>Jonava</option>
                                            <option value="Kaunas" @if($advertisement->city == "Kaunas") selected @endif>Kaunas</option>
                                            <option value="Kėdainiai" @if($advertisement->city == "Kėdainiai") selected @endif>Kėdainiai</option>
                                            <option value="Klaipėda" @if($advertisement->city == "Klaipėda") selected @endif>Klaipėda</option>
                                            <option value="Kretinga" @if($advertisement->city == "Kretinga") selected @endif>Kretinga</option>
                                            <option value="Kuršėnai" @if($advertisement->city == "Kuršėnai") selected @endif>Kuršėnai</option>
                                            <option value="Marijampolė" @if($advertisement->city == "Marijampolė") selected @endif>Marijampolė</option>
                                            <option value="Mažeikiai" @if($advertisement->city == "Mažeikiai") selected @endif>Mažeikiai</option>
                                            <option value="Neringa" @if($advertisement->city == "Neringa") selected @endif>Neringa</option>
                                            <option value="Palanga" @if($advertisement->city == "Palanga") selected @endif>Palanga</option>
                                            <option value="Panevėžys" @if($advertisement->city == "Panevėžys") selected @endif>Panevėžys</option>
                                            <option value="Plungė" @if($advertisement->city == "Plungė") selected @endif>Plungė</option>
                                            <option value="Prienai" @if($advertisement->city == "Prienai") selected @endif>Prienai</option>
                                            <option value="Radviliškis" @if($advertisement->city == "Radviliškis") selected @endif>Radviliškis</option>
                                            <option value="Rokiškis" @if($advertisement->city == "Rokiškis") selected @endif>Rokiškis</option>
                                            <option value="Šiauliai" @if($advertisement->city == "Šiauliai") selected @endif>Šiauliai</option>
                                            <option value="Šilutė" @if($advertisement->city == "Šilutė") selected @endif>Šilutė</option>
                                            <option value="Tauragė" @if($advertisement->city == "Tauragė") selected @endif>Tauragė</option>
                                            <option value="Telšiai" @if($advertisement->city == "Telšiai") selected @endif>Telšiai</option>
                                            <option value="Trakai" @if($advertisement->city == "Trakai") selected @endif>Trakai</option>
                                            <option value="Ukmergė" @if($advertisement->city == "Ukmergė") selected @endif>Ukmergė</option>
                                            <option value="Utena" @if($advertisement->city == "Utena") selected @endif>Utena</option>
                                            <option value="Vilnius" @if($advertisement->city == "Vilnius") selected @endif>Vilnius</option>
                                            <option value="Visaginas" @if($advertisement->city == "Visaginas") selected @endif>Visaginas</option>
                                            <option value="Zarasai" @if($advertisement->city == "Zarasai") selected @endif>Zarasai</option>
                                            <option value="Kitas" @if($advertisement->city == "Kitas") selected @endif>Kitas</option>
                                       </optgroup>

                                        </select>

                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single-form form-default">
                                 <label class="hidden">Adresas</label>
                                 <div class="form-input form">
                                    <input name="address" type="text" placeholder="Adresas" value="{{$advertisement->address}}">
                                 </div>
                              </div>
                           </div>

                        </div>
                     </section>
                  </li>
                  <li>
                     <h6 class="title collapsed" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">Skelbimo iškėlimas</h6>
                     <section class="checkout-steps-form-content collapse show" id="collapsefive" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="row">
                           <div class="col-12">
                               <label">VIP skelbimai paprastai sulaukia 4 - 10 kartų daugiau peržiūrų nei įprasti skelbimai.</label>
                                <div class="vip-advertisements">
                                    <h3>Skelbimo iškėlimas</h3>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-input form">
                                                <select id="ad_color" name="ad_color" class="form-select"><option value="" selected="selected">Pasirinkite laikotarpį</option><option value="1">1 mėnuo VIP - 7,99&nbsp;€</option><option value="2">3 mėnesiai VIP - 15,99&nbsp;€</option><option value="3">6 mėnesiai VIP - 19,99&nbsp;€</option></select>
                                            </div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <h4><span>0,00</span> Eur</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="vip-advertisements mt-3">
                                    <h3>Paryškinimas</h3>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-input form">
                                                <select id="ad_up" name="ad_up" class="form-select"><option value="" selected="selected">Pasirinkite laikotarpį</option><option value="4">1 diena - 0,20&nbsp;€</option><option value="5">2 dienos - 0,40&nbsp;€</option><option value="6">3 dienos - 0,60&nbsp;€</option><option value="7">4 dienos - 0,80&nbsp;€</option><option value="8">5 dienos - 1,00&nbsp;€</option><option value="9">6 dienos - 1,20&nbsp;€</option><option value="10">7 dienos - 1,40&nbsp;€</option><option value="11">8 dienos - 1,60&nbsp;€</option><option value="12">9 dienos - 1,80&nbsp;€</option><option value="13">10 dienų - 2,00&nbsp;€</option><option value="14">11 dienų - 2,20&nbsp;€</option><option value="15">12 dienų - 2,40&nbsp;€</option><option value="16">13 dienų - 2,60&nbsp;€</option><option value="17">14 dienų - 2,80&nbsp;€</option><option value="18">15 dienų - 3,00&nbsp;€</option><option value="19">16 dienų - 3,20&nbsp;€</option><option value="20">17 dienų - 3,40&nbsp;€</option><option value="21">18 dienų - 3,60&nbsp;€</option><option value="22">19 dienų - 3,80&nbsp;€</option><option value="23">20 dienų - 4,00&nbsp;€</option><option value="24">21 dienai - 4,20&nbsp;€</option><option value="25">22 dienoms - 4,40&nbsp;€</option><option value="26">23 dienoms - 4,60&nbsp;€</option><option value="27">24 dienoms - 4,80&nbsp;€</option><option value="28">25 dienoms - 5,00&nbsp;€</option><option value="29">26 dienoms - 5,20&nbsp;€</option><option value="30">27 dienoms - 5,40&nbsp;€</option><option value="31">28 dienoms - 5,60&nbsp;€</option><option value="32">29 dienoms - 5,80&nbsp;€</option><option value="33">30 dienų - 6,00&nbsp;€</option></select>
                                            </div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <h4><span>0,00</span> Eur</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right mt-2 hiddena" id="total-price">
                                    <h4>Viso: <span>0,00</span> Eur</h4>
                                </div>
                           </div>
                        </div>
                     </section>
                  </li>
               </ul>
               <div class="price-table-btn button text-center">
                     <button type="submit" class="btn btn-alt">Atnaujinti skelbimą</button>
                  </div>
            </div>



         </div>

      </div>
   </div>
</section>

</form>

@endsection