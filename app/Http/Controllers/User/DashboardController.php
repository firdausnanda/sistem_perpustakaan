<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() 
    {
        $menu = Menu::get();
        return view('pages.landing.dashboard.index', compact('menu'));
    }
}
