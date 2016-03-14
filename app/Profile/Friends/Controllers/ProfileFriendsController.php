<?php

namespace App\Profile\Friends\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Entities\User;
use App\Http\Controllers\Controller;

class ProfileFriendsController extends Controller
{
    public function index()
    {
        $friends = User::all();
        $images =  \Storage::disk('public')->files('img/profiles');
        return view('profile.friends')->with(compact('friends', 'images'));
    }
}
