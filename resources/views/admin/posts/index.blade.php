@extends('layouts.admin')

@section('content')
    <div class="bg-light rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-2">
            <h4 class="col-md-6 mb-0">DANH SÁCH BÀI VIẾT</h4>
            <form action="{{ Route('admin.posts.index') }}">
                <div class="d-flex">
                    <select class="form-select" name="active">
                        <option {{ $active == '' ? 'selected' : '' }} value="">Tất cả</option>
                        <option {{ $active == 'on' ? 'selected' : '' }} value="on">Kích hoạt</option>
                        <option {{ $active == 'off' ? 'selected' : '' }} value="off">Ẩn đi</option>
                    </select>
                    <input class="form-control bg-transparent" type="text" name="keyword"
                        value="{{ request()->input('keyword') }}" placeholder="Search">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                </div>
            </form>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table text-start align-middle table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">Số thứ tự</th>
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
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td><img src="{{ Asset($item->image) }}" class="img-fluid" width="150" height="150"></td>
                            <td>{{ $item->translate('vie')->name }}</td>
                            <td><span class="p-2 badge bg-success">{{ $item->category->translate('vie')->name }}</span></td>
                            <td>
                                @if ($item->active == 'on')
                                    <span class="p-2 badge bg-success">Kích hoạt</span>
                                @else
                                    <span class="p-2 badge bg-warning text-dark">Ẩn đi</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ Route('admin.posts.show', $item->id) }}"
                                    class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="{{ Route('admin.posts.destroy', $item->id) }}"
                                    class="btn btn-danger btn-sm rounded-0 text-white"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa')" type="button"
                                    data-toggle="tooltip" data-placement="top" title="Delete"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="mt-2">
        {{ $posts->render('pagination') }}
    </div>
@endsection
