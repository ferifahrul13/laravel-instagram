<?php

namespace App\Http\Controllers\api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        
        $response = Http::post('http://localhost:8004/oauth/token', [
            'grant_type' => 'password',
            'client_id' => '9120013e-599e-4b4f-8260-608627cd7cdd',
            'client_secret' => '1MbecS93ckiPI0GkvozYR1emOyfQO3EENdoFfIoX',
            'username' => $request->email,
            'password' => $request->password,
            'redirect_uri' => 'http://localhost:8005/callback',
            'scope' => ''
        ]);

        if ($response->clientError()) {
            return $response->json('Email / Password salah', 400);

        } elseif ($response->serverError()) {
            return $response->json('Server Error', 500);

        }
        return $response->body();
    }
}
