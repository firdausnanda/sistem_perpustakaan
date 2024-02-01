<?php

namespace App\Http\Controllers\User;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Counter;
use App\Models\Jurnal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JurnalController extends Controller
{
    public function index()
    {
        $jurnal = Jurnal::with(["counter" => function($q){
            $q->where('counter.model', Jurnal::class);
        }])->paginate(10);

        return view('pages.landing.jurnal.index', compact('jurnal'));
    }

    public function detail($id)
    {
        $e = Jurnal::where('id', $id)->first();
        $counter = Counter::updateOrCreate(['model' => Jurnal::class, 'model_id' => $id], ['lihat' => DB::raw('lihat + 1'), 'download' => DB::raw('download')]);
        return view('pages.landing.jurnal.detail', compact('e'));
    }

    public function download(Request $request)
    {
        $e = Jurnal::where('id', $request->id)->first();
        $counter = Counter::updateOrCreate(['model' => Jurnal::class, 'model_id' => $request->id], ['lihat' => DB::raw('lihat'), 'download' => DB::raw('download + 1')]);
        return ResponseFormatter::success($counter, 'data berhasil ditambahkan');
    }
}
