@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">CẬP NHẬT VIDEO</h6>
                <form method="POST" action="{{ Route('admin.videos.update', $video->id) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Tiêu đề</label>
                        <input type="text" name="name" value="{{ $video->name }}" class="form-control" id="name">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name-china" class="form-label">Tiêu đề (tiếng Trung)</label>
                        <input type="text" name="name_zh" value="{{ $video->translate('zh')->name }}" class="form-control"
                            id="name-china">
                        @error('name_zh')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="videoUrl" class="form-label">Link video youtube</label>
                        <input type="text" name="videoUrl" value="{{ $video->videoUrl }}" class="form-control"
                            id="videoUrl">
                        @error('videoUrl')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="preview">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $video->videoId }}"
                            title="YouTube video player" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <label class="form-check-label" for="feature">Kích hoạt</label>
                        <input class="form-check-input" name="active" type="checkbox" role="switch" id="active"
                            {{ $video->active == 'on' ? 'checked' : '' }}>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection
