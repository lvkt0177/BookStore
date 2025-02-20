<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    //
    //Show View
    public function showLoginAdmin()
    {
        return view('admin.login'); 
    }

}
