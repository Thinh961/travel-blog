@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Thông tin liên hệ</h6>
                <div class="mb-3">
                    <label for="name" class="form-label">Họ và tên</label>
                    <input type="text" name="name" value="{{ $contact->fullname }}" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Số điện thoại</label>
                    <input type="text" name="phone" value="{{ $contact->phone }}" class="form-control" id="phone">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" value="{{ $contact->email }}" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Lời nhắn</label>
                    <textarea name="message" id="message" cols="5" rows="5" class="form-control">{{ $contact->message }}</textarea>
                </div>
            </div>
        </div>
    </div>
@endsection
