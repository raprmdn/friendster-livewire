<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowingController extends Controller
{
    public function __invoke($indentifier, $follow) 
    {
        $user = User::where('hash', $indentifier)->orWhere('username', $indentifier)->firstOrFail();

        if ($follow == "following") {
            $follows = $user->follows()->paginate(16);
        } else {
            $follows = $user->followers()->paginate(16);
        }

        return view('follows.index', compact('follows', 'follow'));
    }
}
