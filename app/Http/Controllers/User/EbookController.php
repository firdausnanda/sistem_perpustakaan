<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Ebook;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    public function index()
    {
        $ebook = Ebook::paginate(10);
        return view('pages.landing.ebook.index', compact('ebook'));
    }
}
