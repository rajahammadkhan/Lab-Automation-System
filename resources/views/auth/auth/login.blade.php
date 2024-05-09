@extends('layouts.app')

@section('content')
<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
                     <span class="login100-form-logo">
						<img alt="" src="{{ asset('raja/images/loading.png')}}">
					</span>
                    <span class="login100-form-title p-b-34 p-t-27">
                    {{ __('Login') }}
					</span>
                    <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="wrap-input100 validate-input" data-validate="Enter email">
                         <input class="input100 @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <i class="material-icons focus-input1001">mail</i>
					    </div>
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100 @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password">
						@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <i class="material-icons focus-input1001">lock</i>
					</div>

                        <div class="contact100-form-checkbox">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" value=""> {{ __('Remember Me') }}
								<span class="form-check-sign">
									<span class="check"></span>
								</span>
							</label>
						</div>
					</div>
                    <div class="container-login100-form-btn">
                        <a href="">
						<button class="login100-form-btn">
							{{ __('Login') }}
						</button>
                        </a>
					</div>
                    <div class="text-center p-t-50">
                    @if (Route::has('password.request'))
						<a class="txt1" href="{{ route('register') }}">
                        {{ __('Are you registered?') }}
						</a>
                        @endif
					</div>
                    </form>
        </div>
    </div>
</div>
@endsection
