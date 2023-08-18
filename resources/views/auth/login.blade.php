@extends('layouts.landing')

@section('title')
    Sipaling Skrispi | Login
@endsection

@section('content')
    <div class="page-content page-auth">
        <div class="section-store-auth" data-aos="fade-up">
            <div class="container">
                <div class="row align-items-center row-login">
                    <div class="text-center col-lg-6">
                        <img src="/images/login-placeholder.png" alt="Login Image" class="mb-4 w-50 mb-lg-none">
                    </div>
                    <div class="col-lg-5">
                        <h2>
                            Belanja kebutuhan utama, <br />
                            menjadi lebih mudah
                        </h2>
                        <form method="POST" action="{{ route('login') }}" class="mt-3">
                            @csrf
                            <div class="form-group">
                                <label for="email" value="{{ __('Email') }}">Email Address</label>
                                <input id="email" type="email" name="email" :value="old('email')" required
                                    autofocus autocomplete="username"
                                    class="form-control w-75 @error('email') is-invalid @enderror" />

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" value="{{ __('Password') }}">Password</label>
                                <input id="password" type="password" name="password" required
                                    autocomplete="current-password"
                                    class="form-control w-75 @error('password') is-invalid @enderror" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="mt-4 btn btn-success btn-block w-75">Sign In to My
                                Account</button>
                            <a href="{{ route('register') }}" class="mt-2 btn btn-signup btn-block w-75">Sign Up</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
@endpush
