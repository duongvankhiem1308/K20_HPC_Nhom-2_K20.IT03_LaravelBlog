<?php

namespace App\Http\Controllers\Components;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    public function cardsbasic(){
        return view('components.cards-basic',[
            'title' => 'Trang Chu Card'
        ]);
    }
    public function ui_accordion(){
        return view('components.ui-accordion',[
            'title' => 'Accordion'
        ]);
    }
    public function ui_alerts(){
        return view('components.ui-alerts',[
            'title' => 'Alerts'
        ]);
    }
    public function ui_typography(){
        return view('components.ui-typography',[
            'title' => 'Typography'
        ]);
    }
    public function ui_badges(){
        return view('components.ui-badges',[
            'title' => 'Badges'
        ]);
    }
    public function ui_buttons(){
        return view('components.ui-buttons',[
            'title' => 'Buttons'
        ]);
    }
    public function ui_carousel(){
        return view('components.ui-carousel',[
            'title' => 'Carousel'
        ]);
    }
    public function ui_collapse(){
        return view('components.ui-collapse',[
            'title' => 'Collapse'
        ]);
    }
    public function ui_dropdowns(){
        return view('components.ui-dropdowns',[
            'title' => 'Dropdowns'
        ]);
    }
    public function ui_footer(){
        return view('components.ui-footer',[
            'title' => 'Footer'
        ]);
    }
    public function ui_list_groups(){
        return view('components.ui-list-groups',[
            'title' => 'List Groups'
        ]);
    }
    public function ui_modals(){
        return view('components.ui-modals',[
            'title' => 'Modals'
        ]);
    }
    public function ui_navbar(){
        return view('components.ui-navar',[
            'title' => 'Navbar'
        ]);
    }
    public function ui_offcanvas(){
        return view('components.ui-offcanvas',[
            'title' => 'Offcanvas'
        ]);
    }
    public function ui_pagination_breadcrumbs(){
        return view('components.ui-pagination-breadcrumbs',[
            'title' => 'Pagination Breadcrumbs'
        ]);
    }
    public function ui_progress(){
        return view('components.ui-progress',[
            'title' => 'Progress'
        ]);
    }
    public function ui_spinners(){
        return view('components.ui-spinners',[
            'title' => 'Spinners'
        ]);
    }
    public function ui_tabs_pills(){
        return view('components.ui-tabs-pills',[
            'title' => 'Tabs Pills'
        ]);
    }
    public function ui_toasts(){
        return view('components.ui-toasts',[
            'title' => 'Toasts'
        ]);
    }
    public function ui_tooltips_popovers(){
        return view('components.ui-tooltips-popovers',[
            'title' => 'Tooltips Popovers'
        ]);
    }
    public function extended_ui_perfect_scrollbar(){
        return view('components.extended-ui-perfect-scrollbar',[
            'title' => 'Perfect Scrollbar'
        ]);
    }
    public function extended_ui_text_divider(){
        return view('components.extended-ui-text-divider',[
            'title' => 'Text Divider'
        ]); 
    }
    public function icons_boxicons(){
        return view('components.icons-boxicons',[
            'title' => 'Boxicons'
        ]);
    }



}