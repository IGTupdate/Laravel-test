<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return response()->json([
            'success' => true,
            'message' => 'Auth successful',
        ]);
    }
}
