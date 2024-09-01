<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('login'); // Show the login page
        }

        $credentials = $request->only('user', 'password');

        if (!isset($credentials['user']) || !isset($credentials['password'])) {
            return response()->json(['message' => 'Missing credentials'], 400);
        }

        $user = User::where('user', $credentials['user'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            return response()->json(['redirect' => '/dashboard'], 200);
        } else {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }

}
