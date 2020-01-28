<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Setting;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        if ($categories->count() == 0) {
            return redirect(route('category.create'));
        }
        $tags = Tag::all();
        if ($tags->count() == 0) {
            return redirect(route('tag.create'));
        }

        return view("posts.create")
            ->with('categories',  $categories)
            ->with('tagss', $tags)
            ->with('categoriess', Category::take(5)->get())
            ->with('tags', Tag::take(5)->get())
            ->with('settings',  Setting::first());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "title"    => "required",
            "content"  => "required",
            "category_id"  => "required",
            "featrued" => "required|image",
            "tags" => "required"
        ]);

        $featured = $request->featrued;
        $featured_new_name = time() . $featured->getClientOriginalName();
        $featured->move('uploads/posts', $featured_new_name);

        $post = Post::create([
            "title"    => $request->title,
            "content"  => $request->content,
            "category_id"  => $request->category_id,
            "featrued" => 'uploads/posts/' . $featured_new_name,
            "slug"    => str_slug($request->title),
            "user_id" => Auth::id(),
        ]);
        $post->tags()->attach($request->tags);
        return redirect(route('website'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post)->with('categories', Category::all())->with('tags', Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $this->validate($request, [
            "title"    => "required",
            "content"  => "required",
            "category_id"  => "required",
            "tags" => "required"
        ]);
        if ($request->hasFile('featrued')) {
            $featured = $request->featrued;
            $featured_new_name = time() . $featured->getClientOriginalName();
            $featured->move('uploads/posts', $featured_new_name);
            $post->featrued = 'uploads/posts/' . $featured_new_name;
        }
        $post->title =  $request->title;
        $post->content =  $request->content;
        $post->category_id = $request->category_id;
        $post->slug    = str_slug($request->title);
        $post->save();

        $post->tags()->sync($request->tags);

        return redirect(route('website'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete($id);
        return redirect(route('website'));
    }

    public function trashed()
    {
        $post = Post::onlyTrashed()->get();
        return view('posts.trashed')->with('posts', $post);
    }

    public function hard_delete($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->forceDelete();
        return redirect(route('posts.trashed'));
    }

    public function restore($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->restore();
        return redirect(route('posts.show'));
    }
}
