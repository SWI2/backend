<?php

namespace App\Http\Controllers;

use App\User;
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
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->accessToken;
            return response()
                ->json(['success' => $success], 200); 
        } else {
            return response()
                ->json(['message' => 'Invalid credentials'], 401);
        }
    }
}
