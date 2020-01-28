<?php

namespace App\Http\Controllers;

use App\Category;
use App\profile;
use App\Setting;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $id = Auth::id();

        if ($user->profile == null) {
            $profile =  Profile::create([
                'user_id' => $id,
                'avatar' => 'uploads/avatar/user.png'
            ]);
        }
        return view('users.edit')->with('user', Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user();
        $num = $user->post()->count();
        return view('users.profile')
            ->with('user', $user)
            ->with('tags', Tag::take(5)->get())
            ->with('settings',  Setting::first())
            ->with('categoriess', Category::take(5)->get())

            ->with('num', $num);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profile $profile)
    {
        $this->validate($request, [
            "name"    => "required",
            "email"  => "required|email",
            "password" => "required",
            "facebook" => "required",
            "twitter" => "required",
            "github" => "required",
            "about" => "required",
        ]);


        $user = Auth::user();




        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $avatar_new_name = time() . $avatar->getClientOriginalName();
            $avatar->move('uploads/avatar/', $avatar_new_name);
            $user->profile->avatar = 'uploads/avatar/' . $avatar_new_name;
            $user->profile->save();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->profile->facebook = $request->facebook;
        $user->profile->twitter = $request->twitter;
        $user->profile->github = $request->github;
        $user->profile->about = $request->about;
        $user->save();
        $user->profile->save();


        if ($request->has('password')) {

            $user->password = bcrypt($request->password);
            $user->save();
        }
        return redirect(route('website'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(profile $profile)
    {
        //
    }
}
