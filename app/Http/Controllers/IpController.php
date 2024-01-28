<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Models\Ip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class IpController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $ip = Ip::get();
            return ResponseFormatter::success($ip, 'Data berhasil diambil');
        }
        return view('pages.dashboard.ip.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
			'ip' => 'required|ip',
			'keterangan' => 'required|string|max:255',
		]);

		if ($validator->fails()) {
			return ResponseFormatter::error($validator->errors(), 'Data Identitas tidak valid', 422);
		}

        try {

            $ip = Ip::create([
                'ip' => $request->ip,
                'keterangan' => $request->keterangan
            ]);

            return ResponseFormatter::success($ip, 'Data berhasil disimpan');

        } catch (\Exception $e) {
            Log::error($e->getMessage());
			return ResponseFormatter::error($e->getMessage(), 'Server Error', 500);
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
			'ip' => 'required|ip',
			'keterangan' => 'required|string|max:255',
		]);

		if ($validator->fails()) {
			return ResponseFormatter::error($validator->errors(), 'Data Kategori tidak valid', 422);
		}

        try {
            
            $ip = Ip::where('id', $request->id)->update([
                'ip' => $request->ip,
                'keterangan' => $request->keterangan
            ]);

            return ResponseFormatter::success($ip, 'Data berhasil diubah!');
            
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return ResponseFormatter::error($e->getMessage(), 'Kesalahan Server!');
        }
        
    }
}
