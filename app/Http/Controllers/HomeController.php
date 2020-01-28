<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Setting;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')
            ->with('categoriess', Category::take(5)->get())
            ->with('tags', Tag::take(5)->get())
            ->with('settings',  Setting::first());
    }
    public function welcome()
    {
        return view('welcome')
            ->with('settings',  Setting::first())
            ->with('categoriess', Category::take(5)->get())
            ->with('tags', Tag::take(5)->get());
    }
    public function dashboard()
    {
        return view('dashboard')
            ->with('tags_count', Tag::all()->count())
            ->with('post_count', Post::all()->count())
            ->with('users_count', User::all()->count())
            ->with('categories_count', Category::all()->count())
            ->with('trashed_count', Post::onlyTrashed()->get()->count());
    }
}
