<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konser;

class KonserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konser= Konser::all();

        return response()->json([
            'message' => 'Data Konser Berhasil Ditampilkan',
            'data' => $konser,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $konser = Konser::find($id);

        if ($konser) {
            return response()->json([
                'message' => 'Data konser berhasil ditampilkan',
                'data' => $konser,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Data konser tidak ditemukan',
            ], 404);
        }
    }
}
