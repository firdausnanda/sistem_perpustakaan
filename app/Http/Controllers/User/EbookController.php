<?php

namespace App\Http\Controllers\User;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Counter;
use App\Models\Ebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EbookController extends Controller
{
    public function index()
    {
        $ebook = Ebook::with(["counter" => function($q){
            $q->where('counter.model', Ebook::class);
        }])->paginate(10);

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
