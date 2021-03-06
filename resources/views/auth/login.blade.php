@extends('layouts.app')

@section('content')
<div class="main-content">

    <!-- Section: inner-header -->


    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container pt-50 pb-70">
        <div class="row pt-10">

          <div class="col-md-9">
            <h4 class="mt-0 mb-30 line-bottom">Login</h4>
            <!-- Contact Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group mb-30">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group mb-30">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                  </div>
                </div>
              </div>



              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-dark btn-theme-color-blue btn-flat mr-5" data-loading-text="Please wait...">Login</button>
                <button type="reset" class="btn btn-default btn-flat btn-theme-color-red">Reset</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </section>
  </div>
@endsection
