@extends('layouts.base')

@section('title',"LOGIN")

@section('content')
  <div class="container text-center col-sm-10 col-md-4">
    <section class="login-box text-center ml-auto mr-auto ">

      <form method="POST" action="{{ route('login') }}">
          @csrf

        <div>
          <label for="email">{{ __('E-Mail Address') }}</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror username" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div>
          <label for="password">{{ __('Password') }}</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror password" name="password" required autocomplete="current-password">
          @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div>
          <button type="submit" class="button-login">
              {{ __('Login') }}
          </button>
        </div>

        <div>
          <div class="form-check">
            <input name="remember" type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}><label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
          </div>
        @if (Route::has('password.request'))
            <a class="btn btn-link prueba " href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
      </form>
    </div>

  </section>
</div>
@endsection
