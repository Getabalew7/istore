@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card" style="border-radius: 10px">
              {{--   <div class="card-header">{{ __('Login') }}</div> --}}

                <div class="card-body">
                    <h5 style="text-align: center">Sign in to your account</h5>
                    <hr>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="col-md-12 col-form-label">{{ __('E-Mail Address') }} <span style="color: red">*</span></label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}<span style="color: red">*</span></label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </div>
                    </form>
                </div>
           {{--  </div> --}}
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sample User Account (For testing purpose)') }}</div>
                <div class="card-body">
                   <table width="100%">
                       <thead>
                           <th>E-Mail Address</th>
                           <td>admin@gmail.com</td>
                           <th>password</th>
                           <td>Admin123</td>
                       </thead>
                        <thead>
                           <th>E-Mail Address</th>
                           <td>client1@gmail.com</td>
                           <th>password</th>
                           <td>Client123</td>
                       </thead>
                        <thead>
                           <th>E-Mail Address</th>
                           <td>client2@gmail.com</td>
                           <th>password</th>
                           <td>Client123</td>
                       </thead>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
