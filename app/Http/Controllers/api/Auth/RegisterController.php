<?php

namespace App\Http\Controllers\api\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
            $data = $request->all();
            $data['password'] = bcrypt($request->password);
        User::create($data);

        return response()->json('User berhasil dibuat',200);
    }
}
