@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">THÊM MỚI VIDEO</h6>
                <form method="POST" action="{{ Route('admin.videos.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Tiêu đề</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name-china" class="form-label">Tiêu đề (tiếng Trung)</label>
                        <input type="text" name="name_zh" value="{{ old('name_zh') }}" class="form-control"
                            id="name-china">
                        @error('name_zh')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="videoUrl" class="form-label">Link video youtube</label>
                        <input type="text" name="videoUrl" value="{{ old('videoUrl') }}" class="form-control"
                            id="videoUrl">
                        @error('videoUrl')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-check form-switch mb-2">
                        <label class="form-check-label" for="active">Kích hoạt</label>
                        <input class="form-check-input" name="active" type="checkbox" role="switch" id="active"
                            checked>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
@endsection
