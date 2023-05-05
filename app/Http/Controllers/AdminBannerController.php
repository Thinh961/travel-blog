<?php

namespace App\Http\Controllers;

use App\Http\Requests\Banner\BannerCreateRequest;
use App\Http\Requests\Banner\BannerUpdateRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Services\UploadService;


class AdminBannerController extends Controller
{
    /** @var string upload folder */
    const UPLOAD_FOLDER = 'banners';

    private $uploadService;

    public function __construct(UploadService $uploadService)
    {
        $this->middleware(function ($request, $next) {
            session(['moduleActive' => 'banners']);

            return $next($request);
        });
        $this->uploadService = $uploadService;
    }

    public function index()
    {
        $banners = Banner::paginate(10);
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(BannerCreateRequest $request)
    {
        $data = $request->all();
        $data['image'] = $this->uploadService->uploadImage($request->image, self::UPLOAD_FOLDER);
        Banner::create($data);
        $this->toastCreateSuccess();
        return redirect()->back();
    }

    public function show($id)
    {
        $banner = Banner::find($id);
        return view('admin.banners.update', compact('banner'));
    }

    public function update(BannerUpdateRequest $request, $id)
    {
        $data = $request->all();
        if (!empty($request->image)) {
            $data['image'] = $this->uploadService->uploadImage($request->image, self::UPLOAD_FOLDER);
        }
        Banner::find($id)->update($data);
        $this->toastUpdateSuccess();
        return redirect()->back();
    }

    public function destroy($id)
    {
        Banner::destroy($id);
        $this->toastDeleteSuccess();
        return redirect()->back();
    }
}
