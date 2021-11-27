<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth:api');
    }

    public function users()
    {
        return response()->json(User::latest()->get());
    }

    public function storeUser(Request $request)
    {
        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password)
        ]);
        return response()->json('success');
    }
}
