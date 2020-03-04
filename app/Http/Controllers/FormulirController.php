<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formulir;
class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formulir = Formulir::all();
        return response()->json($formulir);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formulir = new Formulir();
        $formulir->user_id = $request->user_id;
        $formulir->nama_pendaftar = $request->nama_pendaftar;
        $formulir->alamat_pendaftar = $request->alamat_pendaftar;
        $formulir->tanggal_lahir = $request->tanggal_lahir;
        $formulir->nama_wali = $request->nama_wali;
        $formulir->nama_ayah = $request->nama_ayah;
        $formulir->nama_ibu = $request->nama_ibu;
        $formulir->status = $request->status;
        $formulir->save();
        return response()->json($formulir);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formulir = Formulir::find($id);
        return response()->json($formulir);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formulir = Formulir::find($id);
        $formulir->user_id = $request->user_id;
        $formulir->nama_pendaftar = $request->nama_pendaftar;
        $formulir->alamat_pendaftar = $request->alamat_pendaftar;
        $formulir->tanggal_lahir = $request->tanggal_lahir;
        $formulir->nama_wali = $request->nama_wali;
        $formulir->alamat_pendaftar = $request->alamat_pendaftar;
        $formulir->nama_ayah = $request->nama_ayah;
        $formulir->nama_ibu = $request->nama_ibu;
        $formulir->status = $request->status;
        $formulir->save();
        return response()->json($formulir);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formulir = Formulir::find($id);
        $formulir->delete();
        if($formulir){
            return response()->json(['message' => "success fully delete"]);
        }
    }
}
