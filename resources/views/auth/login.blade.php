@extends('layouts.admin-frame')

@section('admin-layout')
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="#" class="">
                            <h3 class="text-primary">Admin</h3>
                        </a>
                        <h3>Đăng nhập</h3>
                    </div>
                    <form action="{{ Route('login') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email">
                            <label for="floatingInput">Email</label>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" name="password" id="floatingPassword">
                            <label for="floatingPassword">Mật khẩu</label>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Ghi nhớ đăng nhập</label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                        <button class="btn btn-primary py-3 w-100 mb-4">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
