<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index()
    {
        $feeds = Feed::all();
        return view('feed.index', compact('feeds'));
    }

    public function store(Request $request)
    {
        $feed = Feed::create([
            'comentario' => $request->comentario,
            'user_id' => auth()->user()->id,
        ]);

        if ($request->hasFile('img')) {
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_'.$feed->id.'_' . time() . '.' . $extension;
            $path = $request->file('img_itens')->storeAs('public/imagens/feed/', $fileNameToStore);
            $pathFinal = 'public/imagens/feed/'.$fileNameToStore;
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
