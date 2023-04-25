@extends('layouts.admin-frame')
@section('admin-layout')
    @include('admin.components.sidebar')

    <div class="content">
        @include('admin.components.navbar')
        <div class="container-fluid pt-4 px-4">
            @yield('content')
        </div>

        {{-- @include('admin.components.footer') --}}
    </div>
@endsection
