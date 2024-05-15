<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){


        return view("website.Home");
    }
    public function test(){


        return view("website.test");
    }
}
