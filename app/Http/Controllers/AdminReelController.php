<?php

namespace App\Http\Controllers;

use App\Http\Requests\Reel\ReelCreateRequest;
use App\Models\Reel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class AdminReelController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            session(['moduleActive' => 'reels']);
            return $next($request);
        });
    }

    public function index()
    {
        $reels = Reel::paginate(10);
        return view('admin.reels.index', compact('reels'));
    }

    public function create()
    {
        return view('admin.reels.create');
    }

    public function store(ReelCreateRequest $request)
    {
        $data = [
            'active' => $request->active ?? self::STATUS_OFF,
            'slug' => Str::slug($request->name, '-'),
            'videoUrl' => $request->videoUrl,
            'vie' => [
                'name' => $request->name,
            ],
            'zh' => [
                'name' =>  $request->name_zh,
            ],
        ];
        Reel::create($data);
        $this->toastCreateSuccess();

        return redirect()->back();
    }

    public function show($id)
    {
        $reel = Reel::find($id);
        $reel->videoId = $this->getIdFromUrlYoutube($reel->videoUrl);
        return view('admin.reels.update', compact('reel'));
    }

    public function update(ReelCreateRequest $request, $id)
    {
        $data = [
            'active' => $request->active ?? self::STATUS_OFF,
            'slug' => Str::slug($request->name, '-'),
            'videoUrl' => $request->videoUrl,
            'vie' => [
                'name' => $request->name,
            ],
            'zh' => [
                'name' =>  $request->name_zh,
            ],
        ];
        Reel::find($id)->update($data);
        $this->toastUpdateSuccess();

        return redirect()->back();
    }

    public function destroy($id)
    {
        Reel::destroy($id);
        $this->toastDeleteSuccess();
        return redirect()->back();
    }
}
