@extends('layouts.admin')

@section('content')
    <div class="bg-light rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-2">
            <h4 class="col-md-6 mb-0">DANH SÁCH BÀI VIẾT</h4>
            <div class="d-flex">
                <input class="form-control bg-transparent" type="text" placeholder="Search">
                <button type="button" class="btn btn-primary ms-2">Search</button>
            </div>
        </div>
        <hr>
        <div class="d-flex col-md-12">
            <p class="text-primary">Tất cả (0)</p> <span>|</span>
            <p class="text-primary">Đang xuất bản (0)</p> <span>|</span>
            <p class="text-primary">Chờ duyệt (0)</p> <span>|</span>
            <p class="text-primary">Thùng rác (0)</p>
        </div>
        <div class="d-flex col-md-2">
            <select class="form-select">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
            <button type="button" class="btn btn-primary ms-2">Action</button>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table text-start align-middle table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Ảnh bài viết</th>
                        <th scope="col">Tên bài viết</th>
                        <th scope="col">Danh mục</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $item)
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td>{{ $item->created_at }}</td>
                            <td><img src="{{ Asset($item->image) }}" class="img-fluid" width="150" height="150"></td>
                            <td>{{ $item->translate('vie')->name }}</td>
                            <td>{{ $item->category->translate('vie')->name }}</td>
                            <td>
                                {{ $item->active == 'on' ? 'Hiển thị' : 'Không hiển thị' }}
                            </td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="">Sửa</a>
                                <a class="btn btn-sm btn-danger" href="">Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
