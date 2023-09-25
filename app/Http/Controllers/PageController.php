<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        return 'home';

    }

    public function category($category)
    {
        return "Categoria ".$category;
    }

    public function tag($tag)
    {
        return "Tag ".$tag;
    }

    public function thread($thread)
    {
        return "Thread ".$thread;
    }


}
