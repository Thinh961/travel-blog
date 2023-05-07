@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">THÊM MỚI BANNER</h4>
                <form action="{{ Route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Tiêu đề Banner</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link (nếu có)</label>
                        <input type="text" class="form-control" name="link" id="link"
                            value="{{ old('link') }}">
                        @error('link')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Ảnh</label>
                        <input class="form-control" name="image" type="file" id="formFile"
                            onchange="previewImage(this, 'image')">
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <img id="image" src="{{ Asset('/admin/img/default-image.jpg') }}" width="350px" height="250px"
                            alt="">
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" name="active" id="active" checked>
                        <label class="form-check-label" for="active">Kích hoạt</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
    @endsection
