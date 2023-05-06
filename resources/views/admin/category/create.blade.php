@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Thêm mới danh mục</h6>
                <form method="POST" action="{{ Route('admin.categories.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên danh mục</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name-china" class="form-label">Tên danh mục (tiếng Trung)</label>
                        <input type="text" name="name_zh" value="{{ old('name_zh') }}" class="form-control"
                            id="name-china">
                        @error('name_zh')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name-china" class="form-label">Danh mục cha</label>
                        <select class="form-select mb-3" name="parent_id">
                            <option value="0">--Chọn danh mục--</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">
                                    {{ str_repeat('|---', $item->level) . $item->translate('vie')->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" name="active" id="active" checked>
                        <label class="form-check-label" for="active">Kích hoạt</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
@endsection
