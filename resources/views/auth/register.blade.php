@extends('layouts.app')
@section('content')

<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">{{__('Register') }}</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    
                    <div class="form-group">
                        <label for="nom"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input id="nom" type="nom" class="@error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus placeholder="{{ __('Nom') }}"/>
                        
                        @error('nom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="prenom"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input id="prenom" type="prenom" class="@error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus placeholder="{{ __('Prenom') }}"/>
                        
                        @error('prenom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="login"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input id="login" type="login" class="@error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus placeholder="{{ __('User Name') }}"/>
                        
                        @error('login')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="adresse"><i class="zmdi zmdi-gps-dot"></i></label>
                        <input id="adresse" type="adresse" class="@error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" autofocus placeholder="{{ __('Adresse') }}"/>
                        
                        @error('adresse')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}"/>
                        
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="motdepasse"><i class="zmdi zmdi-lock"></i></label>
                        <input id="motdepasse" type="password" class="@error('motdepasse') is-invalid @enderror" name="motdepasse" required autocomplete="current-motdepasse" placeholder="{{ __('Password') }}"/>
                        
                        @error('motdepasse')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="motdepasse-confirm"><i class="zmdi zmdi-lock"></i></label>
                        <input id="motdepasse" type="password" name="motdepasse_confirmation" required autocomplete="new-motdepasse" placeholder="{{ __('Confirm Password') }}"/>
                    </div>

                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="loginStyle/images/signup-image.jpg" alt="sing up image"></figure>
                <a href="{{ route('login') }}" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
@endsection
