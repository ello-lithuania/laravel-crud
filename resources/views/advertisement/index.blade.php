@extends('layouts.front-end')

@section('title')
Naujas skelbimas
@endsection

@section('content')

<form class="new-ad" action="{{route('sukurti-skelbima')}}" method="post" enctype="multipart/form-data">
@csrf

<section class="checkout-wrapper section">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-12">
         <div class="section-title">
            <h1>Sukurti naują skelbimą</h1>
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
                                       <input name="title" type="text" placeholder="Įveskite skelbimo pavadinimą" aria-required="true" required>
                                    </div>
                              </div>
                           </div>

                                <div class="col-md-6">
                                <div class="single-form form-default">
                                    <label class="">Vietovė</label>
                                    <div class="form-input form">

                                        <select name="location" class="form-select">
                                          <option value="Lietuva">Lietuva</option>
                                        <optgroup label="Apskritis">
                                          <option value="Vilniaus apskritis">Vilniaus apskritis</option>
                                          <option value="Kauno apskritis">Kauno apskritis</option>
                                          <option value="Klaipėdos apskritis">Klaipėdos apskritis</option>
                                          <option value="Panevėžio apskritis">Panevėžio apskritis</option>
                                          <option value="Šiaulių apskritis">Šiaulių apskritis</option>
                                          <option value="Alytaus apskritis">Alytaus apskritis</option>
                                          <option value="Marijampolės apskritis">Marijampolės apskritis</option>
                                          <option value="Tauragės apskritis">Tauragės apskritis</option>
                                          <option value="Telšių apskritis">Telšių apskritis</option>
                                          <option value="Utenos apskritis">Utenos apskritis</option>
                                       </optgroup>
                                       <optgroup label="Miestas">

<option value="Alytus">Alytus</option>
<option value="Biržai">Biržai</option>
<option value="Druskininkai">Druskininkai</option>
<option value="Elektrėnai">Elektrėnai</option>
<option value="Gargždai">Gargždai</option>
<option value="Garliava">Garliava</option>
<option value="Jonava">Jonava</option>
<option value="Kaunas">Kaunas</option>
<option value="Kėdainiai">Kėdainiai</option>
<option value="Klaipėda">Klaipėda</option>
<option value="Kretinga">Kretinga</option>
<option value="Kuršėnai">Kuršėnai</option>
<option value="Marijampolė">Marijampolė</option>
<option value="Mažeikiai">Mažeikiai</option>
<option value="Neringa">Neringa</option>
<option value="Palanga">Palanga</option>
<option value="Panevėžys">Panevėžys</option>
<option value="Plungė">Plungė</option>
<option value="Prienai">Prienai</option>
<option value="Radviliškis">Radviliškis</option>
<option value="Rokiškis">Rokiškis</option>
<option value="Šiauliai">Šiauliai</option>
<option value="Šilutė">Šilutė</option>
<option value="Tauragė">Tauragė</option>
<option value="Telšiai">Telšiai</option>
<option value="Trakai">Trakai</option>
<option value="Ukmergė">Ukmergė</option>
<option value="Utena">Utena</option>
<option value="Vilnius">Vilnius</option>
<option value="Visaginas">Visaginas</option>
<option value="Zarasai">Zarasai</option>
<option value="Kitas">Kitas</option>

                                       </optgroup>

                                        </select>

                                    </div>
                                </div>
                            </div>


                           <div class="col-md-12">
                              <div class="single-form form-default">
                                 <label class="hidden">Aprašymas</label>
                                 <div class="form-input form">
                                    <textarea style="height: auto;" name="description" type="text" rows="10" cols="60" placeholder="Įveskite aprašymą"></textarea>
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
                                                    <input class="hidden" type="checkbox" id="{{ $category->slug }}" name="category[]" value="{{ $category->id }}">
                                                    <label for="{{ $category->slug }}" data-id="{{ $category->slug }}">
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
<script>
    var imagesPreview = function(input, placeToInsertImagePreview) {

if (input.files) {
    var filesAmount = input.files.length;
    //
    $('.foto_upload_preview').removeClass('hidden');
   var images = $('.foto_upload_preview img')
   $(images).remove();  
   //
    for (i = 0; i < filesAmount; i++) {
        var reader = new FileReader();

        reader.onload = function(event) {
            $($.parseHTML('<img>')).attr('src', event.target.result).addClass('col-md-3 col-4').appendTo(placeToInsertImagePreview);
        }

        reader.readAsDataURL(input.files[i]);
    }
}

};
</script>
                                    <input onchange="imagesPreview(this, 'div.foto_upload_preview')"  type="file" style="visibility:hidden;"  id="myFile" name="photos_local[]" placeholder="Paspauskite norėdami pasirinkti nuotraukas" multiple>
                                    <div class="row foto_upload_preview hidden">
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
                                        <button class="btn w-100" id="private-btn">Privatus asmuo</button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="button">
                                        <button class="btn w-100 btn-uncheck" id="bussiness-btn">Įmonė</button>
                                    </div>
                                </div>

