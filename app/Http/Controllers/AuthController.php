<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function auth(Request $request)
    {

        try {

            $credentials = $request->only('email', 'password');

            \Auth::attempt($credentials);
            $success['token'] = \Auth::user()->createToken('bseg')->accessToken;
            return response()->json(['success' => $success], 200);

        } catch (\Exception $exception) {
            return response()->json(['error' => 'Unauthorized', 'cause' => $exception], 401);
        }

        return response()->json(['error' => 'Unauthrized'], 401);

    }
}
