@extends('admin.auth.auth-layout')
@section('auth')
    {{-- Main Content Start --}}
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-4">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html"> <h4>Admin</h4></a>
                                @if (Session::has('success'))
                                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                                @endif
                                @if (Session::has('error'))
                                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                @endif
                                <form action="{{ route('login') }}" method="POST" class="mt-5 mb-5 login-input">
                                    @csrf
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                                <p class="mt-5 login-form__footer text-center"><a href="page-register.html" class="text-primary">Forgot Password?</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Main Content End --}}
@endsection
