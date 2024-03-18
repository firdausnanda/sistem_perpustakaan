<?php

namespace App\Http\Controllers\User;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Counter;
use App\Models\Ebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class EbookController extends Controller
{
    public function index(Request $request)
    {
        $ebook = Ebook::with(["counter" => function($q){
            $q->where('counter.model', Ebook::class);
        }])->paginate(10);

            
        if ($request->ajax()) {

            $ebook = Ebook::with(["counter" => function($q){
                $q->where('counter.model', Ebook::class);
            }])->where('judul', 'like', '%'. $request->cari .'%')->paginate(10);
    
            $render = View::make('pages.landing.ebook.konten', compact('ebook'))->render();

            return ResponseFormatter::success($render, 'data berhasil diambil');
        }

        return view('pages.landing.ebook.index', compact('ebook'));
    }

    public function detail($id)
    {
        $e = Ebook::where('id', $id)->first();
        $counter = Counter::updateOrCreate(['model' => Ebook::class, 'model_id' => $id], ['lihat' => DB::raw('lihat + 1'), 'download' => DB::raw('download')]);
        return view('pages.landing.ebook.detail', compact('e'));
    }

    public function download(Request $request)
    {
        $e = Ebook::where('id', $request->id)->first();
        $counter = Counter::updateOrCreate(['model' => Ebook::class, 'model_id' => $request->id], ['lihat' => DB::raw('lihat'), 'download' => DB::raw('download + 1')]);
        return ResponseFormatter::success($counter, 'data berhasil ditambahkan');
    }
}
