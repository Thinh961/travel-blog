<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    const TOAST_UPDATE_SUCCESS = 'Cập nhật thành công';
    const TOAST_CREATE_SUCCESS = 'Thêm mới thành công';
    const TOAST_DELETE_SUCCESS = 'Xoá thành công';
    const STATUS_ON = 'on';
    const STATUS_OFF = 'off';

    public function toastUpdateSuccess()
    {
        toastr()->success(self::TOAST_UPDATE_SUCCESS);
    }

    public function toastCreateSuccess($message = self::TOAST_CREATE_SUCCESS)
    {
        toastr()->success($message);
    }

    public function toastDeleteSuccess()
    {
        toastr()->success(self::TOAST_DELETE_SUCCESS);
    }
}
