<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;
use App\Models\Category;
use App\Models\Tag;

class PageController extends Controller
{
    public function home()
    {
        //$threads = Thread::latest()->orderBy('id','DESC')->with('category','tags','user')->withCount('comments')->paginate();
        $threads = Thread::latest()->orderBy('id','DESC')->paginate();
        return view('home', ['threads' => $threads]);

    }

    public function category(Category $category)
    {
        $threads = $category->threads()->orderBy('id','DESC')->paginate();
        return view('category',['category' => $category, 'threads' => $threads]);
    }

    public function tag(Tag $tag)
    {
        $threads = $tag->threads()->orderBy('id','DESC')->paginate();
        return view('tag', ['tag' => $tag, 'threads' => $threads]);
    }

    public function thread(Thread $thread)
    {
    
        //$comments = $thread->comments()->orderBy('id','DESC')->with('user')->get();
        $comments = $thread->comments()->orderBy('id','DESC')->get();
        return view('thread', ['thread' => $thread, 'comments' => $comments]);
    }


}
