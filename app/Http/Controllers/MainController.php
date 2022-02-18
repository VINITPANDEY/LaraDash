<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function login(){

        return view ('Auth.login');
    }


    function registrer(){

        return view ('Auth.register');
    }
}
