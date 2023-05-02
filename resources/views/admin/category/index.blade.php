@extends('layouts.admin')

@section('content')
    <div class="col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Danh sách danh mục</h6>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Số thứ tự</th>
                        <th scope="col">Tên danh mục</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ str_repeat('|---', $item->level) . $item->translate('vie')->name }}</td>
                            <td>
                                <a href="{{ Route('admin.categories.show', $item->id) }}"
                                    class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                                    data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="{{ Route('admin.categories.destroy', $item->id) }}" class="btn btn-danger btn-sm rounded-0 text-white"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa')" type="button"
                                    data-toggle="tooltip" data-placement="top" title="Delete"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categories->render('pagination') }}
        </div>
    @endsection
