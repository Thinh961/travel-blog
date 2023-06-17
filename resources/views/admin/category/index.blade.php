@extends('layouts.admin')

@section('content')
    <div class="bg-light rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-2">
            <h4 class="col-md-6 mb-0">DANH SÁCH DANH MỤC</h4>
        </div>
        <hr>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Số thứ tự</th>
                        <th scope="col">Tên danh mục</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($categories->count() > 0)
                        @foreach ($categories as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    @if ($item->level == 0)
                                        <b>{{ str_repeat('|---', $item->level) . $item->translate('vie')->name }}</b>
                                    @else
                                        {{ str_repeat('|---', $item->level) . $item->translate('vie')->name }}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ Route('admin.categories.show', $item->id) }}"
                                        class="btn btn-success btn-sm rounded-0 text-white" type="button"
                                        data-toggle="tooltip" data-placement="top" title="Edit"><i
                                            class="fa fa-edit"></i></a>
                                    <a href="{{ Route('admin.categories.destroy', $item->id) }}"
                                        class="btn btn-danger btn-sm rounded-0 text-white"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa')" type="button"
                                        data-toggle="tooltip" data-placement="top" title="Delete"><i
                                            class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3" class="text-center">
                                <img src="{{ Asset('admin/img/no-data.png') }}" class="img-fluid" alt=""
                                    style="height:350px">
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {{ $categories->render('pagination') }}
        </div>
    </div>
@endsection
