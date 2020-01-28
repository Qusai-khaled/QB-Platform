<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use \App\Setting;
use App\Tag;
use Illuminate\Http\Request;

class websiteUIcontroller extends Controller
{
    public function index()
    {
        return view('index')->with('blog_name', Setting::first()->blog_name)
            ->with('categorie', Category::all())
            ->with('categoriess', Category::take(5)->get())
            ->with('tags', Tag::take(5)->get())
            ->with('first_post', Post::orderBy('created_at', 'desc')->first())
            ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
            ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
            ->with('fourth_post', Post::orderBy('created_at', 'desc')->skip(3)->take(1)->get()->first())
            ->with('settings',  Setting::first());
    }



    public function showPost($slug)
    {
        $post      = Post::where('slug', $slug)->first();
        $next_page = Post::where('id', '>', $post->id)->min('id');
        $prev_page = Post::where('id', '<', $post->id)->max('id');


        return view('posts.show')

            ->with('tags', Tag::take(5)->get())
            ->with('post', $post)
            ->with('next', Post::find($next_page))
            ->with('prev', Post::find($prev_page))
            ->with('title', $post->title)
            ->with('blog_name', Setting::first()->blog_name)
            ->with('settings',  Setting::first())
            ->with('categoriess', Category::take(5)->get());
    }
    public function category($id)
    {
        $category = Category::find($id);
        $num = $category->posts->count();

        return view('category.show')
            ->with('tags', Tag::take(5)->get())
            ->with('title', $category->name)
            ->with('categoriess', Category::take(5)->get())
            ->with('blog_name', Setting::first()->blog_name)
            ->with('settings',  Setting::first())
            ->with('name', $category->name)
            ->with('category', $category)
            ->with('num', $num);
    }

    public function tag($id)
    {
        $tag      = Tag::find($id);
        $num = $tag->posts->count();
        return view('tags.show')
            ->with('title', $tag->tag)
            ->with('categoriess', Category::take(5)->get())
            ->with('blog_name', Setting::first()->blog_name)
            ->with('settings',  Setting::first())
            ->with('name', $tag->name)
            ->with('tags', Tag::take(5)->get())
            ->with('tag', $tag)
            ->with('num', $num);
    }
}
