<?php

namespace App\Http\Controllers;

use App\User;
use App\Enums\UserType;
use App\Http\Resources\JwtResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; 
use Validator;

class UserController extends Controller
{
    
    /**
     * Login route.
     * 
     * Register for administration in application is not implemented.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            $this->scope = $user->type->key;

            $token = $user->createToken($user->email.'-'.now(), [$this->scope]);
            return new JwtResource($token);
        } else {
            return response()
                ->json(['message' => 'Invalid credentials'], 401);
        }
    }
}
