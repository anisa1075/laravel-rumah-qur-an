<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\User;
use Illuminate\Http\Request;

class FrontGuruController extends Controller
{
    public function dashguru()
    {
        $artikel = Artikel::all();
        $user = User::all();
        return Inertia('HomeLogin', compact('artikel', 'user'));
    }
}
