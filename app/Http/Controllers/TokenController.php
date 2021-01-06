<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function refresh()
    {
        $user = auth()->user();

        $user->tokens->each(function($token, $key) {
            $token->delete();
        });

        $token = auth()->user()->createToken('api')->accessToken;

        return back()
            ->with('info', $token);
    }
}
