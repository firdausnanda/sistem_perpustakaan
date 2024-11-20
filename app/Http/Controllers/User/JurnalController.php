<?php

namespace App\Http\Controllers\User;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Counter;
use App\Models\Jurnal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;

class JurnalController extends Controller
{
    public function index(Request $request)
    {
        $jurnal = Jurnal::with(["counter" => function($q){
            $q->where('counter.model', Jurnal::class);
        }])->paginate(10);

        if ($request->ajax()) {
            $jurnal = Jurnal::with(["counter" => function($q){
                $q->where('counter.model', Jurnal::class);
            }])->where('judul', 'like', '%'. $request->cari .'%')->paginate(10);

            $render = View::make('pages.landing.jurnal.konten', compact('jurnal'))->render();

            return ResponseFormatter::success($render, 'data berhasil diambil');
        }

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

    public function cari(Request $request)
    {
        try {

            switch ($request->filter) {
                case 1:
                    $data = Jurnal::where('judul', 'like', '%' . $request->cari . '%');
                    break;

                case 2:
                    $data = Jurnal::where('penulis', 'like', '%' . $request->cari . '%');
                    break;

                case 3:
                    $data = $request->cari ? Jurnal::withAnyTags($request->cari) : '';
                    break;
                
                default:
                    $data = '';
                    break;
            }

            // $data = Ebook::with(["counter" => function($q){
            //     $q->where('counter.model', Ebook::class);
            // }])->where('judul', 'like', '%'. $request->cari .'%');
            
            $jurnal = $data ? $data->paginate(10) : [];

            $render = View::make('pages.landing.jurnal.konten', compact('jurnal'))->render();

            return ResponseFormatter::success($render, 'data berhasil diambilll');
            
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return ResponseFormatter::error($e->getMessage(), 'Kesalahan Server!');
        }
    }
}
