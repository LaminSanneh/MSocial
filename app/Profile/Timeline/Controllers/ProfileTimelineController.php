<?php

namespace App\Profile\Timeline\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileTimelineController extends Controller
{
    public function index()
    {
        return view('profile.timeline');
    }
}
