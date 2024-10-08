<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(Request $request) 
    {
        return view('pages.landing.index');
    }

    public function sejarah(Request $request) 
    {
        return view('pages.landing.sejarah.index');
    }

    public function visimisi(Request $request) 
    {
        return view('pages.landing.visimisi.index');
    }
    
    public function tugas(Request $request) 
    {
        return view('pages.landing.tugas.index');
    }

    public function renop(Request $request) 
    {
        return view('pages.landing.renop.index');
    }
    
    public function pedoman(Request $request) 
    {
        return view('pages.landing.pedoman.index');
    }
    
    public function fasilitas(Request $request) 
    {
        return view('pages.landing.fasilitas.index');
    }
}
