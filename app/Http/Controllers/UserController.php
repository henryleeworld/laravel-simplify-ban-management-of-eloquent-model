<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function ban($userId)
    {
        if(!empty($user = User::find($userId))) {
            $user->ban([
                'expired_at' => '+1 month',
            ]);
        }
        if(empty(User::find($userId))) {
            $user = User::withBanned()->find($userId);
            echo '使用者姓名：' . $user->name . PHP_EOL;
        }
    } 
}
