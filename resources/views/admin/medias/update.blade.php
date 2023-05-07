@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">CẬP NHẬT MẠNG XÃ HỘI</h4>
                <form method="POST" action="{{ Route('admin.medias.update', $media->id) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="icon" class="form-label">Icon</label>
                        <input type="text" name="icon" value="{{ $media->icon }}" class="form-control" id="icon">
                        @error('icon')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link media</label>
                        <input type="text" name="link" value="{{ $media->link }}" class="form-control"
                            id="link">
                        @error('link')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="alert alert-primary">Lấy Icon ở trong trang này: <a href="https://fontawesome.com/v5/search" target="blank">Font Awesome</a></div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">DANH SÁCH MẠNG XÃ HỘI</h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Số thứ tự</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($medias as $item)
                            <tr class="align-middle">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td style="font-size:30px">
                                    {!! $item->icon !!}
                                </td>
                                <td>
                                    <a href="{{ Route('admin.medias.show', $item->id) }}"
                                        class="btn btn-success btn-sm rounded-0 text-white" type="button"
                                        data-toggle="tooltip" data-placement="top" title="Edit"><i
                                            class="fa fa-edit"></i></a>
                                    <a href="{{ Route('admin.medias.destroy', $item->id) }}"
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
    @endsection
