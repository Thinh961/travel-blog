<?php

namespace App\Http\Controllers;

use App\Http\Requests\Media\MediaCreateRequest;
use App\Models\Media;
use Illuminate\Http\Request;

class AdminMediaController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            session(['moduleActive' => 'medias']);

            return $next($request);
        });
    }

    public function create()
    {
        $medias  = Media::all();
        return view('admin.medias.create', compact('medias'));
    }

    public function store(MediaCreateRequest $request)
    {
        $data = $request->all();
        Media::create($data);
        $this->toastCreateSuccess();
        return redirect()->route('admin.medias.create');
    }

    public function show($id)
    {
        $medias  = Media::all();
        $media = Media::find($id);
        return view('admin.medias.update', compact('media', 'medias'));
    }

    public function update(MediaCreateRequest $request, $id)
    {
        $data = $request->all();
        Media::find($id)->update($data);
        $this->toastUpdateSuccess();
        return redirect()->route('admin.medias.create');
    }

    public function destroy($id)
    {
        Media::destroy($id);
        $this->toastDeleteSuccess();
        return redirect()->route('admin.medias.create');
    }
}
