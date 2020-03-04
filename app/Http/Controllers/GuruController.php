<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::all();
        return response()->json($guru);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guru = new Guru();
        $guru->nama_guru = $request->nama_guru;
        $guru->alamat_guru = $request->alamat_guru;
        $guru->deskripsi_guru = $request->deskripsi_guru;
        $guru->mengampu = $request->mengampu;
        $guru->save();
        return response()->json($guru);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = Guru::find($id);
        return response()->json($guru);
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
        $guru = Guru::find($id);
        $guru->nama_guru = $request->nama_guru;
        $guru->mengampu = $request->mengampu;
        $guru->deskripsi_guru = $request->deskripsi_guru;
        $guru->alamat_guru = $request->alamat_guru;
        $guru->save();
        return response()->json($guru);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::find($id);
        $guru->delete();
    }
}
