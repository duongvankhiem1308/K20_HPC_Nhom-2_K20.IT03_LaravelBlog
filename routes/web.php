<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\PageController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Controller\Category\CategoryController;
use App\Http\Controller\SinhvienController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('blog', [PageController::class,'blog']);*/

Route::get('/', function () {
    return view('welcome');
});


//Blog

Route::get('/home', [App\Http\Controllers\Page\PageController::class,'index'])
 ->name('home');

Route::get('/blog-post', [App\Http\Controllers\Page\PageController::class,'blogPost'])
 ->name('blog-post');

Route::get('/login', [App\Http\Controllers\Page\PageController::class,'login'])
 ->name('login');

Route::get('/register', [App\Http\Controllers\Page\PageController::class,'register'])
 ->name('register');


 // GROUP ADMIN


Route::get('/dasboard', [PageController::class,'dasboard'])
 ->name('dasboard');





 //Dashboard


Route::get('/dasboard', [App\Http\Controllers\Category\CategoryController::class,'dasboard']);

Route::get('/layout-menu', [App\Http\Controllers\Category\CategoryController::class,'layout_menu']);

Route::get('/layout-navar', [App\Http\Controllers\Category\CategoryController::class,'layout_navar']);

Route::get('/layout-container', [App\Http\Controllers\Category\CategoryController::class,'layout_container']);

Route::get('/layout-fluid', [App\Http\Controllers\Category\CategoryController::class,'layout_fluid']);

Route::get('/layout-blank', [App\Http\Controllers\Category\CategoryController::class,'layout_blank']);

//Account

Route::get('/account-setting', [App\Http\Controllers\Category\AccountController::class,'account_setting']);

Route::get('/account-notifications', [App\Http\Controllers\Category\AccountController::class,'account_notifications']);

Route::get('/account-connections', [App\Http\Controllers\Category\AccountController::class,'account_connections']);

// Login + Password

Route::get('/auth-login-basic', [App\Http\Controllers\Category\AccountController::class,'auth_login_basic']);

Route::get('/auth-register-basic', [App\Http\Controllers\Category\AccountController::class,'auth_register_basic']);

Route::get('/auth-forgot-password-basic', [App\Http\Controllers\Category\AccountController::class,'auth_forgot_password_basic']);


//EROO

Route::get('/pages-misc-error', [App\Http\Controllers\Category\AccountController::class,'pages_misc_error']);

Route::get('/pages-misc-under-maintenance', [App\Http\Controllers\Category\AccountController::class,'pages_misc_under_maintenance']);


//Components


Route::get('/cards-basic', [App\Http\Controllers\Components\ComponentsController::class,'cardsbasic']);
Route::get('/ui-accordion', [App\Http\Controllers\Components\ComponentsController::class, 'ui_accordion']);
Route::get('/ui-alerts', [App\Http\Controllers\Components\ComponentsController::class, 'ui_alerts']);
Route::get('/ui-badges', [App\Http\Controllers\Components\ComponentsController::class, 'ui_badges']);
Route::get('/ui-buttons', [App\Http\Controllers\Components\ComponentsController::class, 'ui_buttons']);
Route::get('/ui-carousel', [App\Http\Controllers\Components\ComponentsController::class, 'ui_carousel']);
Route::get('/ui-collapse', [App\Http\Controllers\Components\ComponentsController::class, 'ui_collapse']);
Route::get('/ui-dropdowns', [App\Http\Controllers\Components\ComponentsController::class, 'ui_dropdowns']);
Route::get('/ui-footer', [App\Http\Controllers\Components\ComponentsController::class, 'ui_footer']);
Route::get('/ui-list-groups', [App\Http\Controllers\Components\ComponentsController::class, 'ui_list_groups']);
Route::get('/ui-modals', [App\Http\Controllers\Components\ComponentsController::class, 'ui_modals']);
Route::get('/ui-navbar', [App\Http\Controllers\Components\ComponentsController::class, 'ui_navbar']);
Route::get('/ui-offcanvas', [App\Http\Controllers\Components\ComponentsController::class, 'ui_offcanvas']);
Route::get('/ui-pagination-breadcrumbs', [App\Http\Controllers\Components\ComponentsController::class, 'ui_pagination_breadcrumbs']);
Route::get('/ui-progress', [App\Http\Controllers\Components\ComponentsController::class, 'ui_progress']);
Route::get('/ui-spinners', [App\Http\Controllers\Components\ComponentsController::class, 'ui_spinners']);
Route::get('/ui-tabs-pills', [App\Http\Controllers\Components\ComponentsController::class, 'ui_tabs_pills']);
Route::get('/ui-toasts', [App\Http\Controllers\Components\ComponentsController::class, 'ui_toasts']);
Route::get('/ui-tooltips-popovers', [App\Http\Controllers\Components\ComponentsController::class, 'ui_tooltips_popovers']);
Route::get('/ui-typography', [App\Http\Controllers\Components\ComponentsController::class, 'ui_typography']);


//Entended UI

Route::get('/extended-ui-perfect-scrollbar', [App\Http\Controllers\Components\ComponentsController::class, 'extended_ui_perfect_scrollbar']);
Route::get('/extended-ui-text-divider', [App\Http\Controllers\Components\ComponentsController::class, 'extended_ui_text_divider']);

//Box icon

Route::get('/icons-boxicons', [App\Http\Controllers\Components\ComponentsController::class, 'icons_boxicons']);


// FORM OF TABLE


Route::get('/forms-basic-inputs', [App\Http\Controllers\Category\AccountController::class, 'forms_basic_inputs']);
Route::get('/forms-input-groups', [App\Http\Controllers\Category\AccountController::class, 'forms_input_groups']);
Route::get('/form-layouts-horizontal', [App\Http\Controllers\Category\AccountController::class, 'form_layouts_horizontal']);
Route::get('/form-layouts-vertical', [App\Http\Controllers\Category\AccountController::class, 'form_layouts_vertical']);
Route::get('/tables-basic', [App\Http\Controllers\Category\AccountController::class, 'tables_basic']);



Route::resource('/sinhvien',[SinhvienController::class]);
















