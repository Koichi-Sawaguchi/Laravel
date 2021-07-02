<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\Profile;

class ProfileController extends Controller
{
     public function index(Request $request)
    {
        $headline = Profile::find(1);
        
        
        return view('profile.index', ['headline' => $headline]);
    }
}
