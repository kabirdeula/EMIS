<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('components.head')
    <title>Login | UniLink</title>
</head>

<body>
    {{-- Header --}}
    <header id="header" class="fixed-top p-0 shadow-sm">
        <div class="container">
            <nav id="navbar-demo" class="navbar navbar-expand-md navbar-light bg-white">
                <div class="container">
                    <a href="{{ url('/') }}" class="navbar-brand fw-bold fs-2">{{ __('UniLink') }}</a>
                </div>
            </nav>
        </div>
    </header>

    <main id="main" class="main bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-lg-5 col-md-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">

                    <h1>{{ __('Login') }}</h1>

                    <form action="{{ route('login') }}" method="post">

                        @csrf

                        <div class="mb-3">
                            <label for="email"
                                class="col-form-label text-md-end fw-bold">{{ __('Email Address') }}</label>

                            <input type="email" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password"
                                class="col-form-label text-md-end fw-bold">{{ __('Password') }}</label>

                            <input type="password" name="password" id="password"
                                class="form-control @error('password') is-invalid @enderror"
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label for="remember" class="form-check-label">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 offset-md-4">
                                <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            </div>


                        </div>
                    </form>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ asset('images/hero-img.png') }}" alt="Illustrations from StorySet"
                        class="img-fluid animated">
                </div>
            </div>
        </div>
    </main>

</body>

</html>
