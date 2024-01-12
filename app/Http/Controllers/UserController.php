<?php

namespace App\Http\Controllers;

use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAll() {
        $users = UserResource::collection(User::all());
        return view("user.userAll", compact("users"));
    }
}
