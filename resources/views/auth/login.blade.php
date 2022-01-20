@extends('layouts.front-end')

@section('title')
Prisijungti, norint valdyti savo skelbimus
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Prisijunkite, norėdami redaguoti savo skelbimą(-us)</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
@php 
$old = ['email'=>"",'password'=>""];
@endphp

                        @if(!empty($_GET['user']) && !empty($_GET['password']))
                            @php
                            $old['email'] = $_GET['user'];
                            $old['password'] = $_GET['password'];
                            @endphp
                        @endif

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Elektroninis paštas</label>

                            <div class="col-md-6">
                                @if($old['email'])
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $old['email'] }}" required autocomplete="email" autofocus>
                                @else 
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @endif

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Slaptažodis</label>

                            <div class="col-md-6">
                                @if($old['password'])
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ $old['password'] }}" required autocomplete="current-password">
                                @else 
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="current-password">
                                @endif

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                     Likti prisijungus
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Prisijungti
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Pamiršote slaptažodį?
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
</div>
@endsection
