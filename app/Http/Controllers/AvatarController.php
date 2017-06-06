<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Image;
use Auth;
use App\Models\User;

class AvatarController extends Controller
{
    public function create()
    {
        return view('users.avatar');
    }

    public function store(Request $request)
    {
        // 更新用户头像
        $user_id = Auth::user()->id;
        $bool = false;
        $destinationPath  = "avatars/";
        $file = $request->file('avatar');
        if ($file->isValid()){
            $file_name = $user_id . '_' .time() . $file->getClientOriginalName();
            $bool = $file->move($destinationPath, $file_name);
            // 裁剪图片 生成 200x200 缩略图
            $img = Image::make($destinationPath . $file_name)
                ->resize(200,200)
                ->save();
        }
        if ($bool){
            $user = User::findOrFail($user_id);
            $data = [];
            $data['avatar'] = '/' . $destinationPath . $file_name;
            $user->update($data);
        }
        return view('users.edit', compact('user'));
    }
}
