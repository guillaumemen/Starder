<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update_avatar(Request $request)
    {
        if($request->hasFile('avatar'))
        {
            $avatar = $request->file('avatar');
            $filename = md5(time()) . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->crop(600, 600)->resize(600, 600)->save(public_path("profil_pics/" . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('/welcome');
    }

    public function update_description(Request $request)
    {
//        $text = DB::table('user')
//            ->set('description')
//            ->update();
        if($request->has('description'))
        {
            $text= $request->input('description');
            $info = Textarea::post('description');

            $user = Auth::user();
            $user->description = $text;
            $user->save();
        }
        return view('/home');

    }
}
