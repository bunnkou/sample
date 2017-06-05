<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $user = $users->first();
        $user_id = $user->id;

        // 获取去除掉 first 的所有用户 id 数组
        $followers = $users->slice(1);
        $follower_ids = $followers->pluck('id')->toArray();

        // 关注除了 first 用户以外的所有用户
        $user->follow($follower_ids);

        // 除了 first 用户以外的所有用户都关注 first 用户
        foreach ($followers as $follower) {
            $follower->follow($user_id);
        }
    }
}
