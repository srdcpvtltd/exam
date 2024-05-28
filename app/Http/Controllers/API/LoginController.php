<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];

        $validator =  Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'message' => "Invalid Credentials"
            ]);
        } else {
            $user = User::where('email', $request->email)->first();
            if (!$user) {
                return response()->json([
                    'message' => "The user is not Registered"
                ]);
            }

            $creds = [
                'email' => $request->email,
                'password' => $request->password
            ];

            if (Auth::guard('web')->attempt($creds)) {
                    $token = $user->createToken('Login_token')->accessToken;
                    $user->token = $token;
                    $user->user_role = $user->role->name;
                    $user->unsetRelation('role');
                    return response()->json([
                        'data' => $user
                    ]);
            } else {
                return response()->json([
                    'message' => 'Password is Incorrect'
                ]);
            }
        }
    }
}