<div class="row hidden" id="bussiness-inputs">
    <div class="col-md-6 col-sm-12">
                             <div class="single-form form-default">
                                 <label class="hidden">Įmonės kodas</label>
                                 <div class="form-input form">
                                    <input name="bussiness_id" type="text" placeholder="Įmonės kodas">
                                 </div>
                              </div>
    </div>
    <div class="col-md-6 col-sm-12">
                            <div class="single-form form-default">
                                 <label class="hidden">PVM kodas</label>
                                 <div class="form-input form">
                                    <input type="text" placeholder="PVM kodas" name="bussiness_vat">
                                 </div>
                              </div>
    </div>
</div>

                            <div class="col-md-12">
                              <div class="single-form form-default">
                                 <label class="hidden">Vardas, Pavardė arba įmonės pavadinimas</label>
                                 <div class="form-input form">
                                    <input name="name_surname" type="text" placeholder="Vardas,Pavardė arba Įmonės pavadinimas">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single-form form-default">
                                 <label class="hidden">Telefono numeris</label>
                                 <div class="form-input form">
                                  <input name="phonenumber" type="text" placeholder="Telefono numeris">
</div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single-form form-default">
                                 <label class="hidden">El. paštas</label>
                                 <div class="form-input form">
                                    <input name="email" type="text" placeholder="El. paštas" required>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single-form form-default">
                                 <label class="hidden">Miestas</label>
                                 <div class="form-input form">

                                 <select name="city" class="form-select">
                                          <option value="Lietuva">Lietuva</option>
                                        <optgroup label="Apskritis">
                                          <option value="Vilniaus apskritis">Vilniaus apskritis</option>
                                          <option value="Kauno apskritis">Kauno apskritis</option>
                                          <option value="Klaipėdos apskritis">Klaipėdos apskritis</option>
                                          <option value="Panevėžio apskritis">Panevėžio apskritis</option>
                                          <option value="Šiaulių apskritis">Šiaulių apskritis</option>
                                          <option value="Alytaus apskritis">Alytaus apskritis</option>
                                          <option value="Marijampolės apskritis">Marijampolės apskritis</option>
                                          <option value="Tauragės apskritis">Tauragės apskritis</option>
                                          <option value="Telšių apskritis">Telšių apskritis</option>
                                          <option value="Utenos apskritis">Utenos apskritis</option>
                                       </optgroup>
                                       <optgroup label="Miestas">

