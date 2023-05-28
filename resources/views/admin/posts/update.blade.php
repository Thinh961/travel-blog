@extends('layouts.admin')

@section('content')
    <form method="POST" action="{{ Route('admin.posts.update', $post->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="row bg-light">
            <div class="col-sm-12 col-xl-6">
                <div class="rounded h-100 p-4">
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên bài viết</label>
                        <input type="text" name="name" value="{{ $post->translate('vie')->name }}" class="form-control" id="name">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Mô tả ngắn</label>
                        <textarea name="description" id="description" class="form-control editor" cols="10" rows="10">{{ $post->translate('vie')->description }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Nội dung</label>
                        <textarea name="content" id="content" class="form-control editor" cols="10" rows="20">{{ $post->translate('vie')->content }}</textarea>
                        @error('content')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Danh mục bài viết</label>
                        <select class="form-select" name="category_id">
                            <option value="">--Chọn danh mục--</option>
                            @foreach ($categories as $item)
                                <option {{ $post->category_id == $item->id ? 'selected' : '' }} value="{{ $item->id }}">
                                    {{ str_repeat('|---', $item->level) . $item->translate('vie')->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-check form-switch mb-2">
                        <label class="form-check-label" for="active">Kích hoạt</label>
                        <input class="form-check-input" name="active" type="checkbox" role="switch" id="active"
                            {{ $post->active == 'on' ? 'checked' : '' }}>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <label class="form-check-label" for="feature">Nổi bật</label>
                        <input class="form-check-input" name="feature" type="checkbox" role="switch" id="feature"
                            {{ $post->feature == 'on' ? 'checked' : '' }}>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="rounded h-100 p-4">
                    <div class="mb-3">
                        <label for="name_zh" class="form-label">Tên bài viết (tiếng Trung)</label>
                        <input type="text" name="name_zh" value="{{ $post->translate('zh')->name }}"
                            class="form-control" id="name_zh">
                        @error('name_zh')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Mô tả ngắn(tiếng Trung)</label>
                        <textarea name="description_zh" class="form-control editor" cols="10" rows="10">{{ $post->translate('zh')->description }}</textarea>
                        @error('description_zh')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name-china" class="form-label">Nội dung (tiếng Trung)</label>
                        <textarea name="content_zh" class="form-control editor" cols="10" rows="20">{{ $post->translate('zh')->content }}</textarea>
                        @error('content_zh')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Ảnh bài viết</label>
                        <input class="form-control" name="image" type="file" id="formFile"
                            onchange="previewImage(this, 'image')">
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div><img id="image" src="{{ Asset($post->image) }}" width="300px" height="200px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
