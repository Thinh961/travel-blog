@extends('layouts.admin')

@section('content')
    <div class="row g-4">
        <div class="col-sm-6 col-xl-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Tổng số bài viết:</p>
                    <h6 class="mb-0">{{ $countPost }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Tổng số danh mục:</p>
                    <h6 class="mb-0">{{ $countCategory }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-area fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Tổng số liên hệ:</p>
                    <h6 class="mb-0">{{ $countContact }}</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
