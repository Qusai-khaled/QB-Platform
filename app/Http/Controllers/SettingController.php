<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('setting.index')->with('setting', Setting::first());
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            "blog_name"    => "required",
            "phone_number"  => "required",
            "blog_email"  => "required",
            "address"  => "required"
        ]);
        $setting = Setting::first();
        $setting->blog_name =  $request->blog_name;
        $setting->phone_number =  $request->phone_number;
        $setting->blog_email = $request->blog_email;
        $setting->address = $request->address;
        $setting->save();

        return redirect()->back();
    }
}
