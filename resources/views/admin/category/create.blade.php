@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Thêm mới danh mục</h6>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên danh mục</label>
                        <input type="text" class="form-control" id="name">

                    </div>
                    <div class="mb-3">
                        <label for="name-china" class="form-label">Tên danh mục (tiếng Trung)</label>
                        <input type="text" class="form-control" id="name-china">
                    </div>
                    <div class="mb-3">
                        <label for="name-china" class="form-label">Danh mục cha</label>
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="active" checked>
                        <label class="form-check-label" for="active">Kích hoạt</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
        <div class="col-xl-6">
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
                        <tr>
                            <th scope="row">1</th>
                            <td>John</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm rounded-0 text-white" type="button"
                                    data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-danger btn-sm rounded-0 text-white"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa')" type="button"
                                    data-toggle="tooltip" data-placement="top" title="Delete"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Mark</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm rounded-0 text-white" type="button"
                                    data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-danger btn-sm rounded-0 text-white"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa')" type="button"
                                    data-toggle="tooltip" data-placement="top" title="Delete"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Jacob</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm rounded-0 text-white" type="button"
                                    data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-danger btn-sm rounded-0 text-white"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa')" type="button"
                                    data-toggle="tooltip" data-placement="top" title="Delete"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
