@extends('layouts.admin')

@section('content')
    <div class="row bg-light">
        {{-- <h6 class="mb-4">Thêm mới bài viết</h6> --}}
        <div class="col-sm-12 col-xl-6">
            <div class="rounded h-100 p-4">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên bài viết</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="name-china" class="form-label">Tên bài viết (tiếng Trung)</label>
                        <input type="text" class="form-control" id="name-china">
                    </div>
                    <div class="mb-3">
                        <label for="name-china" class="form-label">Nội dung</label>
                        <textarea name="" id="" class="form-control" cols="10" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="name-china" class="form-label">Nội dung (tiếng Trung)</label>
                        <textarea name="" id="" class="form-control" cols="10" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="rounded h-100 p-4">
                <div class="mb-3">
                    <label for="name" class="form-label">Mô tả ngắn</label>
                    <textarea name="" id="" class="form-control" cols="10" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Mô tả ngắn(tiếng Trung)</label>
                    <textarea name="" id="" class="form-control" cols="10" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="name-china" class="form-label">Danh mục bài viết</label>
                    <select class="form-select mb-3" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Ảnh tiêu đề</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="active" checked>
                    <label class="form-check-label" for="active">Kích hoạt</label>
                </div>
            </div>
        </div>
    </div>
@endsection
