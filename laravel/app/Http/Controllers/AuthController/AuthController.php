<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use http\Env\Request;

class AuthController extends Controller
{
    public function login(Request $request){

        return response()->json("alo");
    }

    public function register(Request $request){

        return response()->json("alo");
    }
}
