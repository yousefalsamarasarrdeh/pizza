<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class HomeController extends Controller
{
    public function index(){


        return view("website.Home");
    }
    public function test(){


        return view("website.test");
    }
    public function FAQ(){

        return view("website.FAQ");
    }
    public function Franchise(){
        return view("website.franchise");
    }

    public function about(){
        $page = Page::findOrFail(1);
        return view('website.about', compact('page'));
    }
}
