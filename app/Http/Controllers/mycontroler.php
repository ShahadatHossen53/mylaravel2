<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class mycontroler extends Controller
{
    public function hasing(Request $request)
    {
        $txt = $request->password;

        $txt = Hash::make($txt);

        echo "$txt";
    }
}
