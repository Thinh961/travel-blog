<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserRequest;
use App\Models\User;
use App\Services\UploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    /** @var string upload folder */
    const UPLOAD_FOLDER = 'users';

    private $uploadService;

    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function show()
    {
        $user = Auth::user();
        return view('admin.users.update', compact('user'));
    }

    public function update(UserRequest $request)
    {
        $params = $request->except('password');
        if (!empty($request->avatar)) {
            $params['avatar'] = $this->uploadService->uploadImage($request->avatar, self::UPLOAD_FOLDER);
        }

        if (!empty($request->password)) {
            $params['password'] = Hash::make($request->password);
        }

        User::find(Auth::user()->id)->update($params);
        $this->toastUpdateSuccess();

        return redirect()->back();
    }
}
