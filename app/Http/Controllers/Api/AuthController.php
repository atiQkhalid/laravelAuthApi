<?php

namespace App\Http\Controllers\Api;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
 
class AuthController extends Controller
{

    public function login(){
        echo "login requested";
    }

    public function signup(){
        echo "signup requested";
    }
 
    public function index(){
        echo "Hello World";
    }
 
}
