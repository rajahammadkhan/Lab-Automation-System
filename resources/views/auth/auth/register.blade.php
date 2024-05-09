@extends('layouts.app')

@section('content')
<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
					<span class="login100-form-logo">
						<img alt="" src="{{ asset('raja/images/loading.png')}}">
					</span>
                    <span class="login100-form-title p-b-34 p-t-27">{{ __('Register') }}
                    </span>  
                    <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="wrap-input100 validate-input" data-validate="Enter name">
                         <input class="input100 @error('name') is-invalid @enderror" id="name" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <i class="material-icons focus-input1001">person</i>
					    </div>
                        <!-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
                        <div class="wrap-input100 validate-input" data-validate="Enter email">
                         <input class="input100 @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <i class="material-icons focus-input1001">mail</i>
					    </div>
                        <!-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100 @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Password" required autocomplete="new-password">
						@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <i class="material-icons focus-input1001">lock</i>
					</div>
                        <!-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <!-- <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> -->
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100 @error('password') is-invalid @enderror" id="password-confirm" type="password" name="password_confirmation" placeholder="Conform Password" required autocomplete="new-password">
                        <i class="material-icons focus-input1001">lock</i>
					    </div>
                        <div class="form-group row mb-0">
                            <div class="container-login100-form-btn">
						    <button class="login100-form-btn">
							{{ __('Register') }}
						    </button>
					        </div>
                            </div>
                            <div class="text-center p-t-50">
						    <a class="txt1 text-center" href="login">
							You already have a membership?
						    </a>
					</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
