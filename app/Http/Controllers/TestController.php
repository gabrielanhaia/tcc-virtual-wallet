<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function index()
    {
        Auth::loginUsingId(1);



        return 'test';
    }
}
