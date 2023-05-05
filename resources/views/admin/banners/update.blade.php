@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Cập nhật Banner</h6>
                <form action="{{ Route('admin.banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Tiêu đề Banner</label>
                        <input type="text" class="form-control" name="name" value="{{ $banner->name }}"
                            id="name">
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link (nếu có)</label>
                        <input type="text" class="form-control" name="link" id="link"
                            value="{{ $banner->link }}">
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
                        <img id="image" src="{{ Asset($banner->image) }}" width="350px" height="250px" alt="">
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" name="active" id="active"
                            {{ $banner->active == 'on' ? 'checked' : '' }}>
                        <label class="form-check-label" for="active">Kích hoạt</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
    @endsection
