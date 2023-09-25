<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;

class PageController extends Controller
{
    public function home()
    {
        $threads = Thread::latest()->orderBy('id','DESC')->paginate();
        return view('home', ['threads' => $threads]);

    }

    public function category($category)
    {
        return view('category',['category' => $category]);
    }

    public function tag($tag)
    {
        return view('tag', ['tag' => $tag]);
    }

    public function thread($thread)
    {
        return view('thread', ['thread' => $thread]);
    }


}
