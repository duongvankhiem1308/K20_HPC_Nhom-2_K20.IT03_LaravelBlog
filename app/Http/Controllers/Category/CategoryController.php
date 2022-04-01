<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function  dasboard(){
        return view('category.dasboard' ,[
            'title' => 'Trang Chu Dashboard'
        ]);
    }

    public function  layout_menu(){
        return view('category.layout-menu',[
            'title' => 'Trang Chu Menu'
        ]);
    }

    public function  layout_navar(){
        return view('category.layout-navar',[
            'title' => 'Trang Chu Navar'
        ]);
    }

    public function  layout_container(){
        return view('category.layout-container',[
            'title' => 'Trang Chu Container'
        ]);
    }

    public function  layout_fluid(){
        return view('category.layout-fluid',[
            'title' => 'Trang Chu Fluid'
        ]);
    }

    public function  layout_blank(){
        return view('category.layout-blank',[
            'title' => 'Trang Chu Blank'
        ]);
    }
}
