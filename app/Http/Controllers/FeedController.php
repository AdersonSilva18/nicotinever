<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index()
    {
        $feeds = Feed::orderByDesc('created_at')->get();
        return view('feed.index', compact('feeds'));
    }

    public function store(Request $request)
    {
        $feed = Feed::create([
            'comentario' => $request->comentario,
            'user_id' => auth()->user()->id,
        ]);
        if ($request->hasFile('image')) {
            $pathFinal = \CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        } else {
            $pathFinal = null;
        }

        $feed->update([
            'image' => $pathFinal
        ]);

        return redirect()->route('feed.index');
    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy(Feed $feed)
    {
        $feed->delete();
        return redirect()->route('feeds.index');
    }
}
