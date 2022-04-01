<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request){
        return view('page.index');
    }
    public function blogPost(Request $request){
        return view('page.blog-post');
    }
    public function login(Request $request){
        return view('page.login');
    }
    public function register(Request $request){
        return view('page.register');
    }
    public function password(Request $request){
        return view('page.register');
    }
    public function dasboard(Request $request){
        return view('category.dasboard');
    }

}
