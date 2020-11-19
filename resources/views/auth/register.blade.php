@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <h3><b>Register</b></h3>
                <div class="text-center">
                    <img src="/admin/assets/login/images/logo-big.png" style="max-height: 250px" alt="IMG">
                </div>
            </div>
            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @csrf
                <div class="wrap-input100 validate-input" data-validate="Desa is required">
                    <select name="desa_id" class="input100">
                        <option value="">==Pilih Desa Anda==</option>
                        @foreach($desa as $id => $nama)
                        <option value="{{ $id }}">{{ $nama }}</option>
                        @endforeach
                        <option value="0">Buat desa baru</option>
                    </select>
                </div>
                <div class="wrap-input100">
                    <input class="input100" type="text" name="new_desa" placeholder="Isi jika desa tidak terdaftar">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="name" placeholder="Bambang Pamungkas...">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="email" placeholder="bambang@gmail.com">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" placeholder="********">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" id="password-confirm" type="password" name="password_confirmation" placeholder="********">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="container-login100-form-btn">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
            {{--                    <form method="POST" action="{{ route('register') }}">--}}
            {{--                        @csrf--}}

            {{--                        <div class="form-group row">--}}
            {{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

            {{--                            <div class="col-md-6">--}}
            {{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

            {{--                                @error('name')--}}
            {{--                                    <span class="invalid-feedback" role="alert">--}}
            {{--                                        <strong>{{ $message }}</strong>--}}
            {{--                                    </span>--}}
            {{--                                @enderror--}}
            {{--                            </div>--}}
            {{--                        </div>--}}

            {{--                        <div class="form-group row">--}}
            {{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

            {{--                            <div class="col-md-6">--}}
            {{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

            {{--                                @error('email')--}}
            {{--                                    <span class="invalid-feedback" role="alert">--}}
            {{--                                        <strong>{{ $message }}</strong>--}}
            {{--                                    </span>--}}
            {{--                                @enderror--}}
            {{--                            </div>--}}
            {{--                        </div>--}}

            {{--                        <div class="form-group row">--}}
            {{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

            {{--                            <div class="col-md-6">--}}
            {{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

            {{--                                @error('password')--}}
            {{--                                    <span class="invalid-feedback" role="alert">--}}
            {{--                                        <strong>{{ $message }}</strong>--}}
            {{--                                    </span>--}}
            {{--                                @enderror--}}
            {{--                            </div>--}}
            {{--                        </div>--}}

            {{--                        <div class="form-group row">--}}
            {{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

            {{--                            <div class="col-md-6">--}}
            {{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
            {{--                            </div>--}}
            {{--                        </div>--}}

            {{--                        <div class="form-group row mb-0">--}}
            {{--                            <div class="col-md-6 offset-md-4">--}}
            {{--                                <button type="submit" class="btn btn-primary">--}}
            {{--                                    {{ __('Register') }}--}}
            {{--                                </button>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </form>--}}
        </div>
    </div>
</div>
</div>
@endsection
