<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use File;
use Auth;
use Input;
use App\Models\User;

class AvatarController extends Controller
{
    public function create()
    {
        return view('users.avatar');
    }

    public function store(Request $request)
    {
        $destinationPath = 'uploads/';
        // $file = $request->file('avatar');
        $file = Input::except('_token', 'avatar');
        dd($file);
        $file_name = Auth::user()->id .' '. time() . $file->getClientOriginalName();
        if (!File::Exists($destinationPath)){
            File::makeDirectory($destinationPath, 0755, true);
        }
        $file->move($destinationPath, $file_name);

        $user = User::findOrFail(Auth::user()->id);
        $user->avatar = '/' . $destinationPath . $file_name;
        $user->save();

        return view('users.avatar');
    }
}
