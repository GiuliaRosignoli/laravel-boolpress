<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //ADMIN 
    
    public function index() {
        return view('admin.home');
    }
}
