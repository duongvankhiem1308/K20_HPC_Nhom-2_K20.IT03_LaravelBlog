<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    // ACCOUNT SETTING
    public function account_setting(){
        return view('account.account-setting',[
            'title' => 'Account Setting'
        ]);
    }
    public function account_notifications(){
        return view('account.account-notifications',[
            'title' => 'Account Notifications'
        ]);
        
    }
    public function account_connections(){
        return view('account.account-connections',[
            'title' => 'Account Connections'
        ]);
    }
    // LOGIN AND PASS
    public function auth_login_basic(){
        return view('main.auth-login-basic',[
            'title' => 'Login Basic'
        ]);
    }
    public function auth_register_basic(){
        return view('main.auth-register-basic',[
            'title' => 'Register Basic'
        ]);
    }
    public function auth_forgot_password_basic(){
        return view('main.auth-forgot-password-basic',[
            'title' => 'Forgot Password Basic'
        ]);
    }
    // ERRO 404
    public function pages_misc_under_maintenance(){
        return view('erro.pages-misc-under-maintenance',[
            'title' => 'Pages Misc Under Maintenance'
        ]);
    }
    public function pages_misc_error(){
        return view('erro.pages-misc-error',[
            'title' => 'Pages Misc Error'
        ]);
    }

    
    // FORM OF TABLE


    public function forms_basic_inputs(){
        return view('formofftable.forms-basic-inputs',[
            'title' => 'Forms Basic Inputs'
        ]);
    }
    public function forms_input_groups(){
        return view('formofftable.forms-input-groups',[
            'title' => 'Forms Inputs Groups'
        ]);
    }
    public function form_layouts_vertical(){
        return view('formlayout.form-layouts-vertical',[
            'title' => 'Trang Chu Container'
        ]);
    }
    public function form_layouts_horizontal(){
        return view('formlayout.form-layouts-horizontal',[
            'title' => 'Form Layouts Vertical'
        ]);
    }

    // Table

    public function tables_basic(){
        return view('table.tables-basic',[
            'title' => 'Tables Basic'
        ]);
    }


}
