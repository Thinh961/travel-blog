<?php

namespace App\Http\Controllers;

use App\Models\Reel;
use Illuminate\Http\Request;

class ReelController extends Controller
{
    public function index()
    {
        $videos = Reel::with('translations')->where('active', 'on')->paginate(10);
        foreach ($videos as $item) {
            $item['videoId'] = $this->getIdFromUrlYoutube($item->videoUrl);
        }

        return view('user.video.index', compact('videos'));
    }
}
