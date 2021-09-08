<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        echo("login successfull");
    }

    public function signup(){
        echo("signup successfull");
    }

    public function index(){
        echo("helo world");
    }
}
