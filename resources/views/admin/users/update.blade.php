@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Cập nhật tài khoản</h6>
                <form action="{{ Route('admin.users.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" value="{{ $user->email }}" id="email" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên hiển thị</label>
                        <input type="text" class="form-control" name="name" id="name"
                            value="{{ $user->name }}">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" name="password" id="password">
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Xác nhận mật khẩu</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Avatar</label>
                        <input class="form-control" name="avatar" type="file" id="formFile" onchange="previewImage(this, 'avatar')">
                        @error('avatar')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <img id="avatar" class="rounded rounded-circle"
                            src="{{ Asset($user->avatar) ?? Asset('/admin/img/default-image.jpg') }}" width="250px"
                            height="250px" alt="">
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
        <script>
          
        </script>        
    @endsection
