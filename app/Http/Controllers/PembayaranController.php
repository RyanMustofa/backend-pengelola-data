<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembayaran;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::all();
        return response()->json($pembayaran);
    }
    public function show($id)
    {
        $pembayaran = Pembayaran::find($id);
        return response()->json($pembayaran);
    }
    public function store(Request $request)
    {
        $pembayaran = new Pembayaran();
        $pembayaran->nama = $request->nama;
        $pembayaran->kelas= $request->kelas;
        $pembayaran->jumlah = $request->jumlah;
        $pembayaran->baru_bayar = $request->baru_bayar;
        $pembayaran->lunas = $request->lunas;
        $pembayaran->save();
        return response()->json($pembayaran);
    }
    public function update(Request $request,$id)
    {
        $pembayaran = Pembayaran::find($id);
        $pembayaran->nama = $request->nama;
        $pembayaran->kelas = $request->kelas;
        $pembayaran->jumlah = $request->jumlah;
        $pembayaran->baru_bayar = $request->baru_bayar;
        $pembayaran->lunas = $request->lunas;
        $pembayaran->save();
        return response()->json($pembayaran);
    }
    public function destroy($id)
    {
        $pembayaran = Pembayaran::find($id);
        $pembayaran->delete();
        return response()->json(['message' => "berhasil menghapus"]);
    }
}
