<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $kategori = Kategori::get();
            return ResponseFormatter::success($kategori, 'Data berhasil diambil');
        }
        return view('pages.dashboard.kategori.index');
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
			'nama_kategori' => 'required|string|max:255',
		]);

		if ($validator->fails()) {
			return ResponseFormatter::error($validator->errors(), 'Data Identitas tidak valid', 422);
		}

        try {

            $kategori = Kategori::create([
                'nama_kategori' => $request->nama_kategori
            ]);

            return ResponseFormatter::success($kategori, 'Data berhasil disimpan');

        } catch (\Exception $e) {
            Log::error($e->getMessage());
			return ResponseFormatter::error($e->getMessage(), 'Server Error', 500);
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
			'nama' => 'required|string|max:255',
		]);

		if ($validator->fails()) {
			return ResponseFormatter::error($validator->errors(), 'Data Kategori tidak valid', 422);
		}

        try {
            
            $kategori = Kategori::where('id', $request->id)->update([
                'nama_kategori' => $request->nama
            ]);

            return ResponseFormatter::success($kategori, 'Data berhasil diubah!');
            
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return ResponseFormatter::error($e->getMessage(), 'Kesalahan Server!');
        }
        
    }
}
