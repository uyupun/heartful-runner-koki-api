<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\SigninRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup(SignupRequest $request)
    {
        $user = User::create([
            'user_id' => $request->user_id,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('token')->plainTextToken;

        return response()->json(['token' => $token], 201);
    }

    public function signin(SigninRequest $request)
    {
        $user = User::firstWhere('user_id', $request->user_id);

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error_message' => 'Unauthorized'], 401);
        }

        $user->tokens()->delete();
        $token = $user->createToken('token')->plainTextToken;

        return response()->json(['token' => $token], 200);
    }
}
