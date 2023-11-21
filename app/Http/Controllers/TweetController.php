<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TweetController extends Controller
{
    public function index()
    {
        return Inertia::render('Welcome' , [
            'tweets' => Tweet::orderBy('id', 'desc')->get()
        ]);
    }

    public function store(Request $request)
    {
        $file = null;
        $extension = null;
        $fileName = null;
        $path = null;
        
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $request->validate(['file' => 'required|mimes:jpg,jpeg,png,mp4']);
            $extension = $file->getClientOriginalExtension();
            $fileName = time() .'.' . $extension;
            $extension === 'mp4' ? $path = '/videos/' : $path = '/pics/'; 
        }

        $tweet = new Tweet;
        $tweet->name = 'Roberto Sasso';
        $tweet->handle = '@robsax96';
        $tweet->image = 'https://media.licdn.com/dms/image/D4D03AQECk0Layd6ttA/profile-displayphoto-shrink_800_800/0/1697020693639?e=1705536000&v=beta&t=E1TI4t6irvyijgpg77La83N0sds8KcpZprhUjAX0jC8';
        $tweet->tweet = $request->input('tweet');
        if($fileName){
            $tweet->file = $path . $fileName;
            $tweet->is_video = $extension === 'mp4' ? true : false;
            $file->move(public_path() . $path , $fileName);
        }
        $tweet->comments = rand(5,500);
        $tweet->retweets = rand(5,500);
        $tweet->likes = rand(5,500);
        $tweet->analytics = rand(5,500);

        $tweet->save();

    }
    

    public function destroy($id)
    {
        $tweet = Tweet::find($id);

        if(!is_null($tweet->file) && file_exists(public_path() . $tweet->file)){
            unlink(public_path() . $tweet->file);
        }

        $tweet->delete();

        return redirect()->route('tweets.index');
    }
}
