<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function index(Request $request) 
    {
        if ($request->ajax()) {
            $menu = Menu::get();
            return ResponseFormatter::success($menu, 'Data berhasil diambil');
        }

        return view('pages.dashboard.menu.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
			'nama' => 'required|string|max:255',
            'link' => 'required|url:http,https',
			'foto' => 'image|mimes:jpg,png,jpeg|max:2048'
		]);

		if ($validator->fails()) {
			return ResponseFormatter::error($validator->errors(), 'Data Identitas tidak valid', 422);
		}
        
        try {
            if ($request->hasFile('foto')) {
                $name = $request->file('foto');
                $fileNameFoto =  $request->nama . '_' . time() . '.' . $name->getClientOriginalExtension();

                Storage::putFileAs(
					'public/icon',
					$request->file('foto'),
					$fileNameFoto
				);
            }

            $menu = Menu::create([
                'nama' => $request->nama,
                'link' => $request->link,
                'akses' => $request->akses,
                'icon' => $fileNameFoto,
            ]);

            return ResponseFormatter::success($menu, 'Data berhasil disimpan');

        } catch (\Exception $e) {
            Log::error($e->getMessage());
			return ResponseFormatter::error($e->getMessage(), 'Server Error', 500);
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
			'nama' => 'required|string|max:255',
            'link' => 'required|url:http,https',
			'foto' => 'image|mimes:jpg,png,jpeg|max:2048'
		]);

		if ($validator->fails()) {
			return ResponseFormatter::error($validator->errors(), 'Data Identitas tidak valid', 422);
		}

        try {

            $menu = Menu::where('id', $request->id)->first();

            if ($request->hasFile('foto')) {
                $name = $request->file('foto');
                $fileNameFoto =  $request->nama . '_' . time() . '.' . $name->getClientOriginalExtension();

                Storage::putFileAs(
					'public/icon',
					$request->file('foto'),
					$fileNameFoto
				);

                $oldFile = $menu->icon;
				Storage::delete('public/icon/' . $oldFile);
            }else{
                $fileNameFoto = $menu->icon;
            }

            $update = $menu->update([
                'nama' => $request->nama,
                'link' => $request->link,
                'akses' => $request->akses,
                'icon' => $fileNameFoto,
            ]);

            return ResponseFormatter::success($update, 'Data berhasil diupdate');

        } catch (\Exception $e) {
            Log::error($e->getMessage());
			return ResponseFormatter::error($e->getMessage(), 'Server Error', 500);
        }

    }
}
