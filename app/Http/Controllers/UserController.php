<?php

namespace App\Http\Controllers;

use App\Http\Resources\User\UserResource;
use App\Models\Chat;
use App\Models\ChatUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getAll() {
        $users = UserResource::collection(User::all());
        return view("user.userAll", compact("users"));
    }

    public function createChat(Request $request)
    {
        $last_chat_id = Chat::insertGetId([
            'title' => 'title'
        ]);

        $current_user_id = intval(Auth::user()->id);
        $user_id = User::where('');

        ChatUser::insert([[
            'user_id' => $current_user_id,
            'chat_id' => $last_chat_id,
        ],
        [
            'user_id' => $current_user_id,
            'chat_id' => $last_chat_id,
        ]]);

    }
}
