@extends('layouts.admin')

@section('content')
    <div class="bg-light rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-2">
            <h4 class="col-md-6 mb-0">DANH SÁCH BANNER</h4>
        </div>
        <hr>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">Số thứ tự</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($banners as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><img src="{{ Asset($item->image) }}" class="img-fluid" width="250" height="150"></td>
                            <td>
                                <a href="{{ Route('admin.banners.show', $item->id) }}"
                                    class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="{{ Route('admin.banners.destroy', $item->id) }}"
                                    class="btn btn-danger btn-sm rounded-0 text-white"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa')" type="button"
                                    data-toggle="tooltip" data-placement="top" title="Delete"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $banners->render('pagination') }}
        </div>
    </div>
@endsection
