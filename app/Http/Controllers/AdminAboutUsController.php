<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutUs\AboutUsRequest;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Services\UploadService;


class AdminAboutUsController extends Controller
{
    /** @var string upload folder */
    const UPLOAD_FOLDER = 'about-us';

    private $uploadService;

    public function __construct(UploadService $uploadService)
    {
        $this->middleware(function ($request, $next) {
            session(['moduleActive' => 'about_us']);

            return $next($request);
        });
        $this->uploadService = $uploadService;
    }

    public function create()
    {
        $aboutUs = AboutUs::first();
        return view('admin.about-us.create', compact('aboutUs'));
    }

    public function store(AboutUsRequest $request)
    {
        $aboutUs = AboutUs::first();
        $data = [
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'vie' => [
                'name' => $request->name,
                'description' => $request->description,
            ],
            'zh' => [
                'name' => $request->name_zh,
                'description' =>  $request->description_zh
            ],
        ];
        if (!empty($request->image)) {
            $data['image'] = $this->uploadService->uploadImage($request->image, self::UPLOAD_FOLDER);
        }
        if (!empty($aboutUs)) {
            AboutUs::find($aboutUs->id)->update($data);
            $this->toastUpdateSuccess();
        } else {
            $this->toastCreateSuccess();
            AboutUs::create($data);
        }

        return redirect()->back();
    }
}
