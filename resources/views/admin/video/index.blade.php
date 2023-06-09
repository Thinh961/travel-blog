@extends('layouts.admin')

@section('content')
    <div class="bg-light rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-2">
            <h4 class="col-md-6 mb-0">DANH SÁCH VIDEO</h4>
        </div>
        <hr>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Số thứ tự</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($videos->count() > 0)
                        @foreach ($videos as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    {{ str_repeat('|---', $item->level) . $item->translate('vie')->name }}
                                </td>
                                <td>
                                    @if ($item->active == 'on')
                                        <span class="p-2 badge bg-success">Kích hoạt</span>
                                    @else
                                        <span class="p-2 badge bg-warning text-dark">Ẩn đi</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ Route('admin.videos.show', $item->id) }}"
                                        class="btn btn-success btn-sm rounded-0 text-white" type="button"
                                        data-toggle="tooltip" data-placement="top" title="Edit"><i
                                            class="fa fa-edit"></i></a>
                                    <a href="{{ Route('admin.videos.destroy', $item->id) }}"
                                        class="btn btn-danger btn-sm rounded-0 text-white"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa')" type="button"
                                        data-toggle="tooltip" data-placement="top" title="Delete"><i
                                            class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" class="text-center">
                                <img src="{{ Asset('admin/img/no-data.png') }}" class="img-fluid" alt=""
                                    style="height:350px">
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {{ $videos->render('pagination') }}
        </div>
    </div>
@endsection
