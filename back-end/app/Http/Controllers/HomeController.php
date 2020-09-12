<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function cek()
    {
        
        $user = Auth::user();
        // dd($user);

        return response()->json($user);
    }
}
