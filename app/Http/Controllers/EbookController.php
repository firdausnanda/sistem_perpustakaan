<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Models\Ebook;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EbookController extends Controller
{
    public function index(Request $request) 
    {
        if ($request->ajax()) {
            $data = Ebook::get();
            return ResponseFormatter::success($data, 'data berhasil diambil');
        }
        return view('pages.dashboard.ebook.index');
    }

    public function create() 
    {
        $kategori = Kategori::get();
        return view('pages.dashboard.ebook.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
			'judul' => 'required|string|max:255',
            'penulis' => 'required|string',
            'kategori' => 'required|string',
            'subject' => 'required',
            'tahun' => 'required|numeric',
            'total_halaman' => 'required|numeric',
			'foto' => 'required|image|mimes:jpg,png,jpeg|max:2048',
			'file' => 'required|mimes:pdf|max:10000'
		]);

		if ($validator->fails()) {
			return ResponseFormatter::error($validator->errors(), 'Data Identitas tidak valid', 422);
		}

        try {
            if ($request->hasFile('foto')) {
                $name = $request->file('foto');
                $fileNameFoto =  $request->judul . '_' . time() . '.' . $name->getClientOriginalExtension();

                Storage::putFileAs(
					'public/gambar_buku',
					$request->file('foto'),
					$fileNameFoto
				);
            }

            if ($request->hasFile('file')) {
                $name = $request->file('file');
                $fileNameFile =  $request->judul . '_' . time() . '.' . $name->getClientOriginalExtension();

                Storage::putFileAs(
					'public/file_buku',
					$request->file('file'),
					$fileNameFile
				);
            }

            $cek = array_column(json_decode($request->subject), 'value');

            $ebook = Ebook::create([
                'id_kategori' => $request->kategori,
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'abstrak' => $request->abstrak,
                'keterangan' => $request->keterangan,
                'tahun' => $request->tahun,
                'total_halaman' => $request->total_halaman,
                'akses' => $request->akses,
                'link' => $request->link,
                'gambar' => $fileNameFoto,
                'file' => $fileNameFile,
            ]);

            $ebook->syncTags($cek);

            return ResponseFormatter::success($ebook, 'Data berhasil disimpan!');

        } catch (\Exception $e) {
            Log::error($e->getMessage());
			return ResponseFormatter::error($e->getMessage(), 'Server Error', 500);
        }

    }

    public function edit($id)
    {
        try {

            $e = Ebook::with('tags')->where('id', $id)->first();
            $subject = $e->tags->pluck('name');
            $kategori = Kategori::get();
            return view('pages.dashboard.ebook.edit', compact('e', 'kategori', 'subject'));
            
        } catch (\Exception $e) {
            Log::error($e->getMessage());
			return ResponseFormatter::error($e->getMessage(), 'Server Error', 500);
        }
    }

    public function update(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
			'judul' => 'required|string|max:255',
            'penulis' => 'required|string',
            'kategori' => 'required|string',
            'tahun' => 'required|numeric',
            'subject' => 'required',
            'total_halaman' => 'required|numeric',
			'foto' => 'image|mimes:jpg,png,jpeg|max:2048',
			'file' => 'mimes:pdf|max:10000'
		]);

		if ($validator->fails()) {
			return ResponseFormatter::error($validator->errors(), 'Data Identitas tidak valid', 422);
		}

        try {

            $ebook = Ebook::where('id', $request->id)->first();

            if ($request->hasFile('foto')) {
                $name = $request->file('foto');
                $fileNameFoto =  $request->judul . '_' . time() . '.' . $name->getClientOriginalExtension();

                Storage::putFileAs(
					'public/gambar_buku',
					$request->file('foto'),
					$fileNameFoto
				);

                $oldFile = $ebook->gambar;
				Storage::delete('public/gambar_buku/' . $oldFile);

            }else{
                $fileNameFoto = $ebook->gambar;
            }

            if ($request->hasFile('file')) {
                $name = $request->file('file');
                $fileNameFile =  $request->judul . '_' . time() . '.' . $name->getClientOriginalExtension();

                Storage::putFileAs(
					'public/file_buku',
					$request->file('file'),
					$fileNameFile
				);
        
                $oldFile = $ebook->file;
				Storage::delete('public/file_buku/' . $oldFile);

            }else{
                $fileNameFile = $ebook->file;
            }
        
            $cek = array_column(json_decode($request->subject), 'value');

            $update = $ebook->update([
                'id_kategori' => $request->kategori,
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'abstrak' => $request->abstrak,
                'keterangan' => $request->keterangan,
                'tahun' => $request->tahun,
                'total_halaman' => $request->total_halaman,
                'link' => $request->link,
                'akses' => $request->akses,
                'gambar' => $fileNameFoto,
                'file' => $fileNameFile,
            ]);

            $ebook->syncTags($cek);

            return ResponseFormatter::success($update, 'Data berhasil diubah!');

        } catch (\Exception $e) {
            Log::error($e->getMessage());
			return ResponseFormatter::error($e->getMessage(), 'Server Error', 500);
        }

    }
}
