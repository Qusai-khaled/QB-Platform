<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Setting;
use App\Tag;
use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function index()
    {
        $post = Post::where('title', 'like',  '%' . request('search') . '%')->get();
        $num = $post->count();
        return view('results.index')
            ->with('posts', $post)
            ->with('title',  'Result : ' . request('search'))
            ->with('settings',  Setting::first())
            ->with('blog_name', Setting::first()->blog_name)
            ->with('categoriess', Category::all())
            ->with('tags', Tag::all())
            ->with('num', $num);
    }
}
