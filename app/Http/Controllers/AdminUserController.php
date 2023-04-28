<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserRequest;
use App\Models\User;
use App\Services\UploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
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
        $params = $request->all();
        $user = Auth::user();
        if (!empty($params['avatar'])) {
            $params['avatar'] = $this->uploadService->uploadImage($params['avatar'], self::UPLOAD_FOLDER);
        }

        if ($request->filled('password')) {
            $params['password'] = bcrypt($request->password);
        }
        return $params;

        User::find($user->id)->update($params);

        return $params;
    }
}
