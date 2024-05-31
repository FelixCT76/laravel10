<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    public function index ()
    {
        $profile = Profile::all();
        return view('dasboardprofile');
    }
}
