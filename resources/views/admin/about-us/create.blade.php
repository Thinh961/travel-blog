@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">About Us</h6>
                <form action="{{ Route('admin.about_us.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Tiêu đề</label>
                        <input type="text" class="form-control" name="name"
                            value="{{ !empty($aboutUs->name) ? $aboutUs->name : old('name') }}" id="name">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name_zh" class="form-label">Tiêu đề (tiếng Trung)</label>
                        <input type="text" class="form-control" name="name_zh" id="name_zh"
                            value="{{ !empty($aboutUs) ? $aboutUs->translate('zh')->name : old('name_zh') }}">
                        @error('name_zh')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" name="phone"
                            value="{{ !empty($aboutUs->phone) ? $aboutUs->phone : old('phone') }}" id="phone">
                        @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email"
                            value="{{ !empty($aboutUs->email) ? $aboutUs->email : old('email') }}" id="email">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" name="address"
                            value="{{ !empty($aboutUs->address) ? $aboutUs->address : old('address') }}" id="address">
                        @error('address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Nội dung</label>
                        <textarea name="description" id="description" class="form-control editor" cols="10" rows="15">
                            {{ !empty($aboutUs->description) ? $aboutUs->description : old('description') }}
                        </textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description_zh" class="form-label">Nội dung (tiếng Trung)</label>
                        <textarea name="description_zh" id="description_zh" class="form-control editor" cols="10" rows="15">
                            {{ !empty($aboutUs) ? $aboutUs->translate('zh')->description : old('description_zh') }}
                        </textarea>
                        @error('description_zh')
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
                        <img id="image"
                            src="{{ !empty($aboutUs->image) ? Asset($aboutUs->image) : Asset('/admin/img/default-image.jpg') }}"
                            width="300px" height="250px">
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" name="active" id="active"
                            {{ !empty($aboutUs) && $aboutUs->active == 'on' ? 'checked' : '' }}>
                        <label class="form-check-label" for="active">Kích hoạt</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật thông tin</button>
                </form>
            </div>
        </div>
    @endsection
