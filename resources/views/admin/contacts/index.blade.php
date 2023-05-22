@extends('layouts.admin')

@section('content')
    <div class="bg-light rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-2">
            <h4 class="col-md-6 mb-0">DANH SÁCH LIÊN HỆ</h4>
            <div class="d-flex">
                <input class="form-control bg-transparent" type="text" placeholder="Search">
                <button type="button" class="btn btn-primary ms-2">Search</button>
            </div>
        </div>
        <hr>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Số thứ tự</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Email</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($contacts->count() > 0)
                        @foreach ($contacts as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    {{ Str::title($item->fullname) }}
                                </td>
                                <td>
                                    {{ $item->phone }}
                                </td>
                                <td>
                                    {{ $item->email }}
                                </td>
                                <td>
                                    <a href="{{ Route('admin.contacts.show', $item->id) }}"
                                        class="btn btn-success btn-sm rounded-0 text-white" type="button"
                                        data-toggle="tooltip" data-placement="top" title="Edit"><i
                                            class="fa fa-edit"></i></a>
                                    <a href="{{ Route('admin.contacts.destroy', $item->id) }}"
                                        class="btn btn-danger btn-sm rounded-0 text-white"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa')" type="button"
                                        data-toggle="tooltip" data-placement="top" title="Delete"><i
                                            class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-center">
                                <img src="{{ Asset('admin/img/no-data.png') }}" class="img-fluid" alt=""
                                    style="height:350px">
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {{ $contacts->render('pagination') }}
        </div>
    </div>
@endsection
