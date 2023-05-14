@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">CẬP NHẬT REELS</h6>
                <form method="POST" action="{{ Route('admin.reels.update', $reel->id) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Tiêu đề</label>
                        <input type="text" name="name" value="{{ $reel->name }}" class="form-control" id="name">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name-china" class="form-label">Tiêu đề (tiếng Trung)</label>
                        <input type="text" name="name_zh" value="{{ $reel->translate('zh')->name }}" class="form-control"
                            id="name-china">
                        @error('name_zh')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="videoUrl" class="form-label">Link video youtube</label>
                        <input type="text" name="videoUrl" value="{{ $reel->videoUrl }}" class="form-control"
                            id="videoUrl">
                        @error('videoUrl')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="preview">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $reel->videoId }}"
                            title="YouTube video player" frameborder="0"
                            allowfullscreen></iframe>
                    </div>

                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection
