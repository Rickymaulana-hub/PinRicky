<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function editpostingan(Request $request, $id){
        $foto = Foto::find($id);

        $foto->judul_foto            =$request->judul_foto;
        $foto->deskripsi_foto        =$request->deskripsi_foto;
        $foto->album_id              =$request->album;

        $foto->save();
        
        return redirect()->back()->with('succes','Postingan Berhasil Di Perbaharui');

    }

    public function hapuspostingan($id){
        $foto  = Foto::find($id);
        $foto  ->delete();

        return redirect()->back()->with('succes','Postingan Berhasil Di Hapus');
    }
}
