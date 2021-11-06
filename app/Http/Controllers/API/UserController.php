<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

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
}