<option value="Alytus">Alytus</option>
<option value="Biržai">Biržai</option>
<option value="Druskininkai">Druskininkai</option>
<option value="Elektrėnai">Elektrėnai</option>
<option value="Gargždai">Gargždai</option>
<option value="Garliava">Garliava</option>
<option value="Jonava">Jonava</option>
<option value="Kaunas">Kaunas</option>
<option value="Kėdainiai">Kėdainiai</option>
<option value="Klaipėda">Klaipėda</option>
<option value="Kretinga">Kretinga</option>
<option value="Kuršėnai">Kuršėnai</option>
<option value="Marijampolė">Marijampolė</option>
<option value="Mažeikiai">Mažeikiai</option>
<option value="Neringa">Neringa</option>
<option value="Palanga">Palanga</option>
<option value="Panevėžys">Panevėžys</option>
<option value="Plungė">Plungė</option>
<option value="Prienai">Prienai</option>
<option value="Radviliškis">Radviliškis</option>
<option value="Rokiškis">Rokiškis</option>
<option value="Šiauliai">Šiauliai</option>
<option value="Šilutė">Šilutė</option>
<option value="Tauragė">Tauragė</option>
<option value="Telšiai">Telšiai</option>
<option value="Trakai">Trakai</option>
<option value="Ukmergė">Ukmergė</option>
<option value="Utena">Utena</option>
<option value="Vilnius">Vilnius</option>
<option value="Visaginas">Visaginas</option>
<option value="Zarasai">Zarasai</option>
<option value="Kitas">Kitas</option>

                                       </optgroup>

                                        </select>

                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single-form form-default">
                                 <label class="hidden">Adresas</label>
                                 <div class="form-input form">
                                    <input name="address" type="text" placeholder="Adresas">
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
                                        <div class="col-6 text-right ad_color_price">
                                            <h4><span>0.00</span> Eur</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="vip-advertisements mt-3">
                                    <h3>Paryškinimas</h3>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-input form">
                                                <select id="ad_up" name="ad_up" class="form-select"><option value="" selected="selected">Pasirinkite laikotarpį</option><option value="1">1 diena - 0,20&nbsp;€</option><option value="2">2 dienos - 0,40&nbsp;€</option><option value="3">3 dienos - 0,60&nbsp;€</option><option value="4">4 dienos - 0,80&nbsp;€</option><option value="5">5 dienos - 1,00&nbsp;€</option><option value="6">6 dienos - 1,20&nbsp;€</option><option value="7">7 dienos - 1,40&nbsp;€</option><option value="8">8 dienos - 1,60&nbsp;€</option><option value="9">9 dienos - 1,80&nbsp;€</option><option value="10">10 dienų - 2,00&nbsp;€</option><option value="11">11 dienų - 2,20&nbsp;€</option><option value="12">12 dienų - 2,40&nbsp;€</option><option value="13">13 dienų - 2,60&nbsp;€</option><option value="14">14 dienų - 2,80&nbsp;€</option><option value="15">15 dienų - 3,00&nbsp;€</option><option value="16">16 dienų - 3,20&nbsp;€</option><option value="17">17 dienų - 3,40&nbsp;€</option><option value="18">18 dienų - 3,60&nbsp;€</option><option value="19">19 dienų - 3,80&nbsp;€</option><option value="20">20 dienų - 4,00&nbsp;€</option><option value="21">21 dienai - 4,20&nbsp;€</option><option value="22">22 dienoms - 4,40&nbsp;€</option><option value="23">23 dienoms - 4,60&nbsp;€</option><option value="24">24 dienoms - 4,80&nbsp;€</option><option value="25">25 dienoms - 5,00&nbsp;€</option><option value="26">26 dienoms - 5,20&nbsp;€</option><option value="27">27 dienoms - 5,40&nbsp;€</option><option value="28">28 dienoms - 5,60&nbsp;€</option><option value="29">29 dienoms - 5,80&nbsp;€</option><option value="30">30 dienų - 6,00&nbsp;€</option></select>
                                            </div>
                                        </div>
                                        <div class="col-6 text-right ad_up_price">
                                            <h4><span>0.00</span> Eur</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right mt-2 hidden" id="total-price">
                                    <h4>Viso: <span>0.00</span> Eur</h4>
                                </div>
                           </div>
                        </div>
                     </section>
                  </li>
               </ul>
               <div class="price-table-btn button text-center">
                     <button type="submit" class="btn btn-alt">Sukurti naują skelbimą</button>
                  </div>
            </div>



         </div>

      </div>
   </div>
</section>

</form>

@endsection